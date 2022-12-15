@extends('layouts.entry')
@section('title')
Analytic dashboard
@endsection
@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-primary rounded-circle mb-md"><i
                            class="material-icons">group</i></span>
                    <h3 class="font-weight-bold m-0">30.2K</h3>
                    <h6 class="heading-muted mb-xl">Total Followers</h6><a
                        class="btn btn-opacity-primary rounded btn-sm d-flex" href="#"><i
                            class="material-icons">arrow_drop_down </i>12.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <button class="ul-analytic-sup btn btn-raised btn-flat-info rounded-circle btn-icon btn-sm"><i
                    class="material-icons">my_location</i></button>
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-success rounded-circle mb-md"><i
                            class="material-icons">touch_app</i></span>
                    <h3 class="font-weight-bold m-0">9.2K</h3>
                    <h6 class="heading-muted mb-xl">Impressions</h6><a
                        class="btn btn-opacity-success rounded btn-sm d-flex" href="#"><i
                            class="material-icons">arrow_drop_up </i>58.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <button class="ul-analytic-sup btn btn-raised rounded-circle btn-icon btn-sm"><img class="rounded-circle"
                    src="{{asset('images/faces/2.jpg')}}" alt="" /></button>
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-danger rounded-circle mb-md"><i
                            class="material-icons">wifi_tethering</i></span>
                    <h3 class="font-weight-bold m-0">1.2K</h3>
                    <h6 class="heading-muted mb-xl">Connect</h6><a class="btn btn-opacity-danger rounded btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>05.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-info rounded-circle mb-md"><i
                            class="material-icons">rate_review</i></span>
                    <h3 class="font-weight-bold m-0">18.2K</h3>
                    <h6 class="heading-muted mb-xl">Rate Review</h6><a
                        class="btn btn-opacity-info rounded btn-sm d-flex" href="#"><i
                            class="material-icons">arrow_drop_up </i>05.6%</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between align-items mb-md">
    <div class="d-flex align-items-center">
        <div class="card-title m-0">Most</div>
        <div class="dropdown">
            <button class="btn btn-link m-0 btn-link-primary" id="dropdownMenuButton" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Recent Media

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Last
                    week</a><a class="dropdown-item" href="#">Last month</a><a class="dropdown-item" href="#">Last
                    year</a></div>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="material-icons">more_horiz</i></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                    class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                    class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item" href="#"><i
                    class="material-icons">create</i>Something </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card overflow-hidden"><img src="{{asset('images/gallery/sq-10.jpg')}}" alt="" />
            <div class="d-flex justify-content-between align-items-center py-md px-3">
                <div class="d-flex align-items-center"><i
                        class="material-icons text-16 mr-1 text-muted">favorite</i><span class="mr-2">2.3K
                    </span><i class="material-icons text-16 mr-1 text-muted">chat</i><span>900</span>
                </div>
                <p class="m-0 text-muted font-weight-normal">23 days ago</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card overflow-hidden"><img src="{{asset('images/gallery/sq-8.jpg')}}" alt="" />
            <div class="d-flex justify-content-between align-items-center py-md px-3">
                <div class="d-flex align-items-center"><i
                        class="material-icons text-16 mr-1 text-muted">favorite</i><span class="mr-2">2.3K
                    </span><i class="material-icons text-16 mr-1 text-muted">chat</i><span>900</span>
                </div>
                <p class="m-0 text-muted font-weight-normal">23 days ago</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card overflow-hidden"><img src="{{asset('images/gallery/sq-6.jpg')}}" alt="" />
            <div class="d-flex justify-content-between align-items-center py-md px-3">
                <div class="d-flex align-items-center"><i
                        class="material-icons text-16 mr-1 text-muted">favorite</i><span class="mr-2">2.3K
                    </span><i class="material-icons text-16 mr-1 text-muted">chat</i><span>900</span>
                </div>
                <p class="m-0 text-muted font-weight-normal">23 days ago</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card overflow-hidden"><img src="{{asset('images/gallery/sq-4.jpg')}}" alt="" />
            <div class="d-flex justify-content-between align-items-center py-md px-3">
                <div class="d-flex align-items-center"><i
                        class="material-icons text-16 mr-1 text-muted">favorite</i><span class="mr-2">2.3K
                    </span><i class="material-icons text-16 mr-1 text-muted">chat</i><span>900</span>
                </div>
                <p class="m-0 text-muted font-weight-normal">23 days ago</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card mb-xl">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Follower Growth</div>
                <div class="dropdown">
                    <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another
                            action</a><a class="dropdown-item" href="#"><i class="material-icons">create</i>Something
                        </a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-5 col-md-12 d-flex justify-content-center flex-column">
                        <div class="pl-lg d-flex">
                            <div class="flex-grow-1">
                                <h2 class="font-weight-bold display-2 m-0">4,829</h2>
                                <h5 class="mb-4">Gained Followers (last 360 days)</h5>
                            </div>
                            <div>
                                <div class="d-flex align-items-center mb-3"><span
                                        class="badge badge-opacity badge-success badge-xs mr-2"><i
                                            class="material-icons">call_missed_outgoing</i></span>
                                    <p class="m-0 heading-muted">You have a <span class="text-success mr-1">20%
                                            Growth</span>compare to
                                        last year</p>
                                </div>
                                <div class="d-flex align-items-center"><span
                                        class="badge badge-opacity badge-warning badge-xs mr-2"><i
                                            class="material-icons">call_missed_outgoing</i></span>
                                    <p class="m-0 heading-muted">You have a reached <span class="text-warning mr-1">10%
                                        </span>of your follower
                                        goal </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-12">
                        <div id="analayticOne"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card md-xl">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-primary mb-md"><i class="material-icons">group</i></span>
                    <h3 class="font-weight-bold m-0">30.2K</h3>
                    <h6 class="heading-muted mb-xl">Reach</h6><a class="btn btn-opacity-danger btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>12.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-success mb-md"><i class="material-icons">touch_app</i></span>
                    <h3 class="font-weight-bold m-0">9.2K</h3>
                    <h6 class="heading-muted mb-xl">Engagement</h6><a class="btn btn-opacity-success btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_up </i>58.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-success mb-md"><i
                            class="material-icons">attach_money</i></span>
                    <h3 class="font-weight-bold m-0">11.25</h3>
                    <h6 class="heading-muted mb-xl">Rate per cost</h6><a class="btn btn-opacity-danger btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>24.62%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center"><span
                        class="badge badge-opacity badge-info mb-md"><i class="material-icons">rate_review</i></span>
                    <h3 class="font-weight-bold m-0">10.8%</h3>
                    <h6 class="heading-muted mb-xl">Average rate per cost</h6><a
                        class="btn btn-opacity-info btn-sm d-flex" href="#"><i class="material-icons">arrow_drop_down
                        </i>12.52%</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-xxl">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Reach Impressions history</div>
                <div class="dropdown">
                    <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another
                            action</a><a class="dropdown-item" href="#"><i class="material-icons">create</i>Something
                        </a></div>
                </div>
            </div>
            <div class="card-body pl-0">
                <div id="analayticTwo"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h6 class="heading-muted mb-0">Likes Received</h6>
                    <h3 class="font-weight-bold mb-md">3.2K</h3><a class="btn btn-opacity-danger btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>12.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h6 class="heading-muted m-0">Avg. Likes Received</h6>
                    <h3 class="font-weight-bold mb-md">225.6</h3><a class="btn btn-opacity-primary btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>03.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <button class="ul-analytic-sup btn btn-raised btn-outline-info rounded-circle btn-icon btn-sm"><img
                    class="rounded-circle" src="{{asset('images/faces/2.jpg')}}" alt="" /></button>
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h6 class="heading-muted m-0">Feedback</h6>
                    <h3 class="font-weight-bold mb-md">1.2K</h3><a class="btn btn-opacity-primary btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_down </i>05.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-xl">
        <div class="card position-relative">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h6 class="heading-muted m-0">Avg Feedback</h6>
                    <h3 class="font-weight-bold mb-md">1.2K</h3><a class="btn btn-opacity-success btn-sm d-flex"
                        href="#"><i class="material-icons">arrow_drop_up</i>05.6%</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Like history</div>
                <div class="dropdown">
                    <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another
                            action</a><a class="dropdown-item" href="#"><i class="material-icons">create</i>Something
                        </a></div>
                </div>
            </div>
            <div class="card-body pl-0">
                <div id="analayticFour"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Comment history</div>
                <div class="dropdown">
                    <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another
                            action</a><a class="dropdown-item" href="#"><i class="material-icons">create</i>Something
                        </a></div>
                </div>
            </div>
            <div class="card-body pl-0">
                <div id="analayticFive"></div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-md">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Posting Habits </div>
                <div class="dropdown">
                    <button class="btn btn-secondary rounded-circle btn-icon m-0" id="dropdownMenuButton" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another
                            action</a><a class="dropdown-item" href="#"><i class="material-icons">create</i>Something
                        </a></div>
                </div>
            </div>
            <div class="card-body pl-0 pt-0 pb-0">
                <div id="analayticThree"></div>
            </div>
        </div>
    </div>
</div>

@endsection