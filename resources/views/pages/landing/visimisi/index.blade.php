@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Visi - Misi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Visi - Misi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Visi Misi</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <strong class="mb-2">Visi</strong>
            <p class="lh-lg">Menjadi sumber informasi ilmiah yang terkemuka dan berdaya saing dalam rangka mendukung
                penyelenggaraan pendidikan dan pengajaran, penelitian, pengabdian masyarakat bagi civitas
                akademika dengan berbasis teknologi informasi.
            </p>

            <strong class="mb-2">Misi</strong>
            <ol class="lh-lg">
                <li>
                    Menyiapkan sumber daya manusia yang handal berlatar belakang ilmu perpustakaan Menyiapkan bahan pustaka lengkap dan mutakhir
                </li>
                <li>
                    Menyiapkan metode yang efektif dan efisien dalam melayani pengguna
                </li>
                <li>
                    Menyiapkan teknologi informasi yang sesuai dengan perkembagan terkini
                </li>
                <li>
                    Menjalin kerjasama dengan perpustakaan perguruan tinggi negeri maupun swasta.
                </li>
            </ol>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
