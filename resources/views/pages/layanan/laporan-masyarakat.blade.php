@extends('layouts.navbar')

@section('title', 'Laporan Masyarakat')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="bg-white shadow-md rounded-2xl p-8">
        <h1 class="text-3xl font-extrabold text-center text-emerald-700 mb-6">
            Laporan Masyarakat
        </h1>
        <p class="text-center text-gray-600 mb-10">
            Berikut adalah laporan yang telah dikirim oleh masyarakat desa.
        </p>

        <!-- Grid untuk daftar laporan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($laporan as $item)
                <div 
                    class="group bg-gradient-to-br from-white to-emerald-50 rounded-xl shadow-md 
                           hover:shadow-xl transition-all duration-300 overflow-hidden 
                           border border-gray-200 cursor-pointer active:scale-95"
                >
                    <!-- Header Card -->
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-emerald-700 group-hover:text-emerald-900 transition-colors">
                            {{ $item->judul }}
                        </h3>
                        <p class="text-xs text-gray-500 mt-1">
                            {{ $item->created_at->locale('id')->translatedFormat('d F Y, H:i') }}
                        </p>
                    </div>

                    <!-- Isi -->
                    <div class="px-6 py-5 text-gray-700 text-sm">
                        <p class="mb-4 leading-relaxed">
                            {{ Str::limit($item->isi, 150, '...') }}
                        </p>
                        <div class="text-xs bg-gray-50 rounded-lg p-4 border border-gray-100 space-y-1">
                            <p><span class="font-semibold text-gray-700">Nama:</span> {{ $item->nama }}</p>
                            <p><span class="font-semibold text-gray-700">NIK:</span> {{ $item->nik }}</p>
                            <p><span class="font-semibold text-gray-700">Telp:</span> {{ $item->telepon }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 col-span-3">
                    Belum ada laporan masuk.
                </p>
            @endforelse
        </div>
    </div>
</div>
@endsection