<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananSuratController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\InformasiDesaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua rute aplikasi kamu didefinisikan di sini.
| Halaman statis bisa langsung return view,
| sedangkan yang butuh logika pakai controller.
|
*/

// Halaman Beranda dan Pengumuman (Statis)
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/pengumuman', 'pages.pengumuman')->name('pengumuman');
Route::view('/profil', 'pages.profil')->name('profil');

// Grup Rute untuk Layanan Online
Route::prefix('layanan')->name('layanan.')->group(function () {
    // Halaman Statis di bawah layanan
    Route::view('/donasi-desa', 'pages.layanan.donasi-desa')->name('donasi-desa');
    Route::view('/laporan-masyarakat', 'pages.layanan.laporan-masyarakat')->name('laporan-masyarakat');
    Route::view('/kegiatan-masyarakat', 'pages.layanan.kegiatan-masyarakat')->name('kegiatan-masyarakat');

    // Halaman dengan Controller
    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');

    // Layanan Pengajuan Surat (Formulir)
    Route::get('/pengajuan-surat', [LayananSuratController::class, 'create'])->name('pengajuan-surat.create');
    Route::post('/pengajuan-surat', [LayananSuratController::class, 'store'])->name('pengajuan-surat.store');
});

// Halaman Pengaduan Masyarakat (Formulir)
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
