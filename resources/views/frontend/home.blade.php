@extends('frontend.main')
@section('title', 'Trang chủ')
@section('home')
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Sản phẩm mới
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    Tất cả
                </button>
                @foreach ($category as $categories)
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $categories->id }}">
                        {{ $categories->name }}
                    </button>
                @endforeach
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                     Bộ lọc
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    tìm kiếm
                </div>
            </div>
            
            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <form action="{{ route('fn-search') }}" method="post">
                        @csrf
                        <button style="float: left; with: 10%;" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
    
                        <input style="float: left; with: 90%;" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Theo tên . . .">
                    </form>
                </div>	
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sắp xếp
                        </div>

                        <ul>
                            {{-- <li class="p-b-6">
                                <a href="frontend/#" class="filter-link stext-106 trans-04">
                                    Mặc định
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="frontend/#" class="filter-link stext-106 trans-04">
                                    Phổ biến
                                </a>
                            </li> --}}

                            <li class="p-b-6">
                                <a href="{{ route('new-id') }}" class="filter-link stext-106 trans-04 filter-link-active">
                                    Sản phẩm mới
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('price-increase') }}" class="filter-link stext-106 trans-04">
                                    Giá: Tăng dần
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('price-reduction') }}" class="filter-link stext-106 trans-04">
                                    giá: Giảm dần
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Giá
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="{{ route('duoi-150') }}" class="filter-link stext-106 trans-04">
                                    Dưới 150.000đ
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('duoi-300') }}" class="filter-link stext-106 trans-04">
                                    150.000đ - 300.000đ
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('duoi-500') }}" class="filter-link stext-106 trans-04">
                                    300.000đ - 500.000đ
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('duoi-2t') }}" class="filter-link stext-106 trans-04">
                                    500.000đ - 2.000.000đ
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="{{ route('tren-2t') }}" class="filter-link stext-106 trans-04">
                                    Trên 2.000.000đ
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Mùa sắc
                        </div>

                        <ul>
                            @foreach ($color as $color)
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: {{ $color->name }};">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="{{ route('fn-color', $color->id) }}" class="filter-link stext-106 trans-04">
                                        {{ $color->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Liên quan
                        </div>
                        <div class="flex-w p-t-4 m-r--5">
                            @foreach ($category as $category1)
                            
                                <a href="{{ route('fn-category', $category1->id) }}" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                   {{ $category1->name}}
                                </a>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row isotope-grid">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $product->category_id }}">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/{{ $product->image1 }}" alt="IMG-PRODUCT">

                            <a href="frontend/#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{ route('fn-detail-product', $product->id) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{ $product->name }}
                                </a>

                                <span class="stext-105 cl3">
                                    {{ number_format($product->price) }} .d
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="frontend/#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="frontend/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="frontend/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="frontend/#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem thêm . . .
            </a>
        </div>
    </div>
</section>
@endsection