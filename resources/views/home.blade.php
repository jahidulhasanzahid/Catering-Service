@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Food Item. <br>
                    @foreach($product as $products)
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="{!! asset('images/product/'.$products->image) !!}" alt="Card image cap">
                      <div class="card-body">
                        <h4>Shop Name {{ $products->shopName }}</h4>
                        <h4>Item Name {{ $products->foodItemName }}</h4>
                        <p class="card-text">{{ $products->foodDetails}}</p>
                        <i>Unit Price: {{ $products->foodPrice }} BDT</i>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
