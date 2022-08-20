<?php

namespace Pittacusw\ParseBill;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ParseBillServiceProvider extends PackageServiceProvider {

  public function bootingPackage() {
    parent::bootingPackage();

    Blade::directive('chilean_date', function($date) {
      return "{{ Carbon\Carbon::parse($date)
         ->format('d/m/Y') }}";
    });
    Blade::directive('currency_format', function($number) {
      return "$" . "{{ number_format(floatval($number), 0, ',', '.') }}";
    });
    Blade::directive('format_rut', function($rut) {
      return "{{ Freshwork\ChileanBundle\Rut::parse($rut)->format() ?? '' }}";
    });
    Blade::directive('additional_tax_name', function($code) {
      return "{{ config('pittacusw-parse-bill.additional_tax')::firstOrCreate(['code' => $code])->name }}";
    });
    Blade::directive('documents_type_name', function($code) {
      return "{{ config('pittacusw-parse-bill.documents_type')::where('code', $code)
                         ->first()->name ?? '' }}";
    });
  }

  public function configurePackage(Package $package)
  : void {
    $package->name('pittacusw-parse-bill')
            ->hasConfigFile()
            ->hasMigrations([
                             'create_additional_taxes_table',
                             'create_counties_table',
                             'create_documents_types_table',
                             'create_economic_activities_table',
                             'create_reference_types_table',
                             'create_sii_branches_table',
                             'create_transfers_types_table'
                            ])
            ->hasViews();
  }
}
