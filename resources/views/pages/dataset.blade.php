@extends('layouts.frontend.app')

@section('content')
<!-- breadcrumb -->
<div role="main">
    <div class="container-fluid background-datbase">
        <div class="flash-messages">
        </div>
        <div class="toolbar">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="/dataset">Kumpulan Data</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 col-12">
                <div class="filters">
                    <div>
                        <section class="module module-narrow module-shallow form-group">
                            <h5 class="module-heading">
                                <strong>Unit Kerja</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    @foreach($unit_kerja as $key => $value)
                                    <a href="#" title="{{ $value->nama }}">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">
                                            <strong> {{ $value->nama }} </strong>
                                            <span class="badge badge-primary badge-pill" style="float:right !important;">{{ $value->total_data }}</span>
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                            </nav>
                        </section>
                        <section class="module module-narrow module-shallow form-group">
                            <h5 class="module-heading">
                                <strong>Tahun</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    @foreach($tahun as $key => $value)
                                    <a href="#" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">{{ $value->year }}<span class="badge badge-primary badge-pill" style="float:right !important;">{{ $value->total_data }}</span>
                                        </li>
                                    </a>
                                    @endforeach
                                </ul>
                            </nav>
                        </section>
                        <section class="module module-narrow module-shallow">
                            <h5 class="module-heading">
                                <strong>Jenis Data</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    <a href="/dataset?license_id=cc-by" title="Creative Commons Attribution">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">Data Terbuka<span class="badge badge-primary badge-pill" style="float:right !important;">40762</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?license_id=cc-nc" title="Creative Commons Non-Commercial (Any)">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">Data Semi-private<span class="badge badge-primary badge-pill" style="float:right !important;">1103</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?license_id=other-pd" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">Data Khusus (Antar Kementrian)<span class="badge badge-primary badge-pill" style="float:right !important;">42</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?license_id=other-open" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">Data Private Kemnaker<span class="badge badge-primary badge-pill" style="float:right !important;">1063</span>
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                            <p class="module-footer ericsnth-facet-showtext">
                                <small><strong><a href="/dataset?_license_id_limit=0" class="read-more">Lihat Lebih Banyak  Data</a></strong></small>
                            </p>
                        </section><br/>
                        <section class="module module-narrow module-shallow">
                            <h5 class="module-heading">
                                <strong>Format Berkas</strong>
                            </h5>
                            <nav>
                                <ul class="list-group">
                                    <a href="/dataset?res_format=CSV" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">CSV<span class="badge badge-primary badge-pill" style="float:right !important;">19895</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=XLSX" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">XLSX<span class="badge badge-primary badge-pill" style="float:right !important;">8914</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=PDF" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">PDF<span class="badge badge-primary badge-pill" style="float:right !important;">5681</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=XLS" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">XLS<span class="badge badge-primary badge-pill" style="float:right !important;">5462</span>
                                        </li>
                                    </a>
                                    <a href="/dataset?res_format=DOCX" title="">
                                        <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p">DOCX<span class="badge badge-primary badge-pill" style="float:right !important;">739</span>
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                                <!-- <p class="module-footer ericsnth-facet-showtext">
                                    <small><strong><a href="/dataset?_res_format_limit=0" class="read-more">Lihat Lebih Banyak Format Berkas</a></strong></small>
                                </p> -->
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xl-8 col-12">
                    <section class="module">
                        <div class="module-content">
                            <form id="dataset-search-form" class="search-form" method="get">
                                <div class="input-group input-group-lg">
                                    <input aria-label="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}" id="field-giant-search" type="text" class="form-control form-lg" name="q" aria-describedby="button-addon2" value="" autocomplete="off" placeholder="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}">
                                </div><br/>
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
                                    Menampilkan 43,486 dataset
                                </div>
                                <p class="filter-list">
                                </p>
                            </form>
                            <div class="list-group">
                                <div class="col-md-12" style="border-bottom: 1px #fff!important;">
                                    <a href="/dataset/fraksi-fraksi-dprd-kabupaten-bantul" style="font-size:18px !important;">Jumlah Angka Pengangguran 2020 kuartal I</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi jumlah pengangguran pada tahun 2020 kuartal I </small><br/>
                                    <small o="/dataset/fraksi-fraksi-dprd-kabupaten-bantul" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts" style="font-size:18px !important;">Angka Melanjutkan (AM) dari PAUD KE SD/MI</a><br/>
                                    <small>2020-06-12 - Angka melanjutkan jenjang PAUD ke SD/MI  adalah menunjukkan persentase lulusan jenjang pendidikan sebelumnya yang melanjutkan sekolah ke jenjang berikutnya di Kabupaten Bantul.</small><br/>
                                    <small o="/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff!important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 2 px#ffff !important;">
                                    <a href="/dataset/kegiatan-pembinaan-politik-kabupaten-bantul" style="font-size:18px !important;">Pelatihan Memasak Kabupaten Pati</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi mengenai data jumlah partisipan peltihan memasak di Kabupaten Pati</small><br/>
                                    <small o="/dataset/kegiatan-pembinaan-politik-kabupaten-bantul" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 2px #ffff  !important;">
                                    <a href="/dataset/luas-lahan-bersertifikat-di-kabupaten-bantul" style="font-size:18px !important;">Daftar Perusahaan BUMN Tercatat 2020 Februari</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi daftar perusahaan BUMN tercatat februari 2020 </small><br/>
                                    <small o="/dataset/luas-lahan-bersertifikat-di-kabupaten-bantul" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/jumlah-sekolah-sd-mi-per-kecamatan" style="font-size:18px !important;">Daftar Perusahaan di Kabupaten Kudus 2020</a><br/>
                                    <small>2020-06-12 - Dataset berisi daftar perusahaan yang ada di Kabupaten Kudus </small><br/>
                                    <small o="/dataset/jumlah-sekolah-sd-mi-per-kecamatan" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/penerimaan-kunjungan-kerja" style="font-size:18px !important;">Penerimaan Kunjungan Kerja</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi jumlah penerimaan kunjungan kerja 2018-2019</small><br/>
                                    <small o="/dataset/penerimaan-kunjungan-kerja" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/rasio-guru-kelas-sd-mi" style="font-size:18px !important;">Perbandingan Guru per Siswa SD/MI</a><br/>
                                    <small>2020-06-12 - Perbandingan antara jumlah siswa dengan jumlah guru pada jenjang pendidikan SD/MI</small><br/>
                                    <small o="/dataset/rasio-guru-kelas-sd-mi" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/penyaluran-pupuk-organik" style="font-size:18px !important;">Penyaluran Kerja oleh disnaker tahun 2019</a><br/>
                                    <small>2020-06-12 - Penyaluran Kerja disnaker di Kabupaten Bantul tahun 2019</small><br/>
                                    <small o="/dataset/penyaluran-pupuk-organik" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/data-pertumbuhan-iumk" style="font-size:18px !important;">Data Pertumbuhan Ijin Usaha Mikro Kecil (IUMK)</a><br/>
                                    <small>2020-06-12 - Data ini berisi mengenai Pertumbuhan Ijin Usaha Mikro Kecil (IUMK) Tahun 2017-2019</small><br/>
                                    <small o="/dataset/data-pertumbuhan-iumk" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/pemasangan-cermin-tikungan" style="font-size:18px !important;">Daftar Perusahaan yang masuk bursa saham di IDK</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi tentang data perusahaan yang masuk bursa saham di IDX Tahun 2019</small><br/>
                                    <small o="/dataset/pemasangan-cermin-tikungan" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/pendapatan-lain-lain-yang-sah-kabupaten-bantul" style="font-size:18px !important;">Pendapatan Lain-lain yang sah Kabupaten Jombang</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi realisasi Pendapatan Lain-lain yang sah Kabupaten Jombang dan rinciannya</small><br/>
                                    <small o="/dataset/pendapatan-lain-lain-yang-sah-kabupaten-bantul" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                    <small o="/dataset/pendapatan-lain-lain-yang-sah-kabupaten-bantul" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/jumlah-penduduk-menurut-agama1" style="font-size:18px !important;">Penduduk Menurut Agama di Semarang</a><br/>
                                    <small>2020-06-12 - Dataset ini berisi mengenai jumlah penduduk menurut agama per kecamatan di Semarang</small><br/>
                                    <small o="/dataset/jumlah-penduduk-menurut-agama1" data-format="csv"><span class="badge badge-secondary">CSV</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>
                                <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                                    <a href="/dataset/jumlah-data-pns-berdasarkan-tingkat-pendidikan-diploma-dan-jenis-kelamin" style="font-size:18px !important;">Data PNS  menurut Tingkat Pendidikan Diploma dan Jenis Kelamin</a><br/>
                                    <small>2020-06-12 - Dataset berisi kumpulan data  Jumlah Pegawai Negeri Sipil di Lingkungan Pemerintah Kabupaten Bantul menurut Tingkat Pendidikan Diploma (D-I s/d D-IV) dan Jenis Kelamin Per Instansi</small><br/>
                                    <small o="/dataset/jumlah-data-pns-berdasarkan-tingkat-pendidikan-diploma-dan-jenis-kelamin" data-format="xlsx"><span class="badge badge-secondary">XLSX</span></small>
                                </div>
                                <div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>

                            </div>
                            <br/>
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
        @endsection