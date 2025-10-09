<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\JenisSurat;

class PengajuanSuratController extends Controller
{
    public function create()
    {
        $jenis_surats = JenisSurat::whereIn('nama_surat', [
            'Surat Keterangan Usaha',
            'Surat Domisili',
            'Surat Pengantar SKCK',
        ])->get();

        return view('pages.layanan.pengajuan-surat', compact('jenis_surats'));
    }


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
        

        if ($request->hasFile('file_pendukung')) {
            $validated['file_pendukung'] = $request->file('file_pendukung')->store('lampiran', 'public');
        }

        PengajuanSurat::create($validated);

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim!');
    }
    
}
