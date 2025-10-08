<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->get(); // ambil semua kegiatan dari tabel
        return view('pages.layanan.kegiatan-masyarakat', compact('kegiatans'));
    }
    public function show($id)
    {
        $kegiatan = \App\Models\Kegiatan::findOrFail($id);
        return view('pages.layanan.detail-kegiatan', compact('kegiatan'));
    }
}
