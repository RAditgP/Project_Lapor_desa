<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\InformasiDesaController;
use App\Http\Controllers\PengumumanController;

use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Halaman Beranda dan Pengumuman (Statis)
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/pengumuman', 'pages.pengumuman')->name('pengumuman');
Route::view('/profil', 'pages.profil')->name('profil');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

// Grup Rute untuk Layanan Online
Route::prefix('layanan')->name('layanan.')->group(function () {
    // Halaman Statis di bawah layanan
    Route::view('/donasi-desa', 'pages.layanan.donasi-desa')->name('donasi-desa');
    Route::view('/laporan-masyarakat', 'pages.layanan.laporan-masyarakat')->name('laporan-masyarakat');
    Route::view('/kegiatan-masyarakat', 'pages.layanan.kegiatan-masyarakat')->name('kegiatan-masyarakat');
Route::get('/pengajuan-surat', [PengajuanSuratController::class, 'create'])->name('pengajuan-surat.create'); // tampilkan form (GET)
    Route::post('/pengajuan-surat', [PengajuanSuratController::class, 'store'])->name('pengajuan-surat.store');   // simpan data (POST)
    
    // Halaman dengan Controller
    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');
});


Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/laporan', [PengaduanController::class, 'laporan'])->name('laporan.index');
Route::get('/layanan/laporan-masyarakat', [PengaduanController::class, 'laporan']);

