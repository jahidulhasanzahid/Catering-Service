<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Foysal Shop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- helper class css -->
    <link href="{{asset('assets/css/helper.min.css')}}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
        <header>

        <!-- header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="section-seperator pt-6 pb-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="header-left">
                                <div class="toggler-btn-wrap">
                                    <div class="currency-btn">
                                        <a href="#">Join<i class="fa fa-angle-down"></i></a>
                                    </div>

                                        <ul class="currency-list">
                                            <!-- Authentication Links -->
                                            @guest
                                                <li>
                                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li>
                                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li>
                                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div aria-labelledby="navbarDropdown">
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-9">
                            <div class="header-right text-center text-md-right">
                                @guest
                                    <p>Be a Member First</p>
                                @else
                                <ul>
                                    <li><a class="active" href="#">contact</a></li>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">wishlist</a></li>
                                    <li><a href="#">shopping cart</a></li>
                                    <li><a href="#">checkout</a></li>
                                </ul>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->

        <!-- header menu area start -->
        <div class="header-menu-area sticky pt-20 pb-20 pt-md-10 pb-md-10 pt-sm-10 pb-sm-10">
            <div class="container">
                <div class="header-menu-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-6">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="assets/img/logo/logo.png" alt="brand logo"></a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="{{url('/customer')}}">Home</a></li>
                                        <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
<!--                                             <ul class="megamenu dropdown">
                                                <li class="mega-title"><a href="#">column 01</a>
                                                    <ul>
                                                        <li><a href="shop-grid-left-sidebar.html">shop grid left sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 02</a>
                                                    <ul>
                                                        <li><a href="product-details.html">product details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 03</a>
                                                    <ul>
                                                        <li><a href="cart.html">cart</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">column 04</a>
                                                    <ul>
                                                        <li><a href="my-account.html">my-account</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
<!--                                             <ul class="dropdown">
                                                <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid-left-sidebar.html">shop grid left sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">product details</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="contact-us.html">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> <!-- end main menu area -->
                        <div class="col-lg-2 col-6">
                            <div class="header-cart-option">
                                <div class="header-search">
                                    <div class="header-search-btn">
                                        <i class="icon-magnifier"></i>
                                    </div>
                                    <div class="search-box">
                                        <input type="text" placeholder="search product...">
                                    </div>
                                </div>
                                <div class="cart-toggler">
                                    <div class="cart-toggler-icon">
                                        <button><i class="icon-handbag"></i>
                                            <span class="add-qunatity">2</span>
                                        </button>
                                    </div>
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-img">
                                                <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                <span class="cart-quantity">1x</span>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="product-details.html">lemon grass</a></h4>
                                                <span>$ 60.00</span>
                                                <p>size: M</p>
                                                <p>color: yellow</p>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                        <li class="mini-cart-price">
                                            <span class="subtotal">subtotal : </span>
                                            <span class="subtotal-price">$88.66</span>
                                        </li>
                                        <li class="checkout-btn">
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end mini cart area -->
                        <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header menu area end -->
    </header>

        <div class="container-fluid">
            @yield('content')
        </main>


    <footer>
        <!-- footer bottom area start -->
        <div class="footer-bottom-area bg-gray">
            <div class="container">
                <div class="footer-seperator bdr pt-20 pb-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 order-md-1 order-2">
                            <div class="copyright-text text-center text-md-left">
                                <p>Copyright © 2019 <a href="#">Foysal</a>, All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 order-md-2 order-1">
                            <div class="payment-method text-center text-md-right pb-sm-6">
                                <img src="assets/img/icons/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->
    </footer>
    <!-- footer area end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- Jquery Min Js -->
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper Min Js -->
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <!-- Plugins Js-->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- Ajax Mail Js -->
    <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
    <!-- Active Js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
