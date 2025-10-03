@extends('admin.layouts.navbar')

@section('content')
<div class="container">
    <h2>Tambah Pengumuman Baru</h2>
    <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    {{-- Form menggunakan route 'admin.pengumuman.store' --}}
    <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Pengumuman</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi / Deskripsi Pengumuman</label>
            <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" required>{{ old('isi') }}</textarea>
            @error('isi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Pengumuman</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', now()->format('Y-m-d')) }}" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="gambar" class="form-label">Foto / Gambar Pengumuman</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" accept="image/*">
            <small class="form-text text-muted">Format: JPG, PNG, GIF. Max 2MB.</small>
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pengumuman</button>
    </form>
</div>
@endsection