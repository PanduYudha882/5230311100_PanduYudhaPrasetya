<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public $timestamps = true;

    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga_satuan',
        'stok',
        'satuan',
    ];

    // Relasi: Product memiliki banyak Penjualan
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'id_produk', 'id_produk');
    }
}