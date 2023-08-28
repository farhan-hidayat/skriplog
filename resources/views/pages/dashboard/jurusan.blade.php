@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Jurusan
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Jurusan</h2>
                <p class="dashboard-subtitle">List of Categories</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class="mb-3 btn btn-primary">+ Tambah
                                    Jurusan Baru</a>
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Icon</th>
                                                <th>Slug</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Teknik Informatika</td>
                                                <td>TI</td>
                                                <td>teknik-informatika</td>
                                                <td>Aksi</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Teknik Sipil</td>
                                                <td>TS</td>
                                                <td>teknik-sipil</td>
                                                <td>Aksi</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Teknik Arsitektur</td>
                                                <td>TA</td>
                                                <td>teknik-arsitektur</td>
                                                <td>Aksi</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Teknik Pertambangan</td>
                                                <td>TP</td>
                                                <td>teknik-pertambangan</td>
                                                <td>Aksi</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Kedokteran</td>
                                                <td>KD</td>
                                                <td>kedokteran</td>
                                                <td>Aksi</td>
                                            </tr>
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
        new DataTable('#example');
    </script>
@endpush
