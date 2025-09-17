<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lapor Desa')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">

    <!-- Header -->
    <header class="flex justify-between items-center bg-emerald-900 text-white px-6 py-4 shadow-lg">
        <div class="font-extrabold text-2xl tracking-wide text-yellow-400">LAPOR DESA</div>
        <div>
            <input type="text" placeholder="Search..."
                   class="px-3 py-1 rounded border border-emerald-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 text-black">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-emerald-800 text-white flex justify-center space-x-8 py-3 shadow-md">
        <a href="{{ url('/') }}" class="hover:text-yellow-400 font-medium">Beranda</a>
        <a href="{{ url('/pengumuman') }}" class="hover:text-yellow-400 font-medium">Pengumuman</a>
        <a href="{{ url('/layanan') }}" class="hover:text-yellow-400 font-medium">Layanan Online</a>
         <a href="{{ url('/pengaduan') }}" class="hover:text-yellow-400 font-medium">Pengaduan</a>
        <a href="{{ url('/profil') }}" class="hover:text-yellow-400 font-medium">Profil</a>
    </nav>

    <!-- Konten Dinamis -->
    <main class="px-6 py-8">
        @yield('content')
    </main>

   <!-- Footer -->
<footer class="bg-emerald-900 text-white py-8 mt-6 shadow-inner">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo Desa -->
        <div class="flex flex-col items-center md:items-start">
            <img src="{{ asset('images/logo-desa.png') }}" alt="Logo Desa" class="w-20 h-20 mb-3">
            <h2 class="text-lg font-bold text-yellow-400">LAPOR DESA</h2>
            <p class="text-sm text-gray-300">Layanan Aspirasi & Pengaduan Masyarakat Desa</p>
        </div>

        <!-- Kontak -->
        <div class="text-center md:text-left">
            <h3 class="text-yellow-400 font-semibold mb-2">Kontak</h3>
            <p><span class="font-semibold">Alamat:</span> Jl. Raya Desa No.123, Salatiga</p>
            <p><span class="font-semibold">Telepon:</span> +62 812 3456 7890</p>
            <p><span class="font-semibold">Email:</span> lapordesa@example.com</p>
        </div>

        <!-- Copyright -->
        <div class="flex flex-col justify-center text-center md:text-right">
            <p>&copy; {{ date('Y') }} <span class="text-yellow-400">Lapor Desa</span>.</p>
            <p class="text-sm text-gray-300">Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>


</body>
</html>
