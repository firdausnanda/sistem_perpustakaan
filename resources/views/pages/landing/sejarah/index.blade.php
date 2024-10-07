@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Sejarah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Sejarah</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sejarah</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <p class="lh-lg">Perpustakaan ITSK RS dr.Soepraoen Malang merupakan unit pelaksanateknis yang berada
                di bawah Wakil Rektor I ITSK RS dr. Soepraoen, unit ini bertugas menunjang program tri dharma
                perguruan tinggi, yaitu pendidikan, penelitian dan pengabdian masyarakat.
                Perpustakaan berdiri mengikuti berdirinya Akademi Keperawatan Rumkit Tk. II dr.
                Soepraoen (Konversi) sesuai SK Kapusdiknakes Depkes RI nomor: HK.00.06.1.3.2047 tanggal 13
                Juli 1999.
            </p>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
