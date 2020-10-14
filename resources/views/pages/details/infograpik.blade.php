@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title')
    Details Infograpik
@endsection

@section('content')
<div class="container">
    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-lg-5">
            <img src="{{ asset('assets/images/infografik/infografik1.jpg')}}" alt="" style="width: 500px" />
        </div>
        <div class="col-lg-1"></div>
        <class class="col-lg-6">
            <h3>
                <strong>Menaker Ida Ajak Mahasiswa Kembangkan Softskill dan Akhlakul
          Karimah</strong
        >
      </h3>
      <br />
      <div class="row">
        <div class="col-1">
          <small class="card-title">Kategori</small>
        </div>
        <div class="col-5">
          <small class="card-title">Hari, 12 bulan 2020</small>
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
<!-- detail infografis -->
<div class="container berita">
    <div class="row section-berita">
        <div class="col-lg-10">
            <h3><strong>Infografik Terbaru</strong></h3>
        </div>
    </div>
</div>
<div class="container produk mb-8">
    <!-- data produk -->
    <div class="row produk-details">
        <div class="row berita-details">
            <div class="col-lg-4 col-md-6 mt-5 mb-5">
                <a href="infografik-details.html">
                    <div class="card card-produk" data-aos="fade-up" data-aos-delay="100">
                        <img class="card-img-top" src="{{asset('assets/images/infografik/infografik1.jpg')}}" alt="Card image cap" />
                        <div class="card-body">
                            <div class="row judul-berita">
                                <div class="col-7">
                                    <p class="card-title">Kategori</p>
                                </div>
                                <div class="col-5">
                                    <p class="card-title">Hari, 12 bulan 2020</p>
                                </div>
                            </div>
                            <h2 class="card-text">
                                Data Pencari Kerja Kuartal 1 pada tahun 2020
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-5">
                <a href="infografik-details.html">
                    <div class="card card-produk" data-aos="fade-up" data-aos-delay="200">
                        <img class="card-img-top" src="{{asset('assets/images/berita/berita2.png')}}" alt="Card image cap" />
                        <div class="card-body">
                            <div class="row judul-berita">
                                <div class="col-7">
                                    <p class="card-title">Kategori</p>
                                </div>
                                <div class="col-5">
                                    <p class="card-title">Hari, 12 bulan 2020</p>
                                </div>
                            </div>
                            <h2 class="card-text">
                                Data tenaga kerja asing tahun 2019...
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="300">
                <a href="infografik-details.html">
                    <div class="card card-produk">
                        <img class="card-img-top" src="{{asset('assets/images/berita/berita3.png')}}" alt="Card image cap" />
                        <div class="card-body">
                            <div class="row judul-berita">
                                <div class="col-7">
                                    <p class="card-title">Kategori</p>
                                </div>
                                <div class="col-5">
                                    <p class="card-title">Hari, 12 bulan 2020</p>
                                </div>
                            </div>
                            <h2 class="card-text">Data penempatan kerja dari LPTKS</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container berita">
        <div class="row buttonnext text-center">
            <a href="#" class="previous round">&#8249;</a>
            <a href="#" class="next round">&#8250;</a>
        </div>
    </div>
</div>
</div>
@endsection