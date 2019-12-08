@if(Auth::User()->type== '1')
<div class="product-hover-content">
	<div class="add-to-cart">
		<form action="{{ route('carts.store') }}" method="post">
		  @csrf
		  <input type="hidden" name="product_id" value="{{ $products->id }}">
		  <button type="submit" class="btn btn-info"><i class="icon-handbag"></i></button>
		</form>
	</div>
</div>
@else
<div class="product-hover-content">
	<div class="add-to-cart">
		<p>Only Customer Can Buy</p>
	</div>
</div>
@endif