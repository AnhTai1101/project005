@extends('backend.layout')
@section('title', 'Trang sản phẩm')
@section('product', 'active')
@section('main')
    <div class="container">
        
        <h3 class="text-info">Trang sản phẩm</h3>
        <hr>
        <a href="{{ route('add-product') }}"><button class="btn btn-info">Thêm sản phẩm</button></a>
        <br><br>
        <div class="card">
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col" width="120">Số lượng</th>
                        {{-- <th scope="col" width="120">Price</th> --}}
                        <th scope="col" width="230" class="text-right">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <figure class="media">
                                    <div class="img-wrap">
                                        <img style="max-height: 150px" src="images/{{ $product->image1 }}" class="img-thumbnail img-sm">
                                    </div>
                                    <figcaption class="media-body">
                                        <a href="{{ route('home-detail', $product->id) }}">
                                            <h6 class="title text-truncate">&nbsp;&nbsp;{{ $product->name }}</h6>
                                        </a>
                                        <dl class="param param-inline small">
                                            <dt>&nbsp;&nbsp;Giá gốc: </dt>
                                            <dd>&nbsp;{{ number_format($product->price) }} .đ</dd>
                                        </dl>
                                        <dl class="param param-inline small">
                                            <dt>&nbsp;&nbsp;Giá khuyến mại: </dt>
                                            <dd>&nbsp;{{ number_format($product->promotion) }} .đ</dd>
                                        </dl>
                                    </figcaption>
                                </figure> 
                            </td>
                            <td>{{ $product->type->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td class="text-center"> 
                                <span>{{ $product->qty }}</span>
                            </td>
                            {{-- <td> 
                                <div class="price-wrap"> 
                                    <var class="price">USD 145</var> 
                                    <small class="text-muted">(USD5 each)</small> 
                                </div> <!-- price-wrap .// -->
                            </td> --}}
                            <td class="text-right"> 
                                <a href="{{ route('edit-product', $product->id) }}"><button class="btn btn-outline-success">Sửa</button></a> 
                                <a href="{{ route('add-detail', $product->id) }}"><button title="Thêm số lượng sản phẩm" class="btn btn-outline-success">Thêm</button></a> 
                                <a href="{{ route('delete-product', $product->id) }}" class="btn btn-outline-danger"> × Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div> <!-- card.// -->
    </div> 
@endsection