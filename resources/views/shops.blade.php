@extends('layouts.app')

@section('content')

@foreach($shops as $shop)
<div class="card">
  <div class="card-body">
    {{ $shop->shopName }}
  </div>
</div>
@endforeach

@endsection
