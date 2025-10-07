@extends('layouts.admin')

@section('title', 'Kelola Pengajuan Surat')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Daftar Pengajuan Surat</h2>

    <table class="min-w-full border border-gray-200">
        <thead>
            <tr class="bg-emerald-600 text-white">
                <th class="p-2">No</th>
                <th class="p-2">Nama</th>
                <th class="p-2">NIK</th>
                <th class="p-2">Jenis Surat</th>
                <th class="p-2">Keperluan</th>
                <th class="p-2">Status</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan as $item)
            <tr class="border-t">
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $item->nama }}</td>
                <td class="p-2">{{ $item->nik }}</td>
                <td class="p-2">{{ $item->jenis_surat }}</td>
                <td class="p-2">{{ $item->keperluan }}</td>
                <td class="p-2 font-semibold">{{ $item->status }}</td>
                <td class="p-2">
                    <form action="{{ route('admin.pengajuan-surat.status', $item->id) }}" method="POST">
                        @csrf
                        <select name="status" onchange="this.form.submit()" class="border rounded p-1">
                            <option value="Menunggu" {{ $item->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                            <option value="Diproses" {{ $item->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
