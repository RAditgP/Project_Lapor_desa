<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

use App\Models\JenisSurat;

class AdminLayananController extends Controller
{
    // Menampilkan daftar pengajuan surat
   public function index()
{
    $pengajuans = \App\Models\PengajuanSurat::with('jenisSurat')->latest()->get();
    return view('admin.layanan.index', compact('pengajuans'));
}


    // Update status surat
    public function updateStatus(Request $request, $id)
    {
        $surat = PengajuanSurat::findOrFail($id);
        $surat->status = $request->status;
        $surat->save();

        return redirect()->route('admin.layanan.index')->with('success', 'Status pengajuan surat berhasil diperbarui!');
    }
}
