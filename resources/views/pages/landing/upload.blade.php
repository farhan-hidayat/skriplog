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
                                Data Skripsi
                            </center>
                        </h1>
                        <div class="col-12">
                            <hr />
                        </div>
                    </div>
                </div>

                <div class="mt-2 row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row" data-aos="fade-up" data-aos-delay="200">
                                    <div class="col-md-12">
                                        <div class="gallery-container">
                                            <img src="/images/product-card-3.png" alt="" class="w-100" />
                                            <a href="#" class="delete-gallery">
                                                <img src="/images/icon-delete.svg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" name="" id="file" style="display: none"
                                            multiple />
                                        <button class="mt-3 btn btn-secondary btn-block" onclick="thisFileUpload()"
                                            style="background-color: blue; color: white;">
                                            Tambahkan Cover Skripsi/Tesis
                                        </button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <br>
                                            <label>Berkas Skripsi/Tesis</label>
                                            <input type="file" class="form-control" />
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
                                                    name="NamaMahasiswa" value="Apri Hernando" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="NIM">NIM</label>
                                                <input type="text" class="form-control" id="NIM" name="NIM"
                                                    value="102030405060" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Judul">Judul</label>
                                                <input type="text" class="form-control" id="Judul" name="Judul"
                                                    value="Rancang Bangun Aplikasi Pendataan Skripsi/Tesis" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Abstrak">Abstrak</label>
                                                <textarea class="form-control" id="Abstrak" name="Abstrak">Abstrak pada skripsi dan tesis adalah ringkasan singkat yang memberikan gambaran menyeluruh tentang isi dan tujuan dari penelitian yang dilakukan. Abstrak biasanya terletak di bagian awal dokumen dan ditulis dalam bentuk paragraf atau beberapa paragraf yang singkat dan padat. Fungsi utamanya adalah untuk memberikan gambaran cepat kepada pembaca tentang topik penelitian, metode yang digunakan, temuan utama, dan implikasi dari penelitian tersebut.</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Fakultas">Fakultas</label>
                                                <select name="Fakultas" id="Fakultas" class="form-control">
                                                    <option value="Teknik">Teknik</option>
                                                    <option value="Kedokteran">Kedokteran</option>
                                                    <option value="Pertanian">Pertanian</option>
                                                    <option value="Hukum">Hukum</option>
                                                    <option value="Ekonomi">Ekonomi</option>
                                                    <option value="MIPA">MIPA</option>
                                                    <option value="FKIP">FKIP</option>
                                                    <option value="FISIP">FISIP</option>
                                                    <option value="Pascasarjana">Pascasarjana</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Jurusan">Jurusan</label>
                                                <select name="Jurusan" id="Jurusan" class="form-control">
                                                    <option value="TeknikInformatika">Teknik Informatika</option>
                                                    <option value="TeknikSipil">Teknik Sipil</option>
                                                    <option value="TeknikArsitek">Teknik Arsitek</option>
                                                    <option value="TeknikPertambangan">Teknik Pertambangan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Kategori">Kategori</label>
                                                <select name="Kategori" id="Kategori" class="form-control">
                                                    <option value="Skripsi">Skripsi</option>
                                                    <option value="Tesis">Tesis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Tahun">Tahun</label>
                                                <input type="text" class="form-control" id="Tahun" name="Tahun"
                                                    value="2023" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="MetodologiPenelitian">Metodologi Penelitian</label>
                                                <input type="text" class="form-control" id="MetodologiPenelitian"
                                                    name="MetodologiPenelitian" value="Kualitatif" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Kolasi">Kolasi</label>
                                                <input type="text" class="form-control" id="Kolasi" name="Kolasi"
                                                    value="VII/150" />
                                            </div>
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
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('Abstrak');
    </script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
@endpush
