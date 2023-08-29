@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Jurusan
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Fakultas & Jurusan</h2>
                <p class="dashboard-subtitle">List of Categories</p>
            </div>
            <div class="dashboard-content">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="sell-tab" data-toggle="tab" href="#sell" role="tab"
                            aria-controls="sell" aria-selected="true">Fakultas</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="buy-tab" data-toggle="tab" href="#buy" role="tab"
                            aria-controls="buy" aria-selected="false">Jurusan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#" class="mb-3 btn btn-primary">+ Tambah
                                            Fakultas Baru</a>
                                        <div class="table-responsive">
                                            <table class="table table-hover scroll-horizontal-vertical w-100"
                                                id="example">
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
                                                        <td>Teknik</td>
                                                        <td>T</td>
                                                        <td>teknik</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>FEB</td>
                                                        <td>F</td>
                                                        <td>feb</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>MIPA</td>
                                                        <td>M</td>
                                                        <td>mipa</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Hukum</td>
                                                        <td>H</td>
                                                        <td>hukum</td>
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
                    <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#" class="mb-3 btn btn-primary">+ Tambah
                                            Jurusan Baru</a>
                                        <div class="table-responsive">
                                            <table class="table table-hover scroll-horizontal-vertical w-100"
                                                id="example1">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>Fakultas</th>
                                                        <th>Slug</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Teknik Informatika</td>
                                                        <td>Teknik</td>
                                                        <td>teknik-informatika</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Teknik Sipil</td>
                                                        <td>Teknik</td>
                                                        <td>teknik-sipil</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Teknik Arsitektur</td>
                                                        <td>Teknik</td>
                                                        <td>teknik-arsitektur</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Teknik Pertambangan</td>
                                                        <td>Teknik</td>
                                                        <td>teknik-pertambangan</td>
                                                        <td>Aksi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Farmasi</td>
                                                        <td>Kedokteran</td>
                                                        <td>farmasi</td>
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
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        new DataTable('#example');
        new DataTable('#example1');
    </script>
@endpush
