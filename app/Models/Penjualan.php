<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'nomor',
        'nama_pelanggan',
        'hp_pelanggan',
        'email_pelanggan',
        'tiket_id',
        'harga',
        'kuantiti',
        'total',
    ];

    protected $casts = [
        'harga' => 'double',
        'kuantiti' => 'integer',
        'total' => 'double',
    ];
}