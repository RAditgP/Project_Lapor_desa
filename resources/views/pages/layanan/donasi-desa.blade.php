@extends('layouts.navbar')

@section('title', 'Donasi untuk Pembangunan Desa')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Card Utama -->
        <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">
            <!-- Judul -->
            <h1 class="text-3xl md:text-4xl font-extrabold text-center text-emerald-700 mb-4">
                Donasi untuk Pembangunan Desa
            </h1>
            <p class="text-center text-gray-600 mb-10 leading-relaxed">
                Dukungan Anda sangat berarti bagi kemajuan desa kami. 
                Donasi yang terkumpul akan digunakan untuk program pembangunan dan kesejahteraan masyarakat.
            </p>

            <!-- Cara Berdonasi -->
            <div class="mb-10">
                <h2 class="text-2xl font-bold text-emerald-700 flex items-center gap-2 mb-4">
                    <span>📌</span> Cara Berdonasi
                </h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Pilih metode pembayaran yang Anda inginkan.</li>
                    <li>Transfer donasi ke rekening atau e-wallet yang tertera.</li>
                </ul>
            </div>

            <!-- Rekening & E-Wallet -->
            <div class="mb-10">
                <h2 class="text-2xl font-bold text-emerald-700 flex items-center gap-2 mb-4">
                    <span>💳</span> Rekening & E-Wallet
                </h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Bank -->
                    <div class="p-5 rounded-xl border bg-gradient-to-br from-emerald-50 to-white shadow">
                        <p class="text-sm text-gray-500">Bank Konoha</p>
                        <p class="text-xl font-semibold text-gray-900">123-456-7890</p>
                        <p class="text-sm text-gray-600">a/n Desa Konoha</p>
                    </div>
                    <!-- E-Wallet -->
                    <div class="p-5 rounded-xl border bg-gradient-to-br from-emerald-50 to-white shadow">
                        <p class="text-sm text-gray-500">E-Wallet (KonohaPay)</p>
                        <p class="text-xl font-semibold text-gray-900">0812-3456-7890</p>
                        <p class="text-sm text-gray-600">a/n Lapor Desa</p>
                    </div>
                </div>
            </div>

            <!-- QR Code -->
            <div class="text-center mb-6">
                <p class="text-gray-700 mb-3 font-medium">Scan QR untuk donasi cepat via E-Wallet</p>
                <div class="inline-block p-3 bg-white border rounded-2xl shadow-md">
                    <img src="{{ asset('images/tako.png') }}" 
                         alt="QR Donasi" 
                         class="w-48 mx-auto rounded-lg">
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
