<!DOCTYPE html>
<html class="wow-animation" lang="en">
<head>
    <title>Thuematbang24h.com - Mặt bằng, nhà đất, chung cư mini</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>.ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }

        @font-face {
            font-family: 'FontAwesome';
            src: url("{{asset('fonts/fontawesome-webfont.eot')}}");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Material Design Icons";
            src: url("{{asset('fonts/materialdesignicons-webfont.eot')}}");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
<!-- IE panel-->

<!-- Page-->
<div class="page text-center">
    <!-- Page Head-->
    <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-top-panel rd-navbar-light" data-lg-stick-up-offset="79px"
                 data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                 data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                 data-lg-stick-up="true">
                <div class="container">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                                <span></span></button>
                            <!-- RD Navbar Top Panel Toggle-->
                            <button class="rd-navbar-top-panel-toggle"
                                    data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="/"><img width='217' height='36'
                                                                          src="{{asset('images/logo.png')}}"
                                                                          alt=''/></a></div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand"><a href="/"><img width='217' height='36'src="{{asset('images/logo.png')}}" alt=''/></a>
                                    </div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">

                                        <li class="{{ Route::currentRouteName() == "chung-cu-mini" ? "active" : "" }}"><a href="{{route('chung-cu-mini')}}"><span>Chung cư mini</span></a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == "mat-bang" ? "active" : "" }}"><a href="{{route('mat-bang')}}"><span>Mặt bằng</span></a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == "phong-tro" ? "active" : "" }}"><a href="{{route('phong-tro')}}"><span>Phòng trọ</span></a>
                                        <li class="{{ Route::currentRouteName() == "nha-dich-vu" ? "active" : "" }}"><a href="{{route('nha-dich-vu')}}"><span>Nhà dịch vụ</span></a>
                                        </li>
                                        <li><a href="tel:0961769472"><span>Hotline: 0961769472</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Page Contents-->
    <main class="page-content">
        @yield('content')
    </main>
</div>
</div>
<!-- Page Footers-->
<!-- Default footer-->
<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark">

    <div class="container offset-top-50">
        <p class="small text-darker">Thuematbang24h.com &copy; <span id="copyright-year"></span>
            <!-- {%FOOTER_LINK}-->
        </p>
        <p>Hotline: 0961769472</p>
    </div>
</footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
