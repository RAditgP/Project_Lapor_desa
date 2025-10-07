<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminPengumumanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\InformasiDesaController;
use App\Http\Controllers\PengumumanController;

// ======================================================
// 1. RUTE AUTENTIKASI (LOGIN & LOGOUT)
// ======================================================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ======================================================
// 2. RUTE ADMIN (DILINDUNGI MIDDLEWARE AUTH)
// ======================================================
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Pengumuman (khusus admin)
    Route::resource('pengumuman', AdminPengumumanController::class);

    // CRUD atau fitur admin lain nanti bisa ditambahkan di sini
    // Contoh:
    // Route::resource('pengaduan', AdminPengaduanController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

// ======================================================
// 3. RUTE PENGGUNA UMUM (PUBLIC)
// ======================================================

// Halaman utama
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/profil', 'pages.profil')->name('profil');

// Pengumuman umum (user bisa melihat)
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');

// Formulir pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/laporan', [PengaduanController::class, 'laporan'])->name('laporan.index');

// Grup Layanan Online
Route::prefix('layanan')->name('layanan.')->group(function () {

    Route::view('/donasi-desa', 'pages.layanan.donasi-desa')->name('donasi-desa');
    Route::view('/kegiatan-masyarakat', 'pages.layanan.kegiatan-masyarakat')->name('kegiatan-masyarakat');

    Route::get('/pengajuan-surat', [PengajuanSuratController::class, 'create'])->name('pengajuan-surat.create');
    Route::post('/pengajuan-surat', [PengajuanSuratController::class, 'store'])->name('pengajuan-surat.store');

    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');
    Route::get('/laporan-masyarakat', [PengaduanController::class, 'laporan'])->name('laporan-masyarakat');
});
