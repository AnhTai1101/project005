@extends('backend.layout')
@section('title', 'Trang chi tiết sản phẩm')
@section('product', 'active')
@section('main')
    <div class="container">
        
        <h3 class="text-info">Trang chi tiết sản phẩm</h3>
        <hr>
        <a href="{{ route('add-detail', $product->id) }}"><button class="btn btn-info">Thêm chi tiết</button></a>
        <br><br>
        <div class="card">
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Màu</th>
                        <th scope="col">Kích cỡ</th>
                        <th scope="col" width="120">Số lượng</th>
                        {{-- <th scope="col" width="120">Price</th> --}}
                        <th scope="col" width="230" class="text-right">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                <figure class="media">
                                    <div class="img-wrap">
                                        <img style="max-height: 150px" src="images/{{ $product->image1 }}" class="img-thumbnail img-sm">
                                    </div>
                                    <figcaption class="media-body">
                                        <a href="{{ route('edit-detail', $product->id) }}">
                                            <h6 class="title text-truncate">&nbsp;&nbsp;{{ $product->name }}</h6>
                                        </a>
                                        <dl class="param param-inline small">
                                            <dt>&nbsp;&nbsp;Giá gốc: </dt>
                                            <dd>&nbsp;{{ number_format($detail->price) }} .đ</dd>
                                        </dl>
                                        <dl class="param param-inline small">
                                            <dt>&nbsp;&nbsp;Giá khuyến mại: </dt>
                                            <dd>&nbsp;{{ number_format($detail->promotion) }} .đ</dd>
                                        </dl>
                                    </figcaption>
                                </figure> 
                            </td>
                            <td>{{ $detail->color->name }}</td>
                            <td>{{ $detail->size->name }}</td>
                            <td class="text-center"> 
                                <span>{{ $detail->quantity }}</span>
                            </td>
                            {{-- <td> 
                                <div class="price-wrap"> 
                                    <var class="price">USD 145</var> 
                                    <small class="text-muted">(USD5 each)</small> 
                                </div> <!-- price-wrap .// -->
                            </td> --}}
                            <td class="text-right"> 
                                <a href="{{ route('edit-detail', $detail->id) }}"><button class="btn btn-outline-success">Sửa</button></a>
                                <a href="{{ route('delete-detail', $detail->id) }}" class="btn btn-outline-danger"> × Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $details->links() }}
        </div> <!-- card.// -->
    </div> 
@endsection