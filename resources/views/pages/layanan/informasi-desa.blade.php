@extends('layouts.navbar')

@section('title', 'Informasi Desa Cepogo')

@section('content')
<div class="container mx-auto px-4 py-10 animate-fade-in">

    <!-- Hero Banner -->
    <div class="relative h-56 md:h-72 bg-cover bg-center rounded-3xl shadow-xl mb-10 overflow-hidden"
         style="background-image: url('{{ asset('images/beranda.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40 flex items-center justify-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-yellow-300 tracking-wide drop-shadow-lg animate-fade-in-down">
                Informasi Desa Cepogo
            </h1>
        </div>
    </div>

    <!-- Card Informasi -->
    <div class="bg-gradient-to-br from-white to-emerald-50 shadow-2xl rounded-3xl p-10 transition duration-500 transform hover:scale-[1.01] hover:shadow-emerald-200/80">
        <div class="space-y-6 text-lg text-gray-700">

            <!-- Baris 1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 4v6h-6v-6h6z"/>
                    </svg> Nama Desa:
                </span>
                <span class="text-gray-900">Cepogo</span>
            </div>

            <!-- Baris 2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m12 8h-7"/>
                    </svg> Kecamatan:
                </span>
                <span class="text-gray-900">Cepogo</span>
            </div>

            <!-- Baris 3 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/>
                    </svg> Kabupaten:
                </span>
                <span class="text-gray-900">Boyolali</span>
            </div>

            <!-- Baris 4 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8 2 4 6 4 10c0 7 8 12 8 12s8-5 8-12c0-4-4-8-8-8z"/>
                    </svg> Provinsi:
                </span>
                <span class="text-gray-900">Jawa Tengah</span>
            </div>

            <!-- Baris 5 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5"/>
                    </svg> Jumlah Penduduk:
                </span>
                <span class="text-gray-900">± 8.500 jiwa</span>
            </div>

            <!-- Baris 6 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                    </svg> Luas Wilayah:
                </span>
                <span class="text-gray-900">42 km²</span>
            </div>

            <!-- Baris 7 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 items-center hover:bg-emerald-100/40 px-4 py-2 rounded-xl transition">
                <span class="flex items-center font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg> Kepala Desa:
                </span>
                <span class="text-gray-900">Sutrisno</span>
            </div>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12">
            <div class="bg-emerald-600/10 backdrop-blur-md border border-emerald-500/20 rounded-2xl p-8 text-center shadow-lg transform transition duration-500 hover:-translate-y-2 hover:scale-[1.03]">
                <p class="text-3xl md:text-4xl font-extrabold text-emerald-800">8.500+</p>
                <p class="text-gray-600 mt-1">Penduduk</p>
            </div>
            <div class="bg-emerald-600/10 backdrop-blur-md border border-emerald-500/20 rounded-2xl p-8 text-center shadow-lg transform transition duration-500 hover:-translate-y-2 hover:scale-[1.03]">
                <p class="text-3xl md:text-4xl font-extrabold text-emerald-800">42 km²</p>
                <p class="text-gray-600 mt-1">Luas Wilayah</p>
            </div>
        </div>
    </div>
</div>

<!-- Animasi -->
<style>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes fade-in-down {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in { animation: fade-in 0.8s ease-in-out forwards; }
.animate-fade-in-down { animation: fade-in-down 1s ease-in-out forwards; }
</style>
@endsection
