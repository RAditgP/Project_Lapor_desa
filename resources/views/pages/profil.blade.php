@extends('layouts.navbar')

@section('content')
<!-- Tentang Desa -->
<section id="tentang" class="py-24 bg-gray-50 relative overflow-hidden">
    <!-- Parallax Background -->
    <div class="absolute inset-0 bg-fixed bg-center bg-cover opacity-10"
         style="background-image: url('{{ asset('images/beranda.jpg') }}');"></div>

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center px-6 relative z-10">
        <!-- Teks -->
        <div data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6 border-l-8 border-green-600 pl-4">
                Tentang Desa Cepogo
            </h2>

            <div class="space-y-5 leading-relaxed text-gray-700 text-lg">
                <p>
                    Desa Cepogo adalah salah satu desa yang terletak di lereng <b>Gunung Merapi</b>, Kecamatan <b>Cepogo</b>, 
                    Kabupaten <b>Boyolali</b>, Provinsi <b>Jawa Tengah</b>. Dengan udara sejuk dan panorama alam yang indah, 
                    Desa Cepogo dikenal sebagai wilayah yang subur serta memiliki masyarakat yang ramah dan menjunjung tinggi 
                    semangat gotong royong.
                </p>
                <p>
                    Secara geografis, desa ini berada di daerah perbukitan dengan kondisi tanah yang sangat mendukung untuk 
                    sektor <b>pertanian</b> dan <b>perkebunan</b>. Selain itu, Cepogo juga terkenal sebagai 
                    <b>sentra kerajinan logam</b>, khususnya tembaga dan kuningan, yang sudah dikenal hingga mancanegara—terutama 
                    di kawasan <b>Tumang</b>, yang menjadi ikon industri kreatif masyarakat setempat.
                </p>
                <p>
                    Warga Desa Cepogo hidup dalam harmoni antara kearifan lokal dan kemajuan zaman. Tradisi, kebersamaan, 
                    serta rasa cinta terhadap alam tetap dijaga di tengah perkembangan ekonomi dan teknologi. 
                    Dengan potensi alam, budaya, dan sumber daya manusia yang unggul, Desa Cepogo terus berupaya menjadi 
                    <b>desa mandiri, maju, dan berdaya saing</b>, tanpa meninggalkan nilai-nilai luhur warisan leluhur.
                </p>
            </div>
        </div>
        <!-- Gambar -->
        <div data-aos="fade-left" data-aos-duration="1000">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl group transform hover:scale-105 transition duration-700">
                <img src="{{ asset('images/profil.jpg') }}" 
                     alt="Desa Cepogo" 
                     class="rounded-2xl shadow-2xl w-full h-[500px] object-cover">
                <div class="absolute inset-0 rounded-2xl ring-4 ring-green-600/40 group-hover:ring-green-500/60"></div>
            </div>
        </div>
    </div>
</section>

<!-- Visi, Misi, Tujuan -->
<section class="py-24 bg-gradient-to-b from-white to-gray-100" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-14">
            Visi, Misi, dan Tujuan
        </h2>
        <div class="grid md:grid-cols-3 gap-10">
            <!-- Visi -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-green-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-500">
                <h3 class="text-2xl font-bold text-green-600 mb-4">Visi</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Mewujudkan Desa Cepogo yang mandiri, maju, sejahtera, dan berdaya saing dengan tetap menjaga kearifan lokal.
                </p>
            </div>
            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-blue-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-500">
                <h3 class="text-2xl font-bold text-blue-600 mb-4">Misi</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-lg">
                    <li>Meningkatkan kesejahteraan masyarakat melalui sektor pertanian dan kerajinan.</li>
                    <li>Menjaga kelestarian alam dan lingkungan sekitar.</li>
                    <li>Mengembangkan potensi wisata dan industri kreatif.</li>
                    <li>Menumbuhkan semangat gotong royong dan kebersamaan warga.</li>
                </ul>
            </div>
            <!-- Tujuan -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border-t-8 border-yellow-500 
                        hover:shadow-2xl hover:-translate-y-2 transform transition duration-500">
                <h3 class="text-2xl font-bold text-yellow-600 mb-4">Tujuan</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Meningkatkan kualitas hidup masyarakat melalui pembangunan yang berkelanjutan di bidang ekonomi, sosial, 
                    dan budaya dengan tetap mempertahankan identitas desa yang harmonis dan berdaya.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Struktur Pemerintahan Desa -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white" 
         x-data="{show:false,nama:'',jabatan:'',img:''}" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12 tracking-wide">
            Struktur Pemerintahan Desa Cepogo
        </h2>

        <div class="flex gap-6 overflow-x-auto pb-6 px-2 snap-x">
            @php
                $strukturDesa = [
                    ['img' => 'images/kades.jpg', 'nama' => 'Bapak Suyatno', 'jabatan' => 'Kepala Desa'],
                    ['img' => 'images/sekdes.jpg', 'nama' => 'Ibu Siti Rahmawati', 'jabatan' => 'Sekretaris Desa'],
                    ['img' => 'images/kaum.jpg', 'nama' => 'Bapak Andi Prasetyo', 'jabatan' => 'Kaur Umum & Perencanaan'],
                    ['img' => 'images/karung.jpg', 'nama' => 'Ibu Lina Kartika', 'jabatan' => 'Kaur Keuangan'],
                    ['img' => 'images/kaper.jpg', 'nama' => 'Bapak Rudi Santoso', 'jabatan' => 'Kasi Pemerintahan'],
                    ['img' => 'images/kapel.jpg', 'nama' => 'Ibu Dewi Astuti', 'jabatan' => 'Kasi Pelayanan'],
                    ['img' => 'images/kadus 1.jpg', 'nama' => 'Bapak Budi Haryanto', 'jabatan' => 'Kepala Dusun I'],
                    ['img' => 'images/kadus2.jpg', 'nama' => 'Bapak Tono Supriyadi', 'jabatan' => 'Kepala Dusun II'],
                ];
            @endphp

            @foreach ($strukturDesa as $p)
                <div class="min-w-[240px] snap-center group cursor-pointer"
                     @click="nama='{{ $p['nama'] }}';jabatan='{{ $p['jabatan'] }}';img='{{ asset($p['img']) }}';show=true">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl transition-transform duration-500 group-hover:scale-105">
                        <img src="{{ asset($p['img']) }}" alt="{{ $p['nama'] }}" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent 
                                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                            <p class="text-white text-xl font-bold">{{ $p['nama'] }}</p>
                            <p class="text-gray-200 text-sm">{{ $p['jabatan'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal Detail Perangkat Desa -->
    <div x-show="show" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50" x-transition>
        <div x-show="show" x-transition.scale.origin.center>
            <div class="bg-white rounded-2xl shadow-lg max-w-4xl w-full p-6 relative grid md:grid-cols-2 gap-6">
                <button class="absolute top-3 right-3 text-gray-500 hover:text-black" @click="show=false">✖</button>
                
                <div>
                    <img :src="img" alt="Foto Perangkat Desa" class="w-full h-80 object-cover rounded-xl shadow-md">
                </div>
                
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-2 text-gray-800" x-text="nama"></h2>
                    <p class="text-green-600 font-semibold text-lg mb-3" x-text="jabatan"></p>
                    <p class="text-gray-700 leading-relaxed">
                        Perangkat Desa Cepogo memiliki peran penting dalam melaksanakan roda pemerintahan, 
                        memberikan pelayanan publik, serta mendorong pembangunan yang berkelanjutan 
                        untuk kesejahteraan seluruh masyarakat Desa Cepogo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Kontak & Lokasi -->
<section class="py-24 bg-gray-100" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-8">Kontak & Lokasi</h2>
        <p class="mb-8 text-gray-700 text-lg">
            Alamat: Desa Cepogo, Kecamatan Cepogo, Kabupaten Boyolali, Jawa Tengah
        </p>
        <div class="rounded-2xl overflow-hidden shadow-2xl ring-4 ring-green-600/30">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.221323623178!2d110.584!3d-7.545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6f4a0e7ed5ad%3A0xabcdef!2sCepogo%2C%20Boyolali!5e0!3m2!1sid!2sid!4v1630482462483!5m2!1sid!2sid" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- Tambahkan animasi AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
    document.addEventListener('DOMContentLoaded', () => AOS.init());
</script>
@endsection
