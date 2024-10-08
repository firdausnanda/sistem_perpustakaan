@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Rencana Operasional</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Rencana Operasional</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Rencana Operasional</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Tahun Dokumen</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Rencana Operasional</td>
                                <td>2024</td>
                                <td>
                                    <a href="{{ asset('dokumen/renop/renop_2024.pdf') }}">
                                        <img src="{{ asset('img/ebook/pdf.png') }}" style="width: 25px; height: auto;" alt="">
                                        Download
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
