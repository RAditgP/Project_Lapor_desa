<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'no_telepon',
        'alamat',
        'jenis_surat_id',
        'alasan',
        'status',
        'file_pendukung',
    ];

    public function jenisSurat()
    {
        // nama model, nama kolom foreign key, nama primary key di tabel jenis_surat
        return $this->belongsTo(JenisSurat::class, 'jenis_surat_id', 'id');
    }
}
