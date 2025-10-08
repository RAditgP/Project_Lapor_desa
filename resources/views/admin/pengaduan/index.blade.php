@extends('layouts.admin')

@section('title', 'Kelola Pengaduan')
@section('page-title', 'Daftar Pengaduan')

@section('content')
<div class="bg-white shadow-xl rounded-xl p-6">
    <h2 class="text-2xl font-semibold mb-6 text-emerald-700 border-b pb-2">
        📋 Daftar Pengaduan Masyarakat
    </h2>

    {{-- Alert sukses --}}
    @if (session('success'))
        <div class="mb-4 px-4 py-3 rounded-md bg-green-100 border border-green-300 text-green-700 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel pengaduan --}}
    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full text-sm text-gray-700">
            <thead>
                <tr class="bg-emerald-700 text-white text-xs uppercase tracking-wider">
                    <th class="py-3 px-4 text-left rounded-tl-lg">No</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left w-1/3">Isi Pengaduan</th>
                    <th class="py-3 px-4 text-center">Bukti Foto</th>
                    <th class="py-3 px-4 text-center">Tanggal</th>
                    <th class="py-3 px-4 text-center rounded-tr-lg">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($pengaduans as $index => $p)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-4 font-medium text-gray-600">{{ $index + 1 }}</td>
                        <td class="py-3 px-4 font-semibold text-gray-800">{{ $p->nama ?? '-' }}</td>
                        <td class="py-3 px-4 text-gray-600">{{ Str::limit($p->isi, 70, '...') }}</td>

                        {{-- Kolom foto --}}
                        <td class="py-3 px-4 text-center">
                            @if ($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" 
                                     alt="Bukti Pengaduan"
                                     class="w-14 h-14 object-cover rounded-lg mx-auto border cursor-pointer hover:scale-105 hover:shadow-md transition"
                                     onclick="window.open(this.src)">
                            @else
                                <span class="text-gray-400 italic text-xs">Tidak ada</span>
                            @endif
                        </td>

                        {{-- Kolom tanggal --}}
                        <td class="py-3 px-4 text-center text-gray-600">
                            {{ $p->created_at->format('d M Y') }}
                        </td>

                        {{-- Tombol aksi --}}
                        <td class="py-3 px-4 text-center space-x-1">
                            <a href="{{ route('admin.pengaduan.show', $p->id) }}" 
                               class="inline-block bg-blue-500 text-white px-3 py-1.5 rounded-md text-xs font-semibold hover:bg-blue-600 shadow-sm transition">
                                Lihat
                            </a>

                            <form action="{{ route('admin.pengaduan.destroy', $p->id) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="inline-block bg-red-500 text-white px-3 py-1.5 rounded-md text-xs font-semibold hover:bg-red-600 shadow-sm transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500 text-sm italic">
                            Belum ada pengaduan yang masuk 📭
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
