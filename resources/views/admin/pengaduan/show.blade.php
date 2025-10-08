@extends('layouts.admin')

@section('title', 'Detail Pengaduan')
@section('page-title', 'Detail Pengaduan')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-4">Detail Pengaduan</h2>

    <div class="space-y-3">
        <p><strong>Nama:</strong> {{ $pengaduan->nama ?? '-' }}</p>
        <p><strong>Tanggal:</strong> {{ $pengaduan->created_at->format('d M Y, H:i') }}</p>
        <p><strong>Isi Laporan:</strong></p>
        <div class="bg-gray-50 border p-3 rounded">{{ $pengaduan->isi }}</div>
    </div>

    <div class="mt-6">
        <a href="{{ route('admin.pengaduan.index') }}" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">
            ← Kembali
        </a>
    </div>
</div>
@endsection
