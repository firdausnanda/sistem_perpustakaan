@extends('layouts.dashboard.main')

@section('content')
    <div class="pagetitle">
        <h1>Ketegori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Ketegori</li>
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
                                <h5 class="card-title">Ketegori</h5>

                                <div class="table-responsive">
                                    <table id="table-kategori" class="table w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-tambah">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kategori" required>
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
                <form id="form-edit">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" id="nama" required>
                                <input type="hidden" class="form-control" name="id" id="id">
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
            var table = $('#table-kategori').DataTable({
                ajax: {
                    url: "{{ route('admin.kategori.index') }}",
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
                        data: 'nama_kategori',
                    },
                    {
                        targets: 2,
                        className: 'align-middle text-center',
                        render: function(data, type, row, meta) {
                            return `<button class="btn btn-warning btn-sm btn-edit"><i class="fa-solid fa-pencil-alt"></i></button>`;
                        }
                    },
                ],
                initComplete: function() {
                    $('#table-kategori').DataTable().buttons().container().appendTo(
                        '#table-kategori_wrapper .col-md-6:eq(0)');
                    $('.btn-tambah').removeClass("btn-secondary");
                }
            });

            // Modal Tambah Show
            $(".btn-tambah").click(function(e) {
                e.preventDefault();
                $("#modal-tambah").modal('show')
            });

            // Submit Form Tambah
            $("#form-tambah").submit(function(e) {
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
            $('#table-kategori tbody').on('click', '.btn-edit', function(event) {
                event.preventDefault();
                var data = table.row($(this).parents('tr')).data();
                var id = data.id;
                var nama = data.nama_kategori;

                $('#id').val(id);
                $('#nama').val(nama);
                $('#modal-edit').modal('show');
            });

            // Submit Edit
            $("#form-edit").submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "PUT",
                    url: "{{ route('admin.kategori.update') }}",
                    data: $(this).serialize(),
                    dataType: "JSON",
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
