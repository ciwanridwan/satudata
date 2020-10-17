@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title')
    Details Galery
@endsection

@section('content')
<!-- deskripsi -->
<div class="page-content page-details">
    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row margin-details">
                <div class="col-lg-10" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="" />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" alt="" class="w-100 thumbnail-image" :class="{ active: index == activePhoto}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h5>
                            The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge.
                            </h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- detail infografis -->
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terbaru</strong></h3>
        </div>
    </div>
    <!-- detail berita -->
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="produk-details.html">
                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/berita/news1.jpg')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            Data Pencari Kerja Kuartal 1 tahun 2020..
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="produk-details.html">
                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/berita/news2.jpg')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Data tenaga kerja asing tahun 2019...</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="400">
            <a href="produk-details.html">
                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/berita/news4.jpeg')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            Data penempatan kerja dari LPTKS 2020...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row buttonnext text-center">
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
    </div>
</div>
@endsection