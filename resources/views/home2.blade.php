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



                    @if(Auth::user())
                    
                    @if(Auth::user()->status == 'pending')
                    <div>Your Account is now Pending.</div>
                    @else(Auth::user()->status == 'Active')

                    <h1>Add Product</h1>
                    <form>
                      <div class="form-group">
                        <label for="exampleProductName">Product Name</label>
                        <input type="email" class="form-control" id="exampleProductName" placeholder="Enter Product Name">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                @endif
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
