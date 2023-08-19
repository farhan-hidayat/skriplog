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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="NamaMahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="NamaMahasiswa" name="NamaMahasiswa"
                                value="Setra Duta Camera" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="NIM">NIM</label>
                            <input type="text" class="form-control" id="NIM" name="NIM"
                                value="Setra Duta Camera" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="Judul"
                                value="Setra Duta Camera" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Fakultas">Fakultas</label>
                            <select name="Fakultas" id="Fakultas" class="form-control">
                                <option value="Teknik">Teknik</option>
                                <option value="FEB">FEB</option>
                                <option value="FKIP">FKIP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">Jurusan</label>
                            <select name="city" id="city" class="form-control">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Arsitek">Teknik Arsitek</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">Kategori</label>
                            <select name="city" id="city" class="form-control">
                                <option value="Skripsi">Skripsi</option>
                                <option value="Tesis">Tesis</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="Tahun">Tahun</label>
                            <input type="text" class="form-control" id="Tahun" name="Tahun"
                                value="40132" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="MetodologiPenelitian">Metodologi Penelitian</label>
                            <input type="text" class="form-control" id="MetodologiPenelitian" name="MetodologiPenelitian"
                                value="Indonesia" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="Subjek">Subjek</label>
                            <input type="text" class="form-control" id="Subjek" name="Subjek"
                                value="+628 2020 11111" />
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
