@extends('layouts.landing')

@section('title')
    Sipaling Skrispi | Detail
@endsection

@section('content')
    <div class="page-content page-details">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <h1>{{ $thesis->title }}</h1>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                                alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-5">
                        <div class="store-details-container" data-aos="fade-up">
                            <section class="store-heading">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h1>{{ $thesis->name }}</h1>
                                            <div class="owner">{{ $thesis->nim }}</div>
                                            <div class="price">{{ $thesis->faculty->name }}/{{ $thesis->major->name }}
                                            </div>
                                            <div class="owner">{{ $thesis->date }}</div>
                                            <div class="owner">{{ $thesis->position }}</div>
                                        </div>
                                    </div>
                            </section>
                            <section class="store-description">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            {!! $thesis->abstract !!}
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <a href="{{ Storage::url($thesis->review) }}"class="mt-3 btn btn-secondary btn-block"
                                                style="background-color: rgb(255, 162, 0); color: rgb(0, 0, 0);"
                                                target="_blank">
                                                Lihat Buku</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [{
                    id: 1,
                    url: "{{ Storage::url($thesis->photo) }}",
                }, ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
