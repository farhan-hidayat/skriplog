@extends('layouts.landing')

@section('title')
    Sipaling Skrispi | Upload
@endsection

@section('content')
    <div class="page-content page-cart">
        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <h1 class="mb-4">
                            <center>
                                Data Skripsi/Tesis
                            </center>
                        </h1>
                        <div class="col-12">
                            <hr />
                        </div>
                    </div>
                </div>

                <form action="{{ route('upload-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2 row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                                        {{-- <div class="col-md-12">
                                            <div class="gallery-container">
                                                <img src="https://cdn.dribbble.com/users/2046015/screenshots/6015680/08_404.gif"
                                                    alt="" class="w-100" />
                                                <a href="#" class="delete-gallery">
                                                    <img src="/images/icon-delete.svg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="file" name="" id="file" style="display: none"
                                                required />
                                            <button class="mt-3 btn btn-secondary btn-block" onclick="thisFileUpload()"
                                                style="background-color: blue; color: white;">
                                                Tambahkan Cover Skripsi/Tesis
                                            </button>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <br>
                                                <label>Tambahkan Cover Skripsi/Tesis</label>
                                                <input type="file" name="photo"
                                                    accept="image/png, image/gif, image/jpeg" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <br>
                                                <label>Berkas Skripsi/Tesis</label>
                                                <input type="file" name="file" accept="application/pdf"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-2 row" data-aos="fade-up" data-aos-delay="200">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="NamaMahasiswa">Nama Mahasiswa</label>
                                                    <input type="text" class="form-control" id="NamaMahasiswa"
                                                        name="name" placeholder="Apri Hernando"
                                                        value="{{ old('name') }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nim">NIM</label>
                                                    <input type="text" class="form-control" id="nim" name="nim"
                                                        placeholder="102030405060" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">email</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="email@email.com" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="title">Judul</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        placeholder="Rancang Bangun Aplikasi Pendataan Skripsi/Tesis" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="abstract">Abstrak</label>
                                                    <textarea class="form-control" id="abstract" name="abstract">Abstrak pada skripsi dan tesis adalah ringkasan singkat yang memberikan gambaran menyeluruh tentang isi dan tujuan dari penelitian yang dilakukan. Abstrak biasanya terletak di bagian awal dokumen dan ditulis dalam bentuk paragraf atau beberapa paragraf yang singkat dan padat. Fungsi utamanya adalah untuk memberikan gambaran cepat kepada pembaca tentang topik penelitian, metode yang digunakan, temuan utama, dan implikasi dari penelitian tersebut.</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Fakultas">Fakultas</label>
                                                    <select name="faculty_id" id="faculty-dd" class="form-control">
                                                        <option value=""> -Pilih Fakultas- </option>
                                                        @foreach ($faculties as $faculty)
                                                            <option value="{{ $faculty->id }}">{{ $faculty->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Jurusan">Jurusan</label>
                                                    <select name="major_id" id="major-dd" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Kategori</label>
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="Skripsi">Skripsi</option>
                                                        <option value="Tesis">Tesis</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="date">Tahun</label>
                                                    <input type="text" class="form-control" id="date"
                                                        name="date" placeholder="2023" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="metodology">Metodologi Penelitian</label>
                                                    <input type="text" class="form-control" id="metodology"
                                                        name="metodology" placeholder="Kualitatif" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="collation">Kolasi</label>
                                                    <input type="text" class="form-control" id="collation"
                                                        name="collation" placeholder="VII/150" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center col">
                            <button type="submit" class="px-5 btn btn-success">
                                Unggah
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('abstract');
    </script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
