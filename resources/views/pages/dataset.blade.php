@extends('layouts.frontend.app', ['footerPage' => 'footer'])

@section('title')
    Data
@endsection

@section('content')
<div role="main">
    <div class="container-fluid background-datbase">
        <div class="flash-messages"></div>
        <div class="toolbar">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{route('pages-data')}}">Kumpulan Data</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 col-12">
                <div class="filters">
                    <div>
                        <section class="module module-narrow module-shallow">
                            <h5 class="module-heading">
                                <strong>Ketenagakerjaan Umum</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    <a href="/dataset?organization=pemerintah-provinsi-jawa-tengah"
                                        title="Pemerintah Provinsi Jawa Tengah">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Penduduk Usia Kerja</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">1230</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?organization=pemerintah-kota-semarang"
                                        title="Pemerintah Kota Semarang">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Angkatan Kerja</strong><span class="badge badge-primary badge-pill"
                                                style="float: right !important">1485</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?organization=pemerintah-kabupaten-batang"
                                        title="Pemerintah Kabupaten Batang">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Penduduk Yang Bekerja</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">500</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?organization=kantor-staf-presiden" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Pengangguran Terbuka</strong>
                                            <span class="badge badge-primary badge-pill"
                                                style="float: right !important">727</span>
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                        </section>
                        <br />
                        <section class="module module-narrow module-shallow">
                            <h5 class="module-heading">
                                <strong>Ketenagakerjaan Khusus</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    <a href="/dataset?tags=2017" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Pelatihan dan Produktivitas</strong>
                                            <span class="badge badge-primary badge-pill"
                                                style="float: right !important">3674</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?tags=2015" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Penempatan dan Perluasan kesempatan kerja</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">1602</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?tags=2018" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Hubungan Industrial dan Jaminan Sosial Tenaga
                                                Kerja</strong><span class="badge badge-primary badge-pill"
                                                style="float: right !important">1446</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?tags=2014" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Pengawasan Ketenagakerjaan dan K3</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">1444</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?tags=2016" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Not In Employment, Education and Training</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">1329</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?tags=2016" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong>Pekerja Terdampak Covid-19</strong><span
                                                class="badge badge-primary badge-pill"
                                                style="float: right !important">1329</span>
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                        </section>
                        <br />
                        <section class="module module-narrow module-shallow">
                            <h5 class="module-heading">
                                <strong>Label</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    <a href="/dataset?res_format=CSV" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            2020<span class="badge badge-primary badge-pill"
                                                style="float: right !important">19895</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=XLSX" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            2019<span class="badge badge-primary badge-pill"
                                                style="float: right !important">8914</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=PDF" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            2018<span class="badge badge-primary badge-pill"
                                                style="float: right !important">5681</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=XLS" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            2017<span class="badge badge-primary badge-pill"
                                                style="float: right !important">5462</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=DOCX" title="">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            2016<span class="badge badge-primary badge-pill"
                                                style="float: right !important">739</span>
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xl-8 col-12">
                <section class="module">
                    <div class="module-content">
                        <form id="dataset-search-form" class="search-form" method="get">
                            <div class="input-group input-group-lg from-group mb-3">
                                <input aria-label="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}"
                                    id="field-giant-search" type="text" class="form-control form-lg" name="q"
                                    aria-describedby="button-addon2" autocomplete="off"
                                    placeholder="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}"
                                    value="{{ !empty($query) ? $query : null }}" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Sortir Berdasarkan</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="sort">
                                    <option value="title_string asc">Data Terbaru</option>
                                    <option value="title_string desc">Data Terlama</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn btn-info ericsnth-button-nomtop" type="submit"
                                    style="width: 200px">
                                    Cari Data
                                </button>
                            </div>
                            <div class="alert alert-dark alert-important" role="alert">
                                Menampilkan <span id="total_dataser">{{ !empty($total) ? $total : 0 }}</span> dataset
                            </div>
                            <p class="filter-list"></p>
                        </form>
                        <div class="list-group" id="block-data">
                            @foreach($datas as $key => $data)
                            <div class="col-md-12" style="border-bottom: 1px #fff!important;">
                                <a href="/dataset/fraksi-fraksi-dprd-kabupaten-bantul"
                                    style="font-size:18px !important;">{{ $data->judul }}</a><br />
                                <small>{{ date('Y-m-d', strtotime($data->created_at)) }} - {{ $data->isi }}
                                </small><br />
                                <small o="/dataset/fraksi-fraksi-dprd-kabupaten-bantul"
                                    data-format="{{ $data->format_berkas }}"><span
                                        class="badge badge-secondary">{{ strtoupper($data->format_berkas) }}</span></small>
                            </div>
                            <div id="eris"
                                style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;">
                            </div>
                            @endforeach
                        </div>
                        <br />
                        <div aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="?page=1" style="color: #15406a">Berikutnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="module">
                    <div class="module-content"></div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-data')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var data = [
        {
          link: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
          title: "Angka Melanjutkan (AM) dari PAUD KE SD/MI",
          description:
            "Angka melanjutkan jenjang PAUD ke SD/MI  adalah menunjukkan persentase lulusan jenjang pendidikan sebelumnya yang melanjutkan sekolah ke jenjang berikutnya di Kabupaten Bantul.",
          date: "2020-06-12",
          uploads: [
            {
              path: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
              format: "XLSX",
            },
            {
              path: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
              format: "CSV",
            },
          ],
        },
        {
          link: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
          title: "Angka Melanjutkan (AM) dari PAUD KE SD/MI",
          description:
            "Angka melanjutkan jenjang PAUD ke SD/MI  adalah menunjukkan persentase lulusan jenjang pendidikan sebelumnya yang melanjutkan sekolah ke jenjang berikutnya di Kabupaten Bantul.",
          date: "2020-06-12",
          uploads: [
            {
              path: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
              format: "XLSX",
            },
            {
              path: "/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts",
              format: "CSV",
            },
          ],
        },
      ];
      $("#block-data").empty();
      $.each(data, function (index, value) {
        var html =
          '<div class="col-md-12 card" style="background-color: #12446e; padding: 10px;">' +
          '<a href="' +
          value.link +
          '" style="font-size:18px !important;">' +
          value.title +
          "</a>" +
          "<small>" +
          value.date +
          " - " +
          value.description +
          "</small>" +
          '<small o="/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts">';
        $.each(value.uploads, function (index2, value2) {
          html =
            html +
            '<span class="badge badge-secondary">' +
            value2.format +
            "</span>&nbsp;"; }); html = html + "
                                                </small>" + "
                        </div>" + '
                        <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>'; $("#block-data").append(html); });
</script>
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
{{-- <div class="input-group input-group-lg">
                                <input aria-label="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}"
id="field-giant-search" type="text" class="form-control form-lg" name="q" aria-describedby="button-addon2"
autocomplete="off" placeholder="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}"
value="{{ !empty($query) ? $query : null }}">
</div><br />
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Sortir Berdasarkan</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="sort">
        <option value="score desc, metadata_modified desc" selected="selected">Relevansi</option>
        <option value="title_string asc">Nama Dataset A-Z</option>
        <option value="title_string desc">Nama Dataset Z-A</option>
        <option value="metadata_modified desc">Terakhir Diperbaharui</option>
    </select>
    <div class="input-group-append">
        <button class="btn btn-secondary ericsnth-button-nomtop" type="submit">Go</button>
    </div>
</div>
<div class="alert alert-dark alert-important" role="alert">
    Menampilkan <span id="total_dataser">{{ !empty($total) ? $total : 0 }}</span> dataset
</div>
<p class="filter-list">
</p>
</form>
<div class="list-group">
    @foreach($datas as $key => $data)
    <div class="col-md-12" style="border-bottom: 1px #fff!important;">
        <a href="/dataset/fraksi-fraksi-dprd-kabupaten-bantul"
            style="font-size:18px !important;">{{ $data->judul }}</a><br />
        <small>{{ date('Y-m-d', strtotime($data->created_at)) }} - {{ $data->isi }} </small><br />
        <small o="/dataset/fraksi-fraksi-dprd-kabupaten-bantul" data-format="{{ $data->format_berkas }}"><span
                class="badge badge-secondary">{{ strtoupper($data->format_berkas) }}</span></small>
    </div>
    <div id="eris"
        style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;">
    </div>
    @endforeach
</div>
<br />
<div aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item">
            <a class="page-link" href="?page=1" style="color: #15406a;">Berikutnya</a>
        </li>
    </ul>
</div>
</section>
<section class="module">
    <div class="module-content">
    </div>
</section>
</div>
</div>
</div>
</div>
@endsection --}}