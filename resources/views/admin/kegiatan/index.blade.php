@extends('layouts.admin')

@section('title', 'Kegiatan Masyarakat')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-emerald-700">Daftar Kegiatan Masyarakat</h1>
    <a href="{{ route('admin.kegiatan-masyarakat.create') }}"
       class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg">
        + Tambah Kegiatan
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full border border-gray-200">
        <thead class="bg-emerald-600 text-white">
            <tr>
                <th class="py-3 px-4 text-left">#</th>
                <th class="py-3 px-4 text-left">Judul</th>
                <th class="py-3 px-4 text-left">Tanggal</th>
                <th class="py-3 px-4 text-left">Foto</th>
                <th class="py-3 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kegiatans as $kegiatan)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4 font-medium text-gray-800">{{ $kegiatan->judul }}</td>
                    <td class="py-3 px-4">{{ $kegiatan->tanggal ? date('d M Y', strtotime($kegiatan->tanggal)) : '-' }}</td>
                    <td class="py-3 px-4">
                        @if($kegiatan->foto)
                            <img src="{{ asset('storage/' . $kegiatan->foto) }}" class="w-16 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-400 italic">Tidak ada foto</span>
                        @endif
                    </td>
                    <td class="py-3 px-4 flex space-x-2">
                        <a href="{{ route('admin.kegiatan-masyarakat.edit', $kegiatan->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg">
                           Edit
                        </a>

                        <form action="{{ route('admin.kegiatan-masyarakat.destroy', $kegiatan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-4 text-center text-gray-500">Belum ada kegiatan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
