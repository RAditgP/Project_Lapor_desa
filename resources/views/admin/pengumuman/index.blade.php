@extends('layouts.admin')

@section('title', 'Daftar Pengumuman')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Pengumuman</h1>
        <a href="{{ route('admin.pengumuman.create') }}" 
           class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg transition">
           + Tambah Pengumuman
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border border-gray-200 text-sm text-gray-700">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Judul</th>
                <th class="px-4 py-2 border">Tanggal</th>
                <th class="px-4 py-2 border">Gambar</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengumumans as $index => $p)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $p->judul }}</td>
                    <td class="px-4 py-2 text-center">{{ $p->tanggal }}</td>
                    <td class="px-4 py-2 text-center">
                        @if($p->gambar)
                            <img src="{{ asset('storage/' . $p->gambar) }}" 
                                 alt="gambar" 
                                 class="w-16 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-400 italic">Tidak ada</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center gap-2">
                           <a href="{{ route('admin.pengumuman.edit', $p->id) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                               Edit
                            </a>
                            <form action="{{ route('admin.pengumuman.destroy', $p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-500 italic">
                        Belum ada pengumuman
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
