@extends('layouts.navbar')

@section('title', 'Informasi Data Desa Konohagakure')

@section('content')
<div class="container mx-auto px-4 py-8">

    <!-- Hero Banner -->
    <div class="relative h-56 bg-cover bg-center rounded-2xl shadow-md mb-8 overflow-hidden"
         style="background-image: url('{{ asset('images/konoha_hd.jpg') }}');">
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center rounded-2xl">
            <h1 class="text-3xl md:text-4xl font-bold text-white tracking-wide animate-fade-in">
                Informasi Desa Konohagakure
            </h1>
        </div>
    </div>

    <!-- Card Informasi Desa -->
    <div class="bg-white shadow-lg rounded-2xl p-8 transition transform hover:scale-[1.02] hover:shadow-2xl">
        <div class="space-y-6 text-lg text-gray-700">

            <!-- Nama Desa -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 7l10 5 10-5-10-5z"/>
                    </svg> Nama Desa:
                </span>
                <span class="text-gray-900">Konohagakure</span>
            </div>

            <!-- Kecamatan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2 4 4 8-8 4 4"/>
                    </svg> Kecamatan:
                </span>
                <span class="text-gray-900">Shinobi</span>
            </div>

            <!-- Kabupaten -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5"/>
                    </svg> Kabupaten:
                </span>
                <span class="text-gray-900">Negara Api</span>
            </div>

            <!-- Provinsi -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8 2 4 6 4 10c0 7 8 12 8 12s8-5 8-12c0-4-4-8-8-8z"/>
                    </svg> Provinsi:
                </span>
                <span class="text-gray-900">Negara Api</span>
            </div>

            <!-- Jumlah Penduduk -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-2a4 4 0 014-4h10a4 4 0 014 4v2"/>
                    </svg> Jumlah Penduduk:
                </span>
                <span class="text-gray-900">~15.000 jiwa</span>
            </div>

            <!-- Luas Wilayah -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z"/>
                    </svg> Luas Wilayah:
                </span>
                <span class="text-gray-900">50 km²</span>
            </div>

            <!-- Kepala Desa -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 items-center">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg> Kepala Desa (Hokage):
                </span>
                <span class="text-gray-900">Naruto Uzumaki</span>
            </div>

        </div>

        <!-- Statistik Highlight -->
        <div class="grid grid-cols-2 gap-6 mt-10">
            <div class="bg-emerald-100 rounded-xl p-6 text-center shadow transform transition duration-300 hover:-translate-y-2 hover:rotate-1 hover:shadow-xl">
                <p class="text-2xl md:text-3xl font-bold text-emerald-800">15.000+</p>
                <p class="text-gray-600">Penduduk</p>
            </div>
            <div class="bg-emerald-100 rounded-xl p-6 text-center shadow transform transition duration-300 hover:-translate-y-2 hover:-rotate-1 hover:shadow-xl">
                <p class="text-2xl md:text-3xl font-bold text-emerald-800">50 km²</p>
                <p class="text-gray-600">Luas Wilayah</p>
            </div>
        </div>
    </div>
</div>
@endsection
