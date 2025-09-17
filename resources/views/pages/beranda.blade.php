@extends('layouts.navbar')

@section('title', 'Beranda')

@section('content')
<div class="flex space-x-4">
    <div class="flex-3 bg-white shadow rounded p-6 w-3/4">
        <h2 class="font-bold text-lg mb-4">Konten Utama / Banner</h2>
        <p>Selamat datang di website Lapor Desa!</p>
    </div>
    <div class="flex-1 bg-gray-200 shadow rounded p-6 w-1/4">
        <h2 class="font-bold text-lg mb-4">Pengumuman</h2>
        <p>Info terbaru desa...</p>
    </div>
</div>

<div class="flex space-x-4 mt-6">
    <div class="flex-1 bg-white shadow rounded p-6">
        <h2 class="font-bold text-lg mb-4">Kolom 1</h2>
        <p>Isi kolom pertama...</p>
    </div>
    <div class="flex-1 bg-white shadow rounded p-6">
        <h2 class="font-bold text-lg mb-4">Kolom 2</h2>
        <p>Isi kolom kedua...</p>
    </div>
</div>
@endsection
