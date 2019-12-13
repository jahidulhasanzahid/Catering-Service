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
					      <th scope="col">#ID</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Phone</th>
					      <th scope="col">Message</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($messagess as $messages)
					    <tr>
					      <th scope="row">{{ $messages->id }}</th>
					      <td>{{ $messages->name }}</td>
					      <td>{{ $messages->email }}</td>
					      <td>{{ $messages->phone }}</td>
					      <td>{{ $messages->message }}</td>
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