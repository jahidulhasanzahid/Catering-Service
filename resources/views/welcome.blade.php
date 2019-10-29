@extends('layouts.app')

@section('content')
        <!-- slider area start -->
    <div class="slider-area">
        <div class="hero-slider-active hero__1 slick-arrow-style slick-dot-style">
            <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/home1-slider1.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-text text-center">
                                <div class="slider-logo d-inline-block">
                                    <img src="assets/img/slider/slider-logo1.png" alt="">
                                </div>
                                <h1>the firms</h1>
                                <h2>vegetables & fruits</h2>
                                <p>100% Organic & Non - Investigationes demonstraverunt lectores legere</p>
                                <a class="shop-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider d-flex align-items-center" style="background-image: url(assets/img/slider/home1-slider2.jpg);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-text text-center">
                                <div class="slider-logo d-inline-block">
                                    <img src="assets/img/slider/slider-logo1.png" alt="">
                                </div>
                                <h1>the firms</h1>
                                <h2>vegetables & fruits</h2>
                                <p>100% Organic & Non - Investigationes demonstraverunt lectores legere</p>
                                <a class="shop-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- product trend area start -->
    <div class="product-trend-area pt-96 pt-sm-62">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-40">
                        <span>products</span>
                        <h2>trend</h2>
                    </div>
                </div>
            </div> <!-- section title end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trend-main-wrapper">
                        <div class="container">
                            <div class="product-tab mb-36">
                                <ul class="nav d-flex justify-content-center">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab_one">
                                            <div class="tab-icon">
                                                <img src="assets/img/icons/icons1.png" alt="">
                                            </div>
                                            all products
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_two">
                                            <div class="tab-icon">
                                                <img src="assets/img/icons/icons2.png" alt="">
                                            </div>
                                            fruits
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_three">
                                            <div class="tab-icon">
                                                <img src="assets/img/icons/icons3.png" alt="">
                                            </div>
                                            vegetables
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_four">
                                            <div class="tab-icon">
                                                <img src="assets/img/icons/icons4.png" alt="">
                                            </div>
                                            breads
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- end tab list -->
                        </div>


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
                                            <a href=""><img src="{!! asset('images/product/'.$products->image) !!}"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="tag-cate">
                                                <a href="">{{ $products->shopName }}</a>
                                            </div>
                                            <div class="product-name">
                                                <a href="">{{ $products->shopName }}</a><br>
                                                <p>{{$products->category}}</p>
                                                <em>{{ $products->foodDetails}}</em>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">{{ $products->foodPrice }}</span>
                                                <!-- <span class="old-price"><del>$75.00</del></span> -->
                                            </div>
                                        </div>
                                        <div class="product-hover-content">
                                            <div class="add-to-cart">
                                                <a href="#"><i class="icon-handbag"></i></a>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                    @endforeach
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                        <!-- product trend end -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product trend area end -->


@endsection
