@extends('layouts.app')

@section('content')

<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">{{ $products->shopName }} Product Details</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">product details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- shop main wrapper start -->
    <div class="page-main-wrapper pt-68 pt-sm-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product-large-slider mb-20">
                        <div class="pro-large-img">
                            <img src="{!! asset('images/product/'.$products->image) !!}" alt="" />
                            <div class="img-view">
                                <a class="img-popup" href="{!! asset('images/product/'.$products->image) !!}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product__details__content pt-sm-46">
                        <h2 class="mb-20"><a href="#">Food Name: {{ $products->foodItemName }}</a></h2>
                        <div class="product-ratings">
                            <h4>Category :{{ $products->category }}</h4>
                        </div>
                        <div class="price-box mt-16 mb-16">
                            <span class="regular-price">Price: {{ $products->foodPrice }}</span>
                            
                        </div>   
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, </p>
                        <div class="cart-button mt-20">
                            @include('partials.cart-button')
                        </div>
                        <div class="share-icon mt-20">
                            <h5>Share: </h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop main wrapper end -->

    <!-- product details reviews start -->
    <div class="product-details-reviews pt-70 pt-md-68 pt-sm-26">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-review-info mt-half">
                        <ul class="nav nav-pills justify-content-center mb-20" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                <p>Studio Design' PolyFaune collection features classic products with colorful patterns, inspired by the traditional japanese origamis. To wear with a chino or jeans. The sublimation textile printing process provides an exceptional color rendering and a color, guaranteed overtime. Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort.</p>
                            </div>
                            <br><br>
                            <br>
                            <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                <div class="product-review">










                                    <div id="disqus_thread"></div>
                                    <script>

                                    /**
                                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                    /*
                                    var disqus_config = function () {
                                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    */
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://foysalshop.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                                







                                </div> <!-- end of product-review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- product details reviews end --> 

    <br>
    <br>
    <br>
    <br>





@endsection
