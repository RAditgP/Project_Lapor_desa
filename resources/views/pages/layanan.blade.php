@extends('layouts.navbar')

@section('title', 'Layanan Online')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Layanan Online</h1>
    <p class="text-gray-700 mb-6">
        Berikut adalah layanan online yang tersedia untuk masyarakat desa:
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-blue-50 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="font-semibold text-lg mb-2">Pengajuan Surat</h2>
            <p class="text-gray-600">Ajukan berbagai jenis surat seperti surat keterangan domisili, usaha, dll.</p>
        </div>

        <div class="bg-blue-50 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="font-semibold text-lg mb-2">Laporan Masyarakat</h2>
            <p class="text-gray-600">Laporkan masalah, keluhan, atau saran untuk desa secara online.</p>
        </div>

        <div class="bg-blue-50 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="font-semibold text-lg mb-2">Informasi Data Desa</h2>
            <p class="text-gray-600">Akses data kependudukan, potensi desa, dan informasi penting lainnya.</p>
        </div>
    </div>
</div>
@endsection
