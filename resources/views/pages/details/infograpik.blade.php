@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Details Infografik')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ asset('/files/infografik/' . $infographic->gambar) }}" alt="" style="width: 500px" />
        </div>
        <div class="col-lg-1"></div>
        <class class="col-lg-6">
            <h3>
                <strong>{{ $infographic->judul }}</strong>
            </h3>
            <div class="row py-4">
                <div class="col-sm-12">
                    <small class="card-title float-left">{{ $infographic->category }}</small>
                    <small class="card-title float-right">{{ $infographic->date }}</small>
                </div>
            </div>
            <div class="row" style="word-break: break-all;">
                <div class="col-sm-12" style="word-break: break-all;">
                    <p style="word-break: break-all;">{!! $infographic->content !!}</p>
                </div>
            </div>
            <h5><strong>Bagikan</strong></h5>
            <div class="icon-share py-4" style="word-spacing: 15px">
                <i class="fa fa-whatsapp" style="font-size: 36px; color: green"></i>
                <i class="fa fa-facebook" style="font-size: 32px; color: #3b5998"></i>
                <i class="fa fa-twitter" style="font-size: 34px; color: #1da1f2"></i>
            </div>
        </div>
    </div>
</div>
@if(!empty($infographics) && count($infographics) >= 1)
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Infografik Terbaru</strong></h3>
        </div>
    </div>
</div>
<div class="container produk mb-8">
    <div class="row justify-content-center produk-details berita-details">
        @foreach($infographics as $key => $value)
        <?php $value = (object)$value; ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mb-5">
            <a href="{{ route('pages.detail.infograpik', $value->plain_id) }}">
                <div class="card card-produk" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{ asset('/files/infografik/' . $value->gambar) }}" alt="Card image cap" />
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
                            {{ $value->judul }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection