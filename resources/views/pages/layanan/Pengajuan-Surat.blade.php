@extends('layouts.navbar')

@section('title', 'Pengajuan Surat')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold mb-4 text-center">Form Pengajuan Surat</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pengajuan-surat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block font-semibold">Nama Lengkap</label>
            <input type="text" name="nama" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-3">
            <label class="block font-semibold">NIK</label>
            <input type="text" name="nik" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-3">
            <label class="block font-semibold">Jenis Surat</label>
            <select name="jenis_surat" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Jenis Surat --</option>
                <option value="Surat Domisili">Surat Domisili</option>
                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="block font-semibold">Keperluan</label>
            <textarea name="keperluan" class="w-full border rounded p-2" required></textarea>
        </div>

        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">Kirim Pengajuan</button>
    </form>
</div>
@endsection
