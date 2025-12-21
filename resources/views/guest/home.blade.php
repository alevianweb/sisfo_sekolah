@extends('layouts.app')

@section('title', 'Beranda - Sistem Manajemen Sekolah')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Hero Section -->
<section 
    class="relative bg-cover bg-center min-h-[600px] flex items-center"
    style="background-image: url('{{ asset('wajah_depan.jpg') }}');"
>
    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Konten -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Membangun Generasi Berprestasi, Berkarakter, dan Berwawasan Global.
                </h1>

                <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed">
                    Bersama melangkah menuju masa depan yang lebih maju dan berdaya saing.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/ppdb" class="bg-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition text-center">
                        Daftar Sekarang
                    </a>
                    <a href="#profil" class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition text-center">
                        Lihat Profil
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Stats Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">1500+</div>
                <div class="text-gray-600">Siswa Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">85+</div>
                <div class="text-gray-600">Guru Profesional</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">95%</div>
                <div class="text-gray-600">Tingkat Kelulusan</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-gray-600">Prestasi</div>
            </div>
        </div>
    </div>
</section>

<!-- Profil Section -->
<section id="profil" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Profil Sekolah</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                SMP Negeri 2 Brebes adalah lembaga pendidikan unggulan yang berkomitmen menghasilkan lulusan berkualitas
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-book-open text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Kurikulum Merdeka</h3>
                <p class="text-gray-600">
                    Menerapkan kurikulum terkini yang mendorong kreativitas dan inovasi siswa
                </p>
            </div>
            
            <div class="card text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-person-chalkboard text-green-600 text-2xl"></i>
                </div>

                <h3 class="text-xl font-semibold mb-3">Guru Berkualitas</h3>
                <p class="text-gray-600">
                    Tenaga pengajar profesional dan berpengalaman di bidangnya
                </p>
            </div>
            
            <div class="card text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-trophy text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Berprestasi</h3>
                <p class="text-gray-600">
                    Raih berbagai prestasi akademik dan non-akademik tingkat nasional
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi Section -->
<section id="visi-misi" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-eye text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold">Visi</h3>
                </div>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Unggul Dalam Prestasi Berdasarkan Sumber Daya Lingkungan Dengan Berlandaskan Budaya Bangsa
                </p>
            </div>
            
            <div class="card">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-bullseye text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold">Misi</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span>Menyelenggarakan pendidikan berkualitas dengan kurikulum modern</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span>Membentuk karakter siswa yang berakhlak mulia dan bertanggung jawab</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span>Mengembangkan prestasi akademik dan non-akademik siswa</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-600 mt-1"></i>
                        <span>Membangun lingkungan belajar yang kondusif dan inovatif</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Section -->
<section id="galeri" class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <!-- Judul -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                Galeri Kegiatan Sekolah
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Dokumentasi berbagai kegiatan akademik dan non-akademik di sekolah kami.
            </p>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            @php
                $galeri = [
                    'galeri/home1.jpeg',
                    'galeri/home2.jpg',
                    'galeri/home3.jpeg',
                    'galeri/home4.jpeg',
                    'galeri/home5.jpg',
                    'galeri/home6.jpg',
                    'galeri/home7.jpeg',
                    'galeri/home9.jpg',
                ];
            @endphp

            @foreach ($galeri as $foto)
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img 
                        src="{{ asset($foto) }}" 
                        alt="Galeri Sekolah"
                        class="w-full h-60 object-cover transform group-hover:scale-110 transition duration-500"
                    >

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-0 
                                group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold opacity-0 group-hover:opacity-100 transition">
                        </span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Bergabung Bersama Kami?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Daftarkan diri Anda sekarang melalui sistem Penerimaan Peserta Didik Baru (PPDB) online kami
        </p>
        <a href="/ppdb" class="inline-block bg-white text-blue-600 px-10 py-4 rounded-lg font-bold text-lg hover:bg-blue-50 transition">
            Daftar PPDB Sekarang
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-800 text-white sm:px-6 py-2 md:py-6">
    <div class="container mx-auto px-5  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="flex w-full  items-center justify-center md:justify-start">
            <img src="{{asset('logo.webp')}}" class="md:w-3/4  w-1/2" alt="">
        </div>
        <div class="grid grid-cols-1 gap-2 px-4">
            <div class="flex flex-col gap-2">
                <h5 class="text-lg font-semibold">Alamat Sekolah</h5>
                <p class="mt-2 text-sm">42FW+RFH, Jl. Veteran, Kaumanbaru, Brebes, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52212</p>
            </div>
            <div class="flex flex-col gap-2 ">
                <h5 class="text-lg font-semibold">Pelayanan</h5>
                <p class="mt-2 text-sm">Senin sd Sabtu 07:00 - 14:00</p>
            </div>
        </div>
        <div class="px-4">
            <h5 class="text-lg font-semibold">Informasi Kontak</h5>
            <p class="mt-2 text-sm"><i class="fa-solid fa-phone-volume"></i> (0283) 671219</p>
            <p class="mt-2 text-sm"><i class="fa-regular fa-envelope"></i> smpn02brebes@example.com</p>
            <div class="flex gap-4 items-center text-xl mt-4">
                <a href="https://www.instagram.com/smpn2brebes?igsh=bmkzaG03Mm9mbHlt" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram text-md"></i>
                </a>
                <a href="https://x.com/smpn02brebes?s=11" target="_blank" rel="noopener noreferrer">
                    <!-- Replace # with the link for the "X" platform -->
                    <i class="fa-solid fa-x text-md"></i>
                </a>
                <a href="https://youtube.com/@officialsmpnegeri2brebes243?si=Bb7BZlDlB51qiQoM" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-youtube text-md"></i>
                </a>
                <a href="https://www.facebook.com/share/1Bnh5fE514/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook text-md"></i>
                </a>
            </div>

        </div>
        <div class="px-4">
            <iframe class="w-full aspect-video h-full" loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.793473984515!2d110.41579349999999!3d-6.985898799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fba7e1434fff9%3A0xe56efd917d119d1c!2sSMP%20Negeri%202%20Brebes!5e0!3m2!1sid!2sid!4v1765117249409!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="SMP Negeri 2 Brebes" aria-label="SMP Negeri 2 Brebes"></iframe>
        </div>
    </div>
    <div class="mt-4 text-center text-sm">
        <p>Copyright © 2025 SMP Negeri 2 Brebes </p>
    </div>
</footer>
@endsection
