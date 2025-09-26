@extends('layouts.navbar')

@section('title', 'Form Pengaduan')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-emerald-100 flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-2xl bg-white p-10 rounded-2xl shadow-xl border border-gray-100 animate-fade-in transform transition duration-300 hover:shadow-2xl">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-emerald-700">Form Pengaduan Masyarakat</h1>
            <p class="text-gray-500 mt-2 text-base">Silakan isi formulir berikut untuk menyampaikan pengaduan Anda.</p>
        </div>

        <!-- Form -->
        <form action="{{ url('/pengaduan') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" required
                    placeholder="Masukkan nama lengkap Anda"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- NIK -->
            <div>
                <label for="nik" class="block text-sm font-semibold text-gray-700 mb-2">NIK</label>
                <input type="text" name="nik" id="nik" required
                    placeholder="Masukkan NIK Anda"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Nomor Telepon -->
            <div>
                <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" required
                    placeholder="Masukkan nomor telepon Anda"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Judul -->
            <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul Pengaduan</label>
                <input type="text" name="judul" id="judul" required
                    placeholder="Masukkan judul pengaduan"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Isi -->
            <div>
                <label for="isi" class="block text-sm font-semibold text-gray-700 mb-2">Isi Pengaduan</label>
                <textarea name="isi" id="isi" rows="5" required
                    placeholder="Tuliskan isi pengaduan Anda"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"></textarea>
            </div>

            <!-- Tombol -->
            <div class="text-center pt-4">
                <button type="submit"
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition transform hover:scale-[1.02]">
                    Kirim Pengaduan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
