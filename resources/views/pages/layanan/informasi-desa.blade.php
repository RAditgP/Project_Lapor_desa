@extends('layouts.navbar')

@section('title', 'Form informasi desa')
@section('content')
<div class="container mx-auto px-6 py-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-green-700 mb-4">Informasi Data Desa</h1>

        <div class="space-y-3">
            <p><span class="font-semibold">Nama Desa:</span> Desa Contoh</p>
            <p><span class="font-semibold">Kecamatan:</span> Kecamatan Contoh</p>
            <p><span class="font-semibold">Kabupaten:</span> Kabupaten Contoh</p>
            <p><span class="font-semibold">Provinsi:</span> Provinsi Contoh</p>
            <p><span class="font-semibold">Jumlah Penduduk:</span> 5.000 jiwa</p>
            <p><span class="font-semibold">Luas Wilayah:</span> 15 km²</p>
            <p><span class="font-semibold">Kepala Desa:</span> Bapak Andi</p>
        </div>
    </div>
</div>
    
@endsection