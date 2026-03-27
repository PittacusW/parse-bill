<?php

namespace Pittacusw\ParseBill\Support;

class LookupCache {

  protected static array $additionalTaxNames = [];
  protected static array $documentTypeNames = [];

  public static function documentsTypeName($code): string {
    $cacheKey = (string) $code;
    if (!array_key_exists($cacheKey, self::$documentTypeNames)) {
      $model = config('pittacusw-parse-bill.documents_type');
      self::$documentTypeNames[$cacheKey] = (string) ($model::query()
                                                            ->where('code', $code)
                                                            ->value('name') ?? '');
    }

    return self::$documentTypeNames[$cacheKey];
  }

  public static function additionalTaxName($code): string {
    $cacheKey = (string) $code;
    if (!array_key_exists($cacheKey, self::$additionalTaxNames)) {
      $model = config('pittacusw-parse-bill.additional_tax');
      self::$additionalTaxNames[$cacheKey] = (string) ($model::query()
                                                             ->where('code', $code)
                                                             ->value('name') ?? '');
    }

    return self::$additionalTaxNames[$cacheKey];
  }

  public static function reset(): void {
    self::$additionalTaxNames = [];
    self::$documentTypeNames  = [];
  }
}
