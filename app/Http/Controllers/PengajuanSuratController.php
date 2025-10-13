<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\JenisSurat;

class PengajuanSuratController extends Controller
{
    /**
     * Tampilkan form pengajuan surat
     */
    public function create()
    {
        // Ambil semua jenis surat dari database
        $jenis_surats = JenisSurat::all();

        // Kirim ke view
        return view('pages.layanan.pengajuan-surat', compact('jenis_surats'));
    }

    /**
     * Simpan data pengajuan surat
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'alasan' => 'nullable|string',
            'file_pendukung' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Upload file pendukung jika ada
        if ($request->hasFile('file_pendukung')) {
            $validated['file_pendukung'] = $request->file('file_pendukung')->store('lampiran', 'public');
        }

        // Simpan ke tabel pengajuan_surats
        PengajuanSurat::create($validated);

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }
}
