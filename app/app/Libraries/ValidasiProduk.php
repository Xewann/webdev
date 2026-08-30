<?php 
// app/Libraries/ValidasiProduk.php
namespace App\Libraries;
 
class ValidasiProduk
{
    public static function hargaValid($harga): bool
    {
        if (! is_numeric($harga)) {
            return false;
        }
        return $harga > 0;
    }
}
