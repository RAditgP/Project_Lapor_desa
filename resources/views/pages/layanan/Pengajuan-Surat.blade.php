@extends('layouts.navbar')

@section('title', 'Pengajuan Surat Online')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Formulir Pengajuan Surat</h1>
        <p class="text-center text-gray-600 mb-8">
            Silakan isi formulir di bawah ini untuk mengajukan permohonan surat.
        </p>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                <input type="email" id="email" name="email" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>
            
            <div>
                <label for="jenis_surat" class="block text-sm font-medium text-gray-700">Jenis Surat</label>
                <select id="jenis_surat" name="jenis_surat" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                    <option value="">Pilih Jenis Surat</option>
                    <option value="surat_domisili">Surat Keterangan Domisili</option>
                    <option value="surat_usaha">Surat Izin Usaha</option>
                    <option value="surat_lainnya">Surat Keterangan Lainnya</option>
                </select>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Permohonan</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-emerald-700 text-white font-medium rounded-md shadow-sm hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    Ajukan Surat
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
