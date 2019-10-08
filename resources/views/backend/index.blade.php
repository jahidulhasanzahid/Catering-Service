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
                <div class="card-header">Admin</div>
            </div>
        </div>
    </div>
</div>

@endsection