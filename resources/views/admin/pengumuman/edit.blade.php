@extends('admin.layouts.navbar')

@section('content')
<div class="container">
    <h2>Edit Pengumuman: {{ $pengumuman->judul }}</h2>
    <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    {{-- Form menggunakan method POST dengan simulasi PUT, dan route 'admin.pengumuman.update' --}}
    <form action="{{ route('admin.pengumuman.update', $pengumuman) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Pengumuman</label>
            {{-- Mengisi input dengan data lama: $pengumuman->judul --}}
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $pengumuman->judul) }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi / Deskripsi Pengumuman</label>
            <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" required>{{ old('isi', $pengumuman->isi) }}</textarea>
            @error('isi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Pengumuman</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', $pengumuman->tanggal) }}" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="gambar" class="form-label">Foto / Gambar Pengumuman Saat Ini</label>
            @if ($pengumuman->gambar)
                <div class="mb-2">
                    <img src="{{ Storage::url($pengumuman->gambar) }}" alt="Gambar Lama" class="img-thumbnail" style="max-height: 150px;">
                </div>
            @endif
            
            <label for="gambar_baru" class="form-label">Ganti Foto (Pilih baru jika ingin mengganti)</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar_baru" name="gambar" accept="image/*">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Pengumuman</button>
    </form>
</div>
@endsection