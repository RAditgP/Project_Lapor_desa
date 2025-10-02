<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumumans'; // sesuai dengan nama tabel di database

    protected $fillable = [
        'judul',
        'isi',
        'foto',
        'tanggal',
    ];
}
