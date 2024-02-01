@extends('layouts.landing.main')

@section('content')
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img src="{{ asset('img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Selamat datang di SIEMPUS<span class="text-warning">.</span>
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="200">Temukan cerita-cerita menakjubkan dan nikmati suasana santai
                        untuk mengeksplorasi dunia literatur</p>
                </div>
                <div class="col-lg-5">
                    <form action="{{ route('login') }}" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                        <input type="text" class="form-control" placeholder="Tuliskan kata kunci">
                        <input type="submit" class="btn btn-primary" value="Cari">
                    </form>
                </div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Kami</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="https://katalog.itsk-soepraoen.ac.id" target="_blank" class="stretched-link">Katalog</a></h4>
                            <p class="description">Daftar atau direktori yang memuat informasi buku perpustakaan ITSK Soepraoen</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="https://repository.itsk-soepraoen.ac.id/" target="_blank" class="stretched-link">Repository</a></h4>
                            <p class="description">Kumpulan jenis materi koleksi perpustakaan ITSK Soepraoen</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="{{ route('login') }}" class="stretched-link">E-Journal</a></h4>
                            <p class="description">Jurnal elektronik yang dapat diakses secara online melalui internet</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                        <div>
                            <h4 class="title"><a href="{{ route('login') }}" class="stretched-link">E-Book</a></h4>
                            <p class="description">Repository e-book adalah suatu tempat penyimpanan digital yang berisi koleksi buku elektronik atau e-book.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title"><a href="https://promkes.kemkes.go.id/category/buku" target="_blank" class="stretched-link">E-book Kemenkes</a>
                            </h4>
                            <p class="description">Tempat penyimpanan digital yang berisi koleksi buku elektronik atau e-book dari Kemenkes.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                        <div>
                            <h4 class="title"><a href="https://www.proquest.com/" target="_blank" class="stretched-link">Jurnal Proquest</a>
                            </h4>
                            <p class="description">Kumpulan jurnal ilmiah, berita, dan sumber lainnya dari penerbit dan penyedia layanan informasi proquest</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-backpack"></i></div>
                        <div>
                            <h4 class="title"><a href="https://jurnal.poltekkes-soepraoen.ac.id/index.php/HWS" target="_blank" class="stretched-link">Jurnal Hesti Wirasakti</a>
                            </h4>
                            <p class="description">Jurnal akses terbuka dan peer-review yang diterbitkan oleh Institut Teknologi, Sains, dan Kesehatan RS dr. Soepraoen.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">

        <img src="{{ asset('img/stats-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="7104" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jumlah Koleksi</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="672" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>KTI</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="127" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Skripsi</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="292" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jurnal Cetak</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="66" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Majalah</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Prosiding</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="288" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>E-Book</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="156" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pengabmas</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="330" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Penelitian Internal</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="227" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Referensi</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="2584" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>KTI Compact Disk (CD)</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="2445" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Anggota Perpustakaan</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- End Stats Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" style="height: 250px" data-aos="fade" data-aos-delay="200" style="max-width: 201;">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. S. Supriadi No. 22</p>
                                <p>Sukun, Malang</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" style="height: 250px" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Hubungi Kami</h3>
                                <p>082 229 829298</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" style="height: 250px" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>perpustakaan@itsk-soepraoen.ac.id</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" style="height: 250px" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Buka</h3>
                                <p>Senin - Jumat</p>
                                <p>08.00 - 15.00 WIB</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
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

    </section><!-- End Contact Section -->
@endsection
