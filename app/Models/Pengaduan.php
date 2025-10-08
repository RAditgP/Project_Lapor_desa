<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
        protected $fillable = [
        'nama', 'nik', 'telepon', 'judul', 'isi','foto'
    ];
}

