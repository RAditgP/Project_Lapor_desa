@extends('layouts.navbar')

@section('title', 'Pengumuman')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold text-center text-emerald-700 mb-2">Pengumuman Desa</h1>
    <p class="text-center text-gray-500 mb-8">Daftar pengumuman terbaru dari perangkat desa.</p>

    <div class="space-y-6">
        @foreach ($pengumumans as $p)
            <!-- Card Pengumuman -->
            <div class="bg-white p-5 rounded-lg shadow-md border hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    
                    <!-- Foto -->
                    <img src="{{ $p->gambar ? asset('storage/' . $p->gambar) : asset('images/sembako.jpg') }}" 
                         alt="{{ $p->judul }}"
                         class="w-32 h-24 object-cover rounded-md">

                    <!-- Info -->
                    <div class="flex-1">
                        <p class="text-sm text-gray-500 mb-1 flex items-center gap-1">
                            📅 {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y') }}
                        </p>
                        <h2 class="text-lg font-semibold text-emerald-700">{{ $p->judul }}</h2>
                        
                        <!-- Ringkasan isi -->
                        <p class="text-gray-600 mt-1">
                            {{ \Illuminate\Support\Str::limit($p->isi, 80) }}
                        </p>

                        <!-- Tombol untuk buka modal -->
                        <button onclick="document.getElementById('modal-{{ $p->id }}').classList.remove('hidden')"
                                class="mt-2 text-sm text-emerald-600 font-semibold hover:underline">
                            Lihat Detail →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Detail -->
            <div id="modal-{{ $p->id }}" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
                <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative animate-fadeIn 
                            max-h-[80vh] overflow-y-auto">
                    
                    <!-- Tombol close -->
                    <button onclick="document.getElementById('modal-{{ $p->id }}').classList.add('hidden')"
                            class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl">
                        ✖
                    </button>

                    <!-- Gambar detail -->
                    <img src="{{ $p->gambar ? asset('storage/' . $p->gambar) : asset('images/senam.jpg') }}" 
                         alt="{{ $p->judul }}"
                         class="w-full h-60 object-cover rounded-lg mb-4">

                    <!-- Judul -->
                    <h2 class="text-2xl font-bold text-emerald-700 mb-2">{{ $p->judul }}</h2>
                    <p class="text-sm text-gray-500 mb-4">
                        📅 {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y') }}
                    </p>
                    
                    <!-- Isi lengkap -->
                    <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                        {!! nl2br(e($p->isi)) !!}
                    </div>

                    <!-- Tombol tutup -->
                    <div class="mt-6 text-right">
                        <button onclick="document.getElementById('modal-{{ $p->id }}').classList.add('hidden')"
                                class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
