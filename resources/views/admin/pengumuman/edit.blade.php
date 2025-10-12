@extends('layouts.admin')

@section('title', 'Edit Pengumuman')

@section('content')
<div class="p-6">
    {{-- Header Halaman yang Lebih Konsisten --}}
    <div class="bg-emerald-600 rounded-lg shadow-md p-4 mb-6">
        <h1 class="text-2xl font-bold text-white">
            <i class="fas fa-bullhorn mr-2"></i> Edit Pengumuman
        </h1>
    </div>

    {{-- Container Formulir --}}
    <div class="bg-white rounded-xl shadow-2xl border border-gray-100 p-8 max-w-4xl mx-auto">

        {{-- Form Edit --}}
        <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-5">
                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul Pengumuman</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $pengumuman->judul) }}" 
                    placeholder="Masukkan judul pengumuman..."
                    class="w-full border-gray-300 rounded-xl px-4 py-2.5 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 shadow-sm">
                @error('judul') <p class="text-red-500 text-sm mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            {{-- Isi --}}
            <div class="mb-5">
                <label for="isi" class="block text-sm font-semibold text-gray-700 mb-2">Isi Pengumuman</label>
                <textarea name="isi" id="isi" rows="7" 
                    placeholder="Tuliskan detail isi pengumuman..."
                    class="w-full border-gray-300 rounded-xl px-4 py-2.5 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 shadow-sm">{{ old('isi', $pengumuman->isi) }}</textarea>
                @error('isi') <p class="text-red-500 text-sm mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            {{-- Tanggal --}}
            <div class="mb-5">
                <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Publikasi</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $pengumuman->tanggal) }}" 
                    class="w-full border-gray-300 rounded-xl px-4 py-2.5 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 shadow-sm">
                @error('tanggal') <p class="text-red-500 text-sm mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            {{-- Gambar Saat Ini & Upload Baru --}}
            <div class="mb-6 border p-4 rounded-xl bg-gray-50">
                <label class="block text-sm font-semibold text-gray-700 mb-3">Kelola Gambar (Opsional)</label>

                @if($pengumuman->gambar)
                    <div class="flex items-center space-x-4 mb-3">
                        <p class="text-sm font-medium text-gray-600">Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $pengumuman->gambar) }}" class="w-24 h-24 object-cover rounded-lg shadow-md border border-gray-200" alt="Gambar Pengumuman Saat Ini">
                    </div>
                @else
                    <p class="text-gray-500 text-sm italic mb-3">Saat ini tidak ada gambar yang terlampir.</p>
                @endif
                
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2 mt-4">Pilih Gambar Baru (Kosongkan jika tidak diubah)</label>
                <input type="file" name="gambar" id="gambar"
                       class="w-full text-gray-500 text-sm file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0 file:text-sm file:font-semibold
                              file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                
                @error('gambar') <p class="text-red-500 text-sm mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('admin.pengumuman.index') }}" 
                    class="px-6 py-2.5 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg font-semibold transition duration-150 shadow-md">
                    Batal
                </a>
                {{-- Menggunakan warna Emerald/Hijau yang konsisten dengan tema Admin --}}
                <button type="submit" 
                        class="px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-semibold transition duration-150 shadow-lg shadow-emerald-500/50 transform hover:scale-[1.01]">
                    <i class="fas fa-save mr-1"></i> Update Pengumuman
                </button>
            </div>
        </form>
        {{-- End Form --}}

    </div>
</div>
@endsection
