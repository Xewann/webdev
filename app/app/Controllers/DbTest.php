<?php

namespace App\Controllers;

class DbTest extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $db->initialize();
        return 'koneksi ke database berhasil!';
    }
}