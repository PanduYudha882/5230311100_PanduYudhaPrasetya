<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk'); // Bisa diganti ke bigIncrements jika diperlukan
            $table->string('nama_produk', 100);
            $table->string('kategori', 50)->nullable(); // Kalau kategori opsional
            $table->decimal('harga_satuan', 12, 2)->default(0);
            $table->unsignedInteger('stok')->default(0);
            $table->string('satuan', 50);
            $table->timestamps();

            $table->unique('nama_produk', 'uq_produk_nama');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
