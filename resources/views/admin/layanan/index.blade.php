@extends('layouts.admin')

@section('title', 'Pengajuan Surat')

@section('content')
<div class="p-6 bg-white rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Daftar Pengajuan Surat</h2>

    @if (session('success'))
        <div class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-emerald-600 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Jenis Surat</th>
                    <th class="px-4 py-2 text-left">NIK</th>
                    <th class="px-4 py-2 text-left">No HP</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuans as $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $item->nama_lengkap }}</td>
                    <td class="px-4 py-2">{{ $item->jenisSurat->nama_surat }}</td>
                    <td class="px-4 py-2">{{ $item->nik }}</td>
                    <td class="px-4 py-2">{{ $item->no_hp }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.pengajuan-surat.status', $item->id) }}" method="POST">
                            @csrf
                            <select name="status"
                                class="border border-gray-300 rounded-lg px-2 py-1 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                                onchange="this.form.submit()">
                                <option value="Menunggu" {{ $item->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="Diproses" {{ $item->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-4 py-2 text-center">
                        @if ($item->lampiran)
                            <a href="{{ asset('storage/' . $item->lampiran) }}" target="_blank" class="text-emerald-600 underline">Lihat Lampiran</a>
                        @else
                            <span class="text-gray-400 italic">Tidak ada</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
