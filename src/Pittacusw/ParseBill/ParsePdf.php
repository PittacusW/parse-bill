<?php

namespace Pittacusw\ParseBill;

use Barryvdh\DomPDF\Facade\Pdf;
use DOMDocument;
use Milon\Barcode\DNS2D;

class ParsePdf {

  protected $bodyHeight;

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
              ->loadView('layouts.bill', [
               'xml'        => $this->object,
               'ted'        => $this->barcode,
               'type'       => config('pittacusw-parse-bill.documents_type')::where('code', $this->object->Encabezado->IdDoc->TipoDTE)
                                            ->first(),
               'county'     => config('pittacusw-parse-bill.county')::where('name', $this->object->Encabezado->Emisor->CmnaOrigen)
                                     ->first(),
               'small_font' => is_array($this->object->Detalle) && count($this->object->Detalle) > 25 ? 5 : 6,
               'body_font'  => is_array($this->object->Detalle) && count($this->object->Detalle) > 25 ? 6 : 8,
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
    $pdf = Pdf::setPaper([
                          0,
                          0,
                          165,
                          100,
                         ])
              ->setOptions([
                            'dpi'         => 72,
                            'defaultFont' => 'Lucida Sans Typewriter',
                           ])
              ->loadView('system.layouts.factura', [
               'xml' => $this->object,
               'ted' => $this->barcode,
              ]);

    $pdf->output();

    $count = $pdf->getDomPDF()
                 ->get_canvas()
                 ->get_page_number();
    unset($pdf);
    $this->bodyHeight = $count * 75;
  }
}
