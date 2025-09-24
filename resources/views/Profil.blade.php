 @extends('layouts.navbar')

@section('content')
<!-- Tentang Desa -->
<section id="tentang" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center px-6">
        <!-- Teks -->
        <div class="animate-slide-in-left">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6 border-l-8 border-green-600 pl-4">
                Tentang Desa Konoha
            </h2>
            <div class="space-y-5 leading-relaxed text-gray-700 text-lg">
                <p>
                    Desa Konoha (Konohagakure no Sato) adalah salah satu desa ninja terkuat yang terletak di 
                    <b>Negara Api</b>. Desa ini berdiri setelah berakhirnya konflik panjang antar klan, 
                    ketika <b>Hashirama Senju</b> dari klan Senju dan <b>Madara Uchiha</b> dari klan Uchiha 
                    bersepakat mendirikan sebuah desa yang menjadi simbol perdamaian.
                </p>
                <p>
                    Seiring berjalannya waktu, Konoha tumbuh menjadi pusat peradaban ninja. Generasi muda 
                    ditempa di <b>Akademi Ninja</b> untuk menjadi shinobi tangguh, berdisiplin, dan menjunjung 
                    semangat kerja sama. Desa ini dipimpin oleh seorang <b>Hokage</b>, pelindung sekaligus 
                    panutan rakyatnya.
                </p>
                <p>
                    Walau sering menghadapi ancaman—mulai dari perang besar, serangan organisasi <b>Akatsuki</b>, 
                    hingga kehancuran akibat <b>Kyuubi</b>—Konoha selalu bangkit berkat semangat warganya 
                    dan kepemimpinan para Hokage.
                </p>
                <p>
                    Kini, di bawah kepemimpinan <b>Naruto Uzumaki</b>, Konoha memasuki era baru yang dipenuhi 
                    perdamaian, teknologi modern, serta persahabatan antar desa. Semangat <b>"Will of Fire"</b> 
                    tetap menjadi fondasi yang menjaga desa ini kokoh, bersatu, dan penuh harapan.
                </p>
            </div>
        </div>
        <!-- Gambar -->
        <div class="relative animate-slide-in-right">
            <img src="{{ asset('images/konoha12.jpg') }}" 
                 alt="Desa Konoha" 
                 class="rounded-2xl shadow-2xl w-full h-[500px] object-cover">
            <div class="absolute inset-0 rounded-2xl ring-4 ring-green-600/40"></div>
        </div>
    </div>
</section>

<!-- Visi, Misi, Tujuan -->
<section class="py-24 bg-gradient-to-b from-white to-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-14">
            Visi, Misi, dan Tujuan
        </h2>
        <div class="grid md:grid-cols-3 gap-10">
            <!-- Visi -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-green-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                <h3 class="text-2xl font-bold text-green-600 mb-4">Visi</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Menjadi desa shinobi yang damai, makmur, dan kuat, serta menjadi teladan bagi seluruh dunia ninja.
                </p>
            </div>
            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-blue-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                <h3 class="text-2xl font-bold text-blue-600 mb-4">Misi</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-lg">
                    <li>Melindungi warga dari segala ancaman.</li>
                    <li>Mengembangkan akademi ninja untuk generasi muda.</li>
                    <li>Menjaga hubungan baik dengan desa lain.</li>
                    <li>Menjunjung tinggi warisan para Hokage terdahulu.</li>
                </ul>
            </div>
            <!-- Tujuan -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-yellow-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-300">
                <h3 class="text-2xl font-bold text-yellow-600 mb-4">Tujuan</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Mewujudkan dunia shinobi yang damai, adil, dan sejahtera dengan Konoha sebagai pusat persatuan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Hokage (Tidak Diubah) -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12 tracking-wide">
            Galeri Hokage
        </h2>
        <div class="flex gap-6 overflow-x-auto pb-6 px-2 snap-x">
            @php
                $hokage = [
                    ['img' => 'images/hokage1.jpg', 'nama' => 'Hashirama Senju', 'ket' => 'Hokage Pertama, pendiri Konoha.'],
                    ['img' => 'images/hokage.jpg', 'nama' => 'Tobirama Senju', 'ket' => 'Hokage Kedua, pencipta banyak jutsu.'],
                    ['img' => 'images/hokage3.jpg', 'nama' => 'Hiruzen Sarutobi', 'ket' => 'Hokage Ketiga, profesor ninja.'],
                    ['img' => 'images/hokage4.jpg', 'nama' => 'Minato Namikaze', 'ket' => 'Hokage Keempat, Si Kilat Kuning.'],
                    ['img' => 'images/hokage5.jpg', 'nama' => 'Tsunade Senju', 'ket' => 'Hokage Kelima, Sannin legendaris.'],
                    ['img' => 'images/hokage6.jpg', 'nama' => 'Kakashi Hatake', 'ket' => 'Hokage Keenam, ninja copy seribu jutsu.'],
                    ['img' => 'images/hokage7.jpg', 'nama' => 'Naruto Uzumaki', 'ket' => 'Hokage Ketujuh, pahlawan perang ninja.'],
                ];
            @endphp

            @foreach ($hokage as $h)
                <div class="min-w-[240px] snap-center group">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl transition-transform duration-500 group-hover:scale-105">
                        <img src="{{ asset($h['img']) }}" alt="{{ $h['nama'] }}" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent 
                                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                            <p class="text-white text-xl font-bold">{{ $h['nama'] }}</p>
                            <p class="text-gray-200 text-sm">{{ $h['ket'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Kontak & Lokasi -->
<section class="py-24 bg-gray-100">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-8">Kontak & Lokasi</h2>
        <p class="mb-8 text-gray-700 text-lg">Alamat: Desa Konoha, Negara Api</p>
        <div class="rounded-2xl overflow-hidden shadow-2xl ring-4 ring-green-600/30">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198471.2694371987!2d139.6007838!3d35.6684415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf5d98c123f%3A0x2c09b6f0a7f4e4e!2sTokyo!5e0!3m2!1sid!2sid!4v1630482462483!5m2!1sid!2sid" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection
