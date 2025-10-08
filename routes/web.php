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
use App\Http\Controllers\AdminLayananController;

// ======================================================
// 1. RUTE AUTENTIKASI (LOGIN & LOGOUT)
// ======================================================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ======================================================
// 2. RUTE ADMIN (DILINDUNGI MIDDLEWARE AUTH)
// ======================================================
Route::middleware(['auth'])
      ->prefix('admin')
      ->name('admin.') // <-- Perbaikan UTAMA ada di sini!
      ->group(function () {
    
    // Dashboard Admin: Nama rute akan menjadi 'admin.dashboard'
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // CRUD Pengumuman (Admin): Nama rute akan menjadi 'admin.pengumuman.create', dll.
    Route::resource('pengumuman', AdminPengumumanController::class);

    // CRUD Pengaduan (Admin): Nama rute akan menjadi 'admin.pengaduan.index', dll.
    Route::resource('pengaduan', AdminPengaduanController::class)->only(['index', 'show', 'destroy']);
    
    // Kelola Layanan Umum (Nama rute: 'admin.layanan.index', 'admin.layanan.updateStatus')
    Route::get('/layanan', [AdminLayananController::class, 'index'])->name('layanan.index');
    Route::post('/layanan/{layanan}/status', [AdminLayananController::class, 'updateStatus'])->name('layanan.updateStatus');

    // Kelola Pengajuan Surat (Nama rute: 'admin.pengajuan-surat.index', 'admin.pengajuan-surat.status')
    // Perhatikan: Menghapus /admin/ di URI karena sudah ditangani oleh prefix grup
    Route::get('layanan/pengajuan-surat', [PengajuanSuratController::class, 'index'])->name('pengajuan-surat.index');
    Route::post('layanan/pengajuan-surat/{id}/status', [PengajuanSuratController::class, 'updateStatus'])->name('pengajuan-surat.status');

    // Logout di sidebar admin (Nama rute: 'admin.logout' jika Anda mau, tapi 'logout' sudah cukup)
    // Dibiarkan tanpa awalan 'admin.' agar konsisten, tapi tetap berada dalam grup auth.
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 

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

    Route::get('/pengajuan-surat', [PengajuanSuratController::class, 'create'])->name('pengajuan-surat.create');
    Route::post('/pengajuan-surat', [PengajuanSuratController::class, 'store'])->name('pengajuan-surat.store');
    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');
    Route::get('/laporan-masyarakat', [PengaduanController::class, 'laporan'])->name('laporan-masyarakat');
});
