@extends('layouts.admin')

@section('title', 'Kegiatan Masyarakat')
@section('page-title', 'Kegiatan Masyarakat')

@section('content')
<div class="bg-white rounded-xl shadow p-5">
    <h3 class="text-lg font-semibold mb-4">Daftar Kegiatan Masyarakat</h3>

    @if($kegiatans->isEmpty())
        <p class="text-gray-500">Belum ada kegiatan tercatat.</p>
    @else
        <table class="w-full text-left border border-gray-200">
            <thead class="bg-emerald-700 text-white">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Nama Kegiatan</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatans as $kegiatan)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $kegiatan->nama_kegiatan }}</td>
                        <td class="p-3">{{ $kegiatan->tanggal }}</td>
                        <td class="p-3">{{ $kegiatan->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
