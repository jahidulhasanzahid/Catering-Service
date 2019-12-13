@extends('layouts.admin-app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-4">
			    <div class="nav flex-column nav-pills">
			      <a class="nav-link" href="{{ url('/admin/user-list') }}">User List</a>
			      <a class="nav-link" href="{{ url('/admin/shop-list') }}">Shop List</a>
			      <a class="nav-link" href="{{ url('/admin/messages') }}">Messages</a>

			    </div>
    	</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">Shop ID</th>
					      <th scope="col">Shop Name</th>
					      <th scope="col">Address</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($shops as $shop)
					    <tr>
					      <th scope="row">{{ $shop->id }}</th>
					      <td>{{ $shop->shopName }}</td>
					      <td>{{ $shop->address }}</td>
					      <td>{{ $shop->phone }}</td>
					      <td>
						      	<form class="form-inline" action="{{ route('shop.list.delete', $shop->id) }}" method="post">
	                                @csrf
	                                <input type="hidden" name="status" />
	                                <button type="submit" class="btn btn-danger">Delete</button>
	                             </form>
                           </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection