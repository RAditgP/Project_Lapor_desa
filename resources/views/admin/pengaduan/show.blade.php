@extends('layouts.admin')

@section('title', 'Detail Pengaduan')
@section('page-title', 'Detail Pengaduan')

@section('content')
<div class="bg-white shadow-xl rounded-xl p-8">
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h2 class="text-2xl font-semibold text-emerald-700 flex items-center gap-2">
            📋 Detail Pengaduan
        </h2>
        <a href="{{ route('admin.pengaduan.index') }}" 
           class="bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-700 transition-all shadow-sm">
            ← Kembali
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        {{-- Kolom Kiri --}}
        <div class="space-y-4">
            <div>
                <p class="text-sm text-gray-500">Nama Pelapor</p>
                <p class="text-lg font-semibold text-gray-800">
                    {{ $pengaduan->nama ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Tanggal Pengaduan</p>
                <p class="text-lg font-medium text-gray-800">
                    {{ $pengaduan->created_at->format('d M Y, H:i') }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500 mb-1">Isi Pengaduan</p>
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 text-gray-700 leading-relaxed shadow-inner">
                    {{ $pengaduan->isi }}
                </div>
            </div>
        </div>

        {{-- Kolom Kanan --}}
        <div class="flex flex-col items-center justify-center">
            @if ($pengaduan->foto)
                <div class="relative group">
                    <img src="{{ asset('storage/' . $pengaduan->foto) }}" 
                         alt="Bukti Foto"
                         class="rounded-lg shadow-md object-cover w-72 h-72 border hover:scale-105 transition duration-200 cursor-pointer"
                         onclick="window.open(this.src)">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-sm rounded-lg">
                        Klik untuk perbesar 🔍
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-2 italic">Bukti foto dari pelapor</p>
            @else
                <div class="w-72 h-72 bg-gray-100 border rounded-lg flex items-center justify-center text-gray-400 text-sm">
                    Tidak ada foto bukti
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
