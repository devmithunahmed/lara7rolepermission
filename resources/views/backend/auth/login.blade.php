@extends('backend.auth.auth_master')
<!-- Start Page title -->
@section('auth_title')
    Login || Admin Panel
@endsection
<!-- END Page title -->
<!-- login area start -->
@section('auth-content')
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="login-form-head">
                        <h4>Admin Login</h4>
                        <p>@include('backend.layouts.partials.messages')</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" id="exampleInputEmail1" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                                {{-- email error message--}}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password" class="form-control @error('password') is-invalid @enderror">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                                {{-- password error message--}}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="remember">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<!-- login area end -->
