<?php

namespace Pittacusw\ParseBill\Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Pittacusw\ParseBill\Support\LookupCache;
use Pittacusw\ParseBill\Tests\TestCase;

class BladeDirectivesTest extends TestCase {

  public function test_it_resolves_lookup_directives_without_creating_missing_rows(): void {
    LookupCache::reset();

    $rendered = trim((string) Blade::render(
      '@documents_type_name(33)|@additional_tax_name(271)|@additional_tax_name(999)'
    ));

    $this->assertSame('Factura electronica|Bebidas azucaradas|', $rendered);
    $this->assertSame(1, DB::table('additional_taxes')->count());
  }
}
