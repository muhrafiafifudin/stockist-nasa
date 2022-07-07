@extends('admin.layouts.auth')

@section('title')
    Login | Admin
@endsection

@section('content')
    <div class="container container-login animated fadeIn">
        <h3 class="text-center">Sign In To Admin</h3>
        <div class="login-form">
            <div class="form-group">
                <label for="username" class="placeholder"><b>Username</b></label>
                <input id="username" name="username" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password" class="placeholder"><b>Password</b></label>
                <a href="#" class="link float-right">Forget Password ?</a>
                <div class="position-relative">
                    <input id="password" name="password" type="password" class="form-control" required>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberme">
                    <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                </div>
                <a href="#" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</a>
            </div>
            <!-- 				<div class="form-action">
                <a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
            </div> -->
            <div class="login-account">
                <span class="msg">Don't have an account yet ?</span>
                <a href="#" id="show-signup" class="link">Sign Up</a>
            </div>
        </div>
    </div>
@endsection
