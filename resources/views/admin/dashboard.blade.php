@extends('layouts.admin')

@section('title', 'Dashboard Admin - LAPOR DESA')
@section('page-title', 'Dashboard Admin')

@section('content')
<div>
    <h1 class="text-2xl font-semibold text-gray-800 mb-2">
        Halo, {{ Auth::user()->name ?? 'Admin' }} 👋
    </h1>
    <p class="text-gray-600 mb-6">Selamat datang di sistem <span class="font-semibold text-emerald-700">LAPOR DESA</span>.</p>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-emerald-600 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-sm">Total Pengumuman</p>
           <h3 class="text-4xl font-bold mt-1">{{ $total_pengumuman ?? 0 }}</h3>
        </div>
        <div class="bg-blue-600 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-sm">Total Pengaduan</p>
            <h3 class="text-4xl font-bold mt-1">{{ $total_pengaduan ?? 0 }}</h3>
        </div>
        <div class="bg-teal-500 text-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-sm">Layanan Aktif</p>
            <h3 class="text-4xl font-bold mt-1">{{ $total_layanan ?? 0 }}</h3>
        </div>
    </div>

    {{-- Fitur Cepat --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Kelola Pengumuman</h2>
            <p class="text-gray-600 mb-4">Tambahkan, ubah, atau hapus pengumuman terbaru desa.</p>
            <a href="{{ url('/admin/pengumuman') }}" class="text-emerald-700 font-semibold hover:underline">Lihat & Kelola →</a>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Laporan Pengaduan</h2>
            <p class="text-gray-600 mb-4">Pantau pengaduan masyarakat dan tindak lanjutnya.</p>
            <a href="{{ url('/admin/pengaduan') }}" class="text-emerald-700 font-semibold hover:underline">Lihat Pengaduan →</a>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Layanan Desa</h2>
            <p class="text-gray-600 mb-4">Kelola berbagai layanan online masyarakat.</p>
            <a href="#" class="text-gray-400 font-semibold cursor-not-allowed">Coming Soon</a>
        </div>
    </div>
</div>
@endsection
    