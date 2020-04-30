@extends('backend.layout')
@section('title','Sửa slide')
@section('slide', 'active')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm slide</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form action="{{ route('post-edit-slide') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="margin-bottom:40px">
                                <input type="hidden" name="id" value="{{ $slide->id }}">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Tên slide</label>
                                        <input required value="{{ $slide->name }}" type="text" name="name" class="form-control">
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group" >
                                        <label>Tiêu đề</label>
                                        <input required value="{{ $slide->title }}" type="text" name="title" class="form-control">
                                        @if ($errors->has('title'))
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group" >
                                        <label>Ảnh chính sản phẩm</label>
                                        <input id="image" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                        @if ($errors->has('image'))
                                            <div class="alert alert-danger">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </div>
                                        @endif
                                        <img id="avatar" class="thumbnail" width="400px" src="images/{{ $slide->image }}">
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="{{ route('home-slide') }}" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection
@section('script')
    <script src="backend/js/showLogin.js"></script>
@endsection
