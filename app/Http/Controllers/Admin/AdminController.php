<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Models\Pengaduan;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahPengumuman = Pengumuman::count();
        $jumlahPengaduan  = Pengaduan::count();

        return view('admin.dashboard', compact('jumlahPengumuman', 'jumlahPengaduan'));
    }
}
