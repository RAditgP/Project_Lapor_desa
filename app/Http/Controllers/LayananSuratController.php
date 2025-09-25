<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananSuratController extends Controller
{
    public function create()
    {
        return view('pages.layanan.pengajuan-surat');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jenis_surat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Di sini kamu bisa menambahkan logika untuk menyimpan data ke database.
        // Contoh:
        // LayananSurat::create([
        //     'nama_lengkap' => $request->nama_lengkap,
        //     'email' => $request->email,
        //     'jenis_surat' => $request->jenis_surat,
        //     'deskripsi' => $request->deskripsi,
        // ]);

        // Mengembalikan pengguna ke halaman yang sama dengan pesan sukses
        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }
}
