@extends('layouts.navbar')

@section('content')
<section class="max-w-3xl lg:max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
    
    {{-- Tombol Ikon Rumah (Outline) --}}
    {{-- Ikon rumah digunakan untuk kembali ke halaman utama daftar pengumuman --}}
    <a href="{{ route('pengumuman.index') }}" 
   class="inline-flex items-center justify-center w-12 h-12 rounded-full 
          bg-white shadow-lg text-emerald-700 hover:bg-emerald-600 hover:text-white 
          transition-all duration-300 ease-in-out transform hover:-translate-y-1 mb-8"
   title="Kembali ke Daftar Pengumuman"> 

    {{-- Ikon Home --}}
    <svg xmlns="http://www.w3.org/2000/svg" 
         fill="none" 
         viewBox="0 0 24 24" 
         stroke-width="2" 
         stroke="currentColor" 
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" 
              d="M3 12l9-9 9 9M4.5 10.5V21h15V10.5" />
    </svg>
</a>


    {{-- Card pengumuman yang lebih modern --}}
    <article class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:shadow-2xl transition duration-300">
        
        {{-- Gambar utama dengan kontrol rasio aspek --}}
        @if($pengumuman->gambar)
            <div class="relative w-full h-auto max-h-96 overflow-hidden"> 
                <img src="{{ asset('storage/' . $pengumuman->gambar) }}" 
                     alt="{{ $pengumuman->judul }}" 
                     class="w-full h-full object-cover">
            </div>
        @else 
            <div class="w-full h-56 bg-emerald-50 flex items-center justify-center text-emerald-600 font-bold">
                Tidak ada Gambar
            </div>
        @endif

        <div class="p-8 md:p-10">
            {{-- Judul dan tanggal --}}
            <div class="mb-6 border-b pb-4 border-gray-100">
                <h1 class="text-4xl font-extrabold text-gray-800 leading-tight">{{ $pengumuman->judul }}</h1>
                <p class="text-sm mt-2 text-emerald-600 font-medium">
                    <span class="text-gray-500">Dipublikasikan pada:</span> 
                    {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('d F Y') }}
                </p>
            </div>

            {{-- Isi pengumuman --}}
            <div class="prose prose-lg prose-emerald max-w-none text-gray-700 leading-relaxed space-y-4">
                {!! nl2br(e($pengumuman->isi)) !!}
            </div>
        </div>
    </article>
</section>
@endsection