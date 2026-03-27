<?php

namespace Pittacusw\ParseBill\Tests\Feature;

use Pittacusw\ParseBill\ReadXml;
use Pittacusw\ParseBill\Tests\TestCase;

class ReadXmlTest extends TestCase {

  public function test_it_parses_setdte_documents_and_normalizes_repeating_nodes(): void {
    $document = ReadXml::parse($this->fixture('invoice-setdte.xml'));

    $this->assertIsObject($document);
    $this->assertSame('33', $document->Encabezado->IdDoc->TipoDTE);
    $this->assertCount(1, $document->Detalle);
    $this->assertCount(1, $document->Referencia);
    $this->assertCount(1, $document->DscRcgGlobal);
    $this->assertCount(1, $document->Encabezado->Totales->ImptoReten);
    $this->assertSame('Servicio & soporte', $document->Detalle[0]->DscItem);
  }

  public function test_it_parses_document_root_documents(): void {
    $document = ReadXml::parse($this->fixture('boleta-documento.xml'));

    $this->assertIsObject($document);
    $this->assertSame('39', $document->Encabezado->IdDoc->TipoDTE);
    $this->assertCount(1, $document->Detalle);
    $this->assertSame('Boleta servicio', $document->Detalle[0]->NmbItem);
  }

  public function test_it_reads_signature_values_from_string_and_file_paths(): void {
    $fixturePath = $this->fixturePath('invoice-setdte.xml');

    $this->assertSame('invoice-signature-value', ReadXml::signature($this->fixture('invoice-setdte.xml')));
    $this->assertSame('invoice-signature-value', ReadXml::signature($fixturePath));
  }
}
