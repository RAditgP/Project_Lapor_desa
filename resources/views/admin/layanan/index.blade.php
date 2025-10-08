@extends('layouts.admin')

@section('title', 'Kelola Layanan - Pengajuan Surat')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Daftar Pengajuan Surat</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-emerald-600 text-white">
            <tr>
                <th class="border px-3 py-2 text-left">Nama Lengkap</th>
                <th class="border px-3 py-2 text-left">NIK</th>
                <th class="border px-3 py-2 text-left">No Telepon</th>
                <th class="border px-3 py-2 text-left">Alamat</th>
                <th class="border px-3 py-2 text-left">Jenis Surat</th>
                <th class="border px-3 py-2 text-left">Alasan</th>
                <th class="border px-3 py-2 text-left">Status</th>
                <th class="border px-3 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pengajuans as $item)
                <tr class="border-t">
                    <td class="border px-3 py-2">{{ $item->nama_lengkap }}</td>
                    <td class="border px-3 py-2">{{ $item->nik }}</td>
                    <td class="border px-3 py-2">{{ $item->no_telepon }}</td>
                    <td class="border px-3 py-2">{{ $item->alamat }}</td>
                    <td class="border px-3 py-2">{{ $item->jenisSurat->nama ?? '-' }}</td>
                    <td class="border px-3 py-2">{{ $item->alasan }}</td>
                    <td class="border px-3 py-2">
                        <span class="px-2 py-1 rounded text-sm
                            {{ $item->status == 'Selesai' ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800' }}">
                            {{ $item->status ?? 'Diproses' }}
                        </span>
                    </td>
                    <td class="border px-3 py-2">
                        <form action="{{ route('admin.layanan.updateStatus', $item->id) }}" method="POST">
                            @csrf
                            <select name="status" class="border rounded p-1">
                                <option value="Diproses" {{ $item->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                            <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-3 py-1 rounded">
                                Update
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center py-3">Belum ada pengajuan surat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
