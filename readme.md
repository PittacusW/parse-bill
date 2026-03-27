# pittacusw/parse-bill

Laravel package for parsing Chilean DTE XML documents and rendering them as PDF files.

The package is designed around the existing printable layout used by this project. The PDF view contract has been kept intact during the optimization pass so margins, page structure, cedible copy rules, and the legal layout behavior continue to follow the current implementation.

## What It Does

- Parses XML DTE payloads from either a file path or a raw XML string
- Extracts the `Documento` payload into a PHP object structure that the Blade views can render
- Generates the SII TED PDF417 barcode when a TED node is present
- Renders PDF output through `barryvdh/laravel-dompdf`
- Resolves document type, county/SII branch, and additional tax labels from reference tables
- Exposes helpers for reading the document signature value

## Requirements

- PHP `^8.3`
- Laravel `^13.2`
- Database tables for the reference lookups used by the PDF views

## Installation

```bash
composer require pittacusw/parse-bill
```

Publish the package assets and run the migrations:

```bash
php artisan vendor:publish --provider="Pittacusw\ParseBill\ParseBillServiceProvider"
php artisan migrate
```

## Seed Required Reference Data

The PDF renderer expects lookup data for:

- document types
- counties and SII branches
- additional taxes

Seed the required tables with the included seeders:

```bash
php artisan db:seed --class="Pittacusw\ParseBill\Seeders\SiiBranchesTableSeeder"
php artisan db:seed --class="Pittacusw\ParseBill\Seeders\CountiesTableSeeder"
php artisan db:seed --class="Pittacusw\ParseBill\Seeders\DocumentsTypesTableSeeder"
php artisan db:seed --class="Pittacusw\ParseBill\Seeders\AdditionalTaxesTableSeeder"
```

Optional seeders are also available for economic activities, reference types, and transfer types.

## Configuration

After publishing, the package config file is available at `config/pittacusw-parse-bill.php`.

By default it points to these models:

```php
return [
    'county' => \Pittacusw\ParseBill\Models\County::class,
    'documents_type' => \Pittacusw\ParseBill\Models\DocumentsType::class,
    'additional_tax' => \Pittacusw\ParseBill\Models\AdditionalTax::class,
];
```

Override these entries if your application uses custom models for the same tables.

## Usage

### Parse XML

```php
use Pittacusw\ParseBill\ReadXml;

$document = ReadXml::parse($xmlOrPath);
```

`$xmlOrPath` can be:

- an absolute or relative path to an XML file
- a raw XML string

The parser normalizes single `Detalle`, `Referencia`, `DscRcgGlobal`, and `ImptoReten` nodes into arrays so the renderer can iterate them consistently.

### Read the Signature Value

```php
use Pittacusw\ParseBill\ReadXml;

$signature = ReadXml::signature($xmlOrPath);
```

### Generate a PDF

```php
use Pittacusw\ParseBill\ParsePdf;

$pdf = ParsePdf::render($xmlOrPath);

return $pdf->stream('documento.pdf');
```

You can also save or return the binary output:

```php
$contents = ParsePdf::render($xmlOrPath)->output();
```

## Layout Guarantees

This package intentionally preserves the current visual PDF structure:

- the letter-sized PDF output remains the default
- the existing Blade templates and CSS layout contract are preserved
- fixed margin behavior is unchanged
- cedible second-page behavior for DTE types `33`, `34`, and `52` is preserved
- county/SII branch resolution still comes from the configured reference tables

If you need to change layout rules for another legal regime or document standard, do it through dedicated view changes and add fixture-based tests before shipping.

## Testing

The package now includes a PHPUnit + Testbench suite covering:

- XML parsing for both `SetDTE` and direct `Documento` roots
- collection normalization for repeatable DTE nodes
- signature extraction
- Blade lookup directives
- PDF generation smoke tests
- layout-sensitive view contract checks

Run the suite with:

```bash
composer test
```

## Notes

- The renderer depends on reference-table data being present. Missing document types, counties, or tax codes will lead to incomplete labels in the PDF.
- TED barcode rendering depends on the XML containing a `TED` node and on the barcode library being available in the runtime environment.
- If you customize the PDF view, keep a close eye on page height and overflow because those directly affect the legal printable layout.
