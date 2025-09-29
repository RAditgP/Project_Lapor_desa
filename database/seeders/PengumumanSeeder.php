<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    public function run(): void
    {
        Pengumuman::create([
            'judul'   => 'Gotong Royong Bersih Desa',
            'isi'     => 'Warga diharapkan hadir pada kegiatan gotong royong pada hari Minggu, pukul 07.00 WIB di Balai Desa.',
            'tanggal' => '2025-10-01',
        ]);

        Pengumuman::create([
            'judul'   => 'Pembagian BLT Dana Desa',
            'isi'     => 'Pembagian BLT Dana Desa akan dilaksanakan pada hari Jumat, 3 Oktober 2025 pukul 09.00 WIB di Kantor Desa.',
            'tanggal' => '2025-10-03',
        ]);

        Pengumuman::create([
            'judul'   => 'Pelatihan UMKM Desa',
            'isi'     => 'Pelatihan UMKM untuk warga desa akan diadakan pada 10 Oktober 2025. Pendaftaran dibuka di kantor desa.',
            'tanggal' => '2025-10-10',
        ]);
    }
}
