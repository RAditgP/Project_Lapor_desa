@extends('layouts.navbar')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-6">Dashboard Admin</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="font-semibold">Total Pengumuman</h3>
            <p class="text-3xl font-bold">{{ $jumlahPengumuman ?? 0 }}</p>
        </div>

        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="font-semibold">Total Pengaduan</h3>
            <p class="text-3xl font-bold">{{ $jumlahPengaduan ?? 0 }}</p>
        </div>
    </div>
</div>
@endsection
