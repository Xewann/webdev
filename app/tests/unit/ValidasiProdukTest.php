<?php
namespace Tests\Unit;
 
use CodeIgniter\Test\CIUnitTestCase;
use App\Libraries\ValidasiProduk;
 
class ValidasiProdukTest extends CIUnitTestCase
{
    public function testHargaPositifDianggapValid()
    {
        $hasil = ValidasiProduk::hargaValid(50000);
        $this->assertTrue($hasil);
    }
 
    public function testHargaNolAtauNegatifDianggapTidakValid()
    {
        $this->assertFalse(ValidasiProduk::hargaValid(0));
        $this->assertFalse(ValidasiProduk::hargaValid(-1000));
    }
}
