@extends('admin.layouts.auth')

@section('title')
    Login | Admin
@endsection

@section('content')
    <div class="container container-login animated fadeIn">
        <h3 class="text-center">Sign In To Admin</h3>
        <div class="login-form">
            <form action="{{ route('admin.adminlogin') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email" class="placeholder"><b>Email</b></label>
                    <input id="email" name="email" type="text" class="form-control" required>
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
                    <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
                </div>
            </form>
        </div>
    </div>
@endsection
