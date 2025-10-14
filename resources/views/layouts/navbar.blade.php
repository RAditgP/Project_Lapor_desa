<!DOCTYPE html>
<html lang="id" x-data="{ open: false, layanan: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lapor Desa')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    @vite('resources/css/app.css')
</head>
<body class="bg-emerald-50 font-sans min-h-screen flex flex-col">

    <!-- Header -->
    <header class="flex justify-between items-center bg-emerald-900 text-white px-6 py-4">
        <div class="font-extrabold text-2xl tracking-wide text-yellow-400">LAPOR DESA</div>
       
        <!-- Tombol hamburger -->
        <button @click="open = !open" class="sm:hidden text-yellow-400 focus:outline-none text-2xl">
            ☰
        </button>
    </header>

    <!-- Navbar -->
    <nav class="bg-emerald-800 text-white z-50 sticky top-0 w-full">
        <!-- Menu Desktop -->
        <ul class="hidden sm:flex justify-center space-x-8 items-center py-3">
            <li><a href="{{ url('/') }}" class="hover:text-yellow-400 font-medium">Beranda</a></li>
            <li><a href="{{ url('/pengumuman') }}" class="hover:text-yellow-400 font-medium">Pengumuman</a></li>

            <!-- Dropdown desktop -->
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

            @auth
                @if(auth()->user()->role === 'admin')
                    <li><a href="{{ route('admin.dashboard') }}" class="hover:text-yellow-400 font-medium">Admin</a></li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-yellow-400 font-medium">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}" class="hover:text-yellow-400 font-medium">Login</a></li>
            @endauth
        </ul>

        <!-- Menu Mobile -->
        <div x-show="open" x-transition class="sm:hidden bg-emerald-700 text-white flex flex-col py-3 px-6 space-y-2">
            <a href="{{ url('/') }}" class="hover:text-yellow-400">Beranda</a>
            <a href="{{ url('/pengumuman') }}" class="hover:text-yellow-400">Pengumuman</a>

            <!-- Dropdown mobile -->
            <div x-data="{ openSub: false }">
                <button @click="openSub = !openSub" class="flex items-center justify-between w-full hover:text-yellow-400">
                    <span>Layanan Online</span>
                    <svg class="w-4 h-4 transform transition-transform duration-300"
                         :class="{ 'rotate-180': openSub }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="openSub" x-transition class="pl-4 mt-2 flex flex-col space-y-1 text-sm">
                    <a href="{{ url('/layanan/pengajuan-surat') }}" class="hover:text-yellow-400">Pengajuan Surat</a>
                    <a href="{{ url('/layanan/laporan-masyarakat') }}" class="hover:text-yellow-400">Laporan Masyarakat</a>
                    <a href="{{ url('/layanan/kegiatan-masyarakat') }}" class="hover:text-yellow-400">Kegiatan Masyarakat</a>
                    <a href="{{ url('/layanan/informasi-desa') }}" class="hover:text-yellow-400">Informasi Data Desa</a>
                    <a href="{{ url('/layanan/donasi-desa') }}" class="hover:text-yellow-400">Donasi Desa</a>
                </div>
            </div>

            <a href="{{ url('/pengaduan') }}" class="hover:text-yellow-400">Pengaduan</a>
            <a href="{{ url('/profil') }}" class="hover:text-yellow-400">Profil</a>

            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-yellow-400">Admin</a>
                @endif
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-yellow-400">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:text-yellow-400">Login</a>
            @endauth
        </div>
    </nav>

    <!-- Konten -->
    <main class="flex-grow bg-emerald-50">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-emerald-900 text-white py-10 mt-0">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kolom 1 -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <h2 class="text-lg font-bold text-yellow-400 mb-3">LAPOR DESA</h2>
                <img src="{{ asset('images/logo.png') }}" alt="Logo Desa" class="w-20 h-auto mb-3">
                <p class="text-sm text-gray-300 leading-relaxed">
                    Layanan Aspirasi & Pengaduan Masyarakat Desa — wadah untuk menyampaikan ide, kritik, dan saran demi kemajuan bersama.
                </p>
            </div>

            <!-- Kolom 2 -->
            <div class="flex flex-col justify-center text-center md:text-left">
                <h3 class="text-yellow-400 font-semibold text-lg mb-3">Kontak</h3>
                <p><span class="font-semibold">Alamat:</span> Jl. Raya Desa No.123, Salatiga</p>
                <p><span class="font-semibold">Telepon:</span> +62 812 3456 7890</p>
                <p><span class="font-semibold">Email:</span> lapordesa@example.com</p>
            </div>

            <!-- Kolom 3 -->
            <div class="flex flex-col items-center md:items-end justify-center text-center md:text-right">
                <p class="text-sm mb-1">
                    &copy; {{ date('Y') }} <span class="text-yellow-400 font-semibold">Lapor Desa</span>.
                </p>
                <p class="text-gray-300 text-sm">Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Font Awesome & Alpine.js -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
