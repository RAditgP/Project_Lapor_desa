<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class AdminPengajuanSuratController extends Controller
{
    // Tampilkan semua pengajuan surat
    public function index()
    {
        $pengajuanSurats = PengajuanSurat::with('jenisSurat')->latest()->get();
        return view('admin.pengajuan-surat.index', compact('pengajuanSurats'));
    }

    // Update status
    public function updateStatus(Request $request, $id)
    {
        $pengajuan = PengajuanSurat::findOrFail($id);
        $pengajuan->status = $request->status;
        $pengajuan->save();

        return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}
