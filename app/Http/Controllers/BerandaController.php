<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil 3 pengumuman terbaru berdasarkan tanggal
        $pengumumans = Pengumuman::orderBy('tanggal', 'desc')->take(3)->get();

        return view('pages.beranda', compact('pengumumans'));
    }
}
