@extends('backend.layout')
@section('title', 'Sửa sản phẩm')
@section('product', 'active')
@section('main')
<div class="container">
  
    <section class="panel panel-default">
  <div class="panel-heading"> 
  <h3 class="text-info panel-title">Sửa thông tin sản phẩm</h3> 
  </div> 
  <div class="panel-body">
    
  <form action="{{ route('post-edit-product') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" role="form">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
     <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
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
        <input type="text" class="form-control" name="title" id="name" value="{{ $product->title }}">
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
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
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
      <label for="tech" class="col-sm-3 control-label">Thể loại</label>
      <div class="col-sm-3">
        <select name="type_id" class="form-control">
            <option value="{{ $product->type->id }}">{{ $product->type->name }}</option>
          @foreach ($type as $type)
            @if ($product->type->id != $type->id)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="tech" class="col-sm-3 control-label">Danh mục</label>
      <div class="col-sm-3">
        <select name="category_id" class="form-control">
            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
            @foreach ($category as $category)
              @if ($product->category->id != $category->id)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
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