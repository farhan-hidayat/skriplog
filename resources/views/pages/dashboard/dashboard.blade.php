@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Dashboard
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
                    <div class="col-md-3">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Fakultas/Jurusan</div>
                                <div class="dashboard-card-subtitle">{{ $faculty }}/{{ $major }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Skripsi</div>
                                <div class="dashboard-card-subtitle">{{ $skripsiP }}/{{ $skripsiAll }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Tesis</div>
                                <div class="dashboard-card-subtitle">{{ $tesisP }}/{{ $tesisAll }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-2 card">
                            <div class="card-body">
                                <div class="dashboard-card-title">Disertasi</div>
                                <div class="dashboard-card-subtitle">{{ $disertasiP }}/{{ $disertasiAll }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="mt-2 col-12">
                        <h5 class="mb-3">Unggahan Terbaru</h5>
                        @foreach ($theses->sortByDesc('created_at') as $thesis)
                            <a href="{{ route('details', $thesis->id) }}" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ Storage::url($thesis->photo) }}" class="w-50" />
                                        </div>
                                        <div class="col-md-4">{{ $thesis->title }}</div>
                                        <div class="col-md-3">{{ $thesis->name }}</div>
                                        <div class="col-md-3">{{ $thesis->created_at }}</div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="/images/dashboard-arrow-right.svg" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
