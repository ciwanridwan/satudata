@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title', 'Details Infografik')

@section('content')
<div class="container">
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ asset('/files/infografik/' . $infographic->gambar) }}" alt="" style="width: 500px" />
        </div>
        <div class="col-lg-1"></div>
        <class class="col-lg-6">
            <h3>
                <strong>{{ $infographic->judul }}</strong>
            </h3>
            <br />
            <div class="row">
                <div class="col-sm-12">
                    <small class="card-title float-left">{{ $infographic->category }}</small>
                    <small class="card-title float-right">{{ $infographic->date }}</small>
                </div>
            </div>
            <br />
            <p>
                <span><strong>Jakarta</strong></span> - Memasuki era revolusi industri 4.0 yang ditandai dengan penggunaan teknologi pada otomasi dan pertukaran data secara cepat dalam segala aspek, Menteri Ketenagakerjaan Ida Fauziyah
                meminta kalangan mahasiswa untuk terus mengembangkan soft skills dan akhlakul karimah. Karena kompetensi tanpa budi pekerti yang baik tidak akan bermanfaat.
            </p>
            <p>
                "Jangan sampai image kurangnya rasa hormat dan sopan santun yang sering dialamatkan pada generasi milennial ada pada diri kalian. Jangan lupa, bijaklah dalam bersosial media," ujar Menaker Ida saat menjadi narasumber Pengenalan Budaya Akademik dan Kemahasiswaan
                (PBAK) Tahun 2020/2021 UIN Sunan Ampel Surabaya, melalui video conference pada hari Rabu (23/9/2020).
            </p>
            <p>
                Pesan kedua Menaker Ida yakni tetap bersikap rendah hati dan tidak cepat berpuas diri dan teruslah belajar dan berkembang dengan memanfaatkan segala media yang ada. Misalnya mengikuti organisasi, kompetisi, dan pelatihan kompetensi yang ada di berbagai
                bidang.
            </p>
            <p>
                "Tumbuhkanlah kedekatan dengan rakyat, karena mahasiswa adalah agent of change yang bisa membantu perubahan di masyarakat. Jangan menjadi mahasiswa di Menara gading yang hanya bangga dan sibuk dengan urusannya sendiri," katanya.
            </p>
            <br />

            <h5><strong>Bagikan</strong></h5>
            <br />
            <div class="icon-share" style="word-spacing: 15px">
                <i class="fa fa-whatsapp" style="font-size: 36px; color: green"></i>
                <i class="fa fa-facebook" style="font-size: 32px; color: #3b5998"></i>
                <i class="fa fa-twitter" style="font-size: 34px; color: #1da1f2"></i>
            </div>
        </div>
    </div>
</div>
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Infografik Terbaru</strong></h3>
        </div>
    </div>
</div>
<div class="container produk mb-8">
    <div class="row justify-content-center produk-details berita-details">
        @foreach($infographics as $key => $infographic)
        <?php $infographic = (object)$infographic; ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mb-5">
            <a href="{{ route('pages.detail.infograpik', $infographic->id) }}">
                <div class="card card-produk" data-aos="fade-up" data-aos-delay="100">
                    <img class="card-img-top" src="{{ asset('/files/infografik/' . $infographic->gambar) }}" alt="Card image cap" />
                    <div class="card-body">
                        <div class="row judul-berita">
                            <div class="col-7">
                                <p class="card-title">{{ $infographic->category }}</p>
                            </div>
                            <div class="col-5">
                                <p class="card-title">{{ $infographic->date }}</p>
                            </div>
                        </div>
                        <h2 class="card-text">
                            Data Pencari Kerja Kuartal 1 pada tahun 2020
                        </h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection