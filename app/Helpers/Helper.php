<?php 

namespace App\Helpers;

class Helper
{
    public static function convert(string $string)
    {
        return $string*9/5+32;
    }
}