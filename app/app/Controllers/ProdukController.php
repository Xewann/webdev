<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    protected ProdukModel $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
    return view('produk/index', [
        'produk' => $this->produkModel->findAll(),
    ]);
    }

    public function create()
    {
        $rules = [
            'nama_produk' => 'required|max_length[100]',
            'harga' => 'required|decimal',
            'stok' => 'required|integer'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
        }

        $this->produkModel->insert([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ]);

        return redirect()->to('/produk')->with('success', 'Produk berhasil ditambahkan.');
       }

       public function update($id)
       {
           $rules = [
               'nama_produk' => 'required|max_length[100]',
               'harga' => 'required|decimal',
               'stok' => 'required|integer'
           ];

           if (!$this->validate($rules)) {
               return redirect()->back()
                   ->withInput()
                   ->with('errors', $this->validator->getErrors());
           }

           $this->produkModel->update($id, [
               'nama_produk' => $this->request->getPost('nama_produk'),
               'harga' => $this->request->getPost('harga'),
               'stok' => $this->request->getPost('stok'),
           ]);

           return redirect()->to('/produk')->with('success', 'Produk berhasil diperbarui.');
       } 

       public function delete($id)
       {
           $this->produkModel->delete($id);
           return redirect()->to('/produk')->with('success', 'Produk berhasil dihapus.');
       } 

       public function new()
       {
           return view('produk/new');
           
       }    
}