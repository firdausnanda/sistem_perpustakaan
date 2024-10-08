@extends('layouts.landing.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Tata Cara Peminjaman dan Pengembalian</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('landing.index') }}">Home</a></li>
                    <li class="current">Tata Cara Peminjaman dan Pengembalian</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tata Cara Peminjaman dan Pengembalian</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <strong class="mb-2">Prosedur Peminjaman</strong>
            <ol class="lh-lg">
                <li>
                    Pemustaka mencari data bibliografi melalui katalog.itsksoepraoen.ac.id melalui HP/PC yang telah
                    disediakan di perpustakaan
                </li>
                <li>
                    Setelah Pemustaka menemukan bibliografi buku yang dicari, dapat
                    langsung menuju ke ruang koleksi
                </li>
                <li>
                    Pemustaka menyerahkan buku yang akan dipinjam kepada petugas
                    dan KTM yang masih berlaku. Untuk dosen menyebutnkan NIDN dan
                    karyawan NIDK, umum fotocopy KTP • Setelah selesai transaksi buku dan KTM atau identitas lain diserahkan
                    ke pemustaka
                </li>
                <li>
                    Pinjaman maksimal pemustaka : mahasiswa diberikan batas meminjam buku sebanyak 3 eksemplar, peminjaman
                    paling lama 10 haridan bisa diperpanjang 10 hari kedepan, denda keterlambatan untuk dosen maksimal 5
                    eksemplar buku berlaku selama 3 bulan. Umum maksimal 2 eksemplar buku berlaku selama 7 hari dengan
                    syarat : Fotocopy KTP, Mengisi data diri Biaya administrasi Rp. 10.000.
                </li>
            </ol>

            <strong class="mb-2">Prosedur Pengembalian</strong>
            <ol class="lh-lg">
                <li>
                    Pemustaka menyerahkan buku yang dipinjam dengan disertai
                    kartu identitas Pemustaka
                </li>
                <li>
                    Petugas melakukan proses pengembalian buku dan menyerahkan
                    kembali Kartu identitas setelah proses selesai
                </li>
                <li>
                    Denda keterlambatan adalah Rp.500,-/buku / hari, kecuali hari libur
                </li>
            </ol>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
