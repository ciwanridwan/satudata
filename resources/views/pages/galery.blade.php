@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Galeri')

@section('content')
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terbaru</strong></h3>
        </div>
    </div>
    <div class="row berita-details">
        @foreach ($galeries as $item)
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{route('pages-details-galery', $item->judul)}}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{asset('files/photos/'. $item->foto)}}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">{{ $item->category }}</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{ $item->date }}</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            {{ $item->judul }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{ $galeries->links() }}
</div>
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Galeri Terpopuler</strong></h3>
        </div>
    </div>
    <div class="row justify-content-center berita-details">
        @foreach ($popular_galeries as $item)
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
            <a href="{{ route('pages-details-galery', $item->judul) }}">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{ asset('files/photos/' . $item->foto) }}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                               {{ $item->category }}
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{ $item->date }}
                            </div>
                        </div>
                        <h2 class="card-text">
                            {{ $item->judul }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{ $popular_galeries->links() }}
</div>
@endsection
