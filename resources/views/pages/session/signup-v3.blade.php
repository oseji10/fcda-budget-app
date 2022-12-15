@extends('layouts.session')
@section('content')
<div class="signup3-wrap">
    <div class="signup3-form-holder shadow-2dp">
        <div class="form-headline text-center mt-xxl mb-xxl">
            <h3 class="heading-title">Lets get started!</h3>
            <p class="text-muted">Create an account get unlimited access</p>
        </div>
        <div class="mb-xl text-center">
            <img src="{{  asset('images/illustrations/posting_photo.svg')}}" width="200px">
        </div>
        <div class="p-4">
            <form>
                <div class="input-group  input-light mb-3">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group  input-light mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group  input-light mb-3">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block">SignUp</button>
            </form>
            <div class="d-flex align-items-center">
                <p class="mr-sm mb-0">Don't have an account? </p>
                <a href="" class="font-weight-bold">Sign In</a>
            </div>
        </div>
    </div>
</div>
@endsection