@extends('admin.layouts.navbar') 

{{-- Asumsikan Anda memiliki layout utama admin --}}

@section('content')
<div class="container">
    <h2>Manajemen Pengumuman</h2>
    
    {{-- Tampilkan pesan success jika ada --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        {{-- Tombol untuk pindah ke halaman Tambah Pengumuman --}}
        <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-success">
            + Tambah Pengumuman Baru
        </a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 15%">Gambar</th>
                <th>Judul</th>
                <th style="width: 15%">Tanggal</th>
                <th style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengumumans as $pengumuman)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($pengumuman->gambar)
                        {{-- Menggunakan Storage::url() untuk mengakses gambar yang disimpan di storage/app/public --}}
                        <img src="{{ Storage::url($pengumuman->gambar) }}" alt="{{ $pengumuman->judul }}" class="img-thumbnail" style="max-height: 80px;">
                    @else
                        Tidak ada Gambar
                    @endif
                </td>
                <td>{{ $pengumuman->judul }}</td>
                <td>{{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d F Y') }}</td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="{{ route('admin.pengumuman.edit', $pengumuman) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    {{-- Tombol Hapus --}}
                    <form action="{{ route('admin.pengumuman.destroy', $pengumuman) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data pengumuman.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection