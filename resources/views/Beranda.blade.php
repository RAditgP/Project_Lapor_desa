<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lapor Desa')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="flex justify-between items-center bg-blue-800 text-white px-6 py-4">
        <div class="font-bold text-xl">LAPOR DESA</div>
        <div>
            <input type="text" placeholder="Search..."
                   class="px-3 py-1 rounded text-black">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white flex justify-center space-x-6 py-2">
        <a href="{{ url('/') }}" class="hover:underline">Beranda</a>
        <a href="{{ url('/pengumuman') }}" class="hover:underline">Pengumuman</a>
        <a href="{{ url('/layanan') }}" class="hover:underline">Layanan Online</a>
        <a href="{{ url('/kontak') }}" class="hover:underline">Kontak</a>
        <a href="{{ url('/profil') }}" class="hover:underline">Profil</a>
    </nav>

    <!-- Konten Dinamis -->
    <main class="px-6 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center py-4 mt-6">
        &copy; {{ date('Y') }} Lapor Desa. Semua Hak Dilindungi.
    </footer>

</body>
</html>