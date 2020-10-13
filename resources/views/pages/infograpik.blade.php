@extends('layouts.frontend.app')

@section('content')
<div class="data-pencarian">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5 mb-5">
          <h1>Pusat Data Terpadu</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <!-- Search form -->
          <input
            class="form-control"
            type="text"
            placeholder="Cari Data"
            aria-label="Search"
          />
        </div>
        <div class="col-lg-2 mb-4">
          <div class="dropdown">
            <button
              class="btn btn-light dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Provinsi
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 mb-4">
          <div class="dropdown">
            <button
              class="btn btn-light dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Kab/Kota
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 mb-4">
          <div class="dropdown">
            <button
              class="btn btn-light dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Tahun
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
      <!-- feature produk -->
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
  <div class="container produk mb-8 produk-inpage-produk">
    <!-- data produk -->
    <div class="row produk-details">
      <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/infografik/infografik1.jpg')}}"
                alt="Card image cap"
              />
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
          <a href="{{route('pages-infograpik')}}"">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita2.png')}}"
                alt="Card image cap"
              />
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
        <div
          class="col-lg-4 col-md-6 mt-5 mb-5"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <a href="{{route('pages-infograpik')}}">
            <div class="card card-produk">
              <img
                class="card-img-top"
                src="{{ asset('assets/images/berita/berita3.png')}}"
                alt="Card image cap"
              />
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
    <div class="row produk-details">
      <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
          <a href="produk-details.html">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita1.png')}}"
                alt="Card image cap"
              />
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
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img
                class="card-img-top"
                src="{{asset('assets/images/berita/berita2.png')}}"
                alt="Card image cap"
              />
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
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita3.png')}}"
                alt="Card image cap"
              />
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
    <div class="row produk-details">
      <div class="row berita-details">
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita1.png')}}"
                alt="Card image cap"
              />
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
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita2.png')}}"
                alt="Card image cap"
              />
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
        <div class="col-lg-4 col-md-6 mt-5 mb-5">
          <a href="{{route('pages-infograpik')}}">
            <div
              class="card card-produk"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <img
                class="card-img-top"
                src="{{ asset('/assets/images/berita/berita3.png')}}"
                alt="Card image cap"
              />
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
    <div class="row button-produk">
      <div class="col text-center">
        <a href="" class="btn btn-primary">Lihat Lebih Banyak</a>
      </div>
    </div>
  </div>
  <!-- Produk terpopuler -->
@endsection