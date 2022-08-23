<?php

namespace Pittacusw\ParseBill;

use DOMDocument;
use Milon\Barcode\DNS2D;
use Barryvdh\DomPDF\Facade\Pdf;

class ParsePdf {

  protected $body_height;
  protected $xml;
  protected $object;
  protected $barcode;

  public static function render($xml) {
    return with(new self)->getPdf($xml);
  }

  protected function getPdf($xml) {
    $this->xml    = $xml;
    $this->object = ReadXml::parse($xml);
    $this->getBarCode();

    return Pdf::setOptions([
                            'dpi'         => 72,
                            'defaultFont' => 'Roboto',
                           ])
              ->loadView('pittacusw-parse-bill::bill', [
               'xml'         => $this->object,
               'ted'         => $this->barcode,
               'type'        => config('pittacusw-parse-bill.documents_type')::where('code', $this->object->Encabezado->IdDoc->TipoDTE)
                                                                             ->first(),
               'county'      => config('pittacusw-parse-bill.county')::where('name', $this->object->Encabezado->Emisor->CmnaOrigen)
                                                                     ->first(),
               'small_font'  => is_array($this->object->Detalle) && count($this->object->Detalle) > 25 ? 5 : 6,
               'body_font'   => is_array($this->object->Detalle) && count($this->object->Detalle) > 25 ? 6 : 8,
               'body_height' => $this->body_height,
              ]);
  }

  protected function getBarCode() {
    $dom = new DOMDocument('1.0', 'ISO-8859-1');
    $dom->load($this->xml);
    if (empty($dom->documentElement->getElementsByTagName('TED')
                                   ->item(0))) {
      return $this->barcode = NULL;
    }
    $ted = $dom->saveXML($dom->documentElement->getElementsByTagName('TED')
                                              ->item(0));
    $ted = preg_replace('/\s\s+/', '', $ted);
    $ted = preg_replace("#\r|\n#", '', $ted);

    $this->barcode = with(new DNS2D)->getBarcodePNG($ted, 'PDF417');
  }

  protected function calculateHeight() {
    $references   = isset($this->object->Referencia) && is_array($this->object->Referencia) ? count($this->object->Referencia) * 14 : 0;
    $DscRcgGlobal = isset($this->object->DscRcgGlobal) && is_array($this->object->DscRcgGlobal) ? count($this->object->DscRcgGlobal) * 14 : 0;
    $imp          = isset($this->object->Encabezado->Totales->ImptoReten) ? count($this->object->Encabezado->Totales->ImptoReten) * 20 : 0;
    $pdf          = $this->getOptions()
                         ->setPaper([
                                     0,
                                     0,
                                     612,
                                     2,
                                    ]);
    $pdf->stream();
    $pdf->output();
    $count = $pdf->getCanvas()
                 ->get_page_number();
    unset($pdf);
    $this->body_height = ($this->r > 20 ? 460 : 382) - $count - $this->r - $references - $DscRcgGlobal - $imp;
  }
}
