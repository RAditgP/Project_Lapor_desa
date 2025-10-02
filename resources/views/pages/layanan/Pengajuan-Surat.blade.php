@extends('layouts.navbar')

@section('title', 'Pengajuan Surat Online')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-emerald-100 flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-2xl bg-white p-10 rounded-2xl shadow-xl border border-gray-100 animate-fade-in transform transition duration-300 hover:shadow-2xl">
        
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Formulir Pengajuan Surat</h1>
        <p class="text-center text-gray-600 mb-8">
            Silakan isi formulir di bawah ini untuk mengajukan permohonan surat.
        </p>
@if(session('success'))
    <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-300 rounded-lg">
        {{ session('success') }}
    </div>
@endif

       <form action="{{ route('layanan.pengajuan-surat.store') }}" method="POST" class="space-y-6">
        @csrf

            <!-- Nama Lengkap -->
<div>
    <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" required
           placeholder="Masukkan nama lengkap Anda"
           class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                  focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
                  @error('nama')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<!-- Alamat Email -->
<div>
    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
    <input type="email" id="email" name="email" required
           placeholder="Masukkan alamat email Anda"
           class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                  focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
                  @error('email')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<!-- Jenis Surat -->
<div>
    <label for="jenis_surat" class="block text-sm font-semibold text-gray-700 mb-2">Jenis Surat</label>
    <select id="jenis_surat" name="jenis_surat" required
            class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                   focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
        <option value="">Pilih Jenis Surat</option>
        <option value="surat_domisili">Surat Keterangan Domisili</option>
        <option value="surat_usaha">Surat Izin Usaha</option>
        <option value="surat_lainnya">Surat Keterangan Lainnya</option>
    </select>
    @error('Jenis_surat')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<!-- Deskripsi Permohonan -->
<div>
    <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Permohonan</label>
    <textarea id="deskripsi" name="deskripsi" rows="4" required
              placeholder="Tuliskan deskripsi permohonan Anda"
              class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                     focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"></textarea>
                     @error('deskripsi')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<!-- Tombol Submit -->
<div class="flex justify-end">
    <button type="submit"
            class="px-6 py-3 bg-emerald-700 text-white font-semibold rounded-xl shadow-sm 
                   hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 
                   focus:ring-emerald-500 transition">
        Ajukan Surat
    </button>
</div>
        </form>
    </div>
</div>
@endsection
