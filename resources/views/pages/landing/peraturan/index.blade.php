@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Peraturan Perpustakaan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Peraturan Perpustakaan</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Peraturan Perpustakaan</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <p class="lh-lg">
                Setiap pemustaka Perpustakaan ITSK RS dr. Soepraoen wajib mentaati
                peraturan dan tata tertib sebagai berikut:
            </p>
            <ol class="lh-lg">
                <li>Pemustaka mengisi absensi dengan cara mengetik NIM atau scan
                    kartu tanda anggota/ KTM ITSK RS dr. Soepraoen.
                </li>
                <li>
                    Bersikap sopan dan berpakaian rapi, serta menjaga ketertiban dan
                    keamanan
                </li>
                <li>
                    Pengunjung tidak diperbolehkan membawa masuk tas atau yang sejenis ke dalam
                    ruangan/deretan rak, wajib dimasukan ke dalam loker
                </li>
                <li>
                    Pengunjung Tidak diperbolehkan Membawa makanan atau
                    minuman ke dalam ruangan
                </li>
                <li>
                    Pengunjung Tidak diperbolehkan Merokok, makan, dan minum di dalam
                    ruangan
                </li>
                <li>
                    Pengunjung Tidak diperbolehkan Memakai sandal jepit, jaket, topi, kaos
                    tanpa kerah di dalam gedung perpustakaan
                </li>
                <li>
                    Pengunjung Wajib mentaati semua peraturan yang berlaku tanpa kecuali.
                </li>
            </ol>

        </div>

    </section><!-- /Starter Section Section -->
@endsection
