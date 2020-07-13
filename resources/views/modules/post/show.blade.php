@extends('layouts.master')

@section('content')

    <section class="section-34">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col"><img src="{{$post->thumbnail}}" alt=""></div>
                    <div class="col" style="text-align:left">
                        <h1>{{$post->title}}</h1>
                        <h6 class="offset-top-10"> {{ number_format($post->price, 0, ',', '.') }} VNĐ/ Tháng</h6>
                        <h6>Địa chỉ: {{$post->address}}</h6>
                        <p>{{$post->description}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify">{!! $post->content !!}</p>
                        <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur iste odio similique.
                            Architecto aspernatur assumenda eos hic ipsum neque similique tempore? Ad debitis non
                            pariatur praesentium tempore totam, vel voluptatem?</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
