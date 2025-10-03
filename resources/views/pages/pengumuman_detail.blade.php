@extends('layouts.navbar')

@section('content')
<div class="container">
    <a href="{{ route('pengumuman.index') }}" class="btn btn-sm btn-outline-secondary mb-4">← Kembali ke Daftar Pengumuman</a>
    
    <article>
        <h1 class="mb-3">{{ $pengumuman->judul }}</h1>
        <p class="text-muted">{{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d F Y') }}</p>

        @if ($pengumuman->gambar)
            <div class="mb-4 text-center">
                <img src="{{ Storage::url($pengumuman->gambar) }}" alt="{{ $pengumuman->judul }}" class="img-fluid rounded shadow-sm" style="max-height: 400px; width: auto;">
            </div>
        @endif

        <div class="content-body mt-4">
            {{-- Tampilkan isi lengkap, mungkin menggunakan nl2br atau markdown/editor output --}}
            {!! nl2br(e($pengumuman->isi)) !!} 
        </div>
    </article>
</div>
@endsection