@extends('layouts.session')
@section('content')
<div class="page-wrap slate">
    <div class="session-form-hold">
        <div class="card text-center">
            <div class="card-body">
                <img class="card-img-top signup mb-md" src="{{  asset('images/egret.png')}}" alt="Card image cap">
                <h4>Lets get started</h4>
                <p class="text-muted mb-xxl">Sign up to use our service</p>
                <div class="input-group  input-light mb-md">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group  input-light mb-md">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="input-group  input-light mb-md">
                    <input type="text" class="form-control" placeholder="confirm password">
                </div>
                <div class="input-group  input-light mb-md">
                    <div class="mb-md custom-control custom-checkbox checkbox-light">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">I have read and agree to the terms of
                            service.</label>
                    </div>
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block mb-md">Sign Up</button>
                <a href="#" class=""> Sign in to existing account</a>
            </div>
        </div>
    </div>
</div>
@endsection