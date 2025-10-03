@extends('layouts.navbar')

@section('title', 'Beranda')

@section('content')

<!-- Hero Section -->
<section class="relative w-full h-[90vh] bg-cover bg-center"
    style="background-image: url('{{ asset('images/konoha_hd.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80 
                flex items-center justify-center text-center px-4">
        <div class="animate-fadeIn">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-lg">
                Selamat Datang di Desa Konohagakure
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-6">
                Kampung shinobi terkuat di Negara Api, pusat perdamaian dan tekad api yang abadi.
            </p>
            <div class="flex justify-center gap-4">
                <a href="/profil"
                   class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition transform hover:-translate-y-1">
                   Profil Desa
                </a>
                <a href="/pengumuman"
                   class="bg-white hover:bg-gray-200 text-emerald-700 font-semibold px-6 py-3 rounded-lg shadow-lg transition transform hover:-translate-y-1">
                   Lihat Pengumuman
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section Pengumuman -->
<section id="pengumuman-berita" class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-emerald-900 mb-12">
            Pengumuman & Berita Terbaru
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($pengumumans ?? [] as $pengumuman)
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                    <h3 class="text-xl font-semibold text-emerald-700 mb-2">
                        {{ $pengumuman->judul }}
                    </h3>
                    <p class="text-sm text-gray-500 mb-4">{{ $pengumuman->created_at->format('d M Y') }}</p>
                    <p class="text-gray-600 line-clamp-3">
                        {{ $pengumuman->isi }}
                    </p>
                    <a href="{{ route('pengumuman.show', $pengumuman->id) }}" 
                       class="mt-4 inline-block text-emerald-600 hover:text-emerald-800 font-medium">
                       Baca Selengkapnya →
                    </a>
                </div>
            @endforeach

            @if(empty($pengumumans) || count($pengumumans) == 0)
                <p class="col-span-3 text-center text-gray-500">Belum ada pengumuman terbaru.</p>
            @endif
        </div>
    </div>
</section>

<!-- Section Layanan Desa -->
<section id="layanan" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-emerald-900 mb-12">Layanan Desa</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-emerald-50 rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-bold text-emerald-700 mb-2">Pengajuan Surat</h3>
                <p class="text-gray-600 mb-4">Ajukan berbagai surat resmi secara online dengan mudah.</p>
                <a href="{{ route('layanan.pengajuan-surat.create') }}" 
                   class="text-emerald-600 font-medium hover:underline">Ajukan Sekarang</a>
            </div>

            <div class="bg-emerald-50 rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-bold text-emerald-700 mb-2">Pengaduan Warga</h3>
                <p class="text-gray-600 mb-4">Sampaikan pengaduan atau laporan dengan cepat dan transparan.</p>
                <a href="{{ route('pengaduan.create') }}" 
                   class="text-emerald-600 font-medium hover:underline">Buat Pengaduan</a>
            </div>

            <div class="bg-emerald-50 rounded-xl shadow-lg p-6 text-center hover:shadow-2xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-bold text-emerald-700 mb-2">Informasi Desa</h3>
                <p class="text-gray-600 mb-4">Dapatkan informasi terbaru seputar kegiatan dan pelayanan desa.</p>
                <a href="{{ route('layanan.informasi-desa') }}" 
                   class="text-emerald-600 font-medium hover:underline">Lihat Informasi</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Tentang Desa -->
<section id="tentang" class="bg-emerald-700 text-white py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Tentang Desa Konohagakure</h2>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">
            Desa Konohagakure adalah salah satu desa shinobi terkuat yang terletak di Negara Api. 
            Dikenal dengan tekad api dan kebersamaan warganya, desa ini menjadi pusat kekuatan dan perdamaian dunia shinobi.
        </p>
    </div>
</section>

@endsection
