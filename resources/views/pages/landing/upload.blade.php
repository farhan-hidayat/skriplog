@extends('layouts.landing')

@section('title')
    Sipaling Skrispi | Upload
@endsection

@section('content')
    <div class="page-content page-cart">
        <section class="store-cart">
            <div class="container">
                <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless table-cart">
                            <thead>
                                <tr>
                                    <td>Image</td>
                                    <td>Name &amp; Seller</td>
                                    <td>Price</td>
                                    <td>Menu</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-cart-1.jpg" alt="Image Product" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sofa Ternyaman</div>
                                        <div class="product-subtitle">by Andi</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$30,00</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-cart-2.jpg" alt="Image Product" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sofa Ternyaman</div>
                                        <div class="product-subtitle">by Andi</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$30,00</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-cart-3.jpg" alt="Image Product" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sofa Ternyaman</div>
                                        <div class="product-subtitle">by Andi</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$30,00</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <h2 class="mb-4">Data Skripsi</h2>
                    </div>
                </div>
                <div class="mb-2 row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="NamaMahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="NamaMahasiswa" name="NamaMahasiswa"
                                value="Apri Hernando" />
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
                            <textarea class="form-control" id="Abstrak" name="Abstrak" rows="5">Abstrak pada skripsi dan tesis adalah ringkasan singkat yang memberikan gambaran menyeluruh tentang isi dan tujuan dari penelitian yang dilakukan. Abstrak biasanya terletak di bagian awal dokumen dan ditulis dalam bentuk paragraf atau beberapa paragraf yang singkat dan padat. Fungsi utamanya adalah untuk memberikan gambaran cepat kepada pembaca tentang topik penelitian, metode yang digunakan, temuan utama, dan implikasi dari penelitian tersebut.</textarea>
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
                            <input type="text" class="form-control" id="MetodologiPenelitian" name="MetodologiPenelitian"
                                value="Kualitatif" />
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
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                    <!-- <div class="col-12">
                        <h2>Payment Informations</h2>
                    </div> -->
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <!-- <div class="col-4 col-md-2">
                        <div class="product-title">$30,00</div>
                        <div class="product-subtitle">Country Tax</div>
                    </div>
                    <div class="col-4 col-md-3">
                        <div class="product-title">$130,00</div>
                        <div class="product-subtitle">Product Insurance</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title">$390,00</div>
                        <div class="product-subtitle">Ship to Jakarta</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title text-success">$3,110,00</div>
                        <div class="product-subtitle">Total</div>
                    </div> -->
                    <div class="col-8 col-md-3">
                        <a href="/success.html" class="px-4 mt-4 btn btn-success btn-block">Unggah</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
@endpush
