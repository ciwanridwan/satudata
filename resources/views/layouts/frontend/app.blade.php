<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <title>Satudata - @yield('title')</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('/assets/style/main.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('/assets/images/logos.ico')}}" />
    <link href="http://sharingbuttons.io" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jssocials.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jssocials-theme-flat.css')}}" />
    <style type="text/css">
        div.page-content.news-notification {
            overflow-x: hidden!important;
            overflow-y: hidden!important;
        }
    </style>

    <script src="https://kit.fontawesome.com/231b668aca.js" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body id="ericsnth">
    @include('layouts.frontend.header.header')
    @yield('content')
    @if ($footerPage == 'footer')
    @yield('footer')
    @else
    @include('layouts.frontend.footer.footer')
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/assets/vendor/jquery/jquery.slim.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('/assets/vendor/vue/vue.js')}}"></script>
    @yield('js-download')
    <script>
        AOS.init();
    </script>
    <script>
        if ($(window).width() > 992) {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 35) {
                    $("#navbar_top").addClass("fixed-top");
                    $("body").css("padding-top", $(".navbar").outerHeight() + "px");
                } else {
                    $("#navbar_top").removeClass("fixed-top");
                    $("body").css("padding-top", "0");
                }
            });
        }
    </script>
    <script>
        Highcharts.setOptions({
            colors: ['#32a852', '#a83232']
        });
        Highcharts.chart('neet', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Tingkat NEET di Indonesia'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Composition',
                colorByPoint: true,
                data: [{
                    name: 'Non-NEET',
                    y: 35806468,
                }, {
                    name: 'NEET',
                    y: 8522568,
                    sliced: true,
                    selected: true
                }]
            }]
        });
    </script>
    <script>
        Highcharts.setOptions({
            colors: ['#01BAF2', '#71BF45', '#FAA74B']
        });
        Highcharts.chart('covid2', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Pekerja Terdampak Covid-19'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Composition',
                colorByPoint: true,
                data: [{
                    name: 'PHK',
                    y: 386877,
                }, {
                    name: 'Dirumahkan',
                    y: 1155630,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Kehilangan Usaha',
                    y: 633421
                }]
            }]
        });
    </script>
    {{-- <script src="{{ asset('/js/jquery.js')}}"></script> --}}
    <script src="{{ asset('/js/jssocials.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/chart/canvasjs.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/chart/jquery.canvasjs.min.js')}}"></script>
    <script>
        $("#share").jsSocials({
            shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
        });
    </script>
    @yield('foot-content')
    @yield('js-data')
</body>

</html