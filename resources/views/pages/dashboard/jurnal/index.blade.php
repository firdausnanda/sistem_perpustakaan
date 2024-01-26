@extends('layouts.dashboard.main')

@section('content')
    <div class="pagetitle">
        <h1>Journal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Journal</li>
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
                                <h5 class="card-title">Journal</h5>

                                <div class="table-responsive">
                                    <table id="table-jurnal" class="table w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Ebook</th>
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            // Init Datatable
            var table = $('#table-jurnal').DataTable({
                ajax: {
                    url: "{{ route('admin.jurnal.index') }}",
                    type: "GET"
                },
                lengthChange: false,
                ordering: true,
                buttons: [{
                    text: 'Tambah Data',
                    className: 'btn btn-primary btn-sm btn-tambah',
                    action: function(e, dt, node, config) {
                        location.href = "{{ route('admin.jurnal.create') }}"
                    }
                }],
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
                        data: 'judul',
                        render: function(data, type, row, meta) {
                            return `<span style="font-size: 13px; font-weight:bold;">${data}</span> <br> <span class="text-secondary" style="font-size: 12px">${row.penulis}</span>`
                        }
                    },
                    {
                        targets: 2,
                        className: 'align-middle text-center',
                        data: 'akses',
                        render: function(data, type, row, meta) {
                            if (row.akses == 1) return `<span class="badge bg-info">Online</span>`
                            return `<span class="badge bg-warning">Lokal</span>`
                        }
                    },
                    {
                        targets: 3,
                        width: '10%',
                        className: 'align-middle text-center',
                        render: function(data, type, row, meta) {
                            return '<button class="btn btn-warning btn-sm btn-edit"><i class="fa-solid fa-pencil-alt"></i></button>';
                        }
                    },
                ],
                initComplete: function() {
                    $('#table-jurnal').DataTable().buttons().container().appendTo(
                        '#table-jurnal_wrapper .col-md-6:eq(0)');
                    $('.btn-tambah').removeClass("btn-secondary");
                }
            });

            // Edit
            $('#table-jurnal tbody').on('click', '.btn-edit', function(event) {
                event.preventDefault()

                var data = table.row($(this).parents('tr')).data();
                
                var url = "{{ route('admin.jurnal.edit', ':id') }}"
                var link = url.replace(':id', data.id)
                
                location.href = link
            });
        });
    </script>
@endsection
