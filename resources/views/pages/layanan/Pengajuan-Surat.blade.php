@extends('layouts.navbar')

@section('title', 'Form Pengaduan')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-emerald-800 mb-4">Form Pengajuan surat</h1>
    <p class="mb-6 text-gray-600">Silakan isi formulir berikut untuk menyampaikan Pengajuan surat Anda.</p>

    <!-- Form Pengaduan -->
    <form action="{{ url('/pengajuan') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nama -->
        <div>
            <label for="nama" class="block font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                   placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <!-- NIK -->
        <div>
            <label for="nik" class="block font-medium text-gray-700">NIK</label>
            <input type="text" name="nik" id="nik" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                   placeholder="Masukkan NIK Anda" required>
        </div>

        <!-- Nomor Telepon -->
        <div>
            <label for="telepon" class="block font-medium text-gray-700">Nomor Telepon</label>
            <input type="text" name="telepon" id="telepon" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                   placeholder="Masukkan nomor telepon Anda" required>
        </div>

        <!-- Judul Pengaduan -->
        <div>
            <label for="judul" class="block font-medium text-gray-700">Surat Yang Ingin Diajukan</label>
            <input type="text" name="judul" id="judul" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                   placeholder="Masukkan judul pengaduan" required>
        </div>

       
        <!-- Tombol Submit -->
        <div class="text-right">
            <button type="submit" 
                    class="bg-emerald-700 hover:bg-emerald-800 text-white px-6 py-2 rounded shadow-md">
                Kirim Pengajuan
            </button>
        </div>
    </form>
</div>
@endsection
