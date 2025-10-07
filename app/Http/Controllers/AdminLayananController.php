<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class AdminLayananController extends Controller
{
    // Tampilkan daftar layanan
    public function index()
    {
        $layanans = Layanan::latest()->get();
        return view('admin.layanan.index', compact('layanans'));
    }

    // Ubah status
    public function updateStatus(Request $request, Layanan $layanan)
    {
        $layanan->update(['status' => $request->status]);
        return back()->with('success', 'Status layanan berhasil diperbarui.');
    }
}
