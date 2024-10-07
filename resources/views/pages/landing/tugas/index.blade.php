@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Tugas dan Fungsi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Tugas dan Fungsi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tugas dan Fungsi</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <p class="lh-lg">
                Tugas dan fungsi pokok perpustakaan perguruan tinggi sangat penting dalam mendukung
                kegiatan akademik, penelitian, dan pengembangan keterampilan informasi. Berikut adalah penjelasan
                mengenai tugas dan fungsi pokok perpustakaan perguruan tinggi :
            </p>

            <strong class="mb-2 d-block">1. Pengadaan dan Pengelolaan Koleksi</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Pengadaan Koleksi:</span> Mengumpulkan buku, jurnal, majalah, dan sumber informasi
                    lainnya
                    yang relevan dengan kurikulum dan bidang penelitian di perguruan tinggi.</li>
                <li><span class="fw-bold">Pengelolaan Koleksi:</span> Menyusun, menyimpan, dan merawat koleksi perpustakaan
                    baik
                    dalam bentuk fisik maupun digital. Ini termasuk katalogisasi, klasifikasi, dan pengelolaan
                    inventaris.</li>
            </ul>

            <strong class="mb-2 d-block">2. Layanan Referensi dan Informasi</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Bantuan Penelitian: </span> Memberikan dukungan kepada mahasiswa dan dosen dalam
                    menemukan sumber informasi yang dibutuhkan untuk penelitian, tugas akhir, atau karya
                    ilmiah.</li>
                <li><span class="fw-bold">Layanan Referensi:</span> Menyediakan layanan tanya jawab, bimbingan pencarian
                    informasi,
                    dan pelatihan dalam menggunakan katalog dan database informasi.</li>
            </ul>

            <strong class="mb-2 d-block">3. Layanan Pinjam - Meminjam</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Pinjaman Buku: </span> Menyediakan fasilitas untuk meminjam buku dan materi
                    perpustakaan
                    lainnya bagi mahasiswa dan staf akademik. </li>
                <li><span class="fw-bold">Pengembalian dan Perpanjangan:</span> Mengelola proses pengembalian buku dan
                    perpanjangan masa pinjam, serta memastikan pengembalian tepat waktu.</li>
            </ul>

            <strong class="mb-2 d-block">4. Pendidikan dan Pelatihan Literasi Informasi</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Pelatihan Keterampilan Informasi: </span> Mengadakan pelatihan dan workshop
                    tentang
                    keterampilan pencarian informasi, penggunaan alat dan sumber informasi digital, serta
                    literasi informasi.</li>
                <li><span class="fw-bold">Kurikulum dan Program:</span> Mengintegrasikan literasi informasi dalam kurikulum
                    pendidikan dan menyediakan sumber daya yang mendukung proses pembelajaran.</li>
            </ul>

            <strong class="mb-2 d-block">5. Fasilitasi Penelitian dan Pengembangan</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Dukungan Penelitian: </span> Menyediakan akses ke database ilmiah, jurnal
                    elektronik, dan
                    publikasi penelitian untuk mendukung kegiatan penelitian akademik.</li>
                <li><span class="fw-bold">Konsultasi Penelitian:</span> Memberikan bantuan dalam proses penelitian, seperti
                    metodologi,
                    referensi, dan akses ke publikasi relevan.</li>
            </ul>

            <strong class="mb-2 d-block">6. Fasilitas dan Ruang</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Ruang Studi: </span> Menyediakan ruang belajar individu maupun kelompok, serta
                    ruang seminar
                    dan diskusi untuk mendukung kegiatan akademik.</li>
                <li><span class="fw-bold">Fasilitas Teknologi:</span> Menyediakan komputer, akses internet, dan perangkat
                    teknologi
                    lainnya yang mendukung kegiatan penelitian dan pembelajaran.</li>
            </ul>

            <strong class="mb-2 d-block">7. Pengembangan dan Pemeliharaan Sistem</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Sistem Informasi Perpustakaan: </span> Mengelola sistem manajemen perpustakaan,
                    termasuk
                    katalog online dan akses ke koleksi digital.</li>
                <li><span class="fw-bold">Inovasi Teknologi:</span> Mengintegrasikan teknologi terbaru untuk meningkatkan
                    layanan dan
                    aksesibilitas informasi, seperti sistem pencarian yang lebih baik dan platform e-resources.</li>
            </ul>

            <strong class="mb-2 d-block">8. Promosi dan Pengembangan</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Program Promosi: </span> Mengadakan program untuk meningkatkan kesadaran tentang
                    layanan
                    perpustakaan dan koleksi yang tersedia.</li>
                <li><span class="fw-bold">Evaluasi dan Pengembangan:</span> Secara berkala mengevaluasi layanan perpustakaan
                    dan
                    koleksi untuk memastikan relevansi dan kualitas, serta merencanakan pengembangan lebih
                    lanjut.</li>
            </ul>

            <strong class="mb-2 d-block">9. Kerjasama dan Jaringan</strong>
            <ul class="lh-lg">
                <li><span class="fw-bold">Kerjasama Institusi: </span> Menjalin kerjasama dengan perpustakaan lain, baik
                    dalam negeri
                    maupun internasional, untuk berbagi sumber daya dan informasi.</li>
                <li><span class="fw-bold">Jaringan Informasi:</span> Berpartisipasi dalam jaringan informasi dan konsorsium
                    untuk
                    memperluas akses ke sumber daya informasi dan database. .</li>
            </ul>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
