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
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'telepon' => 'required',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        Pengaduan::create($request->all());

        return redirect('/laporan')->with('success', 'Pengaduan berhasil dikirim!');
    }

    public function laporan()
    {
        $laporan = Pengaduan::latest()->get();
        return view('pages.layanan.laporan-masyarakat', compact('laporan'));
    }

}
