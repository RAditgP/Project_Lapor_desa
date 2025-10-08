@extends('layouts.admin')

@section('title', 'Tambah Pengumuman')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Pengumuman</h1>

    <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}" 
                   class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
            @error('judul') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Isi</label>
            <textarea name="isi" rows="5" 
                      class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">{{ old('isi') }}</textarea>
            @error('isi') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" 
                   class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
            @error('tanggal') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar (opsional)</label>
            <input type="file" name="gambar" 
                   class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
            @error('gambar') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.pengumuman.index') }}" 
               class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg">Batal</a>
            <button type="submit" 
                    class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg">Simpan</button>
        </div>
    </form>
</div>
@endsection
