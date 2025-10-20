<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id_customer';

    public $timestamps = true;

    protected $fillable = [
        'nama_customer',
        'email',
        'no_hp',
        'alamat',
    ];

    // Relasi: Customer memiliki banyak Penjualan
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'id_customer', 'id_customer');
    }
}

