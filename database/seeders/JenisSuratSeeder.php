<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisSurat;

class JenisSuratSeeder extends Seeder
{
    public function run(): void
    {
        JenisSurat::insert([
            ['nama_surat' => 'Surat Keterangan Domisili', 'deskripsi' => 'Surat untuk keperluan domisili.'],
            ['nama_surat' => 'Surat Keterangan Tidak Mampu', 'deskripsi' => 'Surat untuk keringanan biaya.'],
            ['nama_surat' => 'Surat Keterangan Usaha', 'deskripsi' => 'Surat untuk izin usaha kecil.'],
        ]);
    }
}
