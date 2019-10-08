@extends('layouts.admin-app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-4">
			    <div class="nav flex-column nav-pills">
			      <a class="nav-link" href="{{ url('/admin/user-list') }}">User List</a>
			      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Food Item List</a>
			      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Shop List</a>
			      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Messages</a>
			    </div>
    	</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">User ID</th>
					      <th scope="col">User Name</th>
					      <th scope="col">Shop Name</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($users as $user)
					    <tr>
					      <th scope="row">{{ $user->id }}</th>
					      <td>{{ $user->name }}</td>
					      <td>Default Shop</td>
					      <td>{{ $user->status }}</td>
					      <td>
						      	<form class="form-inline" action="{{ route('user.list.update', $user->id) }}" method="post">
	                                @csrf
	                                <input type="hidden" name="status" />
	                                <button type="submit" class="btn btn-success">Active</button>
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