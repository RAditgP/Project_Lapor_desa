<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

class PengajuanSuratController extends Controller
{
    public function create()
    {
        return view('pages.layanan.pengajuan-surat'); // sesuaikan dengan folder view kamu
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'jenis_surat' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Simpan ke database
        PengajuanSurat::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_surat' => $request->jenis_surat,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect balik dengan pesan sukses
        return redirect()->back()->with('success', 'Pengajuan surat berhasil diajukan!');
    }
}
