@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Fasilitas</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Fasilitas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-dark">
                        <img class="card-img-top" src="{{ asset('img/fasilitas/1.jpg') }}" />
                        <div class="card-body">
                            <p class="card-text fw-bold text-center">Ruang Perpustakaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-dark">
                        <img class="card-img-top" src="{{ asset('img/fasilitas/2.jpg') }}" />
                        <div class="card-body">
                            <p class="card-text fw-bold text-center">Fasilitas Komputer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-dark">
                        <img class="card-img-top" src="{{ asset('img/fasilitas/3.jpg') }}" />
                        <div class="card-body">
                            <p class="card-text fw-bold text-center">Ruang Baca</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-dark">
                        <img class="card-img-top" src="{{ asset('img/fasilitas/4.jpg') }}" />
                        <div class="card-body">
                            <p class="card-text fw-bold text-center">Tempat Buku Selesai Baca</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
