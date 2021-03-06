@extends('layouts.frontend.app', ['footerPage' => 'footer'])

@section('title', 'Data')

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
                    @foreach($employment as $key => $employments)
                    <section class="module module-narrow module-shallow">
                        <h5 class="module-heading">
                            <strong>{{ $key }}</strong>
                        </h5>
                        <nav>
                            <ul class="list-group">
                                <?php $segment = str_replace('data-', null, Request::segment(1)); ?>
                                @foreach($employments as $key => $employment)
                                <?php
                                $low_name = str_replace(' ', '-', strtolower($employment['nama']));
                                $is_active = $segment == $low_name;
                                if ($is_active) {
                                    $url = url('data');
                                } else {
                                    $url = url('data-' . $low_name);
                                }
                                ?>
                                <a href="{{ $url }}" title="{{ $employment['nama'] }}">
                                    <li class="list-group-item d-flex justify-content-between align-items-center ericsnth-facet-p {{ $is_active ? 'active' : null }}">
                                        <strong>{{ $employment['nama'] }}</strong>
                                        <span class="badge badge-primary badge-pill" style="float: right !important">{{ $employment['count'] }}</span>
                                    </li>
                                </a>
                                @endforeach
                            </ul>
                        </nav>
                    </section>
                    <br />
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xl-8 col-12">
                <section class="module">
                    <div class="module-content">
                        <form id="dataset-search-form" class="search-form" method="get" action="{{ url()->current() }}">
                            <div class="input-group input-group-lg from-group mb-3">
                                <input aria-label="{{ !empty($query) ? $query : 'Masukan kata kunci pencarian' }}" id="field-giant-search" type="text" class="form-control form-lg" name="q" aria-describedby="button-addon2" autocomplete="off" placeholder="Masukan kata kunci pencarian" value="{{ !empty($query) ? $query : null }}" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Sortir Berdasarkan</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="sort">
                                    <option value="desc" <?= !empty($_GET['sort']) && $_GET['sort'] == 'desc' ? 'active' : null ?>>Data Terbaru</option>
                                    <option value="asc" <?= !empty($_GET['sort']) && $_GET['sort'] == 'asc' ? 'active' : null ?>>Data Terlama</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn btn-info ericsnth-button-nomtop" type="submit"
                                style="width: 200px">
                                Cari Data
                            </button>
                        </div>
                        <div class="alert alert-dark alert-important" role="alert">
                            Menampilkan <span id="total_dataser">{{ !empty($total) ? $total : 0 }}</span> Data
                        </div>
                        <p class="filter-list"></p>
                    </form>
                    <div class="list-group" id="block-data">
                        @foreach($datas as $key => $data)
                        <div class="col-md-12" style="border-bottom: 1px #fff!important;">
                            <a href="{{route('page-data-details', $data->judul)}}" style="color: #f5a947"
                            style="font-size:18px !important;">{{ $data->judul }}</a><br />
                            <small>{{ date('Y-m-d', strtotime($data->created_at)) }} - {{ $data->description }}
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
                {{ $datas->appends(request()->input())->links() }}
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

@section('foot-content')
<script>
    // $("#block-data").empty();
    // $.each(data, function (index, value) {
    //     var html = '<div class="col-md-12 card" style="background-color: #12446e; padding: 10px;">' + '<a href="' + value.link + '" style="font-size:18px !important;">' + value.title + "</a>" + "<small>" + value.date + " - " + value.description + "</small>" + '<small o="/dataset/angka-melanjutkan-am-dari-sd-mi-ke-smp-mts">';
    //     $.each(value.uploads, function (index2, value2) {
    //         html = html + '<span class="badge badge-secondary">' + value2.format + "</span>&nbsp;";
    //     });
    //     html = html + "</small>" + "</div>" + '<div id="eris" style="height: 2px !important; width:100% !important; background-color:#ffff !important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;"></div>';
    //     $("#block-data").append(html);
    // });
</script>
@endsection

@section('footer')
<footer class="footer-bottom">
    <div class="container">
        <div class="row mt-4 mb-4 logo-footer">
            <div class="col-lg-4">
                <img src="{{asset('assets/images/logo-navbar.png')}}" alt="">
                <p style="text-align: justify;">Satu Data Ketenagakerjaan dimaksudkan untuk mengatur penyelenggaraan
                    tatakelola Data Ketenagakerjaan yang dihasilkan oleh Instansi Pusat dan Instansi Daerah agar
                    pengelolaan dan pengembangan data ketenagakerjaan memenuhi prinsip-prinsip
                    Satu Data Indonesia.</p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3" style="margin-top:153px;">
                <p>Telp: 021-5255733</p>
                <p>Call Center: 021-50816000</p>
                <p>Tentang Satudata</p>
                <p>Hubungi Kami</p>
                <p>Peta Situs</p>
            </div>
            <div class="col-lg-4 alamat" style="margin-top:153px;">
                <p>Jl. Jendral Gatot Subroto Kav. 51, Daerah Khusus <br>Ibukota Jakarta 12750, Indonesia</p>
                <br>
                <a href=""><img src="{{asset('assets/images/icon-instagram.png')}}" alt=""></a>
                <a href=""><img src="{{asset('assets/images/icon-facebook.png')}}" alt=""></a>
                <a href=""><img src="{{asset('assets/images/icon-twiter.png')}}" alt=""></a>
                <a href=""><img src="{{asset('assets/images/icon-youtube.png')}}" alt=""></a>
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
