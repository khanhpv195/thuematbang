@extends('layouts.master')

@section('content')

    <!--Section thumbnails terry-->

    <!--Section Recent Căn-->
    <section class="section-bottom-98 section-top-34 section-lg-bottom-110 section-lg-top-66">
        <div class="container">
            <a href=""><h2 class="font-weight-bold">Phòng trọ</h2></a>
            <hr class="divider bg-saffron">
            <div class="row">
                @foreach($motel as $value)
                    <div class="item col-md-6 col-lg-4 offset-top-66 offset-md-top-0">
                        <a href="{{$value->slug}}/{{$value->id}}">
                        <img
                            class="img-fluid d-inline-block" src="{{asset('images/home-img-01-442-280.jpg')}}"
                            width="370" height="250" alt="">
                        </a>
                        <div class="text-md-left offset-top-24">
                            <div>
                                <h5 class="font-weight-bold text-primary"><a href="{{$value->slug}}/{{$value->id}}">{{$value->title}}</a></h5>
                            </div>
                            <h6 class="offset-top-10"> {{ number_format($value->price, 0, ',', '.') }} VNĐ / Tháng</h6>
                            <p><strong>Địa chỉ:</strong> {{$value->address}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            {{$motel->links()}}
        </div>

    </section>


@endsection
