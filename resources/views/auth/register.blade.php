@extends('layouts.app')

@section('content')

<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">Registration</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- login register wrapper start -->
    <div class="login-register-wrapper pt-68 pb-6 pt-sm-50">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap  pr-lg-50">
                            <h2>Registration</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="single-input-item">

                                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="single-input-item">
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="single-input-item">
                                    <select id="name" type="text" class="@error('type') is-invalid @enderror textfield" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus autofocus >
                                    <option value="Select User Type">Select User Type</option>
                                    <option value="1">Customer</option>
                                    <option value="2">Service (কেটারিং)</option>
                                    </select>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <br>
                                <div class="single-input-item">
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Your Password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="single-input-item">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>

                                <div class="single-input-item">
                                    <button class="sqr-btn">{{ __('Register') }}</button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="col-lg-3"></div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
@endsection
