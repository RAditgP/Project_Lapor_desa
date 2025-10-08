<?php
namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use App\Models\JenisSurat;
use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    // Form untuk warga
    public function create()
    {
        $jenis_surats = JenisSurat::all();
        return view('pages.layanan.pengajuan-surat', compact('jenis_surats'));
    }

    // Proses kirim form warga
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('lampiran_surat', 'public');
        }

        PengajuanSurat::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'no_telepon' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_surat_id' => $request->jenis_surat_id,
            'lampiran' => $lampiranPath,
        ]);

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }

    // Halaman admin melihat semua pengajuan
    public function index()
    {
        $pengajuans = PengajuanSurat::with('jenisSurat')->latest()->get();
        return view('admin.layanan.pengajuan-surat', compact('pengajuans'));
    }

    // Admin ubah status pengajuan
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Menunggu,Diproses,Selesai'
        ]);

        $pengajuan = PengajuanSurat::findOrFail($id);
        $pengajuan->update(['status' => $request->status]);

        return back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}
