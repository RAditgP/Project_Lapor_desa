<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan; // atau model yang kamu pakai untuk laporan

class AdminLaporanController extends Controller
{
    public function index()
    {
        $laporans = Pengaduan::latest()->get();
        return view('admin.laporan.index', compact('laporans'));
    }
}
