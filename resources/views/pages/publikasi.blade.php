@extends('layouts.frontend.app', ['footerPage' => 'footer'])

@section('title', 'Publikasi')

@section('content')
<div role="main">
    <div class="container-fluid background-publikasi">
        <div class="container background-datbase">
            <div class="flash-messages">
            </div>
            <div class="toolbar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="/dataset">Publikasi</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <section class="module publikasi-module">
                        <div class="module-content ">
                            <div class="judul-publikasi">
                                <br>
                                <h5 style="margin-left: 14px;"><strong>Publikasi</strong> </h5>
                            </div>
                            <br>
                            <form class="list-group" action="{{ url('publikasi') }}">
                                <div class="col-12 row form-group">
                                    <label for="inputPassword" class="col-md-2 col-form-label">Tahun :</label>
                                    <div class="col-md-5">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="year">
                                            <option selected disabled>Pilih Tahun</option>
                                            @foreach($years as $key => $year)
                                            <option value="{{ $year }}"
                                                <?= !empty($_GET['year']) && $_GET['year'] == $year ? 'selected' : null ?>>
                                                {{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 row">
                                    <label for="inputPassword" class="col-md-2 col-form-label">Kata Kunci :</label>
                                    <div class="col-md-5 form-group">
                                        <input type="text" class="form-control" id="InputKataKunci"
                                            placeholder="Masukkan Kata Kunci" name="q"
                                            value="{{ !empty($query) ? $query : null }}">
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <button type="submit" class="btn btn-success">Cari Publikasi</button>
                                    </div>
                                </div>
                            </form>
                            <div class="container">
                                <div class="alert alert-dark alert-important" role="alert">
                                    Menampilkan <span id="total_dataser">{{ !empty($total) ? $total : 0 }}</span>
                                    Publikasi
                                </div>
                            </div>
                            <div class="list-group">
                                @foreach($publications as $key => $publication)
                                <div class="col-md-12 row" style="border-bottom: 1px #002d58!important;">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center form-group">
                                        <img src="{{ url($publication->thumbnail) }}"
                                            style="width: 129px; max-height: 187px;">
                                        <br>
                                        <a href="{{ url('files/' . $publication->file) }}" class="btn btn-success"
                                            id="totalDownloader" style="margin-top: 5px; width: 129px;">Unduh</a>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <p><strong>{{ $publication->judul }}</strong></p>
                                        <small>Tanggal Rilis : <span>{{ $publication->date }}</span></small>
                                        <br>
                                        <small>Ukuran FIle : <span>{{ $publication->size_file }}</span></small>
                                        <br><br>
                                        <p style="text-align: justify;">{{ $publication->isi }}</p>
                                    </div>
                                </div>
                                <div id="eris"
                                    style="height: 2px !important; width:100% !important; background-color:#002d58!important;opacity:0.1 !important;margin-top:10px;margin-bottom:10px;">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <section class="module">
                        <div class="module-content form-group">
                            {{ $publications->appends(request()->input())->links() }}
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

@section('js-total-download-publikasi')
<script>
    var totalDownloader = <?php echo $total_download; ?>;
    document.getElementById("totalDownloader") = totalDownloader;
</script>
@endsection