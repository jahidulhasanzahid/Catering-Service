@extends('layouts.app')

@section('content')
<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">Products</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

<!-- product trend start -->
    <div class="product-trend-area pt-96 pb-54 pt-sm-62 pb-sm-36">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-40">
                        <span>Food</span>
                        <h2>trend</h2>
                    </div>
                </div>
            </div> <!-- section title end -->
            
            <div class="product-trend-carousel slick-arrow-style">
                @foreach($product as $products)
                <div class="product-item text-center">
                    <div class="product-thumb">
                        <a href=""><img src="{!! asset('images/product/'.$products->image) !!}" alt=""></a>
                    </div>
                    <div class="product-content">
                        <div class="tag-cate">
                            <a href="">{{ $products->shopName }}</a>
                        </div>
                        <div class="product-name">
                            <a href="">{{ $products->shopName }}</a>
                            <p>{{ $products->category}}</p>
                            <em>{{ $products->foodDetails}}</em>
                        </div>
                        <div class="price-box">
                            <span class="regular-price">{{ $products->foodPrice }}</span>
                            <!-- <span class="old-price"><del>$75.00</del></span> -->
                        </div>
                    </div>
                    
                            @include('partials.cart-button')
                       
                </div> <!-- end single item -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- product trend end -->



@endsection
