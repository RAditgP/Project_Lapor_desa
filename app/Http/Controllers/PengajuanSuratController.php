<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

class PengajuanSuratController extends Controller
{
    public function create()
    {
        return view('pages.layanan.pengajuan-surat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'jenis_surat' => 'required|string|max:255',
            'keperluan' => 'required|string',
        ]);

        PengajuanSurat::create($request->all());

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }
    
}
