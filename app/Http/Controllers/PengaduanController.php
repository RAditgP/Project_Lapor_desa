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
            'nama' => 'required|string|max:100',
            'nik' => 'required|string|max:16',
            'isi_pengaduan' => 'required|string',
        ]);

        Pengaduan::create($request->all());

        return redirect('/pengaduan')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
