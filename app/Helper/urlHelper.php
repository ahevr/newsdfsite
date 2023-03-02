<?php
namespace App\Helper;

use IS\PazarYeri\Trendyol\TrendyolClient;

class urlHelper{

    static function permalink($string)
    {
        $find    = array("/", "ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".",  ",",  "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}");
        $replace = array("-", "c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-",  "-",  "-", "-", "-",  "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");
        $string  = strtolower(str_replace($find, $replace, $string));
        $string  = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", " ", $string);
        $string  = trim(preg_replace("/\s+/", " ", $string));
        $string  = str_replace(" ", "-", $string);
        return $string;
    }

    static function api(){
        $trendyol = new TrendyolClient();
        $trendyol->setSupplierId(105316);
        $trendyol->setUsername("nuA5AsWFcHuMyTdzzgGX");
        $trendyol->setPassword("WygwQ0FdzuqwjntdNwF6");
        return $trendyol;
    }

}
