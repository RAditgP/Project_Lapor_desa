@extends('layouts.admin')

@section('title', 'Detail Pengumuman')

@section('content')
<div class="p-6 bg-white rounded-lg shadow max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $pengumuman->judul }}</h1>

    <p class="text-gray-600 mb-2">
        <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d M Y') }}
    </p>

    @if($pengumuman->gambar)
        <img src="{{ asset('storage/' . $pengumuman->gambar) }}" 
             alt="Gambar Pengumuman"
             class="w-full h-64 object-cover rounded mb-4">
    @endif

    <div class="prose max-w-none text-gray-700">
        {!! nl2br(e($pengumuman->isi)) !!}
    </div>

    <div class="mt-6">
        <a href="{{ route('admin.pengumuman.index') }}" 
           class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
           ← Kembali
        </a>
    </div>
</div>
@endsection
