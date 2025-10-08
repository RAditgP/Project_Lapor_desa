<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - LAPOR DESA')</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-800 font-inter antialiased">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="bg-emerald-800 text-white w-64 flex flex-col transition-all duration-300"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64 md:translate-x-0'">

            {{-- Header --}}
            <div class="p-5 border-b border-emerald-700">
                <h1 class="text-2xl font-bold tracking-wide text-center">LAPOR DESA</h1>
                <p class="text-xs text-center text-emerald-200">Admin Panel</p>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 p-4 space-y-1">
                <a href="{{ url('/admin/dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/dashboard')) bg-emerald-700 @endif">
                    🏠 <span>Dashboard</span>
                </a>
                <a href="{{ url('/admin/pengumuman') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/pengumuman*')) bg-emerald-700 @endif">
                    📢 <span>Kelola Pengumuman</span>
                </a>
                <a href="{{ url('/admin/pengaduan') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/pengaduan*')) bg-emerald-700 @endif">
                    📝 <span>Pengaduan</span>
                </a>
                <a href="{{ url('/admin/layanan') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/layanan*')) bg-emerald-700 @endif">
                    ⚙️ <span>Layanan Online</span>
                </a>
                <a href="{{ url('/admin/laporan-masyarakat') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition 
    @if(Request::is('admin/laporan-masyarakat*')) bg-emerald-700 @endif">
                    📋 <span>Laporan Masyarakat</span>
                </a>

                <a href="{{ url('/admin/kegiatan-masyarakat') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition 
    @if(Request::is('admin/kegiatan-masyarakat*')) bg-emerald-700 @endif">
                    🎉 <span>Kegiatan Masyarakat</span>
                </a>


            </nav>

            {{-- Tombol Logout --}}
            <div class="p-4 border-t border-emerald-700">
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition">
                        🚪 Logout
                    </button>
                </form>
            </div>
        </aside>

        {{-- MAIN CONTENT --}}
        <div class="flex-1 flex flex-col">

            {{-- HEADER --}}
            <header class="bg-white shadow-sm px-6 py-3 flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-700">
                        ☰
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-sm text-gray-600 hidden md:block text-right">
                        <p class="font-semibold text-emerald-700">{{ Auth::user()->name ?? 'Admin' }}</p>
                        <p class="text-xs">{{ now()->translatedFormat('l, d F Y') }}</p>
                    </div>
                </div>
            </header>

            {{-- CONTENT --}}
            <main class="flex-1 p-6 space-y-6">
                @yield('content')
            </main>

            {{-- FOOTER --}}
            <footer class="bg-emerald-900 text-emerald-100 text-center py-3 text-sm">
                © {{ now()->year }} LAPOR DESA — Semua Hak Dilindungi
            </footer>
        </div>
    </div>

</body>

</html>