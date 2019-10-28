@extends('layouts.app')

@section('content')

<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">Product Information</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Information</li>
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
                        <span>Shopkeeper</span>
                        <h2>Food Items</h2>
                    </div>
                </div>
            </div> <!-- section title end -->
            
            <div class="login-register-wrapper pt-68 pb-6 pt-sm-50">
              <div class="container">
                  <div class="member-area-from-wrap">
                      <div class="row">
                          <!-- Login Content Start -->
                          <div class="col-lg-3"></div>
                          <div class="col-lg-6">
                              <div class="login-reg-form-wrap  pr-lg-50">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user())
                    
                    @if(Auth::user()->status == 'pending')
                    <div>Your Account is now Pending.</div>
                    @else(Auth::user()->status == 'Active')

                    <h1>Add Food Details</h1>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="single-input-item">
                        <label for="exampleFoodShopName">Food Shop Name</label>
                        <input type="text" id="exampleFoodShopName" placeholder="Enter Food Shop Name" name="shopName" required>
                      </div>
                      <div class="single-input-item">
                        <label for="exampleFoodName">Food Name</label>
                        <input type="text" id="exampleFoodName" placeholder="Enter Food Item Name" name="foodItemName" required>
                      </div>
                      <div class="single-input-item">
                        <label for="exampleFoodPhoto">Food Photo</label>
                        <input type="file" id="exampleFoodPhoto" placeholder="Select an image" name="image">
                      </div>
                      <div class="single-input-item">
                        <label for="exampleFoodUnitPrice">Food Unit Price</label>
                        <input type="text" id="exampleFoodUnitPrice" placeholder="Enter Food Unit Price" name="foodPrice" required>
                      </div>
                      <div class="single-input-item">
                        <label for="exampleFoodDetails">Food Details</label>
                        <textarea cols="5" rows="4" placeholder="Write here about your food details..." name="foodDetails" required>
                            
                        </textarea>
                      </div>
                      <div class="single-input-item">
                        <button type="submit" class="sqr-btn" name="submit">Add Item</button>
                      </div>
                    </form>
                @endif
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


            <br>
            <br>
        </div>
    </div>
    <!-- product trend end -->
@endsection
