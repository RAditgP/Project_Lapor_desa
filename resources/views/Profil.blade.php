@extends('layouts.navbar')

@section('title', 'Profil Desa')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Profil Desa</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <p class="text-gray-700 mb-4">
                Desa kami merupakan salah satu desa yang berkomitmen untuk meningkatkan pelayanan publik,
                transparansi, dan kesejahteraan masyarakat.
            </p>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Jumlah Penduduk: 2.345 jiwa</li>
                <li>Luas Wilayah: 5,6 km²</li>
                <li>Potensi: Pertanian, UMKM, dan Pariwisata</li>
            </ul>
        </div>

        <div>
            <img src="https://source.unsplash.com/600x400/?village,landscape" 
                 alt="Gambar Desa" class="rounded-lg shadow">
        </div>
    </div>
</div>
@endsection