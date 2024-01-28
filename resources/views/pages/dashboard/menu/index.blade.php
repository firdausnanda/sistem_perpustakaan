@extends('layouts.dashboard.main')

@section('content')
    <div class="pagetitle">
        <h1>Menu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Menu</li>
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
                                <h5 class="card-title">Menu</h5>

                                <div class="table-responsive">
                                    <table id="table-menu" class="table w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Menu</th>
                                                <th>Hak Akses</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div><!-- End Progress Pendaftaran -->
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

    {{-- Modal Tambah --}}
    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-tambah" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb-3 g-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Menu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="keterangan" required>
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Link</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="link" required>
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Icon</label>
                            <div class="col-sm-8">
                                <input type="file" class="upload-foto-dropify" name="foto" data-max-file-size="2M"
                                    data-allowed-file-extensions="jpg png jpeg" data-errors-position="outside" />
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Hak Akses</label>
                            <div class="col-sm-8">
                                <select name="akses" class="form-select">
                                    <option value="1">Online</option>
                                    <option value="2">Local</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-edit" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row mb-3 g-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" id="nama" required>
                                <input type="hidden" class="form-control" name="id" id="id">
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="keterangan" id="keterangan" required>
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Link</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="link" id="link" required>
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Icon</label>
                            <div class="col-sm-8">
                                <input type="file" class="upload-foto-dropify" name="foto" data-max-file-size="2M"
                                    data-allowed-file-extensions="jpg png jpeg" id="foto"
                                    data-errors-position="outside" />
                            </div>
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Hak Akses</label>
                            <div class="col-sm-8">
                                <select name="akses" class="form-select" id="akses">
                                    <option value="1">Online</option>
                                    <option value="2">Local</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // Init Datatable
            var table = $('#table-menu').DataTable({
                ajax: {
                    url: "{{ route('admin.menu.index') }}",
                    type: "GET"
                },
                buttons: [{
                    text: 'Tambah Data',
                    className: 'btn btn-primary btn-sm btn-tambah',
                    action: function(e, dt, node, config) {
                        $('#modal-tambah').modal('show')
                    }
                }],
                lengthChange: false,
                ordering: false,
                processing: true,
                columnDefs: [{
                        targets: 0,
                        width: '10%',
                        className: 'align-middle text-center',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        targets: 1,
                        className: 'align-middle',
                        data: 'nama',
                    },
                    {
                        targets: 2,
                        className: 'align-middle',
                        data: 'akses',
                        render: function(data, type, row, meta) {
                            if (row.akses == 1) return `<span class="badge bg-info">Online</span>`
                            return `<span class="badge bg-warning">Lokal</span>`
                        }
                    },
                    {
                        targets: 3,
                        className: 'align-middle text-center',
                        render: function(data, type, row, meta) {
                            return `<button class="btn btn-warning btn-sm btn-edit"><i class="fa-solid fa-pencil-alt"></i></button>`;
                        }
                    },
                ],
                initComplete: function() {
                    $('#table-menu').DataTable().buttons().container().appendTo(
                        '#table-menu_wrapper .col-md-6:eq(0)');
                    $('.btn-tambah').removeClass("btn-secondary");
                }
            });

            // Init Dropify
            $('.upload-foto-dropify').dropify({
                messages: {
                    'default': '<i class="fa-regular fa-image icon-file"></i> <br> Unggah gambar anda disini <br> <span>  Type: JPG | JPEG | PNG (Max. 2MB) </span> <br> <button class="btn btn-yellow mt-3">Pilih File</button>',
                    'replace': 'Klik untuk mengganti gambar anda',
                    'remove': 'Hapus',
                    'error': 'Ooops, something wrong happended.'
                },
            });

            // Modal Tambah Show
            $(".btn-tambah").click(function(e) {
                e.preventDefault();
                $("#modal-tambah").modal('show')
            });

            // Submit Form Tambah
            $("#form-tambah").submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.menu.store') }}",
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
                            $(':input').val('');
                            $('#modal-tambah').modal('hide');
                            table.ajax.reload();
                            Swal.fire('Sukses!', response.meta.message, 'success');
                        }
                    },
                    error: function(response) {
                        $.LoadingOverlay('hide');
                        Swal.fire('Gagal!', 'Periksa kembali data anda.', 'error');
                        console.log(response.responseJSON.message);
                    },
                });
            });

            // Modal Edit
            $('#table-menu tbody').on('click', '.btn-edit', function(event) {
                event.preventDefault();
                var data = table.row($(this).parents('tr')).data();
                var id = data.id;
                var nama = data.nama;
                var link = data.link;
                var akses = data.akses;
                var keterangan = data.keterangan;

                $('#id').val(id);
                $('#nama').val(nama);
                $('#link').val(link);
                $('#akses').val(akses);
                $('#keterangan').val(keterangan);

                var _newImageLink = `{{ asset('storage/icon/${data.icon}') }}`;
                var drEvent = $('#foto').dropify({
                    defaultFile: _newImageLink
                });
                drEvent = drEvent.data('dropify');
                drEvent.resetPreview();
                drEvent.clearElement();
                drEvent.settings.defaultFile = _newImageLink;
                drEvent.destroy();
                drEvent.init();

                $('#modal-edit').modal('show');
            });

            // Submit Edit
            $("#form-edit").submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.menu.update') }}",
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
                            $('#modal-edit').modal('hide');
                            table.ajax.reload();
                            Swal.fire('Sukses!', response.meta.message, 'success');
                        }
                    },
                    error: function(response) {
                        $.LoadingOverlay('hide');
                        Swal.fire('Gagal!', 'Periksa kembali data anda.', 'error');
                        console.log(response.responseJSON.message);
                    },
                });
            });
        });
    </script>
@endsection
