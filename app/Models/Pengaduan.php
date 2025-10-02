<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'nama',
        'telepon',
        'isi_pengaduan',
=======
    protected $table = 'pengaduan';
    protected $fillable = [
        'nama', 'nik', 'telepon', 'judul', 'isi'
>>>>>>> bd87a961005c27c3c6fb4d27d78f62069e39b0ba
    ];
}

