<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananSurat; // Pastikan model ini sudah diimpor

class LayananSuratController extends Controller
{
    /**
     * Menampilkan halaman formulir pengajuan surat.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.layanan.pengajuan-surat');
    }

    /**
     * Menyimpan data pengajuan surat ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenis_surat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Menyimpan data ke database menggunakan Model LayananSurat
        LayananSurat::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'jenis_surat' => $request->jenis_surat,
            'deskripsi' => $request->deskripsi,
        ]);

        // Mengembalikan pengguna ke halaman yang sama dengan pesan sukses
        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }
}
