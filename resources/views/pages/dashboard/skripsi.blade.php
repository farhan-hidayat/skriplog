@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Skripsi
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Data Skripsi</h2>
                <p class="dashboard-subtitle">List of Skripsi</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudSkripsi">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>Jurusan</th>
                                                <th>Fakultas</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudSkripsi').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'no',
                    name: 'no',
                    orderable: false,
                    searchable: false,
                    width: '5%'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'major.name',
                    name: 'major.name'
                },
                {
                    data: 'faculty.name',
                    name: 'faculty.name'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row) {
                        var statusClass = '';
                        var statusText = '';

                        if (data === 'Tidak Sesuai') {
                            statusClass = 'badge-danger';
                            statusText = 'Tidak Sesuai';
                        } else if (data === 'Diproses') {
                            statusClass = 'badge-warning';
                            statusText = 'Diproses';
                        } else if (data === 'Publish') {
                            statusClass = 'badge-success';
                            statusText = 'Publish';
                        }

                        return '<span class="badge ' + statusClass + '">' + statusText + '</span>';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })

        datatable.on('order.dt search.dt', function() {
            datatable.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    </script>
@endpush
