@extends('layouts.session')
@section('content')
<div class="page-wrap slate">
    <div class="session-form-hold">
        <div class="card text-center">
            <div class="card-body">
                <img class="card-img-top signup mb-md" src="{{  asset('images/egret.png')}}" alt="Card image cap">
                <p class="text-muted mb-xxl">New password will be sent to your email address</p>
                <div class="input-group  input-light mb-md">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block mb-md">Submit</button>
                <div class="d-flex justify-content-around">
                    <a href="#" class="">Sign In</a>
                    <a href="#">Create New Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection