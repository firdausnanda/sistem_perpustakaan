@extends('layouts.landing.main')

@section('content')
    <section class="about" style="height: 91px"></section>

    <section class="about" style="min-height: 550px;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="section-title">
                    <h2 class="mt-0">E-Journal</h2>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <input type="text" name="search" id="search" class="form-control"
                            placeholder="Cari Judul Buku">
                    </div>
                    <div class="col-lg-4">
                        <select name="filter" class="form-select" id="filter">
                            <option value="1">Judul</option>
                            <option value="2">Penulis</option>
                            <option value="3">Subyek</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-outline-primary" type="button" id="btn-cari"><i
                                class="fa fa-search me-2"></i>Pencarian</button>
                    </div>
                </div>

                <div id="konten"></div>

            </div>
        </div>

    </section><!-- End About Section -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // Jurnal
            function jurnal() {
                let cari = $('#search').val() ? "{{ route('jurnal.index') }}" : "{{ route('jurnal.cari') }}"

                $.ajax({
                    type: "GET",
                    url: "{{ route('jurnal.cari') }}",
                    data: {
                        cari: $('#search').val(),
                        filter: $('#filter').val()
                    },
                    dataType: "JSON",
                    beforeSend: function() {
                        $.LoadingOverlay('show');
                        $("#konten").empty();
                    },
                    success: function(response) {
                        $.LoadingOverlay('hide');

                        // Append to Berita
                        $("#konten").append(response.data);
                    }
                });
            }

            jurnal()

            $('#btn-cari').click(function(e) {
                jurnal()
            });

            // Pagination
            $('#konten').on('click', '.pagination a', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('href'),
                    data: {
                        cari: $('#search').val(),
                        filter: $('#filter').val()
                    },
                    beforeSend: function() {
                        $.LoadingOverlay('show');
                        $("#konten").empty();
                    },
                    success: function(response) {
                        $.LoadingOverlay('hide');
                        window.scrollTo(0, 0)
                        $('#konten').append(response.data);
                    }
                });
            });

        });
    </script>
@endsection
