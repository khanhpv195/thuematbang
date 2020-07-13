@extends('admin::layouts.master')
@section('content')
    <form class="form" method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" class="form-control" name="thumbnail">
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Đăng</button>
    </form>
@endsection
