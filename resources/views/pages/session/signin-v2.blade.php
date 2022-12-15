@extends('layouts.session')
@section('content')
<div class="section-left">
    <div class="section-left-content">
        <h1 class="text-36 font-weight-light text-white">Don't have an account?</h1>
        <p class="mb-24 text-small">Stop wasting time and money. It's free!</p>
        <button type="button" class="btn btn-raised btn-raised-warning">Sign Up</button>
    </div>
</div>
<div class="form-holder signin-2 px-xxl" data-perfect-scrollbar='' data-suppress-scroll-x='true'>
    <form class="">
        <div class="my-xxl signin-right-image">
            <img src="{{  asset('images/illustrations/breaking_barriers.svg')}}" width="200px">
        </div>
        <div class="input-group with-icon input-light mb-xl">
            <div class="input-group-prepend">
                <i class="input-group-text material-icons">perm_identity</i>
            </div>
            <input type="text" class="form-control" placeholder="Username" value="" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group with-icon input-light mb-xl">
            <div class="input-group-prepend">
                <i class="input-group-text material-icons">lock</i>
            </div>
            <input type="password" class="form-control" placeholder="Password" value="With icon" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="mb-md custom-control custom-checkbox checkbox-primary mb-xl">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">I Agree with Terms And Conditions</label>
        </div>
        <button type="button" class="btn btn-raised btn-raised-primary btn-block">SignIn</button>
        <div class="border-bottom mt-xxl mb-lg"></div>
        <div class="text-center">
            <p>Sign in With</p>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-google btn-outline mx-xs"><i class="fab fa-google"></i>Google</button>
            <button class="btn btn-outline btn-facebook mx-xs"><i class="fab fa-facebook-f"></i>Facebook</button>
            <button class="btn btn-twitter btn-outline mx-xs"><i class="fab fa-twitter"></i>Twitter</button>
        </div>
    </form>
</div>

@endsection