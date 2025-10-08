<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporans'; // nama tabel di database

    protected $fillable = [
        'nama_pelapor',
        'no_telepon',
        'isi_laporan',
        'status', // contoh: pending, diproses, selesai
    ];
}
