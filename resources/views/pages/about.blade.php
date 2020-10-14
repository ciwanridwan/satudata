@extends('layouts.frontend.app', ['footerPage' => ''])

@section('title')
    Tentang Kami
@endsection

@section('content')
<div class="container tentang-page">
    <h1><strong>Tentang</strong></h1>
    <div class="row mt-4">
        <div class="col-lg-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Informasi Umum</a
        >
        <a
          class="nav-link"
          id="v-pills-profile-tab"
          data-toggle="pill"
          href="#v-pills-profile"
          role="tab"
          aria-controls="v-pills-profile"
          aria-selected="false"
          >Struktur Organisasi</a
        >
        <a
          class="nav-link"
          id="v-pills-messages-tab"
          data-toggle="pill"
          href="#v-pills-messages"
          role="tab"
          aria-controls="v-pills-messages"
          aria-selected="false"
          >Alamat</a
        >
      </div>
    </div>
    <div class="col-lg-9 mt-2">
      <div class="tab-content" id="v-pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="v-pills-home"
          role="tabpanel"
          aria-labelledby="v-pills-home-tab"
        >
          <h1><strong>Informasi Umum</strong></h1>
          <hr />
          <p>
            Sesuai dengan amanat Peraturan Presiden Nomor 39 Tahun 2019
            tentang Satu Data Indonesia dan Peraturan Menteri
            Ketenagakerjaan Nomor 15 Tahun 2020 tentang Satu Data
            Ketenagakerjaan, Pusat Data dan Informasi Ketenagakerjaan telah
            ditetapkan sebagai Walidata Ketenagakerjaan yang salah satu
            tugasnya adalah untuk menyebarluaskan Data, Standar Data,
            Metadata dalam Portal Satu Data Ketenagakerjaan.
          </p>
          <p>
            Sebagai salah satu bentuk pemenuhan tugas sebagai walidata, maka
            Pusat Data dan Informasi Ketenagakerjaan meluncurkan secara
            resmi aplikasi Portal
            <strong>Satu Data Ketenagakerjaan</strong> pada tanggal 22
            Oktober 2020.
          </p>
          <p>
            Portal Satu Data Ketenagakerjaan merupakan media bagipakai Data
            Ketenagakerjaan yang merupakan hasil inovasi Pusat Data dan
            Informasi Ketenagakerjaan sebagai upaya untuk menghasilkan tata
            Kelola data ketenagakerjaan yang akurat, mutakhir, terpadu, dan
            dapat dipertanggungjawabkan, serta mudah dibagipakaikan antar
            Instansi Pusat dan Daerah melalui pemenuhan prinsip – prinsip
            Satu Data Indonesia, yaitu Satu Standar Data, Satu Metadata,
            Interoperabilitas Data, dan menggunakan Kode Referensi atau Data
            Induk.
          </p>
          <p>
            Dengan diluncurkannya Portal Satu Data Ketenagakerjaan
            diharapkan dapat memberikan acuan pelaksanaan dan pedoman bagi
            Instansi Pusat dan Daerah dalam penyelenggaraan tata Kelola data
            ketenagakerjaan, mendorong keterbukaan dan transparansi data
            ketenagakerjaan, serta semakin meningkatkan kualitas dan
            integritas data ketenegakerjaan yang mendukung kebijakan
            pemerintah di sektor Ketenagakerjaan.
          </p>
        </div>
        <div
          class="tab-pane fade"
          id="v-pills-profile"
          role="tabpanel"
          aria-labelledby="v-pills-profile-tab"
        >
          <h1><strong>Struktur Organisasi</strong></h1>
          <hr />
          <p>
            Sesuai dengan Peraturan Menteri Ketenagakerjaan Nomor 12 Tahun
            2019 tentang Perubahan Kedua Atas Peraturan Menteri
            Ketenagakerjaan Nomor 13 Tahun 2015 tentang Organisasi dan Tata
            Kerja Kementerian Ketenagakerjaan, Pusat Data dan Informasi
            Ketenagakerjaan merupakan Unit Eselon II Kementerian
            Ketenagakerjaan yang berada di bawah Badan Perencanaan dan
            Pengembangan Ketenagakerjaan.
          </p>
          <p>
            Pusat Data dan Informasi Ketenagakerjaan mempunyai tugas
            melaksanakan penyusunan kebijakan teknis, rencana dan program,
            pelaksanaan, pemantauan, evaluasi dan pelaporan di bidang
            pengelolaan data dan informasi ketenagakerjaan.
          </p>
          <p>Pusat Data dan Informasi Ketenagakerjaan terdiri atas:</p>
          <ol type="a">
            <li>Bidang Pengolahan dan Analisis Data</li>
            <li>Bidang Diseminasi Informasi</li>
            <li>Subbagian Tata Usaha</li>
          </ol>
          <img src="/images/tentang/struktur.png" alt="" />
        </div>
        <div
          class="tab-pane fade"
          id="v-pills-messages"
          role="tabpanel"
          aria-labelledby="v-pills-messages-tab"
        >
          <h1><strong>Alamat</strong></h1>
          <hr />
          <ol type="a">
            <li>
              Alamat Kantor: Pusat Data dan Informasi Ketenagakerjaan,
              Kementerian Ketenagakerjaan, Lt. 3 Gedung A, Jl. Jend. Gatot
              Subroto Kav.51, Jakarta Selatan
            </li>
            <li>Telp/Fax: 021-5273609</li>
            <li>Website: satudata.kemnaker.go.id</li>
            <li>Layanan Permintaan Data: linda.kemnaker.go.id</li>
            <li>Email: pusdatin@kemnaker.go.id</li>
            <li>
              Media Sosial:
              <ul>
                <li>Instagram: pusdatinaker</li>
                <li>Youtube: pusdatin kemnaker</li>
              </ul>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection