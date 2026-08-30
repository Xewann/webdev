<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'inventory.produk';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_produk', 'harga', 'stok'];


    // Dates
    protected $useTimestamps = false;


    // Validation
    protected $validationRules      = [
        'nama_produk' => 'required|max_length[100]',
        'harga'       => 'required|decimal',
        'stok'        => 'required|integer'
    ];
}
