@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Details Galery')

@section('content')
<div class="page-content page-details">
    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row margin-details">
                <div class="store-details-container col-lg-12 form-group" data-aos="fade-up">
                    <section class="store-description">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 form-group" style="text-align: justify;">
                                    <h2 class="font-weight-bold">{!! $galery->description !!}</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-12 form-group" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="" />
                    </transition>
                    <hr>
                </div>
                <div class="col-lg-12 form-group">
                    <div class="row">
                        <div class="col-2 col-lg-2 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" alt="" class="w-100 thumbnail-image" :class="{ active: index == activePhoto}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terbaru</strong></h3>
        </div>
    </div>
    <div class="row justify-content-center berita-details">
        @foreach($latest_galeries as $key => $value)
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('pages-details-galery', $value->judul) }}">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('files/photos/' . $value->foto) }}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">{{ $value->category }}</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{ $value->date }}</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            {{ \Illuminate\Support\Str::limit($value->judul, 40, '...') }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('foot-content')
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [
            <?php foreach($images as $key => $value) { ?>
                {
                    id: {{ $key }},
                    url: "{{ asset('files/photos/' . $value->picture) }}",
                },
            <?php } ?>
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        },
    });
</script>
@endsection