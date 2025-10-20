<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';

    public $timestamps = true;

    protected $fillable = [
        'id_customer',
        'id_produk',
        'jumlah',
        'total_harga',
        'tanggal_penjualan',
    ];

    // Relasi: Penjualan dimiliki oleh Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    // Relasi: Penjualan dimiliki oleh Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produk', 'id_produk');
    }
}