@extends('backend.layout')
@section('title', 'Thêm chi tiết sản phẩm')
@section('product', 'active')
@section('main')
<div class="container">
  
    <section class="panel panel-default">
  <div class="panel-heading"> 
  <h3 class="text-info panel-title">Thêm chi tiết sản phẩm</h3> 
  </div> 
  <div class="panel-body">
    
  <form action="{{ route('post-detail-product') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" role="form">
    @csrf
     <div class="form-group">
         <input type="hidden" name="product_id" value="{{ $product->id }}">
        <label for="name" class="col-sm-3 control-label">Tên sản phẩm: &nbsp; 
            <h5 style="display: inline-block" class="text-primary">{{ $product->name }}</h5>
        </label>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="price" class="col-sm-3 control-label">Giá gốc</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
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
     <input type="number" class="form-control" name="promotion" value="{{ $product->promotion }}">
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
          @foreach ($color as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
          @endforeach
        </select>
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="tech" class="col-sm-3 control-label">Kích cỡ</label>
      <div class="col-sm-3">
        <select name="size_id" class="form-control">
          @foreach ($size as $size)
            <option value="{{ $size->id }}">{{ $size->name }}</option>
          @endforeach
        </select>
      </div>
    </div> <!-- form-group // -->
    <hr>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </div> <!-- form-group // -->
  </form>
    
  </div><!-- panel-body // -->
  </section><!-- panel// -->
  
    
  </div> <!-- container// -->
@endsection