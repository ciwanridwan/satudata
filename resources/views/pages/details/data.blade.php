@extends('layouts.frontend.app', ['footerPage' => 'footer'])

@section('title')
Details Data
@endsection

@section('content')
<!-- breadcrumb -->
<div role="main">
    <div class="container-fluid background-publikasi">
        <div class="container background-datbase">
            <div class="flash-messages"></div>
            <div class="toolbar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="fa fa-home"></i>Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/dataset">Data</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/dataset">Detail</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <section class="module publikasi-module">
                        <div class="module-content mb-4">
                            <div class="judul-publikasi">
                                <br />
                                <h5 style="margin-left: 14px">
                                    <strong>Data Detail</strong>
                                </h5>
                            </div>
                            <hr />
                            <div style="margin-left: 14px">
                                <h6>
                                    <strong>{{$data->judul}}</strong>
                                </h6>
                                <br />
                                <small>Jadwal Rilis: <span>{{$data->created_at}}</span></small>
                                <br />
                                <small>
                                    Ukuran File: <span><strong>{{$data->size_files}}</strong></span>
                                </small>
                                <br /><br />
                                <a href="{{asset('storage/files/'. $data->file)}}" id="" class="btn btn-success" download>Unduh</a>
                                <br /><br />
                                <p><strong>Abstraksi</strong></p>
                                <ul>
                                    {!! $data->abstraksi !!}
                                </ul>
                                <br />
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="footer-bottom">
    <div class="container">
        <div class="row mt-4 mb-4 logo-footer">
            <img src="{{ asset('/assets/images/logo-navbar.png')}}" alt="">
        </div>
        <div class="row alamat">
            <div class="col-6">
                <p>Jl. Jendral Gatot Subroto Kav. 51, Daerah Khusus <br>Ibukota Jakarta 12750, Indonesia</p>
            </div>
            <div class="col-6 icon-footer-left">
                <a href=""><img src="{{ asset('/assets/images/icon-instagram.png')}}" alt=""></a>
                <a href=""><img src="{{ asset('/assets/images/icon-facebook.png')}}" alt=""></a>
                <a href=""><img src="{{ asset('/assets/images/icon-twiter.png')}}" alt=""></a>
                <a href=""><img src="{{ asset('/assets/images/icon-youtube.png')}}" alt=""></a>
            </div>
        </div>
        <div class="row info-perusahaan">
            <div class="col-lg-3">
                <p>Telp: 089-8765432</p>
            </div>
            <div class="col-lg-3">
                <p>Call Center: 089-8765432</p>
            </div>
            <div class="col-lg-2">
                <p>Tentang Satudata</p>
            </div>
            <div class="col-lg-2">
                <p>Hubungi Kami</p>
            </div>
            <div class="col-lg-2">
                <p>Peta Situs</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 garis-footer"></div>
        </div>
        <div class="row ">
            <div class="col-12 hak-cipta">
                <p>Kementrian Ketenagakerjaan Republik Indonesia C 2020 - Hak Cipta Dilindungi Undang-Undang</p>
            </div>
        </div>
    </div>
</footer>
@endsection

@section('js-download')
<script>
function downloadAll(urls) {
  var link = document.createElement('a');

  link.setAttribute('download', null);
  link.style.display = 'none';

  document.body.appendChild(link);

  for (var i = 0; i < urls.length; i++) {
    link.setAttribute('href', urls[i]);
    link.click();
  }

  document.body.removeChild(link);
}
</script>
@endsection