@extends('layouts.dashboard.main')

@section('content')
    <div class="pagetitle">
        <h1>E-Book</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">E-Book</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">

                <div class="row">

                    <!-- Prodi -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">E-Book</h5>

                                <form id="form-create" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <div class="col-lg-9">
                                            <label for="judul" class="form-label">Judul E-Book<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="penulis" class="form-label">Penulis<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="penulis">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row align-items-end p-0">
                                                <div class="col-11">
                                                    <label for="kategori" class="form-label">Kategori<span
                                                            class="text-danger">*</span></label>
                                                    <select name="kategori" class="form-select">
                                                        <option value="">-- Pilih Kategori --</option>
                                                        @foreach ($kategori as $i)
                                                            <option value="{{ $i->id }}">{{ $i->nama_kategori }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-1">
                                                    <button class="btn btn-primary" id="tambah-kategori">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label for="tahun" class="form-label">Tahun Terbit<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="tahun">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="total_halaman" class="form-label">Total Halaman<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="total_halaman">
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="abstrak" class="form-label">Abstrak</label>
                                            <textarea name="abstrak" class="form-control" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <textarea name="keterangan" class="form-control" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="link" class="form-label">Link Eksternal</label>
                                            <input type="text" class="form-control" name="link">
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="akses" class="form-label">Akses Eksternal</label>
                                            <select name="akses" class="form-select">
                                                <option value="1">Online</option>
                                                <option value="2">Local</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="subject" class="form-label">Subject<span
                                                    class="text-danger">* </span><span class="fst-italic text-muted" style="font-size: 12px">Tekan Koma (,) untuk menambah subject</span></label>
                                            <input type="text" data-role="tagsinput" name="subject" id="subject"
                                                class="form-control w-100">
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input type="file" class="upload-foto-dropify" name="foto"
                                                data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg"
                                                id="foto" data-errors-position="outside" />
                                        </div>
                                        <div class="col-lg-9">
                                            <label for="file" class="form-label">File</label>
                                            <input type="file" class="upload-file" name="file"
                                                data-max-file-size="10M" data-allowed-file-extensions="pdf" id="file"
                                                data-errors-position="outside" />
                                        </div>

                                        <div class="col-lg-9">
                                            <button class="btn btn-primary float-end" type="submit">Simpan</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div><!-- End Progress Pendaftaran -->
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

    <!-- Modal Body -->
    <div class="modal fade" id="modal-kategori" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Tambah Kategori
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-kategori">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label" for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batalkan
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // Init Dropify
            $('.upload-foto-dropify').dropify({
                messages: {
                    'default': '<i class="fa-regular fa-image icon-file"></i> <br> Unggah gambar anda disini <br> <span>  Type: JPG | JPEG | PNG (Max. 2MB) </span> <br> <button class="btn btn-yellow mt-3">Pilih File</button>',
                    'replace': 'Klik untuk mengganti gambar anda',
                    'remove': 'Hapus',
                    'error': 'Ooops, something wrong happended.'
                },
            });

            // Init Dropify
            $('.upload-file').dropify({
                messages: {
                    'default': '<i class="fa-solid fa-file-pdf"></i> <br> Unggah file anda disini <br> <span>  Type: PDF (Max. 2MB) </span> <br> <button class="btn btn-yellow mt-3">Pilih File</button>',
                    'replace': 'Klik untuk mengganti file anda',
                    'remove': 'Hapus',
                    'error': 'Ooops, something wrong happended.'
                },
            });

            // Submit
            $('#form-create').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('admin.ebook.store') }}",
                    type: "POST",
                    data: formData,
                    dataType: "JSON",
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $.LoadingOverlay('show');
                    },
                    success: function(response) {
                        $.LoadingOverlay('hide');
                        if (response.meta.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: "Sukses!",
                                text: response.meta.message,
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        $.LoadingOverlay('hide');
                        Swal.fire('Data Gagal Disimpan!', 'Kesalahan Server',
                            'error');
                    },
                });

            });

            // Kategori
            $('#tambah-kategori').click(function(e) {
                e.preventDefault();
                $('#modal-kategori').modal('show')
            });

            // Submit Kategori
            $('#form-kategori').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.kategori.store') }}",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $.LoadingOverlay('show');
                    },
                    success: function(response) {
                        $.LoadingOverlay('hide');
                        if (response.meta.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: "Sukses!",
                                text: response.meta.message,
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    }
                });

            });

            //init tagify
            var input = document.querySelector('input[name=subject]');
            new Tagify(input)


        });
    </script>
@endsection
