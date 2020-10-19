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
                                    <strong>Angka Melanjutkan (AM) dari PAUD KE SD/MI</strong>
                                </h6>
                                <br />
                                <small>Jadwal Rilis: <span>2020-06-12</span></small>
                                <br />
                                <small>
                  Ukuran File: <span><strong>2.3</strong></span> Mb
                </small>
                                <br /><br />
                                <a href="" class="btn btn-success">unduh brs ini</a>
                                <br /><br />
                                <p><strong>Abstraksi</strong></p>
                                <ul>
                                    <li>
                                        Upah nominal buruh/pekerja adalah rata-rata upah harian yang diterima buruh sebagai balas jasa pekerjaan yang telah dilakukan.
                                    </li>
                                    <li>
                                        Upah riil buruh tani adalah perbandingan antara upah nominal buruh tani dengan indeks konsumsi rumah tangga perdesaan, sedangkan upah riil buruh bangunan adalah perbandingan upah nominal buruh bangunan terhadap indeks harga konsumen perkotaan.
                                    </li>
                                    <li>
                                        Upah nominal harian buruh tani nasional pada September 2020 naik sebesar 0,08 persen dibanding upah buruh tani Agustus 2020, yaitu dari Rp55.677,00 menjadi Rp55.719,00 per hari. Sementara itu, upah riil buruh tani mengalami kenaikan sebesar 0,15 persen.
                                    </li>
                                    <li>
                                        Upah nominal harian buruh bangunan (tukang bukan mandor) pada September 2020 naik 0,98 persen dibanding Agustus 2020, yaitu dari Rp89.872,00 menjadi Rp90.753,00 per hari. Sementara upah riil mengalami kenaikan sebesar 1,03 persen.
                                    </li>
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