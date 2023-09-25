@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Detail
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Details</h2>
            </div>
            <div class="mt-4 dashboard-content">
                <form action="{{ route('verify', $thesis->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <img src="{{ Storage::url($thesis->photo) }}" alt=""
                                                class="mb-3 w-100" />
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Nama Mahasiswa</div>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $thesis->name }}" />
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">NIM</div>
                                                    <input type="text" class="form-control" id="nim" name="nim"
                                                        value="{{ $thesis->nim }}" />
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="product-title">Judul</div>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ $thesis->title }}" />
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <div class="product-title">No. Panggilan Setempat</div>
                                                    <input type="text" class="form-control" id="no" name="no"
                                                        value="{{ $thesis->no }}" />
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">ISRN/ISSN</div>
                                                    <input type="text" class="form-control" id="isrnissn"
                                                        name="isrnissn" value="{{ $thesis->isrnissn }}" />
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Tanggal Masuk Buku</div>
                                                    <input type="text" class="form-control"
                                                        value="{{ $thesis->created_at }}" disabled />
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Fakultas</div>
                                                    <select name="faculty_id" id="faculty-dd" class="form-control">
                                                        @foreach ($faculties as $faculty)
                                                            <option
                                                                value="{{ $faculty->id }}"{{ $faculty->id == $thesis->faculty_id ? 'selected' : '' }}>
                                                                {{ $faculty->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Jurusan</div>
                                                    <select name="major_id" id="major-dd" class="form-control">
                                                        @foreach ($majors as $major)
                                                            <option
                                                                value="{{ $major->id }}"{{ $major->id == $thesis->major_id ? 'selected' : '' }}>
                                                                {{ $major->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Kategori</div>
                                                    <select name="category" id="category" class="form-control">
                                                        <option
                                                            value="Skripsi"{{ $thesis->category == 'Skripsi' ? 'selected' : '' }}>
                                                            Skripsi</option>
                                                        <option
                                                            value="Tesis"{{ $thesis->category == 'Tesis' ? 'selected' : '' }}>
                                                            Tesis</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Tahun</div>
                                                    <input type="text" class="form-control" id="Tahun" name="date"
                                                        value="{{ $thesis->date }}" />
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Metodologi Penelitian</div>
                                                    <input type="text" class="form-control" id="MetodologiPenelitian"
                                                        name="metodology" value="{{ $thesis->metodology }}" />
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="product-title">Kolasi</div>
                                                    <input type="text" class="form-control" id="Kolasi"
                                                        name="collation" value="{{ $thesis->collation }}" />
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <a href="{{ Storage::url($thesis->file) }}"class="mt-3 btn btn-secondary btn-block"
                                                        style="background-color: blue; color: white;" target="_blank">
                                                        Lihat
                                                        Berkas</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-4 col-12">
                                            <h5>Abstrak</h5>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="editor" name="abstract">{{ $thesis->abstract }}</textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" id="statusInput" name="status" value="">
                                            <div class="mt-4 row">
                                                <div class="text-right col-12">
                                                    <button type="submit" class="mt-4 btn btn-danger btn-lg"
                                                        onclick="setStatus('Tidak Sesuai')">Tidak Sesuai</button>
                                                    <button type="submit" class="mt-4 btn btn-success btn-lg"
                                                        onclick="setStatus('Publish')">Publish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script src="/vendor/vue/vue.js"></script>

    <script>
        function setStatus(status) {
            document.getElementById('statusInput').value = status;
            document.getElementById('myForm').submit();
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#faculty-dd').on('change', function() {
                var idFaculty = this.value;
                $("#major-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-majors') }}",
                    type: "POST",
                    data: {
                        faculty_id: idFaculty,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#major-dd').html('<option value=""> -Pilih Jurusan- </option>');
                        $.each(result.majors, function(key, value) {
                            $("#major-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        })
    </script>
@endpush
