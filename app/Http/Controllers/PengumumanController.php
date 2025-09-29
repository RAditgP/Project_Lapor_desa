<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        // Ambil semua data pengumuman dari database
        $pengumumans = Pengumuman::orderBy('tanggal', 'desc')->get();

        // Kirim ke view
        return view('pages.pengumuman', compact('pengumumans'));
    }
}
