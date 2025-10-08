<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

class AdminLayananController extends Controller
{
    public function index()
    {
        // Ambil semua data pengajuan surat
        $pengajuan = PengajuanSurat::orderBy('created_at', 'desc')->get();

        // Kirim ke view
        return view('admin.layanan.index', compact('pengajuan'));
    }
}
