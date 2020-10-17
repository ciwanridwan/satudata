@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title')
    Galeri
@endsection

@section('content')
<!-- berita terbaru -->
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terbaru</strong></h3>
        </div>
    </div>
    <!-- berita background -->

    <!-- detail berita -->
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{asset('assets/images/news/news1.png')}}" alt="Card image cap" />
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
                            BLK Pati Mengadakan Pelatihan Kopi dan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="{{asset('assets/images/news/news2.png')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Peserta dilatih membuat minuman ...</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top" src="{{asset('assets/images/news/news3.png')}}" alt="Card image cap" />
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
                            Rapat penentuan strategi ketenagakerjaan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{ asset('assets/images/news/news1.png')}}" alt="Card image cap" />
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
                            BLK Pati Mengadakan Pelatihan Kopi dan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="{{ asset('assets/images/news/news2.png')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Peserta dilatih membuat minuman ...</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top" src="{{ asset('assets/images/news/news3.png')}}" alt="Card image cap" />
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
                            Rapat penentuan strategi ketenagakerjaan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row button-galeri">
        <div class="col text-center">
            <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
        </div>
    </div>
</div>

<!-- berita terpopuler -->
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terpopuler</strong></h3>
        </div>
    </div>
    <!-- detail berita -->
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{ asset('assets/images/news/news1.png')}}" alt="Card image cap" />
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
                            BLK Pati Mengadakan Pelatihan Kopi dan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="{{ asset('assets/images/news/news2.png')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Peserta dilatih membuat minuman ...</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top" src="{{asset('assets/images/news/news3.png')}}" alt="Card image cap" />
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
                            Rapat penentuan strategi ketenagakerjaan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{asset('assets/images/news/news1.png')}}" alt="Card image cap" />
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
                            BLK Pati Mengadakan Pelatihan Kopi dan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img class="card-img-top" src="{{asset('assets/images/news/news2.png')}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Peserta dilatih membuat minuman ...</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery')}}">
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top" src="{{asset('assets/images/news/news3.png')}}" alt="Card image cap" />
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
                            Rapat penentuan strategi ketenagakerjaan ...
                        </h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row button-galeri">
        <div class="col text-center">
            <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
        </div>
    </div>
</div>
@endsection