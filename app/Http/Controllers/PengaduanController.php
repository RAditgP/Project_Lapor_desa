<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    // ... (Fungsi create() tidak berubah)
    public function create()
    {
        return view('pages.pengaduan');
    }

    public function store(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Jika user upload foto, simpan dan update path di array validated
        if ($request->hasFile('foto')) {
            // Path foto yang disimpan di database adalah 'pengaduan/namafile.jpg'
            $validated['foto'] = $request->file('foto')->store('pengaduan', 'public');
        } else {
            // Jika tidak ada foto, pastikan kolom 'foto' bernilai null
            $validated['foto'] = null;
        }

        // 3. Simpan seluruh data yang sudah divalidasi (termasuk path foto) ke database
        Pengaduan::create($validated);

        // 4. Redirect ke halaman laporan
        // PERBAIKAN: Lebih aman menggunakan route name jika sudah didefinisikan
        return redirect('/laporan')->with('success', 'Pengaduan berhasil dikirim!'); 
    }

    public function laporan()
    {
        $laporan = Pengaduan::latest()->get();
        // PERBAIKAN: Mengganti nama view menjadi yang lebih standar
        return view('pages.layanan.laporan-masyarakat', compact('laporan'));
    }
}
