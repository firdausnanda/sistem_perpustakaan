@extends('layouts.landing.main')

@section('content')
    <section class="about" style="height: 91px"></section>

    <section class="about" style="min-height: 550px;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                @foreach ($menu as $m)
                    <div class="col-lg-3">
                        <a href="{{ $m->link }}">
                          <div class="icon-box text-center">
                            <img class="icon-user" src="{{ asset('storage/icon/' . $m->icon) }}" alt="">
                              <h3>{{ $m->nama }}</h3>
                              <p>{{ $m->keterangan }}</p>
                          </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>

    </section><!-- End About Section -->
@endsection
