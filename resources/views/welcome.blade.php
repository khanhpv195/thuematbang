@extends('layouts.master')

@section('content')
{{--    <section class="context-dark">--}}
{{--        <!-- Swiper-->--}}
{{--        <div class="swiper-container swiper-slider" data-height="13%" data-min-height="300px" data-dots="true">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-01-1920x640.jpg')}}" style="background-position: center center"></div>--}}
{{--                <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-02-1920x640.jpg')}}" style="background-position: center center"></div>--}}
{{--                <div class="swiper-slide swiper-slide-overlay-disable" data-slide-bg="{{asset('images/slide-03-1920x640.jpg')}}" style="background-position: center center"></div>--}}
{{--            </div>--}}
{{--            <div class="swiper-caption-wraper">--}}
{{--                <div class="container section-41">--}}
{{--                    <div class="row justify-content-sm-center">--}}
{{--                        <div class="col-sm-10 col-lg-7 col-xl-6">--}}
{{--                            <div class="offset-top-24 offset-lg-top-50 text-left">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Swiper Pagination-->--}}
{{--            <div class="swiper-pagination swiper-pagination-type-2"></div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--Section thumbnails terry-->
    <section class="section-34">
        <div class="container-fluid">
            <div class="row justify-content-sm-center">
                <div class="col-sm-8 col-md-6 col-xl-3">
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="{{route('chung-cu-mini')}}"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                        <figcaption>
                            <div>
                                <a href="{{route('chung-cu-mini')}}"><h4 class="thumbnail-terry-title">Chưng cư mini </h4></a>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0">32 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="{{route('chung-cu-mini')}}">Xem thêm</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-md-top-0">
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="#">
                            <a href="{{route('phong-tro')}}">
                            <img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                        <figcaption>
                            <div>
                                <a href="{{route('phong-tro')}}"><h4 class="thumbnail-terry-title">Phòng trọ </h4></a>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0">54 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="{{route('phong-tro')}}">Xem thêm</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry">
                        <a href="{{route('mat-bang')}}"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                        <figcaption>
                            <div>
                                <a href="{{route('mat-bang')}}"><h4 class="thumbnail-terry-title">Mặt bằng cho thuê</h4></a>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0">32 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="{{route('mat-bang')}}">Xem thêm</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-8 col-md-6 col-xl-3 offset-top-30 offset-xl-top-0">
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="{{route('nha-dich-vu')}}"><img width="442" height="280" src="{{asset('images/home-img-01-442-280.jpg')}}" alt=""/></a>
                        <figcaption>
                            <div>
                                <a href="{{route('nha-dich-vu')}}"><h4 class="thumbnail-terry-title">Nhà dịch vụ</h4></a>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0">19 Căn</p><a class="btn offset-top-10 offset-md-top-0 btn-primary" href="{{route('nha-dich-vu')}}">Xem thêm</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--Section Recent Căn-->
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
        <div class="container">
            <a href=""><h2 class="font-weight-bold">Chung cư mini</h2></a>
            <hr class="divider bg-saffron">
            <div class="row">
                @foreach($apartment as $value)
                    <div class="item col-md-6 col-lg-4 offset-top-66 offset-md-top-0">
                        <a href="post/{{$value->slug}}/{{$value->id}}">
                        <img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                        </a>
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="post/{{$value->slug}}/{{$value->id}}">{{$value->title}}</a></h5>
                            </div>
                            <h6 class="offset-top-10"> {{ number_format($value->price, 0, ',', '.') }} VNĐ / Tháng</h6>
                            <p><strong>Địa chỉ:</strong> {{$value->address}}</p>
                            <hr/>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
        <div class="container">
            <a href=""><h2 class="font-weight-bold">Phòng trọ</h2></a>
            <hr class="divider bg-saffron">
            <div class="row">
                @foreach($motel as $value)
                    <div class="item col-md-6 col-lg-4">
                        <a href="post/{{$value->slug}}/{{$value->id}}">
                            <img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                        </a>
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="post/{{$value->slug}}/{{$value->id}}">{{$value->title}}</a></h5>
                            </div>
                            <h6 class="offset-top-10"> {{ number_format($value->price, 0, ',', '.') }} VNĐ/ Tháng</h6>
                            <p><strong>Địa chỉ:</strong> {{$value->address}}</p>
                        </div>
                        <hr/>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
        <div class="container">
            <a href=""> <h2 class="font-weight-bold">Mặt bằng</h2></a>
            <hr class="divider bg-saffron">
            <div class="row">
                @foreach($planes as $value)
                    <div class="item col-md-6 col-lg-4">
                        <a href="post/{{$value->slug}}/{{$value->id}}">
                            <img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                        </a>
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="post/{{$value->slug}}/{{$value->id}}">{{$value->title}}</a></h5>
                            </div>
                            <h6 class="offset-top-10"> {{ number_format($value->price, 0, ',', '.') }} VNĐ/ Tháng</h6>
                            <p><strong>Địa chỉ:</strong> {{$value->address}}</p>
                        </div>
                        <hr/>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
        <div class="container">
            <a href=""> <h2 class="font-weight-bold">Nhà dịch vụ</h2></a>
            <hr class="divider bg-saffron">
            <div class="row">
                @foreach($service_house as $value)
                    <div class="item col-md-6 col-lg-4">
                        <a href="post/{{$value->slug}}/{{$value->id}}">
                            <img class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}" width="370" height="250" alt="">
                        </a>
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="post/{{$value->slug}}/{{$value->id}}">{{$value->title}}</a></h5>
                            </div>
                            <h6 class="offset-top-10"> {{ number_format($value->price, 0, ',', '.') }} VNĐ/ Tháng</h6>
                            <p><strong>Địa chỉ:</strong> {{$value->address}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
