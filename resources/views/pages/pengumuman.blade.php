@extends('layouts.navbar')

@section('title', 'Pengumuman')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Pengumuman Desa</h1>
        <p class="text-center text-gray-600 mb-8">
            Daftar pengumuman terbaru dari perangkat desa.
        </p>

        <!-- Daftar Pengumuman -->
        <div class="space-y-6">

            <!-- Contoh Pengumuman 1 -->
            <div class="border-b border-gray-200 pb-4">
                <p class="text-sm text-gray-500 mb-1">
                    <span class="font-semibold text-emerald-600">Tanggal:</span> 25 September 2025
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-2">
                    <a href="#" class="hover:underline">Pemberitahuan Jadwal Pemilu Kepala Desa</a>
                </h3>
                <p class="text-gray-600">
                    Diberitahukan kepada seluruh warga Desa Konoha, bahwa Pemilihan Kepala Desa akan dilaksanakan pada tanggal 10 Oktober 2025. Dimohon kehadirannya di tempat pemungutan suara masing-masing.
                </p>
            </div>

            <!-- Contoh Pengumuman 2 -->
            <div class="border-b border-gray-200 pb-4">
                <p class="text-sm text-gray-500 mb-1">
                    <span class="font-semibold text-emerald-600">Tanggal:</span> 20 September 2025
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-2">
                    <a href="#" class="hover:underline">Sosialisasi Program Bantuan UMKM</a>
                </h3>
                <p class="text-gray-600">
                    Kantor Desa Konoha akan mengadakan sosialisasi mengenai program bantuan modal usaha bagi UMKM. Acara akan dilaksanakan pada hari Sabtu, 28 September 2025, pukul 09.00 WIB di Balai Desa.
                </p>
            </div>

            <!-- Contoh Pengumuman 3 -->
            <div class="border-b border-gray-200 pb-4">
                <p class="text-sm text-gray-500 mb-1">
                    <span class="font-semibold text-emerald-600">Tanggal:</span> 15 September 2025
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-2">
                    <a href="#" class="hover:underline">Kerja Bakti Rutin Lingkungan</a>
                </h3>
                <p class="text-gray-600">
                    Seluruh warga RT 01 dan RT 02 diimbau untuk mengikuti kerja bakti rutin yang akan diadakan pada hari Minggu, 22 September 2025, mulai pukul 07.00 WIB.
                </p>
            </div>

            <!-- Kamu bisa menambahkan lebih banyak pengumuman di sini -->

        </div>
    </div>
</div>
@endsection
