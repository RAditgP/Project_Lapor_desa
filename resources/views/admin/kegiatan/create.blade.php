@extends('layouts.admin')

@section('title', 'Tambah Kegiatan Masyarakat')

@section('content')
<h1 class="text-2xl font-bold text-emerald-700 mb-6">Tambah Kegiatan Baru</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc ml-6">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.kegiatan-masyarakat.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6 space-y-4">
    @csrf

    <div>
        <label class="block text-gray-700 font-medium mb-2">Judul</label>
        <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">{{ old('deskripsi') }}</textarea>
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Foto</label>
        <input type="file" name="foto" accept="image/*" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div class="flex justify-end space-x-2">
        <a href="{{ route('admin.kegiatan-masyarakat.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-lg">
            Batal
        </a>
        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg">
            Simpan
        </button>
    </div>
</form>
@endsection
