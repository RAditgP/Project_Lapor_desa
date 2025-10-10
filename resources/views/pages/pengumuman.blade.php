@extends('layouts.navbar')

@section('title', 'Pengumuman Desa')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-extrabold text-center text-emerald-700 mb-3">Pengumuman Desa</h1>
    <p class="text-center text-gray-500 mb-10">Informasi terbaru dari perangkat desa untuk seluruh warga.</p>

    <!-- Grid Cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($pengumumans as $p)
            <div class="bg-white rounded-2xl shadow-md border hover:shadow-xl transition-all duration-300 group overflow-hidden">
                <div class="relative">
                    <img src="{{ $p->gambar ? asset('storage/' . $p->gambar) : asset('images/default.jpg') }}"
                        alt="{{ $p->judul }}"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 bg-emerald-600 text-white text-xs px-3 py-1 rounded-full shadow">
                        {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d M Y') }}
                    </span>
                </div>

                <div class="p-5">
                    <h2 class="text-lg font-bold text-emerald-700 mb-1 line-clamp-1">{{ $p->judul }}</h2>
                    <p class="text-gray-600 text-sm line-clamp-2 mb-3">
                        {{ \Illuminate\Support\Str::limit($p->isi, 90) }}
                    </p>

                    <button onclick="openModal('{{ $p->id }}')"
                            class="text-sm font-semibold text-emerald-600 hover:text-emerald-800 transition">
                        Lihat Detail →
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal-{{ $p->id }}" 
                 class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 backdrop-blur-sm">
                <div class="bg-white rounded-xl shadow-2xl max-w-2xl w-full mx-4 p-6 relative animate-fadeIn max-h-[85vh] overflow-y-auto">
                    <!-- Tombol Close -->
                  

                    <img src="{{ $p->gambar ? asset('storage/' . $p->gambar) : asset('images/default.jpg') }}"
                         alt="{{ $p->judul }}"
                         class="w-full h-64 object-cover rounded-lg mb-5">

                    <h2 class="text-2xl font-bold text-emerald-700 mb-2">{{ $p->judul }}</h2>
                    <p class="text-sm text-gray-500 mb-4">
                        📅 {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y') }}
                    </p>

                    <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                        {!! nl2br(e($p->isi)) !!}
                    </div>

                    <div class="mt-6 text-right">
                        <button onclick="closeModal('{{ $p->id }}')"
                                class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-500 italic">Belum ada pengumuman terbaru.</p>
        @endforelse
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).classList.remove('hidden');
        document.getElementById('modal-' + id).classList.add('flex');
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).classList.add('hidden');
    }
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }
</style>
@endsection
