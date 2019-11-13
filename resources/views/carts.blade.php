@extends('layouts.app')

@section('content')
  <div class='container margin-top-20' style="margin-bottom: 200px;">
    <h2>My Cart Items</h2>
    @if (App\Cart::totalItems() > 0)
      <table class="table table-bordered table-stripe">
        <thead>
          <tr>
            <th>No.</th>
            <th>Product Title</th>
            <th>Product Quantity</th>
            <th>Unit Price</th>
            <th>Sub total Price</th>
            <th>
              Delete
            </th>
          </tr>
        </thead>
        <tbody>
          @php
          $total_price = 0;
          @endphp
          @foreach (App\Cart::totalCarts() as $cart)
            <tr>
              <td>
                {{ $loop->index + 1 }}
              </td>
              <td>
                <?php
                    $value = $cart->product_id; 

                    $title = DB::table('products')->where('id', $value)->get();

                    foreach($title as $t){
                      $titleShow = $t->foodItemName;
                      $priceShow = $t->foodPrice;
                    }

                 ?>
                <a href="#">{{ $titleShow }}</a>
                
              </td>
              
              <td>
                <form class="form-inline" action="{{ route('carts.update', $cart->id) }}" method="post">
                  @csrf
                  <input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}"/>
                  <button type="submit" class="btn btn-success ml-1">Update</button>
                </form>
              </td>
              <td>
                {{ $priceShow }} Taka
              </td>
              <td>
                @php
                $total_price += $priceShow * $cart->product_quantity;
                @endphp

                {{ $priceShow * $cart->product_quantity }} Taka
              </td>
              <td>
                <form class="form-inline" action="{{ route('carts.delete', $cart->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="cart_id" />
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
          <tr>
            <td colspan="4"></td>
            <td>
              Total Amount:
            </td>
            <td colspan="2">
              <strong>  {{ $total_price }} Taka</strong>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="float-right">
        <a href="{{ url('/customer') }}" class="btn btn-info btn-lg">Continue Shopping..</a>
       
        <a href="{{ route('checkouts') }}" class="btn btn-warning btn-lg">Checkout</a>
      </div>
    @else
      <div class="alert alert-warning">
        <strong>There is no item in your cart.</strong>
        <br>
        <a href="{{ url('/customer') }}" class="btn btn-info btn-lg">Continue Shopping..</a>
      </div>
    @endif
  </div>
@endsection
