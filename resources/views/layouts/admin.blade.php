<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - LAPOR DESA')</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 font-inter antialiased">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="bg-emerald-800 text-white w-64 flex flex-col fixed inset-y-0 z-30 transform transition-transform duration-300 ease-in-out md:translate-x-0"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'">

            {{-- Header --}}
            <div class="p-5 border-b border-emerald-700 flex items-center justify-center flex-col">
                <h1 class="text-2xl font-bold tracking-wide">LAPOR DESA</h1>
                <p class="text-xs text-emerald-200">Admin Panel</p>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 overflow-y-auto p-4 space-y-2">
                {{-- Dashboard --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/dashboard')) bg-emerald-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9.75L12 3l9 6.75V21a.75.75 0 01-.75.75H3.75A.75.75 0 013 21V9.75z" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                {{-- Pengumuman --}}
                <a href="{{ route('admin.pengumuman.index') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/pengumuman*')) bg-emerald-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l9-5 9 5v6a9 9 0 01-9 9 9 9 0 01-9-9V8z" />
                    </svg>
                    <span>Kelola Pengumuman</span>
                </a>

                {{-- Pengaduan --}}
                <a href="{{ route('admin.pengaduan.index') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/pengaduan*')) bg-emerald-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h8M8 14h5m1 8a9 9 0 100-18 9 9 0 000 18z" />
                    </svg>
                    <span>Pengaduan</span>
                </a>

                {{-- Layanan --}}
                <a href="{{ route('admin.layanan.index') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/layanan*')) bg-emerald-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317a4.5 4.5 0 013.35 0l7.292 3.124a2 2 0 011.033 2.593l-7.292 16.49a2 2 0 01-3.65 0L2.067 10.034a2 2 0 011.033-2.593L10.392 4.3z" />
                    </svg>
                    <span>Pengajuan Surat</span>
                </a>

                {{-- Kegiatan --}}
                <a href="{{ route('admin.kegiatan-masyarakat.index') }}"
                    class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-700 transition @if(Request::is('admin/kegiatan-masyarakat*')) bg-emerald-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v8m4-4H8m10 10a9 9 0 100-18 9 9 0 000 18z" />
                    </svg>
                    <span>Kegiatan Masyarakat</span>
                </a>
            </nav>

            {{-- Tombol Logout --}}
            <div class="p-4 border-t border-emerald-700">
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                        </svg>
                        Keluar
                    </button>
                </form>
            </div>
        </aside>

        {{-- MAIN CONTENT --}}
        <div class="flex-1 flex flex-col md:ml-64 transition-all duration-300">

            {{-- HEADER --}}
            <header class="bg-white shadow-sm px-6 py-3 flex justify-between items-center sticky top-0 z-20">
                <div class="flex items-center gap-3">
                    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-emerald-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right">
                        <p class="font-semibold text-emerald-700">{{ Auth::user()->name ?? 'Admin' }}</p>
                        <p class="text-xs text-gray-500">{{ now()->translatedFormat('l, d F Y') }}</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-emerald-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A4 4 0 0112 15a4 4 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
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
