<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\InformasiDesaController;

// Pastikan Anda telah membuat controller ini
use App\Http\Controllers\PengumumanController; 
use App\Http\Controllers\AdminPengumumanController; // <-- Tambahkan ini untuk Admin CRUD
use App\Http\Controllers\AuthController;


// ----------------------------------------------------
// 1. Rute Otentikasi (Auth)
// ----------------------------------------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ----------------------------------------------------
// 2. Rute Admin (Dilindungi oleh 'auth' dan 'admin' middleware)
// ----------------------------------------------------
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Rute Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Rute CRUD Admin Pengumuman (Gunakan Route::resource)
    Route::resource('pengumuman', AdminPengumumanController::class); // names('admin.pengumuman') sudah otomatis karena prefix
    
    // Tambahkan rute CRUD untuk data lain jika diperlukan (contoh: Pengaduan)
    // Route::resource('pengaduan', AdminPengaduanController::class);
});


// ----------------------------------------------------
// 3. Rute Pengguna Biasa (User/Public Access)
// ----------------------------------------------------

// Halaman Dasar (Beranda, Profil)
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/profil', 'pages.profil')->name('profil');

// Rute Pengumuman (Controller untuk mengambil data)
// Hapus Route::view('/pengumuman', ...) dan gunakan controller
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
// Tambahkan rute detail pengumuman
Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');


// Rute Pengaduan (Laporan)
// Rute untuk menampilkan form pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
// Rute untuk menyimpan pengaduan
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
// Rute untuk melihat semua laporan (jika ini ditujukan untuk user)
Route::get('/laporan', [PengaduanController::class, 'laporan'])->name('laporan.index');


// Grup Rute untuk Layanan Online
Route::prefix('layanan')->name('layanan.')->group(function () {
    
    // Halaman Statis di bawah layanan
    Route::view('/donasi-desa', 'pages.layanan.donasi-desa')->name('donasi-desa');
    Route::view('/kegiatan-masyarakat', 'pages.layanan.kegiatan-masyarakat')->name('kegiatan-masyarakat');

    // Rute Pengajuan Surat (Form dan Store)
    Route::get('/pengajuan-surat', [PengajuanSuratController::class, 'create'])->name('pengajuan-surat.create');
    Route::post('/pengajuan-surat', [PengajuanSuratController::class, 'store'])->name('pengajuan-surat.store');

    // Rute Informasi Desa (Controller)
    Route::get('/informasi-desa', [InformasiDesaController::class, 'index'])->name('informasi-desa');
    
    // Perbaikan: Rute 'laporan-masyarakat' sudah dicover di luar prefix ini (`/laporan`).
    // Jika Anda ingin URL-nya tetap `/layanan/laporan-masyarakat`, gunakan ini:
    Route::get('/laporan-masyarakat', [PengaduanController::class, 'laporan'])->name('laporan-masyarakat');
});

// Hapus duplikasi terakhir
// Route::get('/layanan/laporan-masyarakat', [PengaduanController::class, 'laporan']);  