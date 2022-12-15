@extends('layouts.session')
@section('content')
<div class="page-wrap slate">
    <div class="session-form-hold">
        <div class="card text-center">
            <div class="card-body">
                <img class="card-img-top signup mb-md rounded-circle" src="{{  asset('images/faces/1.jpg')}}"
                    alt="Card image cap">
                <h3 class="heading mb-0">Jhon Doe</h3>
                <p class="text-muted mb-xxl">Last seen 1 hour ago</p>
                <div class="input-group  input-light mb-md">
                    <input type="password" class="form-control" placeholder="password">
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