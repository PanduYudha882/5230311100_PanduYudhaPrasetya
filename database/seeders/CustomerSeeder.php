<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customer')->insert([
            [
                'nama' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'telepon' => '081234567890',
                'alamat' => 'Jl. Merdeka No.1, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'telepon' => '081987654321',
                'alamat' => 'Jl. Malioboro No.10, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'telepon' => '081223344556',
                'alamat' => 'Jl. Sosrowijayan No.5, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

