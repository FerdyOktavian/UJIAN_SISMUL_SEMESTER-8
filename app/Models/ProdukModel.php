<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $allowedFields = [
    'nama_barang',
    'harga',
    'deskripsi',
    'kategori',
    'gambar'
];

    protected $useTimestamps = true;
}