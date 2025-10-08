@extends('layouts.admin')

@section('title', 'Edit Kegiatan Masyarakat')

@section('content')
<h1 class="text-2xl font-bold text-emerald-700 mb-6">Edit Kegiatan: {{ $kegiatan->judul }}</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc ml-6">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.kegiatan-masyarakat.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6 space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-gray-700 font-medium mb-2">Judul</label>
        <input type="text" name="judul" value="{{ old('judul', $kegiatan->judul) }}" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal', $kegiatan->tanggal) }}" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div>
        <label class="block text-gray-700 font-medium mb-2">Foto Sekarang</label>
        @if($kegiatan->foto)
            <img src="{{ asset('storage/' . $kegiatan->foto) }}" class="w-32 h-32 object-cover rounded mb-3">
        @else
            <p class="text-gray-500 italic">Belum ada foto</p>
        @endif
        <label class="block text-gray-700 font-medium mb-2">Ganti Foto (opsional)</label>
        <input type="file" name="foto" accept="image/*" class="w-full border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    <div class="flex justify-end space-x-2">
        <a href="{{ route('admin.kegiatan-masyarakat.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-lg">
            Batal
        </a>
        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg">
            Perbarui
        </button>
    </div>
</form>
@endsection
