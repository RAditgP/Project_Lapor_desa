<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;

class AdminPengumumanController extends Controller
{
    /**
     * Tampilkan semua pengumuman (READ)
     */
    public function index()
    {
        $pengumumans = Pengumuman::latest()->get();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    /**
     * Form tambah pengumuman (CREATE)
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Simpan pengumuman baru (STORE)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('pengumuman_images', 'public');
        }

        Pengumuman::create($validated);

        return redirect()->route('admin.pengumuman.index')
                         ->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    /**
     * Form edit pengumuman (EDIT)
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update pengumuman (UPDATE)
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
                Storage::disk('public')->delete($pengumuman->gambar);
            }

            // Upload gambar baru
            $validated['gambar'] = $request->file('gambar')->store('pengumuman_images', 'public');
        }

        $pengumuman->update($validated);

        return redirect()->route('admin.pengumuman.index')
                         ->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Hapus pengumuman (DELETE)
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
            Storage::disk('public')->delete($pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
                         ->with('success', 'Pengumuman berhasil dihapus!');
    }
}
