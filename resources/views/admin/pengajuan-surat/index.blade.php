@extends('layouts.admin')

@section('title', 'Kelola Pengajuan Surat')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-emerald-700 mb-6">Daftar Pengajuan Surat</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow-md border">
        <table class="w-full text-left border-collapse">
            <thead class="bg-emerald-600 text-white">
                <tr>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">NIK</th>
                    <th class="px-4 py-3">Jenis Surat</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajuanSurats as $surat)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $surat->nama_lengkap }}</td>
                        <td class="px-4 py-3">{{ $surat->nik }}</td>
                        <td class="px-4 py-3">{{ $surat->jenisSurat->nama_surat ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $surat->alamat }}</td>
                        <td class="px-4 py-3">
                            <span class="px-3 py-1 rounded-full text-sm
                                {{ $surat->status == 'Diterima' ? 'bg-green-100 text-green-700' :
                                   ($surat->status == 'Ditolak' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                                {{ $surat->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <form action="{{ route('admin.pengajuan-surat.update-status', $surat->id) }}" method="POST" class="inline-block">
                                @csrf
                                <select name="status" onchange="this.form.submit()" class="border rounded px-2 py-1 text-sm">
                                    <option value="Menunggu" {{ $surat->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                    <option value="Diterima" {{ $surat->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                    <option value="Ditolak" {{ $surat->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
