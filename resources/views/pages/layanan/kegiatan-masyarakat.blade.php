@extends('layouts.navbar')

@section('title', 'Kegiatan Masyarakat')

@section('content')
<section class="py-12 bg-gray-50 min-h-screen" x-data="{ open: false, kegiatan: {} }">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-emerald-700 mb-8 text-center">
            Dokumentasi Kegiatan Masyarakat Desa
        </h1>

        @if ($kegiatans->isEmpty())
            <div class="text-center text-gray-500">
                Belum ada kegiatan yang ditambahkan.
            </div>
        @else
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                @foreach ($kegiatans as $kegiatan)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                        @if ($kegiatan->foto)
                            <img src="{{ asset('storage/' . $kegiatan->foto) }}"
                                alt="{{ $kegiatan->judul }}"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400 italic">
                                Tidak ada foto
                            </div>
                        @endif

                        <div class="p-5">
                            <h3 class="text-lg font-bold text-emerald-700 mb-2">
                                {{ $kegiatan->judul }}
                            </h3>
                            <p class="text-sm text-gray-500 mb-2">
                                {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
                            </p>

                            {{-- tampilkan hanya 20 kata pertama --}}
                            <p class="text-gray-600 text-sm mb-4">
                                {{ \Illuminate\Support\Str::words(strip_tags($kegiatan->deskripsi), 20, '...') }}
                            </p>

                            <button
                                @click="open = true; kegiatan = {
                                    judul: '{{ $kegiatan->judul }}',
                                    tanggal: '{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}',
                                    deskripsi: `{{ addslashes($kegiatan->deskripsi) }}`,
                                    foto: '{{ $kegiatan->foto ? asset('storage/' . $kegiatan->foto) : '' }}'
                                }"
                                class="inline-block bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Modal Detail Kegiatan -->
    <div x-show="open" 
         x-transition.opacity
         class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
         x-cloak>
        <div @click.away="open = false" 
             x-transition.scale
             class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-xl relative">
            <button @click="open = false"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>

            <template x-if="kegiatan.foto">
                <img :src="kegiatan.foto" alt="Foto Kegiatan" class="w-full h-56 object-cover rounded-lg mb-4">
            </template>

            <h2 class="text-2xl font-bold text-emerald-700 mb-2" x-text="kegiatan.judul"></h2>
            <p class="text-sm text-gray-500 mb-4" x-text="kegiatan.tanggal"></p>
            <p class="text-gray-700 leading-relaxed whitespace-pre-line" x-text="kegiatan.deskripsi"></p>
        </div>
    </div>
</section>
@endsection
