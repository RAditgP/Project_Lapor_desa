@extends('layouts.navbar')

@section('title', 'Donasi untuk Pembangunan Desa')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">
            Donasi untuk Pembangunan Desa ,Dan Yang Membutuhkan.
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

            <!-- Pilih Nominal -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Pilih Nominal Donasi</label>
                <div class="grid grid-cols-3 gap-3 mb-4">
                    @foreach ([5000,10000,20000,50000,100000] as $nominal)
                        <button type="button" 
                            onclick="document.getElementById('jumlah_donasi').value={{ $nominal }}"
                            class="py-2 px-3 bg-emerald-50 border border-emerald-500 text-emerald-700 rounded-lg font-medium hover:bg-emerald-100 transition">
                            Rp {{ number_format($nominal,0,',','.') }}
                        </button>
                    @endforeach
                </div>
                <input type="number" id="jumlah_donasi" name="jumlah_donasi" required
                       placeholder="Nominal lainnya"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
            </div>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required
                       placeholder="Masukkan nama lengkap Anda / tulis 'Anonim'"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
                <p class="text-xs text-gray-500 mt-1">Atau ketik "Anonim" jika tidak ingin ditampilkan.</p>
            </div>

            <!-- Nomor HP -->
            <div>
                <label for="hp" class="block text-sm font-semibold text-gray-700 mb-2">Nomor HP / WhatsApp</label>
                <input type="text" id="hp" name="hp" required
                       placeholder="08xxxxxxxxxx"
                       class="w-full border border-gray-300 rounded-xl px-4 py-3 shadow-sm 
                              focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition">
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

            <!-- Pesan / Doa -->
            <div>
                <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-2">Pesan / Doa (Opsional)</label>
                <textarea id="pesan" name="pesan" rows="3"
                          placeholder="Tuliskan doa atau pesan untuk desa"
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
