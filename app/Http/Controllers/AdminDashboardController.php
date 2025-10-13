<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pengaduan;
use App\Models\Layanan;
use App\Models\PengajuanSurat;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $total_pengumuman = Pengumuman::count();
        $total_pengaduan = Pengaduan::count();
        $total_pengajuan_surat = PengajuanSurat::count();

        return view('admin.dashboard', compact('total_pengumuman', 'total_pengaduan', 'total_pengajuan_surat'));
    }
}
