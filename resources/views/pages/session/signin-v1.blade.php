@extends('layouts.session')
@section('content')
<div class="page-wrap slate">
    <div class="session-form-hold">
        <div class="card text-center">
            <div class="card-body">
                <img class="card-img-top signup mb-md" src="{{  asset('images/egret.png')}}" alt="Card image cap">
                <p class="text-muted mb-xxl">Sign in to your account</p>
                <div class="input-group  input-light mb-md">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group  input-light mb-md">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="input-group  input-light">
                    <div class="mb-md custom-control custom-checkbox checkbox-light">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">Remember this computer</label>
                    </div>
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block mb-md">Sign Up</button>
                <div class="d-flex justify-content-around">
                    <a href="#" class="">Forgot Password</a>
                    <a href="#">Create New Account</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection