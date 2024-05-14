@extends('layouts.landing.main')

@section('content')
    <section class="about" style="height: 91px; background-color: #e84545"></section>

    <section class="about" style="min-height: 550px; background-color: white">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <h1 class="mt-0">E-Book</h1>

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
                        <button class="btn btn-outline-danger" type="button" id="btn-cari"><i
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

            // E book
            function ebook() {

                let cari = $('#search').val() ? "{{ route('ebook.index') }}" : "{{ route('ebook.cari') }}" 

                $.ajax({
                    type: "GET",
                    url: "{{ route('ebook.cari') }}",
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

            ebook()

            $('#btn-cari').click(function(e) {
                e.preventDefault();

                ebook()
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
