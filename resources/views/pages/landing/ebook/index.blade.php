@extends('layouts.landing.main')

@section('content')
    <section class="about" style="height: 91px"></section>

    <section class="about" style="min-height: 550px;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <h1 class="mt-0">E-Book</h1>

                <div class="row mt-4 g-3">
                    @foreach ($ebook as $e)
                        <div class="col-md-1">
                            <img src="{{ asset('img/ebook/pdf.png') }}" style="width: 50px; height: auto;" alt="">
                        </div>
                        <div class="col-md-11">
                            <h6 class="fw-bold">{{ $e->judul }}</h6>
                            <span class="text-secondary" style="font-size: 13px">Oleh : <span
                                    class="text-dark fw-bold">{{ $e->penulis }}</span></span>
                            <span class="text-secondary" style="font-size: 13px">Tahun : <span
                                    class="text-dark fw-bold">{{ $e->tahun }}</span></span>
                            <p style="font-size: 14px">{{ Str::limit($e->abstrak, 320) }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </section><!-- End About Section -->
@endsection
