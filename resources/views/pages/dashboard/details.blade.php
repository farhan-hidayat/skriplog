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
            <div class="dashboard-content mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="/images/product-details-dashboard.png" alt=""
                                            class="w-100 mb-3" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Nama Mahasiswa</div>
                                                <input type="text" class="form-control" id="NamaMahasiswa"
                                                    name="NamaMahasiswa" value="Apri Hernando" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">NIM</div>
                                                <input type="text" class="form-control" id="NIM" name="NIM"
                                                    value="102030405060" />
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Judul</div>
                                                <input type="text" class="form-control" id="Judul" name="Judul"
                                                    value="Rancang Bangun Aplikasi Pendataan Skripsi/Tesis" />
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <div class="product-title">No. Panggilan Setempat</div>
                                                <input type="text" class="form-control" id="NIM" name="NIM"
                                                    value="102030405060" />
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">ISRN/ISSN</div>
                                                <input type="text" class="form-control" id="NIM" name="NIM"
                                                    value="102030405060" />
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Tanggal Masuk Buku</div>
                                                <input type="date" class="form-control" id="NIM" name="NIM"
                                                    value="102030405060" />
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Fakultas</div>
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
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Jurusan</div>
                                                <select name="Jurusan" id="Jurusan" class="form-control">
                                                    <option value="TeknikInformatika">Teknik Informatika</option>
                                                    <option value="TeknikSipil">Teknik Sipil</option>
                                                    <option value="TeknikArsitek">Teknik Arsitek</option>
                                                    <option value="TeknikPertambangan">Teknik Pertambangan</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Kategori</div>
                                                <select name="Kategori" id="Kategori" class="form-control">
                                                    <option value="Skripsi">Skripsi</option>
                                                    <option value="Tesis">Tesis</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Tahun</div>
                                                <input type="text" class="form-control" id="Tahun" name="Tahun"
                                                    value="2023" />
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Metodologi Penelitian</div>
                                                <input type="text" class="form-control" id="MetodologiPenelitian"
                                                    name="MetodologiPenelitian" value="Kualitatif" />
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="product-title">Kolasi</div>
                                                <input type="text" class="form-control" id="Kolasi" name="Kolasi"
                                                    value="VII/150" />
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <button class="mt-3 btn btn-secondary btn-block"
                                                    style="background-color: blue; color: white;">
                                                    Lihat Berkas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Abstrak</h5>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="editor" name="editor">Abstrak pada skripsi dan tesis adalah ringkasan singkat yang memberikan gambaran menyeluruh tentang isi dan tujuan dari penelitian yang dilakukan. Abstrak biasanya terletak di bagian awal dokumen dan ditulis dalam bentuk paragraf atau beberapa paragraf yang singkat dan padat. Fungsi utamanya adalah untuk memberikan gambaran cepat kepada pembaca tentang topik penelitian, metode yang digunakan, temuan utama, dan implikasi dari penelitian tersebut.</textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 text-right">
                                                <button type="submit" class="btn btn-success btn-lg mt-4">
                                                    Save Now
                                                </button>
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
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script src="/vendor/vue/vue.js"></script>
@endpush
