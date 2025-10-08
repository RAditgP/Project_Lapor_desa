@extends('layouts.navbar')

@section('title', 'LAPORAN MASYARAKAT')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-emerald-50 to-white py-12 px-4">
  <div class="max-w-7xl mx-auto">
    <!-- JUDUL -->
    <h1 class="text-center text-4xl font-extrabold text-emerald-800 mb-4 uppercase tracking-widest drop-shadow-sm">
      LAPORAN MASYARAKAT
    </h1>
    <p class="text-center text-gray-600 mb-12 text-lg">
      Berikut adalah laporan yang telah dikirim oleh masyarakat desa.
    </p>

    <!-- GRID CARD -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($laporan ?? collect() as $item)
        <div
          class="relative group bg-white rounded-3xl overflow-hidden border border-emerald-100 shadow-md 
                 hover:shadow-2xl hover:border-emerald-300 transition-all duration-300 transform hover:-translate-y-2"
        >
          <!-- HEADER HIJAU -->
          <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 text-white p-5">
            <h3 class="text-lg font-extrabold uppercase tracking-wide leading-snug">
              {{ $item->judul ?? '-' }}
            </h3>
            <p class="text-xs opacity-90 mt-1 flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z" />
              </svg>
              {{ $item->created_at ? $item->created_at->locale('id')->translatedFormat('d F Y, H:i') : '-' }}
            </p>
          </div>

          <!-- ISI -->
          <div class="p-6">
            <p class="text-gray-700 text-sm leading-relaxed mb-5">
              {{ \Illuminate\Support\Str::limit($item->isi ?? '-', 150, '...') }}
            </p>

            <!-- NAMA PENGIRIM -->
            <div class="flex items-center justify-between border-t border-gray-100 pt-4">
              <span class="text-sm text-gray-600 font-medium flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-5 h-5 text-emerald-600">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
                </svg>
                {{ strtoupper($item->nama ?? '-') }}
              </span>

              <!-- TOMBOL DETAIL -->
              <button
                onclick="showDetail('{{ addslashes($item->judul) }}', '{{ addslashes($item->nama) }}', '{{ addslashes($item->created_at ? $item->created_at->locale('id')->translatedFormat('d F Y, H:i') : '-') }}', '{{ addslashes($item->isi) }}')"
                class="px-4 py-2 text-sm font-semibold bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-all duration-200 flex items-center gap-1"
              >
                Detail
                <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='w-4 h-4'>
                  <path stroke-linecap='round' stroke-linejoin='round' d='M9 5l7 7-7 7' />
                </svg>
              </button>
            </div>
          </div>
        </div>
      @empty
        <div class="col-span-3 text-center py-12 text-gray-500 text-lg">
          Belum ada laporan masuk.
        </div>
      @endforelse
    </div>
  </div>
</div>

<!-- MODAL DETAIL -->
<div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 backdrop-blur-sm">
  <div class="bg-white rounded-3xl shadow-2xl max-w-xl w-full mx-4 p-8 relative animate-fadeIn border-t-8 border-emerald-600">
    <button
      onclick="closeDetail()"
      class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-3xl font-bold"
    >&times;</button>

    <h2 id="modalJudul" class="text-2xl font-extrabold text-emerald-700 uppercase mb-2 tracking-wide"></h2>
    <p id="modalTanggal" class="text-sm text-gray-500 mb-3"></p>
    <p id="modalNama" class="font-semibold text-gray-700 mb-3"></p>
    <div class="border-t border-gray-200 my-4"></div>
    <p id="modalIsi" class="text-gray-700 leading-relaxed text-sm whitespace-pre-line"></p>
  </div>
</div>

<!-- SCRIPT MODAL -->
<script>
  function showDetail(judul, nama, tanggal, isi) {
    document.getElementById('modalJudul').innerText = judul;
    document.getElementById('modalNama').innerText = '👤 ' + nama;
    document.getElementById('modalTanggal').innerText = tanggal;
    document.getElementById('modalIsi').innerText = isi;
    document.getElementById('detailModal').classList.remove('hidden');
  }

  function closeDetail() {
    document.getElementById('detailModal').classList.add('hidden');
  }
</script>

<!-- ANIMASI -->
<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px) scale(0.97); }
    to { opacity: 1; transform: translateY(0) scale(1); }
  }
  .animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
  }
</style>
@endsection