<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $data = [
            'produk' => $this->produkModel->findAll()
        ];

        return view('produk/index', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function store()
    {
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads', $namaGambar);
        } else {
            $namaGambar = 'default.jpg';
        }

        $this->produkModel->save([
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga'       => $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'kategori'    => $this->request->getPost('kategori'),
            'gambar'      => $namaGambar
        ]);

        return redirect()->to('/produk');
    }

    public function edit($id)
{
    $data = [
        'produk' => $this->produkModel->find($id)
    ];

    return view('produk/edit', $data);
}

public function update($id)
{
    $produkLama = $this->produkModel->find($id);

    $gambar = $this->request->getFile('gambar');

    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        $namaGambar = $gambar->getRandomName();
        $gambar->move('uploads', $namaGambar);

        if ($produkLama['gambar'] != 'default.jpg' && file_exists('uploads/' . $produkLama['gambar'])) {
            unlink('uploads/' . $produkLama['gambar']);
        }
    } else {
        $namaGambar = $produkLama['gambar'];
    }

    $this->produkModel->update($id, [
        'nama_barang' => $this->request->getPost('nama_barang'),
        'harga'       => $this->request->getPost('harga'),
        'deskripsi'   => $this->request->getPost('deskripsi'),
        'kategori'    => $this->request->getPost('kategori'),
        'gambar'      => $namaGambar
    ]);

    return redirect()->to('/produk');
}
public function delete($id)
{
    $produk = $this->produkModel->find($id);

    if ($produk) {
        if ($produk['gambar'] != 'default.jpg' && file_exists('uploads/' . $produk['gambar'])) {
            unlink('uploads/' . $produk['gambar']);
        }

        $this->produkModel->delete($id);
    }

    return redirect()->to('/produk');
}
public function about()
{
    return view('produk/about');
}
}