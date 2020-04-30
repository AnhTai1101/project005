@extends('backend.layout')
@section('title', 'Trang slide')
@section('slide', 'active')
@section('main')
    <h3 class="text-primary">  Hình ảnh hiển thì slide</h3>
    <hr>
    <a href="{{ route('add-slide') }}">
        <button class="btn btn-info">
            Thêm slide
        </button>
    </a>
    <br><hr>
    <h3>Danh sách slide</h3>
    <hr style="width:40%">
    <div class="row">
        @foreach ($slide as $slide)
            <div class="col-md-4 ">
                <div class="overview-item ">
                    <div>
                        <div class="overview-wrap">
                        <h5 class="title-1 ">Số {{ $slide->id }} </h5>
                    <a class="au-btn au-btn-icon au-btn--blue" href="{{ route('edit-slide', $slide->id) }}">Sửa</a>
                    </div>
                    <div class="thumbnail">
                        <img src="images/{{ $slide->image }}" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Title: {{ $slide->title }}</p>
                            <p>Name: {{ $slide->name }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection