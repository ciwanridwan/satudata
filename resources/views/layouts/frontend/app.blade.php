<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>satudata</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('assets/style/main.css')}}" rel="stylesheet" />
</head>
<body id="ericsnth">
    @include('layouts.frontend.header.header')
    @yield('content')
    @include('layouts.frontend.footer.footer')
    <script src="{{ asset('assets/vendor/jquery/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
</body>
</html>