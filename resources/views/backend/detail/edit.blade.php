@extends('backend.layout')
@section('title', 'Sửa chi tiết sản phẩm')
@section('product', 'active')
@section('main')
<div class="container">
  
    <section class="panel panel-default">
        <div class="panel-body">
            
        <form action="{{ route('post-detail-product') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" role="form">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $detail->id }}">
                <label for="name" class="col-sm-3 control-label">Tên sản phẩm: &nbsp; 
                    <h5 style="display: inline-block" class="text-primary">{{ $detail->product->name }}</h5>
                </label>
            </div> <!-- form-group // -->
            <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá gốc</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="price" value="{{ $detail->price }}">
            </div>
            @if ($errors->has('price'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('price') }}</strong>
                    </div>
                @endif
            </div> <!-- form-group // -->
            <div class="form-group">
            <label for="promotion" class="col-sm-3 control-label">Giá khuyến mại</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="promotion" value="{{ $detail->promotion }}">
            </div>
            </div> <!-- form-group // -->
            <div class="form-group">
            <label for="quantity" class="col-sm-3 control-label">Số lượng</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="quantity" value="1">
            </div>
            </div> <!-- form-group // -->
                <div class="form-group">
                    <label for="tech" class="col-sm-3 control-label">Màu</label>
                    <div class="col-sm-3">
                        <select name="color_id" class="form-control">
                            <option value="{{ $detail->id }}">{{ $detail->color->name }}</option>
                            @foreach ($color as $color)
                                @if ($detail->color->id != $color->id)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div> <!-- form-group // -->
                <div class="form-group">
                <label for="tech" class="col-sm-3 control-label">Kích cỡ</label>
                <div class="col-sm-3">
                    <select name="size_id" class="form-control">
                        <option value="{{ $detail->id }}">{{ $detail->size->name }}</option>
                        @foreach ($size as $size)
                            @if ($detail->size->id != $size->id)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div> <!-- form-group // -->
            <hr>
            <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
            </div> <!-- form-group // -->
        </form>
            
        </div><!-- panel-body // -->
    </section><!-- panel// -->
  
    
  </div> <!-- container// -->
@endsection