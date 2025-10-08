<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisSurat;

class JenisSuratSeeder extends Seeder
{
    public function run(): void
    {
        $surats = [
            ['nama_surat' => 'Surat Keterangan Tidak Mampu'],
            ['nama_surat' => 'Surat Keterangan Domisili'],
            ['nama_surat' => 'Surat Keterangan Usaha'],
            ['nama_surat' => 'Surat Keterangan Kelahiran'],
            ['nama_surat' => 'Surat Keterangan Kematian'],
        ];

        JenisSurat::insert($surats);
    }
}
