<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AdminPengaduanController extends Controller
{
    // Menampilkan semua laporan pengaduan
    public function index()
    {
        $pengaduans = Pengaduan::latest()->get();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    // Menampilkan detail pengaduan (opsional)
    public function show(Pengaduan $pengaduan)
    {
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    // Hapus laporan (opsional)
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan berhasil dihapus!');
    }
}
