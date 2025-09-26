@extends('layouts.navbar')

@section('title', 'Kegiatan Masyarakat')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Laporan & Dokumentasi Kegiatan</h1>
        <p class="text-center text-gray-600 mb-8">
            Berikut adalah dokumentasi visual dari beberapa laporan masyarakat dan kegiatan desa yang telah dilaksanakan.
        </p>

        <!-- Grid untuk Laporan dalam Bentuk Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Contoh Laporan 1 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/333333/E0E0E0?text=Laporan+Kegiatan+1"
                     alt="Laporan Kegiatan 1" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Senam Mingguan Desa</h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>

            <!-- Contoh Laporan 2 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/444444/FFFFFF?text=Laporan+Kegiatan+2"
                     alt="Laporan Kegiatan 2" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Gotong Royong Perbaikan Jalan</h3>
                    <p class="text-sm text-gray-500 mb-2">15 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Warga desa bergotong royong memperbaiki jalan utama yang rusak akibat hujan.
                    </p>
                </div>
            </div>

            <!-- Contoh Laporan 3 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/555555/EEEEEE?text=Laporan+Kegiatan+3"
                     alt="Laporan Kegiatan 3" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Pemberian Bantuan Sembako</h3>
                    <p class="text-sm text-gray-500 mb-2">12 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Penyaluran bantuan sembako kepada warga yang membutuhkan di balai desa.
                    </p>
                </div>
            </div>

            <!-- Tambahkan lebih banyak laporan di sini -->
              <!-- Contoh Laporan 4 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/333333/E0E0E0?text=Laporan+Kegiatan+4"
                     alt="Laporan Kegiatan 4" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Senam Mingguan Desa</h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>
             <!-- Contoh Laporan 5 -->
                        <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/333333/E0E0E0?text=Laporan+Kegiatan+5"
                     alt="Laporan Kegiatan 5" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Senam Mingguan Desa</h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>
             <!-- Contoh Laporan 6 -->
                        <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/333333/E0E0E0?text=Laporan+Kegiatan+6"
                     alt="Laporan Kegiatan 6" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Senam Mingguan Desa</h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>
            <!-- Contoh Laporan 7 -->
                        <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/600x400/333333/E0E0E0?text=Laporan+Kegiatan+7"
                     alt="Laporan Kegiatan 7" class="w-full h-auto object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-emerald-700 mb-2">Senam Mingguan Desa</h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
