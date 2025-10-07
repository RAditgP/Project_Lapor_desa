@extends('layouts.admin')

@section('title', 'Kelola Pengaduan')
@section('page-title', 'Daftar Pengaduan')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-4">Daftar Pengaduan Masyarakat</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-emerald-600 text-white">
                <th class="py-2 px-3 text-left">No</th>
                <th class="py-2 px-3 text-left">Nama</th>
                <th class="py-2 px-3 text-left">Isi Pengaduan</th>
                <th class="py-2 px-3 text-left">Tanggal</th>
                <th class="py-2 px-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengaduans as $index => $p)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-3">{{ $index + 1 }}</td>
                    <td class="py-2 px-3">{{ $p->nama ?? '-' }}</td>
                    <td class="py-2 px-3">{{ Str::limit($p->isi, 50) }}</td>
                    <td class="py-2 px-3">{{ $p->created_at->format('d M Y') }}</td>
                    <td class="py-2 px-3 text-center space-x-2">
                        <a href="{{ route('admin.pengaduan.show', $p->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Lihat</a>

                        <form action="{{ route('admin.pengaduan.destroy', $p->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus pengaduan ini?')" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-3 text-gray-500">Belum ada pengaduan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
