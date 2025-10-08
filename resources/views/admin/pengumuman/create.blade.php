@extends('layouts.admin')

@section('title', 'Tambah Pengumuman')

@section('content')
<div class="py-10">
    <div class="max-w-3xl mx-auto">
        
        <!-- CARD UTAMA -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden border border-gray-100">
            
            <!-- HEADER -->
            <div class="p-6 md:p-8 bg-emerald-50 border-b-4 border-emerald-600">
                <h1 class="text-3xl font-extrabold text-emerald-800 tracking-tight">
                    Buat Pengumuman Baru
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Isi detail pengumuman yang ingin Anda sampaikan kepada masyarakat.
                </p>
            </div>

            <!-- FORM BODY -->
            <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data" class="p-6 md:p-8 space-y-6">
                @csrf

                <!-- JUDUL -->
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Pengumuman <span class="text-red-500">*</span></label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul') }}" 
                           placeholder="Contoh: Kerja Bakti Massal"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 ease-in-out">
                    @error('judul') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- ISI -->
                <div>
                    <label for="isi" class="block text-sm font-medium text-gray-700 mb-1">Isi Detail Pengumuman <span class="text-red-500">*</span></label>
                    <textarea id="isi" name="isi" rows="6" 
                              placeholder="Tuliskan isi pengumuman secara lengkap di sini..."
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 ease-in-out">{{ old('isi') }}</textarea>
                    @error('isi') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- TANGGAL -->
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Berlaku/Pelaksanaan <span class="text-red-500">*</span></label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', now()->format('Y-m-d')) }}" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 ease-in-out">
                    @error('tanggal') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- GAMBAR -->
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar Ilustrasi (opsional)</label>
                    <input type="file" id="gambar" name="gambar" 
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 cursor-pointer">
                    @error('gambar') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- FOOTER TOMBOL -->
                <div class="pt-4 border-t border-gray-100 flex justify-end gap-3">
                    <a href="{{ route('admin.pengumuman.index') }}" 
                       class="inline-flex items-center px-5 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-200 transition duration-150 ease-in-out">
                        Batal
                    </a>
                    <button type="submit" 
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-emerald-500 rounded-lg shadow-lg hover:from-emerald-700 hover:to-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out transform hover:scale-[1.01]">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Simpan Pengumuman
                    </button>
                </div>
            </form>
        </div>
        <!-- END CARD UTAMA -->
        
    </div>
</div>
@endsection
