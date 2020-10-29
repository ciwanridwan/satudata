@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Beranda')

@section('content')
<div class="jumbotron jumbotron-fluid page-content"
style="background-image: url('{{ asset('assets/images/home/jumbotron-b.jpg')  }}')">
<div class="container text-center" data-aos="zoom-in" data-aos-delay="800">
    <img src="{{asset('/assets/logo-utama.png')}}" alt="" style="width: 400px; margin-top: 40px;">
    <h3 class="text-center mt-4"> <strong>SATU DATA KETENAGAKERJAAN</strong> </h3>
    <form method="GET" action="{{ url()->current() }}">
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="e_keyword" placeholder="Masukan kata kunci pencarian ..." name="q">
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
            {{-- <h1 class="text-center">
                <strong>Ketenagakerjaan Dalam Data</strong>
            </h1><br /><br> --}}
            <div class="row">
                {{-- <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div id="neet" style="height: 300px; width: 100%;"></div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                    <div id="covid2" style="height: 300px; width: 100%;"></div>
                </div> --}}
                <div class="col-12" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('assets/images/home/infografik.png')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="benefit mb-4" style="margin-top: 180px;"
style="background-image: url('{{ asset('assets/images/home/benefit-bg1.jpg')  }}')">
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
            <h1 class="mt-2 mb-2">Pembina Data Ketenagakerjaan</h1>
            <p>Menteri yang menyelenggarakan urusan pemerintahan di bidang ketenagakerjaan</p>
            <img src="{{asset('assets/images/home/benefit-icon2.svg')}}" alt="" class="mt-4 mb-4">
            <h1 class="mt-2 mb-2">Pengarah</h1>
            <p>Pejabat Tinggi Madya pada masing-masing unit teknis di Kementerian Ketenagakerjaan</p>
            <img src="{{asset('assets/images/home/benefit-icon3.svg')}}" alt="" class="mt-4 mb-4">
            <h1 class="mt-2 mb-2">Walidata Ketenagakerjaan</h1>
            <p>Unit kerja yang menyelenggarakan tugas dan fungsi di bidang pengelolaan Data <br>Ketenagakerjaan di Kementerian Ketenagakerjaan (Pusat Data dan Informasi Ketenagakerjaan)</p>
            <img src="{{asset('assets/images/home/benefit-icon4.svg')}}" alt="" class="mt-4 mb-4">
            <h1 class="mt-2 mb-2">Produsen Data Ketenagakerjaan</h1>
            <p>Unit kerja pada Instansi Pusat dan Instansi Daerah yang menghasilkan Data Ketenagakerjaan <br>berdasarkan kewenangan sesuai dengan ketentuan peraturan perundang-undangan </p>
            {{-- <Ul type="a">
                <li>Unit eselon 2 kemnaker</li>
                <li>Unit eselon 2 KL lain/ Instansi Daerah/ Lembaga atau Organisasi nasional ataupun internasional
                yang menghasilkan data ketenagakerjaan</li>
            </Ul> --}}
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
                            {{ \Illuminate\Support\Str::limit($value->judul, 45, '...') }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection