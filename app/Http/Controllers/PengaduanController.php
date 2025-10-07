<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function create()
{
    return view('pages.pengaduan');
}

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'telepon' => 'required|string|max:20',
        'judul' => 'required|string|max:255',
        'isi' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Jika user upload foto
    if ($request->hasFile('foto')) {
        // Simpan ke folder storage/app/public/pengaduan/
        $validated['foto'] = $request->file('foto')->store('pengaduan', 'public');
    }

    Pengaduan::create($validated);

    return redirect('/laporan')->with('success', 'Pengaduan berhasil dikirim!');
}


    public function laporan()
    {
        $laporan = Pengaduan::latest()->get();
        return view('pages.layanan.laporan-masyarakat', compact('laporan'));
    }

}
