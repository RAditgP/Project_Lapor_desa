@extends('layouts.navbar')

@section('title', 'Pengajuan Surat Desa')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-emerald-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
        <!-- Header -->
        <div class="bg-emerald-600 px-6 py-4">
            <h2 class="text-2xl font-bold text-white text-center">Form Pengajuan Surat Desa</h2>
        </div>

        <div class="p-8">
            {{-- Pesan sukses --}}
            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative">
                    <strong class="font-semibold">Berhasil!</strong> {{ session('success') }}
                </div>
            @endif

            {{-- Pesan error --}}
            @if($errors->any())
                <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative">
                    <strong class="font-semibold">Ada kesalahan:</strong>
                    <ul class="list-disc list-inside mt-2 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('layanan.pengajuan-surat.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Kolom Kiri --}}
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Masukkan nama lengkap anda" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">NIK</label>
                        <input type="text" name="nik" value="{{ old('nik') }}"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Masukkan NIK anda" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat</label>
                        <textarea name="alamat" rows="3"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Masukkan alamat tempat tinggal" required>{{ old('alamat') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">No. Telepon</label>
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Masukkan nomor telepon aktif" required>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Jenis Surat</label>
                        <select name="jenis_surat_id"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            required>
                            <option value="">-- Pilih Jenis Surat --</option>
                            @foreach($jenis_surats as $jenis)
                                @if(in_array($jenis->nama_surat, ['Surat Keterangan Usaha', 'Surat Domisili', 'Surat Pengantar SKCK']))
                                    <option value="{{ $jenis->id }}" {{ old('jenis_surat_id') == $jenis->id ? 'selected' : '' }}>
                                        {{ $jenis->nama_surat }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Alasan Pengajuan</label>
                        <textarea name="alasan" rows="3"
                            class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="Tuliskan alasan pengajuan surat">{{ old('alasan') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">File Pendukung (opsional)</label>
                        <input type="file" name="file_pendukung"
                            class="w-full text-sm text-gray-700 border border-gray-300 shadow-sm rounded-lg px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer">
                        <p class="mt-1 text-xs text-gray-500">Format: PDF, JPG, PNG (maks 2MB)</p>
                    </div>
                </div>

                {{-- Tombol Submit --}}
                <div class="md:col-span-2 flex justify-center mt-6">
                    <button type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg transition duration-200">
                        Kirim Pengajuan Surat
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
