@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Tambah Jurusan
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Tambah Jurusan Baru</h2>
                <p class="dashboard-subtitle">
                    Create New Major
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-6">
                            <form action="{{ route('majors.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Jurusan</label>
                                                    <input type="text" name="name" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Fakultas</label>
                                                    <select name="faculty_id" class="form-control">
                                                        <option value=""> -Pilih Fakultas- </option>
                                                        @foreach ($faculties as $faculty)
                                                            <option value="{{ $faculty->id }}">{{ $faculty->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-right col">
                                                <button type="submit" class="px-5 btn btn-success btn-block">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
