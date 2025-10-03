<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage; // Untuk menghapus file lama

class AdminPengumumanController extends Controller
{
    // 1. READ (Menampilkan Daftar untuk Admin)
    public function index()
    {
        // Ambil semua data pengumuman
        $pengumumans = Pengumuman::orderBy('created_at', 'desc')->get();
        // Ganti 'admin.pengumuman.index' dengan path view Anda
        return view('admin.pengumuman.index', compact('pengumumans')); 
    }

    // 2. CREATE (Menampilkan Form Tambah)
    public function create()
    {
        // Ganti 'admin.pengumuman.create' dengan path view Anda
        return view('admin.pengumuman.create');
    }

    // 3. STORE (Menyimpan Data Baru)
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
        ]);

        $path = null;
        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            // Simpan gambar ke storage/app/public/pengumuman_images
            $path = $request->file('gambar')->store('public/pengumuman_images');
            // Ambil hanya nama file-nya untuk disimpan di database
            $path = str_replace('public/', '', $path); 
        }

        // Simpan ke database
        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'gambar' => $path, // Simpan path gambar
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    // 4. EDIT (Menampilkan Form Edit)
    public function edit(Pengumuman $pengumuman)
    {
        // Ganti 'admin.pengumuman.edit' dengan path view Anda
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    // 5. UPDATE (Memperbarui Data)
    public function update(Request $request, Pengumuman $pengumuman)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $path = $pengumuman->gambar;

        // Proses update gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($pengumuman->gambar) {
                Storage::delete('public/' . $pengumuman->gambar);
            }
            // Upload gambar baru
            $path = $request->file('gambar')->store('public/pengumuman_images');
            $path = str_replace('public/', '', $path);
        }

        // Update ke database
        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    // 6. DELETE (Menghapus Data)
    public function destroy(Pengumuman $pengumuman)
    {
        // Hapus file gambar dari storage
        if ($pengumuman->gambar) {
            Storage::delete('public/' . $pengumuman->gambar);
        }

        // Hapus dari database
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}