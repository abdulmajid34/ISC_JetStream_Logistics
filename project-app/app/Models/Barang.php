<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama_barang',
        'kategori',
        'jumlah',
        'harga_per_unit',
        'tanggal_masuk',
        'tanggal_keluar',
        'nomor_tracking',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
