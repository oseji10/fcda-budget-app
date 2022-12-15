@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-12">
        <div class="card mb-md">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center mb-lg"><span> </span>
                    <div class="text-center"><img class="avatar-xl rounded-circle"
                            src="{{  asset('images/faces/2.jpg')}}" alt="" />
                        <div class="card-title my-md font-weight-bold">Jhon Doe</div>
                        <div class="d-flex align-items-center flex-wrap justify-content-center mb-3">
                            <p class="font-weight-bold text-14 mr-2 mb-0">5.0</p><i
                                class="material-icons text-warning align-middle">star</i><span class="text-muted">(12
                                Reviews)</span>
                        </div><span class="badge badge-success">Online</span>
                    </div>
                </div>
                <hr />
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <p class="m-0 flex-1">Response Time</p>
                    <div class="progress-wrapper flex-1">
                        <div class="progress-info"><span></span>
                            <div class="progress-percentage"><span>80%</span></div>
                        </div>
                        <div class="progress mb-md">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <p class="m-0 flex-1">Delivered On Time</p>
                    <div class="progress-wrapper flex-1">
                        <div class="progress-info"><span></span>
                            <div class="progress-percentage"><span>90%</span></div>
                        </div>
                        <div class="progress mb-md">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <p class="m-0 flex-1">Order Completion </p>
                    <div class="progress-wrapper flex-1">
                        <div class="progress-info"><span></span>
                            <div class="progress-percentage"><span>100%</span></div>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="d-flex align-items-center justify-content-between mb-md">
                    <p class="m-0">Earned in April</p><span
                        class="badge badge-opacity badge-dark badge-rounded">$200</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="m-0">Response in time</p><span
                        class="badge badge-opacity badge-dark badge-rounded">100%</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="card-title m-0">Inbox</div>
                <button class="btn btn-opacity btn-primary rounded">View All</button>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="d-flex align-items-end">
            <p class="font-weight-semi mr-3 mb-3">Upgrade Your Business</p>
            <hr class="flex-1" />
        </div>
        <div class="card mb-lg">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <div class="card-title">How to build your success on Market in 3 steps</div>
                        <p class="text-muted font-weight-semi">The key to your success is the brand you build for
                            yourself through your reputation. We gathered some tips and resources to help you become a
                            leading seller.</p>
                    </div><img class="avatar-xl" src="{{  asset('images/illustrations/business_deal.svg')}}" alt="" />
                </div>
            </div>
        </div>
        <div class="card mb-lg">
            <div class="card-body">
                <div class="mb-lg">
                    <div class="card-title">Take these steps to become a top seller on Egret</div>
                </div>
                <div class="row mb-lg">
                    <div class="col-lg-4 col-md-12 text-lg-left text-center mb-md"><i
                            class="material-icons text-30 text-success">mic_none</i>
                        <p class="heading-label">Get Noticed</p>
                        <p class="text-muted">Tap into the power of social media by sharing your Gig, and <a
                                class="mr-1" href="#">get expert help</a>to grow your impact.</p>
                        <button class="btn btn-outline btn-outline-primary" type="button">Share Your Gigs</button>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-left text-center mb-md"><i
                            class="material-icons text-30 text-primary">import_contacts</i>
                        <p class="heading-label">Get more skills & exposure</p>
                        <p class="text-muted">Hone your skills and expand your knowledge with online courses. You’ll be
                            able to offer more .</p>
                        <button class="btn btn-outline btn-outline-primary" type="button">Explore Learn</button>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-left text-center mb-md"><i
                            class="material-icons text-30 text-warning">emoji_events</i>
                        <p class="heading-label">Get Noticed</p>
                        <p class="text-muted">Tap into the power of social media by sharing your Gig, and <a
                                class="mr-1" href="#">get expert help</a>to grow your impact.</p>
                        <button class="btn btn-outline btn-outline-primary" type="button">Watch Free Course</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-deck">
                    <div class="card mb-lg">
                        <div class="card-body d-flex"><i class="material-icons text-primary mr-2">emoji_objects</i>
                            <div>
                                <div class="font-weight-semi mb-sm">Tip #1: Business brings business</div>
                                <p class="m-0">Every order counts! The more orders you get, the more successful you’ll
                                    become.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-lg">
                        <div class="card-body d-flex"><i class="material-icons text-primary mr-2">emoji_objects</i>
                            <div>
                                <div class="font-weight-semi mb-sm">Tip #2: Keep the cycle going & win buyers</div>
                                <p class="m-0">Get an order, provide quality service, and get great reviews. You’ll get
                                    more traffic, and more orders.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-md">
            <div class="card-body">
                <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                    <ol class="carousel-indicators ul-profile-2-carousel">
                        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex"><img class="mr-2 avatar-md-lg"
                                    src="{{  asset('images/logos/react.png')}}" alt="" />
                                <div>
                                    <div class="card-title">Take Course On React Today</div>
                                    <p>Put your professional career in full force with courses on Learn from React. Gain
                                        new skills, earn a badge on your profile, and keep those sales rolling in.</p>
                                    <button class="btn btn-raised-primary">Learn More</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex"><img class="mr-2 avatar-md-lg"
                                    src="{{  asset('images/logos/sass.png')}}" alt="" />
                                <div>
                                    <div class="card-title">Communicate With Your Customers</div>
                                    <p>Put your professional career in full force with courses on Learn from React. Gain
                                        new skills, earn a badge on your profile, and keep those sales rolling in.</p>
                                    <button class="btn btn-raised-primary">Learn More</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex"><img class="mr-2 avatar-md-lg"
                                    src="{{  asset('images/logos/html.png')}}" alt="" />
                                <div>
                                    <div class="card-title">Take Course On React Today</div>
                                    <p>Put your professional career in full force with courses on Learn from React. Gain
                                        new skills, earn a badge on your profile, and keep those sales rolling in.</p>
                                    <button class="btn btn-raised-primary">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection