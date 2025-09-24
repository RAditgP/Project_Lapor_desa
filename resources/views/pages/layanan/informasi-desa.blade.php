@extends('layouts.navbar')

@section('title', 'Informasi Data Desa Konohagakure')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Informasi Data Desa Konohagakure</h1>
     
        
        <div class="space-y-4 text-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Nama Desa:</span>
                <span class="text-gray-900">Konohagakure</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Kecamatan:</span>
                <span class="text-gray-900">Shinobi</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Kabupaten:</span>
                <span class="text-gray-900">Negara Api</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Provinsi:</span>
                <span class="text-gray-900">Negara Api</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Jumlah Penduduk:</span>
                <span class="text-gray-900">~15.000 jiwa</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Luas Wilayah:</span>
                <span class="text-gray-900">50 km²</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                <span class="font-semibold text-gray-700">Kepala Desa (Hokage):</span>
                <span class="text-gray-900">Naruto Uzumaki</span>
            </div>
        </div>
    </div>
</div>
@endsection
