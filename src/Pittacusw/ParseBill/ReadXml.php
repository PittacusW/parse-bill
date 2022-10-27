<?php

namespace Pittacusw\ParseBill;

use DOMDocument;

class ReadXml {

  public static function parse($file) {
    try {
      $json = self::open($file)->Documento;
    } catch (\Exception $e) {
      return NULL;
    }
    if (isset($json->Detalle) && !is_array($json->Detalle)) {
      $json->Detalle = [$json->Detalle];
    }
    if (isset($json->Referencia) && !is_array($json->Referencia)) {
      $json->Referencia = [$json->Referencia];
    }
    if (isset($json->DscRcgGlobal) && !is_array($json->DscRcgGlobal)) {
      $json->DscRcgGlobal = [$json->DscRcgGlobal];
    }
    if (isset($json->Encabezado->Totales->ImptoReten) && !is_array($json->Encabezado->Totales->ImptoReten)) {
      $json->Encabezado->Totales->ImptoReten = [$json->Encabezado->Totales->ImptoReten];
    }

    return $json;
  }

  public static function prepare($file) {
    if (!preg_match('!!u', $file)) {
      $file = utf8_encode($file);
    }
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

    return self::FixEncode($file);
  }

  public static function FixEncode($value) {
    $pos            = 0;
    $resultValues   = [];
    $resultValues[] = $value;
    $hex            = unpack('H*', $value);
    $newvalue       = utf8_decode($value);
    $hex2           = unpack('H*', $newvalue);
    while ($hex[1] != $hex2[1]) {
      $value          = $newvalue;
      $hex            = unpack('H*', $value);
      $newvalue       = utf8_decode($value);
      $hex2           = unpack('H*', $newvalue);
      $resultValues[] = $value;
      $pos ++;
    }
    if (isset($resultValues[$pos - 2])) {
      $value = $resultValues[$pos - 2];
    } else {
      $value = $resultValues[0];
    }
    preg_match_all('/&(?:[a-z]+|#x?\d+);/i', $value, $matches);
    while (isset($matches[0][0])) {
      if ($matches[0][0] == '&apos;') {
        $value = str_replace('&apos;', "'", $value);
      } else {
        $value = html_entity_decode($value);
      }
      preg_match_all('/&(?:[a-z]+|#x?\d+);/i', $value, $matches);
    }

    return $value;
  }

  public static function open($file) {
    if (file_exists($file)) {
      $file = file_get_contents($file);
    }
    $file = simplexml_load_string($file, NULL, LIBXML_NOBLANKS);
    $json = json_decode(json_encode(self::prepare($file)));

    return isset($json->SetDTE) ? $json->SetDTE->DTE : $json;
  }

  public static function signature($file) {
    $dom = new DOMDocument('1.0', 'ISO-8859-1');
    if (file_exists($file)) {
      $dom->load($file);
    } else {
      $dom->loadXML($file);
    }
    $dom->preserveWhiteSpace = FALSE;
    $dom->formatOutput       = FALSE;

    return $dom->getElementsByTagName('SignatureValue')
               ->item(0)->nodeValue;
  }
}
