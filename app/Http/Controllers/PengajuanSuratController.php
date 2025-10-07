<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

class PengajuanSuratController extends Controller
{
    // tampil form di sisi user
    public function create()
    {
        return view('user.pages.layanan.pengajuan-surat');
    }

    // simpan pengajuan dari user
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_surat' => 'required',
            'keperluan' => 'required',
        ]);

        PengajuanSurat::create($request->all());

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }

    // tampilkan semua pengajuan di sisi admin
    public function index()
    {
        $pengajuan = PengajuanSurat::latest()->get();
        return view('admin.pages.layanan.index', compact('pengajuan'));
    }

    // ubah status (opsional)
    public function updateStatus($id)
    {
        $pengajuan = PengajuanSurat::findOrFail($id);
        $pengajuan->status = request('status');
        $pengajuan->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }
}
