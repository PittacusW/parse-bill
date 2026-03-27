<?php

namespace Pittacusw\ParseBill;

use DOMDocument;
use SimpleXMLElement;

class ReadXml {

  public static function parse($file) {
    try {
      $json = self::open($file);
    } catch (\Throwable $e) {
      return null;
    }

    if (!is_object($json)) {
      return null;
    }

    $json = $json->Documento ?? $json;
    if (!is_object($json)) {
      return null;
    }

    self::normalizeCollection($json, 'Detalle');
    self::normalizeCollection($json, 'Referencia');
    self::normalizeCollection($json, 'DscRcgGlobal');

    if (isset($json->Encabezado->Totales)) {
      self::normalizeCollection($json->Encabezado->Totales, 'ImptoReten');
    }
    return $json;
  }

  public static function prepare($file) {
    $file = self::ensureUtf8(self::readContents($file));

    preg_match_all("#\<\!\[CDATA\[(.*?)\]\]\>#is", $file, $output);
    if (count($output[1]) > 0) {
      foreach ($output[1] as $item) {
        $itemfinal = $item;
        $itemfinal = str_replace('&', '&amp;', $itemfinal);
        $itemfinal = str_replace('<', '&lt;', $itemfinal);
        $itemfinal = str_replace('>', '&gt;', $itemfinal);
        $itemfinal = str_replace("'", '&apos;', $itemfinal);
        $itemfinal = str_replace('"', '&quot;', $itemfinal);
        $file      = str_replace("$item", "$itemfinal", $file);
      }
    }

    return self::normalizeXmlEncodingDeclaration($file);
  }

  public static function open($file) {
    $errors = libxml_use_internal_errors(true);
    $xml = simplexml_load_string(self::prepare($file), SimpleXMLElement::class, LIBXML_NOBLANKS | LIBXML_NOCDATA);
    libxml_clear_errors();
    libxml_use_internal_errors($errors);

    if ($xml === false) {
      return null;
    }

    $json = json_decode(json_encode($xml));
    if (!is_object($json)) {
      return null;
    }

    return self::decodeParsedEntities(
      $xml->getName() === 'SetDTE' ? ($json->DTE ?? null) : $json
    );
  }

  public static function loadDomDocument($file) {
    $dom = new DOMDocument('1.0', 'ISO-8859-1');
    if (is_string($file) && file_exists($file)) {
      $dom->load($file, LIBXML_NOBLANKS);
    } else {
      $dom->loadXML((string) $file, LIBXML_NOBLANKS);
    }
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput       = false;

    return $dom;
  }

  public static function signature($file) {
    $dom = self::loadDomDocument($file);

    return $dom->getElementsByTagName('SignatureValue')
               ->item(0)?->nodeValue;
  }

  protected static function normalizeCollection(object $object, string $property): void {
    if (isset($object->{$property}) && !is_array($object->{$property})) {
      $object->{$property} = [$object->{$property}];
    }
  }

  protected static function readContents($file): string {
    if (is_string($file) && file_exists($file)) {
      return (string) file_get_contents($file);
    }

    return (string) $file;
  }

  protected static function ensureUtf8(string $value): string {
    if (preg_match('//u', $value) === 1) {
      return $value;
    }

    if (function_exists('mb_convert_encoding')) {
      return mb_convert_encoding($value, 'UTF-8', 'UTF-8, ISO-8859-1, Windows-1252');
    }

    if (function_exists('iconv')) {
      return iconv('ISO-8859-1', 'UTF-8//IGNORE', $value) ?: $value;
    }

    return $value;
  }

  protected static function normalizeXmlEncodingDeclaration(string $value): string {
    return preg_replace(
      '/(<\?xml[^>]*encoding=["\'])[^"\']+(["\'][^>]*\?>)/i',
      '$1UTF-8$2',
      $value
    ) ?? $value;
  }

  protected static function decodeParsedEntities($value) {
    if (is_array($value)) {
      return array_map(fn($item) => self::decodeParsedEntities($item), $value);
    }

    if (is_object($value)) {
      foreach ($value as $property => $propertyValue) {
        $value->{$property} = self::decodeParsedEntities($propertyValue);
      }

      return $value;
    }

    if (is_string($value)) {
      return html_entity_decode($value, ENT_QUOTES | ENT_XML1, 'UTF-8');
    }

    return $value;
  }
}
