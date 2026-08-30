<?php
namespace Tests\Unit;
 
use CodeIgniter\Test\CIUnitTestCase;
use App\Libraries\ValidasiStok;
 
class ValidasiStokTest extends CIUnitTestCase
{
    public function testStokPositifDianggapValid()
    {
        $hasil = ValidasiStok::stokValid(50);
        $this->assertTrue($hasil);
    }
 
    public function testStokNolAtauNegatifDianggapTidakValid()
    {
        $this->assertFalse(ValidasiStok::stokValid(-1000));
    }
}
