@extends('layouts.navbar')

@section('title', 'Donasi untuk Pembangunan Desa')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">
            Donasi untuk Pembangunan Desa
        </h1>
        <p class="text-center text-gray-600 mb-8">
            Dukungan Anda sangat berarti bagi kemajuan desa kami. 
            Donasi yang terkumpul akan digunakan untuk program pembangunan dan kesejahteraan masyarakat.
        </p>

        <!-- Cara Berdonasi -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-emerald-700 mb-4">Cara Berdonasi</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Pilih metode pembayaran yang Anda inginkan.</li>
                <li>Transfer donasi ke rekening atau e-wallet yang tertera.</li>
                <li>Isi formulir konfirmasi di bawah agar donasi Anda tercatat.</li>
            </ul>
        </div>

        <!-- Rekening & QR -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-emerald-700 mb-4">Rekening & E-Wallet</h2>
            <div class="grid md:grid-cols-2 gap-4 bg-gray-100 p-4 rounded-lg mb-6">
                <div>
                    <span class="block text-sm font-medium text-gray-700">Bank Konoha:</span>
                    <span class="block text-lg font-semibold text-gray-900">123-456-7890</span>
                    <span class="block text-sm text-gray-600">a/n Desa Konoha</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-700">E-Wallet (KonohaPay):</span>
                    <span class="block text-lg font-semibold text-gray-900">0812-3456-7890</span>
                    <span class="block text-sm text-gray-600">a/n Lapor Desa</span>
                </div>
            </div>
            <div class="text-center">
                <p class="text-gray-700 mb-2">Scan QR untuk donasi cepat via E-Wallet</p>
                <img src="{{ asset('images/tako.png') }}" alt="QR Donasi" 
                     class="mx-auto w-48 border rounded-lg shadow">
            </div>
        </div>

        <!-- Form -->
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <h2 class="text-xl font-bold text-emerald-700 mb-4">Konfirmasi Donasi Anda</h2>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required
                       placeholder="Masukkan nama lengkap Anda"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Jumlah Donasi -->
            <div>
                <label for="jumlah_donasi" class="block text-sm font-semibold text-gray-700 mb-2">Jumlah Donasi</label>
                <input type="number" id="jumlah_donasi" name="jumlah_donasi" required
                       placeholder="Masukkan jumlah donasi"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Metode Donasi -->
            <div>
                <label for="metode" class="block text-sm font-semibold text-gray-700 mb-2">Metode Donasi</label>
                <select id="metode" name="metode" required
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                               focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
                    <option value="">-- Pilih Metode --</option>
                    <option value="bank">Bank Konoha</option>
                    <option value="ewallet">E-Wallet (KonohaPay)</option>
                    <option value="qr">QR Code</option>
                </select>
            </div>

            <!-- Tanggal Transfer -->
            <div>
                <label for="tanggal_transfer" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Transfer</label>
                <input type="date" id="tanggal_transfer" name="tanggal_transfer" required
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Upload Bukti Transfer -->
            <div>
                <label for="bukti" class="block text-sm font-semibold text-gray-700 mb-2">Upload Bukti Transfer (Opsional)</label>
                <input type="file" id="bukti" name="bukti"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Keterangan -->
            <div>
                <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Keterangan (Opsional)</label>
                <textarea id="deskripsi" name="deskripsi" rows="3"
                          placeholder="Tuliskan keterangan tambahan jika ada"
                          class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                                 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"></textarea>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-3 bg-emerald-700 text-white font-medium rounded-lg shadow-sm 
                               hover:bg-emerald-800 focus:outline-none focus:ring-2 
                               focus:ring-offset-2 focus:ring-emerald-500 transition">
                    Konfirmasi Donasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
