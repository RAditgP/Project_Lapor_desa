@extends('layouts.admin')

@section('title', 'Tambah Kegiatan Masyarakat')

@section('content')
<div class="max-w-5xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-emerald-700">Tambah Kegiatan Masyarakat</h1>
            <p class="text-gray-500 text-sm">Isi data kegiatan yang akan ditambahkan ke sistem.</p>
        </div>
        <a href="{{ route('admin.kegiatan-masyarakat.index') }}" 
           class="text-emerald-600 hover:text-emerald-800 text-sm font-medium flex items-center gap-1">
            ← Kembali ke daftar
        </a>
    </div>

    <!-- Error Alert -->
    @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg mb-6">
            <h3 class="font-semibold text-red-700 mb-2">Terjadi kesalahan:</h3>
            <ul class="list-disc ml-6 text-sm text-red-600 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('admin.kegiatan-masyarakat.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="bg-white border border-gray-100 shadow-lg rounded-2xl overflow-hidden">

        @csrf
        <div class="grid md:grid-cols-2 gap-8 p-8">
            <!-- Kolom kiri -->
            <div class="space-y-6">
                <!-- Judul -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Judul Kegiatan</label>
                    <input type="text" 
                           name="judul" 
                           value="{{ old('judul') }}" 
                           placeholder="Contoh: Gotong Royong Bersih Desa"
                           class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                    <textarea name="deskripsi" 
                              rows="6" 
                              placeholder="Tuliskan deskripsi kegiatan, tujuan, atau manfaat..."
                              class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">{{ old('deskripsi') }}</textarea>
                </div>
            </div>

            <!-- Kolom kanan -->
            <div class="space-y-6">
                <!-- Tanggal -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Tanggal Pelaksanaan</label>
                    <div class="relative">
                        <input type="date" 
                               name="tanggal" 
                               value="{{ old('tanggal') }}"
                               class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                <!-- Foto -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Foto Dokumentasi</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-emerald-400 transition">
                        <input type="file" name="foto" accept="image/*" id="fotoInput" class="hidden" onchange="previewImage(event)">
                        <label for="fotoInput" class="cursor-pointer flex flex-col items-center justify-center h-40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M7 16a4 4 0 01-.88-7.903A5.002 5.002 0 0115.9 6H16a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="text-sm text-gray-600">Klik untuk memilih foto atau seret ke sini</p>
                            <p class="text-xs text-gray-400 mt-1">PNG, JPG, JPEG (max 2MB)</p>
                        </label>
                        <img id="preview" class="mt-3 mx-auto rounded-lg hidden max-h-48 object-cover">
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol -->
        <div class="bg-gray-50 border-t px-8 py-4 flex justify-end space-x-3">
            <a href="{{ route('admin.kegiatan-masyarakat.index') }}" 
               class="px-5 py-2.5 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-medium transition">
                Batal
            </a>
            <button type="submit" 
                    class="px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-medium transition">
                Simpan Kegiatan
            </button>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        } else {
            preview.classList.add('hidden');
        }
    }
</script>
@endsection
