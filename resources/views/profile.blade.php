@extends('layouts.app')

@section('content')

<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">my account</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">my account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- my account wrapper start -->
    <div class="my-account-wrapper pt-68 pb-6 pt-sm-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                    <!-- <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                        Method</a> -->
                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>

                                </div>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <!-- My Account Tab Menu End -->
    
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            <div class="welcome">
                                                <p>Hello, <strong>{{ Auth::user()->name }}</strong> <a href="login-register.html" class="logout"> Logout</a>)</p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Customer Name</th>
                                                            <th>Food Item Name</th>
                                                            <th>Price</th>
                                                            <td>Shipping Address</td>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    	@foreach($orders as $order)
                                                    @if($order->user_id == Auth::User()->id || $order->shop_id == Auth::User()->id)
                                                        <tr>
                                                            <td>{{ $order->id }}</td>
                                                            <td>{{ $order->name }}</td>
                                                            <td>{{$order->foodItemName}}</td>
                                                            <td>{{$order->foodPrice}}</td>
                                                            <td>{{ $order->shipping_address }}</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                    @endif
                                                         @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <!-- <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Haven - Free Real Estate PSD Template</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HasTech - Profolio Business Template</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <!-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div> -->
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>
                                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
        <div class="tab-pane fade" id="account-info" role="tabpanel">
            <div class="myaccount-content">
                <h3>Account Details</h3>
                <div class="account-details-form">
                    <form action="{{ url('profile/update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="shopName" class="required">Shop Name</label>
                                    <input type="text" id="shopName" name="shopName" placeholder="Shop Name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="phone" class="required">Phone</label>
                                    <input type="number" name="phone" id="phone" placeholder="017........." />
                                </div>
                            </div>
                        </div>
                        <div class="single-input-item">
                            <label for="display-name" class="required">Address/Location</label>
                            <input type="text" id="display-name" name="address" placeholder="Address / Location" />
                        </div>
                        <fieldset>
                            <legend>Your Food Items Type</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <label for="foodItemOne" class="required">Food Item</label>
                                        <input type="text" id="foodItemOne" placeholder="Food Item" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <label for="foodItemTwo" class="required">Food Item</label>
                                        <input type="text" id="foodItemTwo" placeholder="Food Item" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-input-item">
                                        <label for="foodItemthree">Food Item</label>
                                        <input type="text" id="foodItemthree" placeholder="Food Item" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-item">
                                        <label for="foodItemFour">Food Item</label>
                                        <input type="text" id="foodItemFour" placeholder="Food Item" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-input-item">
                                        <label for="foodItemFive">Food Item</label>
                                        <input type="text" id="foodItemFive" placeholder="Food Item" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="single-input-item">
                            <button type="submit" class="check-btn sqr-btn ">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- my account wrapper end -->


@endsection