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
        'lampiran',
        'status',
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}
