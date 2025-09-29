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
        <div class="space-y-8">

            <!-- Pengumuman 1 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">25 September 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Pemberitahuan Jadwal Pemilu Kepala Desa
                </h3>
                <img src="{{ asset('images/PEMIGE.png') }}"
                     alt="Pemilu"
                     class="w-full h-auto object-cover rounded-md mb-3">
                <p class="text-gray-700 leading-relaxed">
                    Diberitahukan kepada seluruh warga Desa Konoha, bahwa Pemilihan Kepala Desa akan dilaksanakan pada tanggal 10 Oktober 2025. Dimohon kehadirannya di tempat pemungutan suara masing-masing.
                </p>
            </div>

            <!-- Pengumuman 2 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">20 September 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Sosialisasi Program Bantuan UMKM
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Kantor Desa Konoha akan mengadakan sosialisasi mengenai program bantuan modal usaha bagi UMKM. Acara akan dilaksanakan pada hari Sabtu, 28 September 2025, pukul 09.00 WIB di Balai Desa.
                </p>
            </div>

            <!-- Pengumuman 3 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">15 September 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Kerja Bakti Rutin Lingkungan
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Seluruh warga RT 01 dan RT 02 diimbau untuk mengikuti kerja bakti rutin yang akan diadakan pada hari Minggu, 22 September 2025, mulai pukul 07.00 WIB.
                </p>
            </div>

            <!-- Pengumuman 4 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">24 September 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Pendaftaran Akademi Ninja Dibuka!
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Waktunya para calon shinobi muda menunjukkan tekad api dalam diri! 🔥 Pendaftaran untuk angkatan baru Akademi Ninja Konoha akhirnya resmi dibuka. 
                    Pendaftaran bisa dilakukan langsung di kantor Hokage setiap hari kerja mulai jam 08.00 sampai 15.00.
                </p>
            </div>

            <!-- Pengumuman 5 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">15 Oktober 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Festival Musim Gugur Desa Konoha
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Festival Musim Gugur tahunan kembali hadir! Akan ada parade budaya shinobi, musik, makanan khas, lomba-lomba seru, hingga pesta kembang api di malam puncak. 
                    📍 Lapangan Utama Desa Konoha.
                </p>
            </div>

            <!-- Pengumuman 6 -->
            <div class="bg-gray-50 rounded-lg shadow-sm p-4">
                <p class="text-sm text-gray-500 mb-1">
                    📅 <span class="font-semibold text-emerald-600">10 September 2025</span>
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-3">
                    Program Kebersihan Sungai Naka
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Gotong royong kebersihan Sungai Naka akan dilaksanakan pada Minggu, 28 September 2025, mulai jam 07.00 pagi. 
                    Titik kumpul di Jembatan Utara. Yuk tunjukkan semangat gotong royong kita! 🌊
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
