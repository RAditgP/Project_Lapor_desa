@extends('layouts.navbar')

@section('title', 'Donasi untuk Pembangunan Desa')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Donasi untuk Pembangunan Desa</h1>
        <p class="text-center text-gray-600 mb-8">
            Dukungan Anda sangat berarti bagi kemajuan desa kami. Donasi yang terkumpul akan digunakan untuk program pembangunan dan kesejahteraan masyarakat.
        </p>

        <div class="mb-8">
            <h2 class="text-xl font-bold text-emerald-700 mb-4">Cara Berdonasi</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Pilih metode pembayaran yang Anda inginkan.</li>
                <li>Transfer donasi ke rekening atau e-wallet yang tertera.</li>
                <li>Isi formulir konfirmasi di bawah ini agar donasi Anda tercatat.</li>
            </ul>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-bold text-emerald-700 mb-4">Rekening & E-Wallet</h2>
            <div class="space-y-4 bg-gray-100 p-4 rounded-lg">
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
        </div>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <h2 class="text-xl font-bold text-emerald-700 mb-4">Konfirmasi Donasi Anda</h2>

            <div>
                <label for="nama_donatur" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama_donatur" name="nama_donatur" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>
            
            <div>
                <label for="jumlah_donasi" class="block text-sm font-medium text-gray-700">Jumlah Donasi</label>
                <input type="number" id="jumlah_donasi" name="jumlah_donasi" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>
            
            <div>
                <label for="tanggal_transfer" class="block text-sm font-medium text-gray-700">Tanggal Transfer</label>
                <input type="date" id="tanggal_transfer" name="tanggal_transfer" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>

            <div>
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan (Opsional)</label>
                <textarea id="keterangan" name="keterangan" rows="3"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-emerald-700 text-white font-medium rounded-md shadow-sm hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    Konfirmasi Donasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
