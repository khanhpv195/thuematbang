@extends('layouts.master')

@section('content')
<section class="context-dark">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider" data-height="33%" data-min-height="600px" data-dots="true">
            <div class="swiper-wrapper">
              <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-01-1920x640.jpg')}}" style="background-position: center center"></div>
              <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-02-1920x640.jpg')}}" style="background-position: center center"></div>
              <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-03-1920x640.jpg')}}" style="background-position: center center"></div>
            </div>
            <div class="swiper-caption-wraper">
              <div class="container section-41">
                <div class="row justify-content-sm-center">
                  <h1 class="font-weight-bold">Tìm kiếm bất cứ thứ gì bạn muốn</h1>
                  <div class="col-sm-10 col-lg-7 col-xl-6">
                    <div class="offset-top-24 offset-lg-top-50 text-left">
                      <!-- Responsive-tabs-->
                      <div class="responsive-tabs responsive-tabs-dashed" data-type="horizontal">
                        <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                          <li>Chung cư mini </li>
                          <li>Mặt bằng</li>
                          <li>Phòng trọ</li>
                        </ul>
                        <div class="resp-tabs-container text-left tabs-group-default" data-group="tabs-group-default">
                          <div class="offset-lg-top-10">
                            <form>
                              <div class="group-sm group-top">
                                <div class="group-item element-fullwidth" style="max-width: 390px">
                                  <div class="form-group">
                                    <label class="form-label rd-input-label" for="home-tabs1-search-form-input">Tìm kiếm:</label>
                                    <input class="form-control" id="home-tabs1-search-form-input" type="text" name="s" autocomplete="off">
                                  </div>
                                </div>
                                <button class="btn btn-primary element-fullwidth" type="button" style="max-width: 120px">Tìm kiếm</button>
                              </div>
                            </form>
                          </div>
                          <div class="offset-lg-top-10">
                            <form>
                              <div class="group-sm group-top">
                                <div class="group-item element-fullwidth" style="max-width: 390px">
                                  <div class="form-group">
                                    <label class="form-label rd-input-label" for="home-tabs2-search-form-input">Search by  Address or City:</label>
                                    <input class="form-control" id="home-tabs2-search-form-input" type="text" name="s" autocomplete="off">
                                  </div>
                                </div>
                                <button class="btn btn-primary element-fullwidth" type="button" style="max-width: 120px">search</button>
                              </div>
                            </form>
                          </div>
                          <div class="offset-lg-top-10">
                            <form>
                              <div class="group-sm group-top">
                                <div class="group-item element-fullwidth" style="max-width: 390px">
                                  <div class="form-group">
                                    <label class="form-label rd-input-label" for="home-tabs3-search-form-input">Search by City or Address:</label>
                                    <input class="form-control" id="home-tabs3-search-form-input" type="text" name="s" autocomplete="off">
                                  </div>
                                </div>
                                <button class="btn btn-primary element-fullwidth" type="button" style="max-width: 120px">search</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination swiper-pagination-type-2"></div>
          </div>
        </section>
        <!--Section thumbnails terry-->
        <section class="section-34">
          <div class="container-fluid">
            <div class="row justify-content-sm-center">
              <div class="col-sm-8 col-md-6 col-xl-3">
                <!-- Thumbnail Terry-->
                <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                  <figcaption>
                    <div>
                      <h4 class="thumbnail-terry-title">Chưng cư mini </h4>
                    </div>
                    <p class="thumbnail-terry-desc offset-top-0">32 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="catalog.html">Xem thêm</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-md-top-0">
                <!-- Thumbnail Terry-->
                <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                  <figcaption>
                    <div>
                      <h4 class="thumbnail-terry-title">Phòng trọ </h4>
                    </div>
                    <p class="thumbnail-terry-desc offset-top-0">54 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="catalog.html">Xem thêm</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">
                <!-- Thumbnail Terry-->
                <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                  <figcaption>
                    <div>
                      <h4 class="thumbnail-terry-title">Mặt bằng cho thuê</h4>
                    </div>
                    <p class="thumbnail-terry-desc offset-top-0">32 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="catalog.html">Xem thêm</a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">
                <!-- Thumbnail Terry-->
                <figure class="thumbnail-terry"><a href="#"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                  <figcaption>
                    <div>
                      <h4 class="thumbnail-terry-title">Nhà dịch vụ</h4>
                    </div>
                    <p class="thumbnail-terry-desc offset-top-0">19 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="catalog.html">Xem thêm</a>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </section>
        <!--Section Recent Căn-->
        <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
          <div class="container">
            <h2 class="font-weight-bold">Chung cư mini</h2>
            <hr class="divider bg-saffron">
            <div class="row">
              <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">AVA Nob Hill</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1199.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">Ashton San Francisco</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1595.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">2 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">The Presidio Residences</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $2699.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">2200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">3 bathrooms</li>
                  </ul>
                  <div>
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="offset-top-50"><a class="btn btn-primary" href="catalog.html">Xem thêm</a></div>
          </div>
        </section>
        <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
          <div class="container">
            <h2 class="font-weight-bold">Phòng trọ</h2>
            <hr class="divider bg-saffron">
            <div class="row">
              <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">AVA Nob Hill</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1199.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">Ashton San Francisco</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1595.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">2 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">The Presidio Residences</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $2699.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">2200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">3 bathrooms</li>
                  </ul>
                  <div>
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="offset-top-50"><a class="btn btn-primary" href="catalog.html">Xem thêm</a></div>
          </div>
        </section>
        <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
          <div class="container">
            <h2 class="font-weight-bold">Mặt bằng</h2>
            <hr class="divider bg-saffron">
            <div class="row">
              <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">AVA Nob Hill</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1199.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">Ashton San Francisco</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1595.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">2 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">The Presidio Residences</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $2699.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">2200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">3 bathrooms</li>
                  </ul>
                  <div>
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="offset-top-50"><a class="btn btn-primary" href="catalog.html">Xem thêm</a></div>
          </div>
        </section>
        <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
          <div class="container">
            <h2 class="font-weight-bold">Nhà dịch vụ</h2>
            <hr class="divider bg-saffron">
            <div class="row">
              <div class="col-md-6 col-lg-4"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">AVA Nob Hill</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1199.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design that extends beyond your walls and throughout the entire community.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-md-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">Ashton San Francisco</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $1595.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">1200 sq ft</li>
                    <li class="list-inline-item">2 bedrooms</li>
                    <li class="list-inline-item">2 bathrooms</li>
                  </ul>
                  <div>
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities. Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 offset-top-66 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                <div class="text-md-left offset-top-24">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="single-property-page.html">The Presidio Residences</a></h5>
                  </div>
                  <h6 class="offset-top-10"> $2699.00/mon</h6>
                  <ul class="list-inline list-inline-dotted text-dark">
                    <li class="list-inline-item">2200 sq ft</li>
                    <li class="list-inline-item">4 bedrooms</li>
                    <li class="list-inline-item">3 bathrooms</li>
                  </ul>
                  <div>
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods, convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="offset-top-50"><a class="btn btn-primary" href="catalog.html">Xem thêm</a></div>
          </div>
        </section>
@endsection