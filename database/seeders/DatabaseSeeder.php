<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 user dummy (opsional)
        User::factory(10)->create();

        // Memanggil semua seeder custom
        $this->call([
            CustomerSeeder::class,
            ProductSeeder::class,
            PenjualanSeeder::class,
        ]);
    }
}
