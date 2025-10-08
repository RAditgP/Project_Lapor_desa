@extends('layouts.admin')

@section('title', 'Laporan Masyarakat')
@section('page-title', 'Laporan Masyarakat')

@section('content')
<div class="bg-white rounded-xl shadow p-5">
    <h3 class="text-lg font-semibold mb-4">Daftar Laporan Masyarakat</h3>

    @if($laporans->isEmpty())
        <p class="text-gray-500">Belum ada laporan masuk.</p>
    @else
        <table class="w-full text-left border border-gray-200">
            <thead class="bg-emerald-700 text-white">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Nama Pelapor</th>
                    <th class="p-3">Isi Laporan</th>
                    <th class="p-3">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporans as $laporan)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $laporan->nama ?? '-' }}</td>
                        <td class="p-3">{{ $laporan->isi ?? '-' }}</td>
                        <td class="p-3">{{ $laporan->created_at->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
