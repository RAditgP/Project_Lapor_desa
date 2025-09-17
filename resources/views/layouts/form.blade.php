<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Form - Lapor Desa')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-emerald-900 text-white px-6 py-4 shadow-lg flex justify-between items-center">
        <h1 class="text-xl font-bold text-yellow-400">LAPOR DESA</h1>
        <span class="italic text-sm">Formulir Layanan Masyarakat</span>
    </header>

    <!-- Konten Form -->
    <main class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-emerald-900 text-white text-center py-4 mt-6">
        <p class="text-sm">
            &copy; {{ date('Y') }} Lapor Desa | <span class="text-yellow-400">Pengaduan & Layanan Desa</span>
        </p>
    </footer>

</body>
</html>
