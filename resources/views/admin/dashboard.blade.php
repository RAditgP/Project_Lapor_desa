@extends('layouts.navbar')

@section('title', 'Admin Dashboard')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold">Selamat Datang di Dashboard Admin</h1>
    <p class="mt-2 text-gray-600">Semua fitur khusus admin ada di sini.</p>

    <div class="grid grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-4 shadow rounded-lg">
            <h2 class="font-semibold">Kelola Pengumuman</h2>
            <a href="{{ route('admin.pengumuman.index') }}" class="text-blue-500 hover:underline">Lihat</a>
        </div>
        <div class="bg-white p-4 shadow rounded-lg">
            <h2 class="font-semibold">Layanan Lain</h2>
            <p>Coming soon...</p>
        </div>
    </div>
</div>
@endsection
