@extends('layouts.session')
@section('content')
<div class="sign2">
    <div class="section-left">
    </div>
    <div class="form-holder signup-2 px-xxl" data-perfect-scrollbar='' data-suppress-scroll-x='true'>
        <form class=" signup-form">
            <div class="form-headline text-center mt-md mb-xxxl">
                <h3 class="heading">Create an account get unlimited access</h3>
            </div>
            <div class="mb-xxl signin-right-image">
                <img src="{{  asset('images/illustrations/breaking_barriers.svg')}}" width="200px">
            </div>
            <div class="row">
                <div class="col-md-6 mb-md">
                    <div class="input-group  input-light mb-3">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                </div>
                <div class="col-md-12 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input type="password" class="form-control" placeholder="confirm password">
                    </div>
                </div>
            </div>
            <div class="mb-md custom-control custom-checkbox checkbox-primary mb-xl">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">I Agree with Terms And Conditions</label>
            </div>
            <button type="button" class="btn btn-raised btn-raised-primary btn-block">Sign Up</button>
            <div class="border-bottom mt-xxl mb-lg"></div>
            <div class="text-center">
                <p>Sign up With</p>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-google btn-outline mx-xs"><i class="fab fa-google"></i>Google</button>
                <button class="btn btn-outline btn-facebook mx-xs"><i class="fab fa-facebook-f"></i>Facebook</button>
                <button class="btn btn-twitter btn-outline mx-xs"><i class="fab fa-twitter"></i>Twitter</button>
            </div>
        </form>
    </div>
</div>
@endsection