@extends('layouts.app')

@section('content')
  <div class='container margin-top-20 mb-3'>
    <div class="card card-body">
      <h2>Confirm Items</h2>
      <hr>
      <div class="row">
        <div class="col-md-7 border-right">
          

          @foreach (App\Cart::totalCarts() as $cart)
          <?php
                    $value = $cart->product_id; 

                    $title = DB::table('products')->where('id', $value)->get();

                    foreach($title as $t){
                      $titleShow = $t->foodItemName;
                      $priceShow = $t->foodPrice;
                    }

                 ?>
            <p>
              {{ $titleShow }} -
              <strong>{{ $priceShow }} taka </strong>
              - {{ $cart->product_quantity }} item
            </p>
          @endforeach
        </div>
        <div class="col-md-5">
          @php
          $total_price = 0;
          @endphp
          @foreach (App\Cart::totalCarts() as $cart)
            @php
            $total_price += $priceShow * $cart->product_quantity;
            @endphp
          @endforeach
          <p>Total Price : <strong>{{ $total_price }}</strong> Taka</p>
          <p>Total Price with shipping cost: <strong>{{ $total_price + 50 }}</strong> Taka [Inside of Dhaka]</p>
          <p>Total Price with shipping cost: <strong>{{ $total_price + 150 }}</strong> Taka [Outside of Dhaka]</p>
        </div>
      </div>
      <p>
        <a href="{{ route('carts') }}">Change Cart items</a>
      </p>
    </div>
    <div class="card card-body mt-2 mb-4">
      <h2>Shipping Address</h2>

      <form method="POST" action="{{ route('checkouts.store') }}">
        @csrf

        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">Reciever Name</label>

          <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : '' }}" required autofocus>

            @if ($errors->has('name'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
        </div>


        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" required>

            @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone No</label>

          <div class="col-md-6">
            <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ Auth::check() ? Auth::user()->phone_no : '' }}" required>

            @if ($errors->has('phone_no'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('phone_no') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="message" class="col-md-4 col-form-label text-md-right">Additional Message (optional)</label>

          <div class="col-md-6">
            <textarea id="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="4" name="message" placeholder="Please Tell us if you need different types of Cube. Like Stiker less, Stiker etc from our prodcct description."></textarea>

            @if ($errors->has('message'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('message') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping Address (*)</label>

          <div class="col-md-6">
            <textarea id="shipping_address" class="form-control{{ $errors->has('shipping_address') ? ' is-invalid' : '' }}" rows="4" name="shipping_address">{{ Auth::check() ? Auth::user()->shipping_address : '' }}</textarea>

            @if ($errors->has('shipping_address'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('shipping_address') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Order Now
            </button>
          </div>
        </div>

      </div>


    </form>

  </div>

</div>
@endsection

