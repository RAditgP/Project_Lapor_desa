@extends('layouts.navbar')

@section('title', 'Beranda')

@section('content')

    <!-- Hero -->
<section class="relative bg-cover bg-center h-[90vh]" 
         style="background-image: url('{{ asset('images/konoha_hd.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80 
                flex items-center justify-center text-center text-white">
        <div class="px-4 animate-fade-in">
            <h1 class="text-4xl md:text-7xl font-extrabold drop-shadow-lg tracking-widest">
                Selamat Datang di Desa Konoha
            </h1>
            <p class="mt-6 text-lg md:text-2xl font-light max-w-2xl mx-auto animate-fade-in-up">
                Kampung shinobi terkuat di Negara Api, pusat perdamaian dan tekad api yang abadi.
            </p>
            <a href="profil" 
               class="inline-block mt-10 bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 
                      text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl">
                Jelajahi Desa
            </a>
        </div>
    </div>
</section>

@endsection
