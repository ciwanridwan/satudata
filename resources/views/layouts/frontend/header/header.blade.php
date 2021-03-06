<div class="page-content news-notification" style="white-space: nowrap;">
    <p>
        News flash
        @if(!empty($news_flash))
        @foreach($news_flash as $key => $value)
        <a href="{{ $value->url }}" class="marquee" style="{{ $key != 0 ? 'margin-left: 91.5px;' : null  }}"> <span> {{ $value->title }} </span></a>
        @if($key != count($news_flash) -1)
        <br>
        @endif
        @endforeach
        @endif
    </p>
    <i class="wi wi-moon-11"></i>
</div>
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar_top">
    <a class="navbar-brand" href="{{url('/')}}"
    ><img style="width: 83px;height: 80px;" src="{{ asset('/assets/images/proper-logo.png')}}" alt=""
    /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::segment(1) == null ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{url('/')}}">Beranda</a></b>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'data' ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{ route('pages-data')}}">Data</a></b>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'infograpik' ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{ route('pages-infograpik')}}">Infografik</a></b>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'publikasi' ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{ route('pages-publikasi')}}">Publikasi</a></b>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'galery' ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{ route('pages-galery')}}">Galeri</a></b>
            </li>
            <li class="nav-item nav-item-left">
                <b> <a class="nav-link" target="_blank" href="https://linda.kemnaker.go.id">Permintaan Data</a></b>
            </li>
            <li class="nav-item nav-item-left">
                <b> <a class="nav-link" target="_blank" href="http://old.satudata.kemnaker.go.id">Pengisian Data</a></b>
            </li>
            <li class="nav-item {{ Request::segment(1) == 'about' ? 'active' : null }} nav-item-left">
                <b> <a class="nav-link" href="{{ route('pages-about')}}">Tentang Kami</a></b>
            </li>
        </ul>
    </div>
</nav>