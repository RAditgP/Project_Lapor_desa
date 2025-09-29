<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumen'; // atau 'pengumumans' tergantung nama tabel di database

    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
    ];
}
