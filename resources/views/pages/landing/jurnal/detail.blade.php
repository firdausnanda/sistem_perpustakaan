@extends('layouts.landing.main')

@section('content')
    <section class="about" style="height: 91px"></section>

    <section class="about" style="min-height: 550px;">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <h3 class="mt-0 text-secondary">E-Journal</h3>

                <div class="row mt-4 g-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/jurnal/pdf.png') }}" style="width: 50px; height: auto;" alt="">
                    </div>
                    <div class="col-md-11">
                        <a class="fw-bold d-block" href="{{ route('user.jurnal.detail', $e->id) }}">
                            {{ $e->judul }}
                        </a>
                        <span class="text-secondary" style="font-size: 13px">Oleh : <span
                                class="text-dark fw-bold">{{ $e->penulis }}</span></span>
                        @if ($e->tahun)
                            <span class="text-secondary" style="font-size: 13px">Tahun : <span
                                    class="text-dark fw-bold">{{ $e->tahun }}</span></span>
                        @endif
                    </div>
                </div>

                @if ($e->gambar)
                    <img style="max-height: 250px; width: auto" src="{{ asset('storage/gambar_jurnal/' . $e->gambar) }}"
                        alt="">
                @else
                    <img style="max-height: 250px; width: auto" src="{{ asset('img/buku.png') }}" alt="">
                @endif

                <span style="font-size: 16px" class="mt-6 text-secondary">Penulis</span>
                <span style="font-size: 16px" class="mt-2">{{ $e->penulis }}</span>

                <span style="font-size: 16px" class="mt-3 text-secondary">Abstrak</span>
                <span style="font-size: 16px" class="mt-2">{{ $e->abstrak ?? '-' }}</span>

                <span style="font-size: 16px" class="mt-3 text-secondary">Keterangan</span>
                <span style="font-size: 16px" class="mt-2">{{ $e->keterangan ?? '-' }}</span>

                @if ($e->link)
                    <span style="font-size: 16px" class="mt-3 text-secondary">Link</span>
                    <span style="font-size: 16px" class="mt-2">{{ $e->link ?? '-' }}</span>
                @endif

                <span style="font-size: 16px" class="mt-3 text-secondary"><i class="fa-solid fa-download"></i> Berkas ini
                    telah didownload sebanyak {{ $e->counter ? $e->counter->download : 0 }} kali</span>

                <div class="row mt-2">
                    <div class="col">
                        @if ($e->file)
                            <button type="button" class="btn btn-primary btn-download" data-pdf="{{ $e->file }}"><i
                                    class="fa-solid fa-download"></i> Download</button>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- Modal Preview -->
    <div class="modal fade" id="preview" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="650" style="visibility:visible" id="data-preview"
                        src="https://www.africau.edu/images/default/sample.pdf"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // File Preview
            $('.btn-download').click(function(e) {
                e.preventDefault();

                var path = "{{ asset('storage/file_jurnal/:slug') }}"
                var link = path.replace(':slug', $(this).data("pdf"));

                $.ajax({
                    type: "GET",
                    url: "{{ route('user.jurnal.download') }}",
                    data: {
                        id: "{{ $e->id }}"
                    },
                    dataType: "JSON",
                    beforeSend: function() {
                        $.LoadingOverlay('show');
                    },
                    success: function(response) {
                        $.LoadingOverlay('hide');
                        if (response.meta.status == "success") {
                            Swal.fire('Sukses!', response.meta.message, 'success');
                            $('#data-preview').attr('src', link)
                            $('#preview').modal('show');
                        }
                    }
                });

            });
        });
    </script>
@endsection
