<?php

namespace Pittacusw\ParseBill\Tests\Feature;

use Pittacusw\ParseBill\ParsePdf;
use Pittacusw\ParseBill\ReadXml;
use Pittacusw\ParseBill\Tests\TestCase;

class ParsePdfTest extends TestCase {

  public function test_it_generates_two_pages_for_cedible_documents(): void {
    $pdf = ParsePdf::render($this->fixture('invoice-setdte.xml'));
    $output = $pdf->output();

    $this->assertStringStartsWith('%PDF-', $output);
    $this->assertGreaterThan(1, $pdf->getCanvas()->get_page_number());
  }

  public function test_it_generates_a_single_page_for_boletas(): void {
    $pdf = ParsePdf::render($this->fixture('boleta-documento.xml'));
    $output = $pdf->output();

    $this->assertStringStartsWith('%PDF-', $output);
    $this->assertSame(1, $pdf->getCanvas()->get_page_number());
  }

  public function test_bill_view_preserves_layout_contract_and_second_page_copy(): void {
    $xml = ReadXml::parse($this->fixture('invoice-setdte.xml'));
    $type = config('pittacusw-parse-bill.documents_type')::query()->where('code', 33)->first();
    $county = config('pittacusw-parse-bill.county')::query()->with('sii_branch')->where('name', 'Santiago')->first();

    $rendered = view('pittacusw-parse-bill::bill', [
      'xml'         => $xml,
      'ted'         => null,
      'type'        => $type,
      'county'      => $county,
      'small_font'  => 6,
      'body_font'   => 8,
      'body_height' => 382,
    ])->render();

    $this->assertStringContainsString('margin-top: 0;', $rendered);
    $this->assertStringContainsString('margin-bottom: 0;', $rendered);
    $this->assertStringContainsString('min-height: 382px;', $rendered);
    $this->assertStringContainsString('page-break-before: always;', $rendered);
    $this->assertStringContainsString('Original', $rendered);
    $this->assertStringContainsString('Cedible', $rendered);
  }
}
