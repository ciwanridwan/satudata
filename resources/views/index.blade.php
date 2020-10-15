@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title')
    Beranda
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid page-content">
    <div class="container text-center" data-aos="zoom-in" data-aos-delay="800">
        <img src="{{asset('/assets/logo-utama.png')}}" alt="" style="width: 400px; margin-top: 40px;">
        <h3 class="text-center mt-4"> <strong>SATU DATA KETENAGAKERJAAN</strong> </h3>
        <form method="GET" action="dataset.html">
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="e_keyword" placeholder="Masukan kata kunci pencarian ..." name="q">
            </div>
            <button type="submit" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" >
            <circle cx="10.5" cy="10.5" r="7.5"></circle>
            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
        </svg><b>Cari Data</b>&nbsp; &nbsp; &nbsp;
    </button>
        </form>
    </div>
</div>

<!-- data -->
<section class="wow-pad bg-white" style="margin-top: 100px;">
    <div class="container">
        <div class="container">
            <br/>
            <h1 class="text-center">
                <strong>Ketenagakerjaan Dalam Data</strong>
            </h1><br/><br>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div id="neet" style="height: 300px; width: 100%;"></div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div id="covid2" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
</section>

<div class="benefit mb-4" style="margin-top: 180px;">
    <h1><strong>Layanan Kami</strong></h1>
    <div class="container">
        <div class="row">
            <div class="benefit-bg-1 col-lg-5 " data-aos="fade-right" data-aos-delay="100"></div>
            <div class="col-lg-7"></div>
        </div>
        <div class="benefit-content row">
            <div class="col-lg-2"></div>
            <div class="benefit-content-description benefit-bg-2 col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('/assets/images/home/benefit-icon1.svg')}}" alt="" class="mt-4 mb-4">
                        <h3 class="mt-2 mb-2">Pengumpulan Data Daring</h3>
                        <p>Pengumpulan data daring dilakukan di dalam satudata dan diproses langsung melalui metode-metode statistik dari berbagai pakar statistika</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/images/home/benefit-icon3.svg')}}" alt="" class="mt-4 mb-4">
                        <h3 class="mt-2 mb-2">Analisis Data</h3>
                        <p>Analisis data melalui Data Science ditampilkan beserta data yang dicari</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"> <img src="{{ asset('/assets/images/home/benefit-icon2.svg')}}" alt="" class="mt-4 mb-4">
                        <h3 class="mt-2 mb-2">Klasifikasi Data</h3>
                        <p>Data telah terklasifkasi sehingga memudahkan pengguna untuk menggunakan data tersebut demi keperluan akademik</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/images/home/benefit-icon4.svg')}}" alt="" class="mt-4 mb-4">
                        <h3 class="mt-2 mb-2">Penyajian</h3>
                        <p>data disajikan seemenarik mungkin melalui metode statistik sehingga memudahkan pengguna untuk membaca data tersebut</p>
                    </div>
                </div>
                <img src="{{ asset('assets/images/home/benefit-icon2.svg')}}" alt="" class="mt-4 mb-4">
                <h3 class="mt-2 mb-2">Permintaan Data untuk Akademik</h3>
                <p>Satudata memberikan layanan untuk sivitas akademika untuk mengajukan permintaan data untuk keperluan pendidikan</p>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class=" col-lg-7"></div>
            <div class="benefit-bg-3 col-lg-5" data-aos="fade-left" data-aos-delay="100"></div>
        </div>
    </div>
</div>

<!-- detail infografis -->
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Gallery Terbaru</strong></h3>
        </div>
        <div class="col-lg-2">
            <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
        </div>
    </div>
    <!-- detail berita -->
    <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('pages-details-galery')}}">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/assets/images/news/news2.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Data Pencari Kerja Kuartal 1 tahun 2020..</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="{{route('pages-details-galery')}}">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/assets/images/news/news3.png')}}" alt="Card image cap">
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
            <a href="{{route('pages-details-galery')}}">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/assets/images/news/news1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">Kategori</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">Hari, 12 bulan 2020</p>
                            </div>
                        </div>
                        <h2 class="card-text">Data penempatan kerja dari LPTKS 2020...</h2>
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