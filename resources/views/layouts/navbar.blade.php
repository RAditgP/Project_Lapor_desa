<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lapor Desa')</title>
    @vite('resources/css/app.css')
    <style>
        /* Reset bawaan browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="bg-white font-sans min-h-screen flex flex-col">

    <!-- Header -->
    <header class="flex justify-between items-center bg-emerald-900 text-white px-6 py-4 shadow-lg">
        <div class="font-extrabold text-2xl tracking-wide text-yellow-400">LAPOR DESA</div>
        <div>
            <input type="text" placeholder="Search..."
                   class="px-3 py-1 rounded border border-emerald-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 text-black">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-emerald-800 text-white flex justify-center py-3 shadow-md z-50 sticky top-0 w-full">
        <ul class="flex space-x-8">
            <li><a href="{{ url('/') }}" class="hover:text-yellow-400 font-medium">Beranda</a></li>
            <li><a href="{{ url('/pengumuman') }}" class="hover:text-yellow-400 font-medium">Pengumuman</a></li>

            <!-- Dropdown -->
            <li class="relative group">
                <a href="#" class="hover:text-yellow-400 font-medium flex items-center">
                    Layanan Online
                    <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-48 bg-white text-black rounded-lg shadow-lg invisible opacity-0 group-hover:visible group-hover:opacity-100 z-50 transition-all duration-300 ease-in-out">
                    <a href="{{ url('/layanan/pengajuan-surat') }}" class="block px-4 py-2 hover:bg-gray-100">Pengajuan Surat</a>
                    <a href="{{ url('/layanan/laporan-masyarakat') }}" class="block px-4 py-2 hover:bg-gray-100">Laporan Masyarakat</a>
                    <a href="{{ url('/layanan/kegiatan-masyarakat') }}" class="block px-4 py-2 hover:bg-gray-100">Kegiatan Masyarakat</a>
                    <a href="{{ url('/layanan/informasi-desa') }}" class="block px-4 py-2 hover:bg-gray-100">Informasi Data Desa</a>
                    <a href="{{ url('/layanan/donasi-desa') }}" class="block px-4 py-2 hover:bg-gray-100">Donasi Desa</a>
                </div>
            </li>

            <li><a href="{{ url('/pengaduan') }}" class="hover:text-yellow-400 font-medium">Pengaduan</a></li>
            <li><a href="{{ url('/profil') }}" class="hover:text-yellow-400 font-medium">Profil</a></li>
        </ul>
    </nav>

    <!-- Konten -->
    <!-- Konten -->
<main class="flex-grow">
    @yield('content')
</main>


    <!-- Footer -->
    <footer class="bg-emerald-900 text-white py-8 shadow-inner">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
            <!-- Logo -->
            <div class="flex flex-col items-center md:items-start">
                <h2 class="text-lg font-bold text-yellow-400 mb-2">LAPOR DESA</h2>
                <img src="{{ asset('images/konoha.merah.jpg') }}" alt="Logo Desa" class="w-20 h-20">
                <p class="text-sm text-gray-300 mb-3">Layanan Aspirasi & Pengaduan Masyarakat Desa</p>
            </div>
            <!-- Kontak -->
            <div class="text-center md:text-left">
                <h3 class="text-yellow-400 font-semibold mb-2">Kontak</h3>
                <p><span class="font-semibold">Alamat:</span> Jl. Raya Desa No.123, Salatiga</p>
                <p><span class="font-semibold">Telepon:</span> +62 812 3456 7890</p>
                <p><span class="font-semibold">Email:</span> lapordesa@example.com</p>
            </div>
            <!-- Hak Cipta -->
            <div class="text-center md:text-right">
                <p>&copy; {{ date('Y') }} <span class="text-yellow-400">Lapor Desa</span>.</p>
                <p class="text-sm text-gray-300">Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

</body>
</html>
