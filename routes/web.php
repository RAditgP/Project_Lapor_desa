<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiDesaController; 
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Semua route aplikasi kamu didefinisikan di sini.
| Halaman statis bisa langsung return view,
| sedangkan yang butuh logic pakai controller.
*/

// Halaman Statis
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/pengumuman', 'pages.pengumuman')->name('pengumuman');
Route::view('/layanan', 'pages.layanan')->name('layanan');
Route::view('/layanan/pengajuan-surat', 'pages.layanan.pengajuan-surat');
Route::view('/layanan/laporan-masyarakat', 'pages.layanan.laporan-masyarakat');
Route::view('/layanan/donasi-desa', 'pages.layanan.donasi-desa');
Route::view('/layanan/informasi-desa', 'pages.layanan.informasi-desa')->name('layanan.informasi-desa');


// Halaman Pengaduan (dinamis, pakai controller)
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/profil', function () {
    return view('pages.profil');
});

