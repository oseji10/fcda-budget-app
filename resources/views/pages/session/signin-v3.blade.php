@extends('layouts.session')
@section('content')
<div class="signup3-wrap">
    <div class="signup3-form-holder shadow-2dp">
        <div class="form-headline text-center mt-xxl mb-xxl">
            <h3 class="heading-title">Sign In To Your Account</h3>
        </div>
        <div class="mb-xl text-center">
            <img src="{{  asset('images/illustrations/breaking_barriers.svg')}}" width="200px">
        </div>
        <div class="p-4">
            <form>
                <div class="input-group  input-light mb-3">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group  input-light mb-3">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block">Sign In</button>
            </form>
            <div class="d-flex align-items-center">
                <p class="mr-sm mb-0">Don't have an account? </p>
                <a href="" class="font-weight-bold">Sign Up</a>
            </div>
        </div>
    </div>
</div>

@endsection