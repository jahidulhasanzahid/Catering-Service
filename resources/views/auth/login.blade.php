@extends('layouts.app')

@section('content')

<!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <div class="breadcrumb-title">login</div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">login</li>
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
                            <h2>Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="single-input-item">
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email or Username" required autocomplete="email" autofocus/>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </div>
                                <div class="single-input-item">
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Enter your Password" required />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                         @if (Route::has('password.request'))
                                            <a class="forget-pwd" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="sqr-btn">Login</button>
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
