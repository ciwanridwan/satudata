@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Beranda')

@section('content')

<div class="jumbotron jumbotron-fluid page-content">
    <div class="container text-center" data-aos="zoom-in" data-aos-delay="800">
        <img src="{{asset('/assets/logo-utama.png')}}" class="img-fluid" style="width: 400px; margin-top: 20px;">
        <h3 class="text-center mt-4"> <strong>SATU DATA KETENAGAKERJAAN</strong> </h3>
        <form method="GET" action="{{ url()->current() }}">
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="e_keyword" placeholder="Masukan kata kunci pencarian ..."
                    name="q" style="height: 45px">
            </div>
            <button type="submit" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
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
            <br />
            <div class="row">
                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="zoom-in" --}}
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-aos="zoom-in"
                    data-aos-delay="200" style="max-height: 940px;">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($banner as $item)
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/files/banners/' . $item->gambar)}}"
                        alt="">
                    </div>
                    @endforeach
                    {{-- <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets/images/home/infofirst.jpg')}}"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/images/home/infografik.png')}}"
                            alt="Second slide">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="benefit mb-4" style="margin-top: 180px;">
    <h1><strong>Penyelenggara</strong></h1>
    <div class="container">
        <div class="row">
            <div class="benefit-bg-1 col-lg-5 " data-aos="fade-right" data-aos-delay="100"></div>
            <div class="col-lg-7"></div>
        </div>
        <div class="benefit-content row">
            <div class="col-lg-2"></div>
            <div class="benefit-content-description benefit-bg-2 col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{asset('assets/images/home/benefit-icon1.svg')}}" alt="" class="mt-4 mb-4">
                <h1 class="mt-2 mb-2">Pembina Data</h1>
                <p>Menteri yang menyelenggarakan urusan pemerintahan di bidang ketenagakerjaan</p>
                <img src="{{asset('assets/images/home/benefit-icon2.svg')}}" alt="" class="mt-4 mb-4">
                <h1 class="mt-2 mb-2">Pengarah</h1>
                <p>Pejabat tinggi madya di kementerian</p>
                <img src="{{asset('assets/images/home/benefit-icon3.svg')}}" alt="" class="mt-4 mb-4">
                <h1 class="mt-2 mb-2">Walidata Ketenagakerjaan</h1>
                <p>Unit kerja di kementerian yang mempunyasi tugas pengelolaan data ketenagakerjaan (Pusdatinaker)</p>
                <img src="{{asset('assets/images/home/benefit-icon4.svg')}}" alt="" class="mt-4 mb-4">
                <h1 class="mt-2 mb-2">Produsen Data</h1>
                <p>Unit kerja pada Instansi Pusat dan Instansi Daerah yang menghasilkan Data Ketenagakerjaan
                    <br>berdasarkan kewenangan sesuai dengan ketentuan peraturan perundang-undangan </p>
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
            <h3><strong>Galeri Terbaru</strong></h3>
        </div>
        <div class="col-lg-2">
            <a href="{{ url('galeri') }}" class="btn btn-primary">Lihat Lebih Banyak</a>
        </div>
    </div>
    <!-- detail berita -->
    <div class="row berita-details">
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
    <div class="row buttonnext text-center">
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
    </div>
</div>
@endsection

@push('first-slide')
<script>
    $(document).ready(function () {
      $('#myCarousel').find('.carousel-item').first().addClass('active');
    });
  </script>
@endpush