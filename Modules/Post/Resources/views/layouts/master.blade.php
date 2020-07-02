
<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>Thuematbang24h.com - Mặt bằng, nhà đất, chung cư mini</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:400,700'">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
		@font-face {
			font-family: 'FontAwesome';
			src: url("{{asset('fonts/fontawesome-webfont.eot?v=4.5.0')}}");
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
          <nav class="rd-navbar rd-navbar-top-panel rd-navbar-light" data-lg-stick-up-offset="79px" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="container">
              <div class="rd-navbar-inner">
                <div class="rd-navbar-top-panel">
                  <div class="left-side">
                    <ul class="rd-navbar-top-links list-unstyled">
                      <li><a class="text-uppercase text-ubold" href="{{route('login')}}"><small>Đăng nhập</small></a></li>
                      <li><a class="text-uppercase text-ubold" href="{{route('register')}}"><small>Đăng ký</small></a></li>
                    </ul>
                  </div>
                  <div class="right-side">
                    <address class="contact-info text-left"><span class="p"><span class="icon mdi mdi-email-open"></span><a href="mailto:#">thuematbang24h@gmail.com</a></span><span class="p"><span class="icon mdi mdi-phone"></span><a href="tel:#">0968667361</a></span></address>
                  </div>
                </div>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Top Panel Toggle-->
                  <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                  <!--Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="../index.html"><img width='217' height='36' src="{{asset('images/logo.png')}}" alt=''/></a></div>
                </div>
                <div class="rd-navbar-menu-wrap">
                  <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="/"><img width='217' height='36' src="{{asset('images/logo.png')}}" alt=''/></a></div>
                      <!-- RD Navbar Nav-->
                      <ul class="rd-navbar-nav">
                        <li class="active"><a href="index.html"><span>Trang chủ</span></a>
                        </li>
                        <li><a href="catalog.html"><span>Chung cư mini</span></a>
                        </li>
                        <li><a href="submit-property.html"><span>Mặt bằng</span></a>
                        </li>
                        <li><a href="services.html"><span>Phòng trọ</span></a>
                        </li>
                        <li><a href="contact.html"><span>Liên hệ</span></a>
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
      <!-- Page Footers-->
      <!-- Default footer-->
      <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark">
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-8 col-lg-12">
              <div class="row justify-content-sm-center">
                <div class="col-sm-7 text-sm-left col-lg-4 col-xl-3 order-xl-4">
                  <h6 class="text-uppercase text-spacing-60">Latest news</h6>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left"><a href="#">
                            <div class="unit flex-row unit-spacing-xs align-items-center">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs text-primary mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2018-01-01">05/14/2018</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">Top 10 Apartments in LA</h6>
                                </div>
                              </div>
                            </div></a></article>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left"><a href="#">
                            <div class="unit flex-row unit-spacing-xs align-items-center">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs text-primary mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2018-01-01">05/14/2018</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">Choosing a Rental Property</h6>
                                </div>
                              </div>
                            </div></a></article>
                        <!-- Post Widget-->
                        <article class="post widget-post text-left"><a href="#">
                            <div class="unit flex-row unit-spacing-xs align-items-center">
                              <div class="unit-body">
                                <div class="post-meta"><span class="icon-xxs text-primary mdi mdi-arrow-right"></span>
                                  <time class="text-dark" datetime="2018-01-01">05/14/2018</time>
                                </div>
                                <div class="post-title">
                                  <h6 class="text-regular">Features of Mortgage Loans</h6>
                                </div>
                              </div>
                            </div></a></article>
                </div>
                <div class="col-sm-5 offset-top-41 offset-sm-top-0 text-sm-left col-lg-3 col-xl-2 order-xl-3">
                  <h6 class="text-uppercase text-spacing-60">Useful Links</h6>
                  <div class="d-block">
                    <div class="d-inline-block">
                      <ul class="list list-marked">
                        <li><a href="#">Căn</a></li>
                        <li><a href="#">Amenities</a></li>
                        <li><a href="#">Rentals</a></li>
                        <li><a href="#">Mortgages</a></li>
                        <li><a href="#">Agents</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 offset-top-41 col-lg-5 offset-lg-top-0 text-lg-left col-xl-4 order-xl-2">
                  <h6 class="text-uppercase text-spacing-60">Newsletter</h6>
                  <p>Keep up with the latest company news and events. Enter your e-mail and subscribe to our newsletter.</p>
                  <div class="offset-top-30">
                          <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-group">
                              <div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text input-group-icon"><span class="mdi mdi-email"></span></span></span>
                                <input class="form-control" placeholder="Type your E-Mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-append">
                                  <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                              </div>
                            </div>
                            <div class="form-output" id="form-subscribe-footer"></div>
                          </form>
                  </div>
                </div>
                <div class="col-sm-12 offset-top-66 col-xl-3 order-xl-1 offset-xl-top-0">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index.html"><img width='170' height='30' src='public/images/logo-light.png' alt=''/></a></div>
                  <p class="text-darker offset-top-4 inset-right-15 inset-xl-right-0 inset-xl-left-15">Real Estate</p>
                        <ul class="list-inline">
                          <li class="list-inline-item"><a class="icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container offset-top-50">
          <p class="small text-darker">Intense Real Estate &copy; <span id="copyright-year"></span> . <a href="privacy.html">Privacy Policy</a>
            <!-- {%FOOTER_LINK}-->
          </p>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="https://livedemo00.template-help.com/wt_58887_v2/js/core.min.js"></script>
    <script src="https://livedemo00.template-help.com/wt_58887_v2/js/script.js"></script>
	  </body>
  
</html>