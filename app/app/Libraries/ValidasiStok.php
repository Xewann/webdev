<?php 
// app/Libraries/ValidasiStok.php
namespace App\Libraries;
 
class ValidasiStok
{
    public static function stokValid($stok): bool
    {
        if (! is_numeric($stok)) {
            return false;
        }
        return $stok >= 0;
    }
}
