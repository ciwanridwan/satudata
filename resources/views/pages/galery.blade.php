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
        @foreach ($galery as $item)
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery', $item->judul)}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{asset('storage/photos/'. $item->foto)}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                @foreach ($kategori as $p)
                                @if ($p->id == $item->kategori_galery_id)
                                <p class="card-title">{{$p->nama}}</p>
                                @endif    
                                @endforeach
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{$item->created_at}}</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            {{$item->judul}}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
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
        @foreach ($galeriPopuler as $item)
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery', $item->judul)}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{asset('storage/photos/'. $item->foto)}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                @foreach ($kategori as $p)
                                @if ($p->id == $item->kategori_galery_id)
                                <p class="card-title">{{$p->nama}}</p>
                                @endif    
                                @endforeach
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{$item->created_at}}
                            </div>
                        </div>
                        <h2 class="card-text">
                            {{$item->judul}}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
    <div class="row button-galeri">
        <div class="col text-center">
            <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
        </div>
    </div>
</div>
@endsection