@extends('layouts.navbar')

@section('content')
<div class="container py-4">

    <div class="card shadow border-0">
        <div class="card-body">

            {{-- Judul Utama --}}
            <h3 class="fw-bold text-desa border-desa mb-3">
                <i class="fas fa-university me-2"></i> Profil Desa Konoha
            </h3>

            <div class="row align-items-center">
                <div class="col-md-8">
                    <p>
    {{-- Tambahkan CSS khusus untuk warna hijau --}}
    <style>
        .text-desa {
            color: #006400 !important; /* Hijau tua */
        }
        .bg-desa {
            background-color: #006400 !important;
        }
        .border-desa {
            border-left: 5px solid #006400;
            padding-left: 10px;
        }
    </style>

                        Desa <strong>Konohagakure</strong>, atau dikenal sebagai <em>Desa Daun Tersembunyi</em>, 
                        merupakan salah satu desa ninja terkuat dalam dunia shinobi. Terletak di Negara Api 
                        (Hi no Kuni), Konoha dikenal sebagai pusat kekuatan militer, pendidikan ninja, dan 
                        memiliki sejarah panjang dalam menjaga perdamaian dunia.
                    </p>

                    {{-- Data Umum --}}
                    <h5 class="mt-3 text-desa border-desa">Data Umum Desa Konoha</h5>
                    <ul>
                        <li><strong>Jumlah Penduduk:</strong> ± 25.000 jiwa (ninja dan warga sipil)</li>
                        <li><strong>Luas Wilayah:</strong> ± 70 km²</li>
                        <li><strong>Potensi:</strong> Seni bela diri ninja (Taijutsu, Ninjutsu, Genjutsu), 
                            pendidikan shinobi di Akademi Ninja, perdagangan, serta pariwisata budaya 
                            (Monumen Hokage, Hutan Konoha, dan arena ujian Chūnin).
                        </li>
                    </ul>

                    {{-- Visi dan Misi --}}
                    <h5 class="mt-3 text-desa border-desa">Visi dan Misi</h5>
                    <p><strong>Visi:</strong> Menjadi desa ninja yang kuat, damai, dan sejahtera bagi seluruh warganya.</p>
                    <p><strong>Misi:</strong></p>
                    <ul>
                        <li>Melatih generasi muda ninja agar memiliki kemampuan dan loyalitas tinggi.</li>
                        <li>Menjaga ketertiban serta keamanan desa dari ancaman internal maupun eksternal.</li>
                        <li>Meningkatkan kesejahteraan masyarakat melalui perdagangan dan kerja sama antar desa.</li>
                        <li>Menjunjung tinggi nilai persahabatan, pengorbanan, dan perdamaian.</li>
                    </ul>

                    {{-- Sejarah Singkat --}}
                    <h5 class="mt-3 text-desa border-desa">Sejarah Singkat</h5>
                    <p>
                        Desa Konoha didirikan oleh <strong>Hashirama Senju</strong> dan <strong>Madara Uchiha</strong> 
                        setelah berakhirnya peperangan panjang antar klan. Sejak saat itu, Konoha dipimpin oleh 
                        seorang Hokage yang melambangkan pelindung desa. 
                        Hingga kini, desa telah memiliki beberapa Hokage yang berjasa besar dalam menjaga 
                        kedamaian dan kejayaan Konoha.
                    </p>

                    {{-- Tokoh Penting --}}
                    <h5 class="mt-3 text-desa border-desa">Tokoh-Tokoh Penting</h5>
                    <ul>
                        <li><strong>Hashirama Senju</strong> – Hokage Pertama, pendiri desa.</li>
                        <li><strong>Hiruzen Sarutobi</strong> – Hokage Ketiga, dikenal sebagai "Profesor Ninja".</li>
                        <li><strong>Minato Namikaze</strong> – Hokage Keempat, berjuluk "Kilatan Kuning Konoha".</li>
                        <li><strong>Tsunade Senju</strong> – Hokage Kelima, ahli medis legendaris.</li>
                        <li><strong>Naruto Uzumaki</strong> – Hokage Ketujuh, pahlawan Perang Dunia Ninja Keempat.</li>
                    </ul>
                </div>

                {{-- Gambar Desa --}}
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/konoha.jpg') }}" alt="Gambar Desa Konoha" 
                         class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
