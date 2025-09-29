@extends('layouts.navbar')

@section('title', 'Beranda')

@section('content')

<!-- Hero -->
<section class="relative w-full h-[90vh] bg-cover bg-center"
    style="background-image: url('{{ asset('images/konoha_hd.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80 
                flex items-center justify-center text-center px-4">
        <div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4">
                Selamat Datang di Desa Konohagakure
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-6">
                Kampung shinobi terkuat di Negara Api, pusat perdamaian dan tekad api yang abadi.
            </p>
            <a href="#"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow-lg">
                Jelajahi Desa
            </a>
        </div>
    </div>
</section>

<!-- Section Pengumuman & Berita -->
<section id="pengumuman-berita" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-emerald-900 mb-12">
            Pengumuman & Berita Terbaru
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Contoh Pengumuman 1 -->
            <div class="bg-white rounded-lg shadow-md p-6  hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">

                <h3 class="text-xl font-semibold text-emerald-700 mb-2">Pendaftaran Akademi Ninja Dibuka!</h3>
                <p class="text-sm text-gray-500 mb-4">24 September 2025</p>
                <p class="text-gray-600">
                    Bagi calon shinobi muda, pendaftaran untuk angkatan baru Akademi Ninja telah dibuka. Segera daftarkan diri Anda di kantor Hokage...
                </p>
                <a href="pengumuman" class="mt-4 inline-block text-emerald-600 hover:text-emerald-800 font-medium">Baca Selengkapnya</a>
            </div>

            <!-- Contoh Pengumuman 2 -->
            <div class="bg-white rounded-lg shadow-md p-6  hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                <h3 class="text-xl font-semibold text-emerald-700 mb-2">Festival Musim Gugur Desa Konoha</h3>
                <p class="text-sm text-gray-500 mb-4">15 September 2025</p>
                <p class="text-gray-600">
                    Mari meriahkan Festival Musim Gugur tahunan desa! Akan ada pertunjukan seni, kuliner khas, dan berbagai hiburan menarik...
                </p>
                <a href="pengumuman" class="mt-4 inline-block text-emerald-600 hover:text-emerald-800 font-medium">Baca Selengkapnya</a>
            </div>

            <!-- Contoh Pengumuman 3 -->
            <div class="bg-white rounded-lg shadow-md p-6  hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                <h3 class="text-xl font-semibold text-emerald-700 mb-2">Program Kebersihan Sungai Naka</h3>
                <p class="text-sm text-gray-500 mb-4">10 September 2025</p>
                <p class="text-gray-600">
                    Seluruh warga diimbau untuk berpartisipasi dalam program kebersihan Sungai Naka yang akan diadakan pada akhir pekan ini...
                </p>
                <a href="pengumuman" class="mt-4 inline-block text-emerald-600 hover:text-emerald-800 font-medium">Baca Selengkapnya</a>
            </div>

            <!-- Laporan Kegiatan 1 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="images/senam.jpg"
                    alt="Laporan Kegiatan 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a href="{{ url('/layanan/kegiatan-masyarakat') }}" class="hover:underline">Senam Mingguan Desa</a>
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">16 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Kegiatan senam rutin di lapangan desa untuk menjaga kesehatan dan kebersamaan warga.
                    </p>
                </div>
            </div>

            <!-- Laporan Kegiatan 2 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="images/jalan.jpg"
                    alt="Laporan Kegiatan 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a href="{{ url('/layanan/kegiatan-masyarakat') }}" class="hover:underline">Gotong Royong Perbaikan Jalan</a>
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">15 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Warga desa bergotong royong memperbaiki jalan utama yang rusak akibat hujan.
                    </p>
                </div>
            </div>

            <!-- Laporan Kegiatan 3 -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                <img src="images/sembako.jpg"
                    alt="Laporan Kegiatan 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a href="{{ url('/layanan/kegiatan-masyarakat') }}" class="hover:underline">Pemberian Bantuan Sembako</a>
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">12 Sep 2025</p>
                    <p class="text-gray-600 text-sm">
                        Penyaluran bantuan sembako kepada warga yang membutuhkan di balai desa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection