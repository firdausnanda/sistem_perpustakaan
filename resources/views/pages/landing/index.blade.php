@extends('layouts.landing.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="{{ asset('img/hero-bg-light.webp') }}" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up">Welcome to <br><span>Perpustakaan Digital</span></h1>
                <p data-aos="fade-up" data-aos-delay="100">Exploring Knowledge, Inspiring the Future<br>
                </p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#layanan" class="btn-get-started">Get Started</a>
                    <a href="{{ asset('img/video/profile.mp4') }}"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Lihat
                            Video</span></a>
                </div>
                <img src="{{ asset('img/hero-services-img.webp') }}" class="img-fluid hero-img" alt=""
                    data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>

    </section><!-- /Hero Section -->


    <!-- Features Section -->
    <section id="fasilitas" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-5 d-flex align-items-center">

                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <i class="bi bi-binoculars"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Ruang Baca</h4>
                                    <p>
                                        Ruang Baca yang Dirancang dengan Fasilitas Terbaik untuk Mendukung Proses
                                        Belajar, Diskusi, dan
                                        Penelitian dengan Nyaman serta Tenang.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <i class="bi bi-box-seam"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Fasilitas Wifi</h4>
                                    <p>
                                        Fasilitas WiFi Gratis Tersedia di Seluruh Area Perpustakaan, Memberikan
                                        Kemudahan Akses Informasi
                                        dan Menunjang Aktivitas Digital Anda. </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                <i class="bi bi-brightness-high"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Fasilitas Komputer</h4>
                                    <p>
                                        Fasilitas Komputer Kami Dapat Digunakan untuk Akses Internet, Pencarian
                                        Referensi, serta
                                        Pengerjaan Tugas dan Penulisan dengan Spesifikasi dan Koneksi yang Memadai.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul><!-- End Tab Nav -->

                </div>

                <div class="col-lg-6">

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                        <div class="tab-pane fade active show" id="features-tab-1">
                            <img src="{{ asset('img/tabs-1.jpg') }}" alt="" class="img-fluid">
                        </div><!-- End Tab Content Item -->

                        <div class="tab-pane fade" id="features-tab-2">
                            <img src="{{ asset('img/tabs-1.jpg') }}" alt="" class="img-fluid">
                        </div><!-- End Tab Content Item -->

                        <div class="tab-pane fade" id="features-tab-3">
                            <img src="{{ asset('img/tabs-1.jpg') }}" alt="" class="img-fluid">
                        </div><!-- End Tab Content Item -->
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="layanan" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <i class="bi bi-search icon"></i>
                        <div>
                            <h3>OPAC <span style="font-size: 16px;">(Online Public Access Catalog)</span></h3>
                            <p>Cari Koleksi Perpustakaan Anda dengan Cepat dan Mudah melalui Sistem OPAC, Memberikan
                                Informasi
                                Lengkap Tentang Ketersediaan Buku.</p>
                            <a href="https://katalog.itsk-soepraoen.ac.id/" target="_blank"
                                class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <i class="bi bi-archive icon"></i>
                        <div>
                            <h3>Repository</h3>
                            <p>Repository Digital Kami Menyediakan Akses ke Karya Ilmiah dan Publikasi, Untuk
                                Mendukung Pengembangan Pengetahuan dan Riset Akademik.</p>
                            <a href="http://repository.itsk-soepraoen.ac.id/" target="_blank"
                                class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-journal icon"></i>
                        <div>
                            <h3>E-Journal</h3>
                            <p>Jelajahi Berbagai E-Jurnal yang Tersedia di Perpustakaan Kami untuk Mendukung Proses
                                Belajar dan
                                Penelitian Anda dengan Akses yang Mudah.</p>
                            <a href="{{ route('user.jurnal.index') }}" class="read-more stretched-link">Learn More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <i class="bi bi-book-half icon"></i>
                        <div>
                            <h3>E-Book</h3>
                            <p>E-Book Kami Memudahkan Anda untuk Menelusuri dan Mengakses Buku Digital Secara
                                Online, Memberikan
                                Kemudahan Belajar Kapan Saja dan Di Mana Saja.</p>
                            <a href="{{ route('user.ebook.index') }}" class="read-more stretched-link">Learn More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <i class="bi bi-file-earmark-medical icon"></i>
                        <div>
                            <h3>Promkes Kemenkes</h3>
                            <p>Download Informasi dan Publikasi Lengkap tentang Kesehatan dari Kementerian Kesehatan
                                Republik
                                Indonesia.</p>
                            <a href="https://promkes.kemkes.go.id/category/buku" target="_blank"
                                class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-journal-bookmark-fill icon"></i>
                        <div>
                            <h3>Jurnal Hesti Wirasakti</h3>
                            <p>Jurnal akses terbuka dan peer-review yang diterbitkan oleh Institut Teknologi, Sains,
                                dan Kesehatan
                                RS dr. Soepraoen.</p>
                            <a href="https://jurnal.poltekkes-soepraoen.ac.id/" target="_blank"
                                class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://bookshelf.vitalsource.com/" target="_blank">
                        <img src="{{ asset('img/clients/vitalsource.svg') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://www.perpusnas.go.id/" target="_blank">
                        <img src="{{ asset('img/clients/perpusnas.png') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://jurnal.poltekkes-soepraoen.ac.id/index.php/HWS" target="_blank">
                        <img src="{{ asset('img/clients/hesti.png') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://promkes.kemkes.go.id/category/buku" target="_blank">
                        <img src="{{ asset('img/clients/kemenkes.png') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://fppti.or.id/" target="_blank">
                        <img src="{{ asset('img/clients/fppti.png') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <a href="https://doaj.org/" target="_blank">
                        <img src="{{ asset('img/clients/doaj.png') }}" class="img-fluid" alt="">
                    </a>
                </div><!-- End Client Item -->

            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Pertanyaan Umum</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>Bagaimana cara menghubungi petugas perpustakaan jika saya memiliki pertanyaan?</h3>
                            <div class="faq-content">
                                <p>Sobat Pustaka dapat menghubungi petugas perpustakaan melalui fitur kontak yang
                                    tersedia dalam
                                    aplikasi, atau
                                    melalui nomor telepon dan email yang tertera di situs web perpustakaan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana cara akses repository?</h3>
                            <div class="faq-content">
                                <p>Sobat pustaka dapat mengunjungi laman <a
                                        href="http://repository.itsk-soepraoen.ac.id/">repository.itsk-soepraoen.ac.id</a>
                                    atau klik menu
                                    repository diatas. Akses login hanya untuk admin. Jika sobat membutuhkan file BAB II/
                                    BAB III/ File terkunci KTI/skripsi silahkan copy link dan kirim ke petugas memlalui WA
                                    yang tertera disitus web dan media sosial perpustakaan.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana mencari buku di OPAC?</h3>
                            <div class="faq-content">
                                <p>Sobat pustaka dapat mengunjungi laman <a
                                        href="https://katalog.itsk-soepraoen.ac.id/">katalog.itsk-soepraoen.ac.id</a> atau
                                    klik menu OPAC
                                    diatas, Akses login hanya untuk admin. Sobat pustaka dapat memanfaatkan OPAC untuk
                                    mencari detail tentang ketersedian buku di Rak perpustakaan. Sobat hanya perlu memasukan
                                    kata kunci pada kolom pencarian yang tersedia. Contoh: Kendall’s muscles, Nomor Panggil
                                    = 616.7 CON k-1,artinya buku ada pada rak = 616, inisial penulis = CON, K = awalan judul
                                    buku, 1 pada K-1 = buku ke 1 dari judul teresebut.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Syarat bebas tanggungan untuk KTI?</h3>
                            <div class="faq-content">
                                <p>Sobat pustaka wajib sudah mengumpulkan KTI/Skripsi sesuai dengan ketentuan, Tidak
                                    memiliki pinjaman atau telah mengembalikan buku yang dipinjam dan sudah membayar denda,
                                    jika terlambat mengembalikan/ mengganti buku yang dihilangkan.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana format pengumpulan tugas akhir?</h3>
                            <div class="faq-content">
                                <p>Sobat pustaka dapat mengakses pada menu informasi di web perpustakaan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Alamat</h3>
                        <p>Jl. S. Supriadi No. 22 Sukun, Malang</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Hubungi kami</h3>
                        <p>+62 82 229 829298</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p>perpustakaan@itsk-soepraoen.ac.id</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15804.463297775312!2d112.6196197!3d-7.9869736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281d6d2d9ecf%3A0x30e491887b18d4f0!2sKampus%202%20Institut%20Teknologi%20Sains%20dan%20Kesehatan%20(ITSK)%20RS%20dr%20Soepraoen%20Malang!5e0!3m2!1sid!2sid!4v1728214933616!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
