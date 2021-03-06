@extends('backend.layout')
@section('title', 'Thêm sản phẩm')
@section('product', 'active')
@section('main')
<div class="container">
  
    <section class="panel panel-default">
  <div class="panel-heading"> 
  <h3 class="text-info panel-title">Thêm sản phẩm</h3> 
  </div> 
  <div class="panel-body">
    
  <form action="{{ route('post-add-product') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" role="form">
    @csrf
     <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
        </div>
        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="name" class="col-sm-3 control-label">Tiêu đề</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="title" id="name" placeholder="Nhập tiêu đề">
      </div>
        @if ($errors->has('title'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="about" class="col-sm-3 control-label">Chi tiết</label>
      <div class="col-sm-9">
        <textarea name="description" class="form-control"></textarea>
      </div>
      @if ($errors->has('description'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('description') }}</strong>
            </div>
        @endif
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="price" class="col-sm-3 control-label">Giá gốc</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" name="price" value="100000">
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
     <input type="number" class="form-control" name="promotion" value="100000">
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="quantity" class="col-sm-3 control-label">Số lượng</label>
      <div class="col-sm-3">
     <input type="number" class="form-control" name="quantity" value="1">
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="name" class="col-sm-3 control-label">Ảnh sản phẩm</label>
      <div class="col-sm-3">
        <label class="control-label small" for="file_img">Ảnh chính (jpg/png):</label>
        <input type="file" name="image1">
      </div>
      @if ($errors->has('image1'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('image1') }}</strong>
            </div>
        @endif
      <div class="col-sm-3">
        <label class="control-label small" for="file_img">Ảnh phụ:</label>
        <input type="file" name="image2">
      </div>
      <div class="col-sm-3">
        <label class="control-label small" for="file_img">Ảnh phụ 2:</label>
        <input type="file" name="image3">
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
    <div class="form-group">
      <label for="tech" class="col-sm-3 control-label">Thể loại</label>
      <div class="col-sm-3">
        <select name="type_id" class="form-control">
          @foreach ($type as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
          @endforeach
        </select>
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="tech" class="col-sm-3 control-label">Danh mục</label>
      <div class="col-sm-3">
        <select name="category_id" class="form-control">
          @foreach ($category as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
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