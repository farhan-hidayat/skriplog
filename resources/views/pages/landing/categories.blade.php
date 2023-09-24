@extends('layouts.landing')

@section('title')
    Sipaling Skrispi | Categories
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-trand-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Fakultas</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $incrementProduct = 0;
                    @endphp
                    @forelse ($faculties as $faculty)
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up"
                            data-aos-delay="{{ $incrementProduct += 100 }}">
                            <a href="{{ route('kategori-show', $faculty->slug) }}" class="component-categories d-block">
                                <div class="categories-image">
                                    <img src="{{ Storage::url($faculty->icons) }}" alt="" class="w-100" />
                                    <p class="categories-text">{{ $faculty->name }}</p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="py-5 text-center col-12" data-aos="fade-up" data-aos-delay="100">
                            No Fakultas Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Skripsi</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $incrementProduct = 0;
                    @endphp
                    @forelse ($theses as $thesis)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="{{ $incrementProduct += 100 }}">
                            <a href="{{ route('detail-show', $thesis->no) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div class="products-image"
                                        style="
                      background-image: url('{{ Storage::url($thesis->photo) }}');
                    ">
                                    </div>
                                </div>
                                <div class="products-text">{{ $thesis->title }}</div>
                                <div class="products-price">{{ $thesis->name }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="py-5 text-center col-12" data-aos="fade-up" data-aos-delay="100">
                            No Skripsi/Tesis Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
@endpush
