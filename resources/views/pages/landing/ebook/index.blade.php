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
                            <a class="fw-bold" href="{{ route('user.ebook.detail', $e->id) }}">
                                {{ $e->judul }}
                            </a>
                            <div>
                                <span class="text-secondary" style="font-size: 13px"><i class="fa-solid fa-eye"></i> <span
                                        class="text-dark fw-bold">{{ $e->counter ? $e->counter->lihat : 0 }}</span></span>
                                <span class="text-secondary" style="font-size: 13px"><i class="fa-solid fa-download"></i>
                                    <span
                                        class="text-dark fw-bold">{{ $e->counter ? $e->counter->download : 0 }}</span></span>
                            </div>

                            <span class="text-secondary" style="font-size: 13px">Oleh : <span
                                    class="text-dark fw-bold">{{ $e->penulis }}</span></span>
                            @if ($e->tahun)
                                <span class="text-secondary" style="font-size: 13px">Tahun : <span
                                        class="text-dark fw-bold">{{ $e->tahun }}</span></span>
                            @endif

                            <p class="text-secondary" style="font-size: 14px">{{ Str::limit($e->abstrak, 320) }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col">

                        @if ($ebook->count() > 0)
                            {{ $ebook->onEachSide(1)->links('pagination::bootstrap-5') }}
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End About Section -->
@endsection
