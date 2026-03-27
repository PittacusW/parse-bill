<?php

namespace Pittacusw\ParseBill;

use Barryvdh\DomPDF\PDF as DomPdfWrapper;
use Milon\Barcode\DNS2D;

class ParsePdf {

  protected ?int $body_height = null;
  protected string $xml;
  protected ?object $object = null;
  protected $barcode = null;
  protected int $detail_count = 0;
  protected $type = null;
  protected $county = null;

  public static function render($xml) {
    return with(new self)->getPdf($xml);
  }

  public function getPdf($xml) {
    $this->xml    = $xml;
    $this->object = ReadXml::parse($xml);
    $this->detail_count = isset($this->object->Detalle) && is_array($this->object->Detalle) ? count($this->object->Detalle) : 0;
    $this->type   = config('pittacusw-parse-bill.documents_type')::query()
                                                             ->where('code', $this->object->Encabezado->IdDoc->TipoDTE ?? null)
                                                             ->first();
    $this->county = config('pittacusw-parse-bill.county')::query()
                                                         ->with('sii_branch')
                                                         ->where('name', $this->object->Encabezado->Emisor->CmnaOrigen ?? null)
                                                         ->first();
    $this->getBarCode();
    $this->calculateHeight();

    return $this->buildPdf('letter');
  }

  protected function getBarCode(): void {
    $dom = ReadXml::loadDomDocument($this->xml);
    if (empty($dom->documentElement->getElementsByTagName('TED')
                                   ->item(0))) {
      $this->barcode = null;

      return;
    }
    $ted = $dom->saveXML($dom->documentElement->getElementsByTagName('TED')
                                              ->item(0));
    $ted = preg_replace('/\s\s+/', '', $ted);
    $ted = preg_replace("#\r|\n#", '', $ted);

    $this->barcode = with(new DNS2D)->getBarcodePNG($ted, 'PDF417');
  }

  protected function buildPdf($paper): DomPdfWrapper {
    return app('dompdf.wrapper')
      ->setOptions([
                    'dpi'         => 72,
                    'defaultFont' => 'Roboto',
                   ])
      ->loadView('pittacusw-parse-bill::bill', [
       'xml'         => $this->object,
       'ted'         => $this->barcode,
       'type'        => $this->type,
       'county'      => $this->county,
       'small_font'  => $this->detail_count > 20 ? 5 : 6,
       'body_font'   => $this->detail_count > 20 ? 6 : 8,
       'body_height' => $this->body_height,
      ])
      ->setPaper($paper);
  }

  protected function calculateHeight(): void {
    $references   = isset($this->object->Referencia) && is_array($this->object->Referencia) ? count($this->object->Referencia) * 14 : 0;
    $DscRcgGlobal = isset($this->object->DscRcgGlobal) && is_array($this->object->DscRcgGlobal) ? count($this->object->DscRcgGlobal) * 14 : 0;
    $imp          = isset($this->object->Encabezado->Totales->ImptoReten) ? count($this->object->Encabezado->Totales->ImptoReten) * 20 : 0;
    $pdf          = $this->buildPdf([
                                     0,
                                     0,
                                     612,
                                     2,
                                    ]);
    $pdf->render();
    $count = $pdf->getCanvas()
                 ->get_page_number();
    $this->body_height = ($this->detail_count > 20 ? 460 : 382) - $count - $this->detail_count - $references - $DscRcgGlobal - $imp;
  }
}
