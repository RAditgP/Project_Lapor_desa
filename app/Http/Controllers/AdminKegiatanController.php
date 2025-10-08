<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminKegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->get();
        return view('admin.kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('foto')?->store('kegiatan', 'public');

        Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $path,
        ]);

        return redirect()->route('admin.kegiatan-masyarakat.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit(Kegiatan $kegiatan_masyarakat)
    {
        return view('admin.kegiatan.edit', ['kegiatan' => $kegiatan_masyarakat]);
    }

    public function update(Request $request, Kegiatan $kegiatan_masyarakat)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $kegiatan = $kegiatan_masyarakat;

        if ($request->hasFile('foto')) {
            if ($kegiatan->foto && Storage::disk('public')->exists($kegiatan->foto)) {
                Storage::disk('public')->delete($kegiatan->foto);
            }
            $path = $request->file('foto')->store('kegiatan', 'public');
            $kegiatan->foto = $path;
        }

        $kegiatan->update($request->only('judul', 'deskripsi', 'tanggal'));

        return redirect()->route('admin.kegiatan-masyarakat.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan_masyarakat)
    {
        if ($kegiatan_masyarakat->foto && Storage::disk('public')->exists($kegiatan_masyarakat->foto)) {
            Storage::disk('public')->delete($kegiatan_masyarakat->foto);
        }

        $kegiatan_masyarakat->delete();

        return redirect()->route('admin.kegiatan-masyarakat.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
