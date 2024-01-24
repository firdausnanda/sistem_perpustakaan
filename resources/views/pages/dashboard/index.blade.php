@extends('layouts.dashboard.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hallo Selamat Datang, {{ Auth::user()->name }}</h5>
                        <p>You can use it as a starter for your custom pages.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
