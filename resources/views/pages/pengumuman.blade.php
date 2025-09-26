@extends('layouts.navbar')

@section('title', 'Pengumuman')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-emerald-700 mb-6">Pengumuman Desa</h1>
        <p class="text-center text-gray-600 mb-8">
            Daftar pengumuman terbaru dari perangkat desa.
        </p>

        <!-- Daftar Pengumuman -->
        <div class="space-y-6">

            <!-- Contoh Pengumuman 1 -->
            <div class="border-b border-gray-200 pb-4">
                <p class="text-sm text-gray-500 mb-1">
                    <span class="font-semibold text-emerald-600">Tanggal:</span> 25 September 2025
                </p>
                <h3 class="text-xl font-bold text-emerald-700 mb-2">
                    <a href="#" class="hover:underline">Pemberitahuan Jadwal Pemilu Kepala Desa</a>
                </h3>
                <div class="rounded-lg overflow-hidden">
                    <img src="images/PEMIGE.png"
                        alt="" class="w-50 h-60 ">

                    <p class="text-gray-600">
                        Diberitahukan kepada seluruh warga Desa Konoha, bahwa Pemilihan Kepala Desa akan dilaksanakan pada tanggal 10 Oktober 2025. Dimohon kehadirannya di tempat pemungutan suara masing-masing.
                    </p>
                </div>

                <!-- Contoh Pengumuman 2 -->
                <div class="border-b border-gray-200 pb-4">
                    <p class="text-sm text-gray-500 mb-1">
                        <span class="font-semibold text-emerald-600">Tanggal:</span> 20 September 2025
                    </p>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a>Sosialisasi Program Bantuan UMKM</a>
                    </h3>
                    <p class="text-gray-600">
                        Kantor Desa Konoha akan mengadakan sosialisasi mengenai program bantuan modal usaha bagi UMKM. Acara akan dilaksanakan pada hari Sabtu, 28 September 2025, pukul 09.00 WIB di Balai Desa.
                    </p>
                </div>

                <!-- Contoh Pengumuman 3 -->
                <div class="border-b border-gray-200 pb-4">
                    <p class="text-sm text-gray-500 mb-1">
                        <span class="font-semibold text-emerald-600">Tanggal:</span> 15 September 2025
                    </p>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a href="#" class="hover:underline">Kerja Bakti Rutin Lingkungan</a>
                    </h3>
                    <p class="text-gray-600">
                        Seluruh warga RT 01 dan RT 02 diimbau untuk mengikuti kerja bakti rutin yang akan diadakan pada hari Minggu, 22 September 2025, mulai pukul 07.00 WIB.
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <p class="text-sm text-gray-500 mb-1">
                        <span class="font-semibold text-emerald-600">Tanggal:</span> 24 September 2025
                    </p>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a>Pendaftaran Akademi Ninja Dibuka!</a>
                    </h3>
                    <p class="text-gray-600">
                        Waktunya para calon shinobi muda menunjukkan tekad api dalam diri! 🔥
                        Pendaftaran untuk angkatan baru Akademi Ninja Konoha akhirnya resmi dibuka. Buat kalian yang bercita-cita jadi pelindung desa, inilah langkah pertama menuju jalan ninja yang sesungguhnya.

                        Pendaftaran bisa dilakukan langsung di kantor Hokage setiap hari kerja mulai jam 08.00 sampai 15.00. Syaratnya sederhana kok: minimal berusia 7 tahun, sehat jasmani dan rohani, serta membawa izin dari orang tua atau wali. Nantinya akan ada tes dasar seperti ketahanan fisik, kelincahan, dan sedikit latihan pengendalian chakra.

                        Jangan ragu, jangan tunggu lama-lama. Daftarkan dirimu sekarang juga dan jadilah bagian dari generasi penerus Konohagakure!
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <p class="text-sm text-gray-500 mb-1">
                        <span class="font-semibold text-emerald-600">Tanggal:</span> 15 September 2025
                    </p>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a>Festival Musim Gugur Desa Konoha</a>
                    </h3>
                    <p class="text-gray-600">
                        Halo warga Konoha! 🍂✨
                        Musim gugur kali ini bakal lebih seru karena Festival Musim Gugur tahunan segera hadir kembali. Seperti biasa, festival ini akan penuh dengan warna, tawa, dan momen kebersamaan yang sayang kalau dilewatkan.

                        Akan ada banyak keseruan, mulai dari parade budaya shinobi, pertunjukan musik dan tarian, stand makanan khas musim gugur, sampai lomba-lomba seru untuk anak-anak maupun orang dewasa. Dan jangan lupa, malam puncaknya akan ditutup dengan pesta kembang api yang pastinya bikin merinding kagum.

                        Catat tanggalnya ya: 15 Oktober 2025 di Lapangan Utama Desa Konoha, mulai dari pagi hingga malam. Yuk ajak keluarga, teman, dan sahabatmu untuk merayakan musim gugur bareng-bareng di festival yang paling ditunggu-tunggu setiap tahun ini!
                </div>

                <div class="border-b border-gray-200 pb-4">
                    <p class="text-sm text-gray-500 mb-1">
                        <span class="font-semibold text-emerald-600">Tanggal:</span> 10 September 2025
                    </p>
                    <h3 class="text-xl font-bold text-emerald-700 mb-2">
                        <a>Program Kebersihan Sungai Naka
                        </a>
                    </h3>
                    <p class="text-gray-600">
                        Akhir pekan ini kita punya agenda penting: gotong royong kebersihan Sungai Naka. Sungai adalah sumber kehidupan desa kita, jadi sudah sepatutnya kita jaga bersama supaya tetap bersih, indah, dan bermanfaat bagi semua warga.

                        Kegiatannya akan berlangsung pada Minggu, 28 September 2025, mulai jam 07.00 pagi. Titik kumpul ada di tepi Sungai Naka dekat Jembatan Utara. Jangan lupa bawa perlengkapan sederhana seperti sarung tangan, karung sampah, atau alat kebersihan lain. Tenang, pihak desa juga sudah siapkan peralatan tambahan dan konsumsi untuk semua peserta.

                        Yuk tunjukkan semangat gotong royong kita! Dengan bersama-sama, Sungai Naka bisa kembali jernih, sehat, dan jadi kebanggaan desa Konoha. Jangan sampai absen ya! </p>
                </div>

                <!-- Kamu bisa menambahkan lebih banyak pengumuman di sini -->

            </div>
        </div>
    </div>
    @endsection