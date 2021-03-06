@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Infografik')

@section('head')

@section('content')
<div class="data-pencarian">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5 mb-5">
        <h1>Pusat Data Terpadu</h1>
      </div>
    </div>
    <form action="{{ url()->current() }}">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <input class="form-control form-control-lg" type="text" name="q" placeholder="Cari Data" aria-label="Search" value="{{ !empty($_GET['q']) ? $_GET['q'] : null }}" />
        </div>
        <div class="col-lg-3 mb-4">
          <div class="dropdown">
            <button class="btn btn-light btn-lg btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >{{ !empty($year) ? $year : 'Tahun' }}</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @if(!empty($years))
              @foreach($years as $key => $value)
              <a class="dropdown-item {{ !empty($year) && $year == $value ? 'active' : null }}" href="{{ !empty($year) && $year == $value ? url('infograpik') : url('infograpik/' . $value) }}">{{ $value }}</a>
              @endforeach
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <button type="submit" class="btn btn-info btn-lg btn-block">Cari</button>
        </div>
        <div class="col-md-12">
          <div class="alert alert-dark alert-important" role="alert">
            Menampilkan <span id="total_dataser">{{ !empty($total) ? $total : 0 }}</span> Infografik
          </div>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="row">
          <div class="col-3 icon-produk">
            <img src="{{ asset('assets/images//product/feature-produk.svg')}}" alt="" />
          </div>
          <div class="col-9 icon-produk-content">
            <p>Data Induk TKI</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="row">
          <div class="col-3 icon-produk">
            <img src="{{ asset('assets/images//product/produk-terbaru.svg')}}" alt="" />
          </div>
          <div class="col-9 icon-produk-content">
            <p>Data Terbaru</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="row">
          <div class="col-3 icon-produk">
            <img src="{{ asset('assets/images//product/produk-terdanai.svg')}}" alt="" />
          </div>
          <div class="col-9 icon-produk-content">
            <p>Data Profesi</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="row">
          <div class="col-3 icon-produk">
            <img src="{{ asset('assets/images//product/produk-terlaris.svg')}}" alt="" />
          </div>
          <div class="col-9 icon-produk-content">
            <p>Anilis Data</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<div class="container produk mb-8 produk-inpage-produk">
  <div class="row justify-content-center produk-details berita-details">
    @foreach($infographics as $key => $infographic)
    <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mb-5">
      <a href="{{ route('pages.detail.infograpik', $infographic->id) }}">
        <div class="card card-produk" data-aos="fade-up" data-aos-delay="100" >
          <img class="card-img-top" src="{{ asset($infographic->thumbnail) }}" style="object-fit: cover;" alt="Card image cap" />
          <div class="card-body">
            <div class="row judul-berita">
              <div class="col-6">
                <p class="card-title">{{ $infographic->category }}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-title">{{ $infographic->date }}</p>
              </div>
            </div>
            <h2 class="card-text">
              {{ \Illuminate\Support\Str::limit($infographic->judul, 40, '...') }}
            </h2>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  {{ $infographics->appends(request()->input())->links() }}
</div>
@endsection
