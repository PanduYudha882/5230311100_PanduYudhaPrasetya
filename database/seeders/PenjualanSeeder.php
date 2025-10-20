<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penjualan')->insert([
            [
                'id_customer' => 1, // Budi Santoso
                'id_produk' => 1,   // Kopi Robusta
                'jumlah' => 2,
                'total_harga' => 2 * 25000,
                'tanggal_penjualan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 2, // Siti Aminah
                'id_produk' => 2,   // Teh Hijau
                'jumlah' => 3,
                'total_harga' => 3 * 20000,
                'tanggal_penjualan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_customer' => 3, // Andi Wijaya
                'id_produk' => 3,   // Keripik Singkong
                'jumlah' => 5,
                'total_harga' => 5 * 15000,
                'tanggal_penjualan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
