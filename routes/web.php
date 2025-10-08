<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminPengumumanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\InformasiDesaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\AdminPengajuanSuratController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminKegiatanController;

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
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Logout di sidebar admin
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ======================================================
    // CRUD Pengumuman (Admin)
    // ======================================================
    Route::resource('pengumuman', AdminPengumumanController::class)->names([
        'index' => 'admin.pengumuman.index',
        'create' => 'admin.pengumuman.create',
        'store' => 'admin.pengumuman.store',
        'show' => 'admin.pengumuman.show',
        'edit' => 'admin.pengumuman.edit',
        'update' => 'admin.pengumuman.update',
        'destroy' => 'admin.pengumuman.destroy',
    ]);

    // ======================================================
    // CRUD Pengaduan (Admin)
    // ======================================================
    Route::resource('pengaduan', AdminPengaduanController::class)
        ->only(['index', 'show', 'destroy'])
        ->names([
            'index' => 'admin.pengaduan.index',
            'show' => 'admin.pengaduan.show',
            'destroy' => 'admin.pengaduan.destroy',
        ]);

    // ======================================================
    // Kelola Layanan Umum
    // ======================================================
    Route::get('/layanan', [AdminLayananController::class, 'index'])->name('admin.layanan.index');
    Route::post('/layanan/{id}/status', [AdminLayananController::class, 'updateStatus'])->name('admin.layanan.updateStatus');

    // ======================================================
    // Kelola Pengajuan Surat (Admin)
    // ======================================================
    Route::get('/pengajuan-surat', [AdminPengajuanSuratController::class, 'index'])
        ->name('admin.pengajuan-surat.index');

    Route::post('/pengajuan-surat/{id}/update-status', [AdminPengajuanSuratController::class, 'updateStatus'])
        ->name('admin.pengajuan-surat.update-status');

    // ======================================================
    // Laporan & Kegiatan Masyarakat
    // ======================================================
    Route::get('/laporan-masyarakat', [AdminLaporanController::class, 'index'])->name('admin.laporan');
    Route::get('/kegiatan-masyarakat', [AdminKegiatanController::class, 'index'])->name('admin.kegiatan');
});

// ======================================================
// 3. RUTE PENGGUNA UMUM (PUBLIC)
// ======================================================

// Halaman utama
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/profil', 'pages.profil')->name('profil');

// Pengumuman umum (dibaca publik)
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');

// Pengaduan masyarakat
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/laporan', [PengaduanController::class, 'laporan'])->name('laporan.index');

// Grup layanan online
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::view('/donasi-desa', 'pages.layanan.donasi-desa')->name('donasi-desa');
    Route::view('/kegiatan-masyarakat', 'pages.layanan.kegiatan-masyarakat')->name('kegiatan-masyarakat');

    Route::get('/pengajuan-surat', [PengajuanSuratController::class, 'create'])->name('pengajuan-surat.form');
    Route::post('/pengajuan-surat', [PengajuanSuratController::class, 'store'])->name('pengajuan-surat.store');
    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');
    Route::get('/laporan-masyarakat', [PengaduanController::class, 'laporan'])->name('laporan-masyarakat');
});
