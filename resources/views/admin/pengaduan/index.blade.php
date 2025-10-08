@extends('layouts.admin')

@section('title', 'Kelola Pengaduan')
@section('page-title', 'Daftar Pengaduan')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-4 text-gray-800">Daftar Pengaduan Masyarakat</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 border border-green-200" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-emerald-600 text-white text-sm uppercase tracking-wider">
                    <th class="py-3 px-3 text-left border-r border-emerald-700 w-12 rounded-tl-lg">No</th>
                    <th class="py-3 px-3 text-left border-r border-emerald-700">Nama</th>
                    <th class="py-3 px-3 text-left border-r border-emerald-700 w-1/4">Isi Pengaduan</th>
                    <th class="py-3 px-3 text-left border-r border-emerald-700 w-24">Bukti Foto</th> 
                    <th class="py-3 px-3 text-left border-r border-emerald-700 w-24">Tanggal</th>
                    <th class="py-3 px-3 text-center w-28 rounded-tr-lg">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengaduans as $index => $p)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition duration-150 ease-in-out">
                        <td class="py-2 px-3 text-sm text-gray-700">{{ $index + 1 }}</td>
                        <td class="py-2 px-3 text-sm text-gray-700 font-medium">{{ $p->nama ?? '-' }}</td>
                        <td class="py-2 px-3 text-sm text-gray-600">{{ Str::limit($p->isi, 50) }}</td>
                        
                        {{-- KOLOM BARU: BUKTI FOTO --}}
                        <td class="py-2 px-3">
                            @if ($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" alt="Foto Bukti Pengaduan" 
                                     class="w-12 h-12 object-cover rounded-md shadow-md cursor-pointer hover:opacity-80 transition duration-150"
                                     onclick="window.open(this.src)">
                            @else
                                <span class="text-xs text-gray-400">Tidak Ada</span>
                            @endif
                        </td>
                        
                        <td class="py-2 px-3 text-sm text-gray-500">{{ $p->created_at->format('d M Y') }}</td>
                        <td class="py-2 px-3 text-center space-x-2">
                            <a href="{{ route('admin.pengaduan.show', $p->id) }}" 
                               class="bg-blue-500 text-white px-3 py-1 rounded-lg text-xs font-semibold hover:bg-blue-600 transition">Lihat</a>

                            <form action="{{ route('admin.pengaduan.destroy', $p->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus pengaduan ini? Tindakan ini tidak dapat dibatalkan.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded-lg text-xs font-semibold hover:bg-red-600 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500 text-sm">Belum ada pengaduan yang masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
