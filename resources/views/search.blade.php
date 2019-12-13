
@extends('layouts.app')

@section('content')
<!--conatin-->
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <div class="shadow p-3 mb-5 bg-white rounded">
		<h2>Your Search Result for "{{ $search }}"</h2> <br>
        <div class="product-trend-carousel slick-arrow-style">
            @foreach($info as $products)

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
                
                        
                        @include('partials.cart-button')

                    
            </div> <!-- end single item -->
            @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!--contain-->

@endsection