@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Format Pengumpulan Tugas Akhir</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Format Pengumpulan Tugas Akhir</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Format Pengumpulan Tugas Akhir</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <p class="lh-lg">
                Sehubungan dengan tugas akhir mahasiswa yang akan diunggah di “Repository
                Perpustakaan ITSK RS dr. Soepraoen”. <br>
                Diharapkan seluruh mahasiswa yang akan mengumpulkan
                tugas akhir sesuai dengan ketentuan berikut :
            </p>

            <a href="{{ asset('dokumen/format_pengumpulan_ta.pdf') }}">
                <img src="{{ asset('img/ebook/pdf.png') }}" style="width: 25px; height: auto;" alt="">
                Format pengumpulan Tugas Akhir
            </a>

        </div>

    </section><!-- /Starter Section Section -->
@endsection
