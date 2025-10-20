<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
    [
        'id_produk' => 1,
        'nama_produk' => 'Produk A',
        'kategori' => 'Kategori 1', // isi sesuai kolom kategori
        'harga_satuan' => 25000,
        'stok' => 100,
        'satuan' => 'pcs', // isi sesuai kolom satuan
    ],
    [
        'id_produk' => 2,
        'nama_produk' => 'Produk B',
        'kategori' => 'Kategori 2',
        'harga_satuan' => 20000,
        'stok' => 80,
        'satuan' => 'pcs',
    ],
    [
        'id_produk' => 3,
        'nama_produk' => 'Produk C',
        'kategori' => 'Kategori 3',
        'harga_satuan' => 15000,
        'stok' => 60,
        'satuan' => 'pcs',
    ],
]);

    }
}
