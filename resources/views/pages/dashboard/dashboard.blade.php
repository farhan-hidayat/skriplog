@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Upload
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Kategori</div>
                                <div class="dashboard-card-subtitle">15</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Skripsi</div>
                                <div class="dashboard-card-subtitle">31</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Tesis</div>
                                <div class="dashboard-card-subtitle">22</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="mt-2 col-12">
                        <h5 class="mb-3">Unggahan Terbaru</h5>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" class="w-50" />
                                    </div>
                                    <div class="col-md-4">Rancang Bangun XXXXX</div>
                                    <div class="col-md-3">Farhan</div>
                                    <div class="col-md-3">22 Agustus, 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" class="w-50" />
                                    </div>
                                    <div class="col-md-4">Rancang Bangun XXXXX</div>
                                    <div class="col-md-3">Apri</div>
                                    <div class="col-md-3">22 Agustus, 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" class="w-50" />
                                    </div>
                                    <div class="col-md-4">Rancang Bangun XXXXX</div>
                                    <div class="col-md-3">Erick</div>
                                    <div class="col-md-3">22 Agustus, 2020</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
