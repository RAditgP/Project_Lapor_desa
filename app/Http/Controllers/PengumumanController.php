<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        // Ambil semua data pengumuman, diurutkan terbaru untuk user
        $pengumumans = Pengumuman::orderBy('tanggal', 'desc')->get(); 

        // Mengirim ke view user: /pengumuman
        return view('pages.pengumuman', compact('pengumumans')); 
    }
    
    // Tambahkan fungsi untuk menampilkan detail satu pengumuman
    public function show(Pengumuman $pengumuman)
    {
        return view('pages.pengumuman_detail', compact('pengumuman'));
    }
}