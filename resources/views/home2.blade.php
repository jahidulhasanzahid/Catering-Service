@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shopkeeper</div>

                <div class="card-body">
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
                      <div class="form-group">
                        <label for="exampleFoodShopName">Food Shop Name</label>
                        <input type="text" class="form-control" id="exampleFoodShopName" placeholder="Enter Food Shop Name" name="shopName" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFoodName">Food Name</label>
                        <input type="text" class="form-control" id="exampleFoodName" placeholder="Enter Food Item Name" name="foodItemName" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFoodPhoto">Food Photo</label>
                        <input type="file" class="form-control" id="exampleFoodPhoto" placeholder="Select an image" name="image">
                      </div>
                      <div class="form-group">
                        <label for="exampleFoodUnitPrice">Food Unit Price</label>
                        <input type="text" class="form-control" id="exampleFoodUnitPrice" placeholder="Enter Food Unit Price" name="foodPrice" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFoodDetails">Food Details</label>
                        <textarea class="form-control" cols="5" rows="4" placeholder="Write here about your food details..." name="foodDetails" required>
                            
                        </textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
                @endif
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
