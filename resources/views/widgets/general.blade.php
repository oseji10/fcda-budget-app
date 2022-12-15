@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-md"><span class="badge badge-opacity badge-primary mr-md"><i
                            class="material-icons">card_travel</i></span>
                    <div>
                        <div class="card-title m-0">Presentation</div><span class="m-0 text-gray-700 text-13">New
                            York</span>
                    </div>
                </div>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Dummy text of the printing</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="col-md-4 d-flex align-items-center avatar-group"><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/2.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Jhon Doe" /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Mirage" /><img
                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" data-toggle="tooltip"
                        data-placement="top" title="Wraith" /><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/5.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Caustic " /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/1.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Octane" /></div>
                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-md"><span class="badge badge-opacity badge-success mr-md"><i
                            class="material-icons">beach_access</i></span>
                    <div>
                        <div class="card-title m-0">Holiday</div><span class="m-0 text-gray-700 text-13">Los
                            Angeles</span>
                    </div>
                </div>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Dummy text of the printing</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="col-md-4 d-flex align-items-center avatar-group"><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/2.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Jhon Doe" /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Mirage" /><img
                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" data-toggle="tooltip"
                        data-placement="top" title="Wraith" /><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/5.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Caustic " /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/1.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Octane" /></div>
                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-md"><span class="badge badge-opacity badge-danger mr-md"><i
                            class="material-icons">local_activity</i></span>
                    <div>
                        <div class="card-title m-0">Local Activity</div><span
                            class="m-0 text-gray-700 text-13">Michigan</span>
                    </div>
                </div>
                <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Dummy text of the printing</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="col-md-4 d-flex align-items-center avatar-group"><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/2.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Jhon Doe" /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Mirage" /><img
                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" data-toggle="tooltip"
                        data-placement="top" title="Wraith" /><img class="avatar-sm rounded-circle"
                        src="{{  asset('images/faces/5.jpg')}}" data-toggle="tooltip" data-placement="top"
                        title="Caustic " /><img class="avatar-sm rounded-circle" src="{{  asset('images/faces/1.jpg')}}"
                        data-toggle="tooltip" data-placement="top" title="Octane" /></div>
                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>Anouncement</p>
                    <div><a class="carousel-control-prev ul-card-carousel" href="#carouselExampleControls" role="button"
                            data-slide="prev"><i class="material-icons text-primary">chevron_left
                            </i></a><a class="carousel-control-next ul-card-carousel" href="#carouselExampleControls"
                            role="button" data-slide="next"><i class="material-icons text-primary">chevron_right
                            </i></a></div>
                </div>
                <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="d-flex justify-content-between align-items-center"><span
                                    class="badge badge-rounded badge-primary">24 FEB, 2020</span>
                                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="d-flex justify-content-between align-items-center"><span
                                    class="badge badge-rounded badge-primary">24 FEB, 2020</span>
                                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="d-flex justify-content-between align-items-center"><span
                                    class="badge badge-rounded badge-primary">24 FEB, 2020</span>
                                <button class="btn btn-opacity-primary btn-sm" type="button">JOIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>Projects</p>
                    <div><a class="carousel-control-prev ul-card-carousel" href="#carouselExampleControls2"
                            role="button" data-slide="prev"><i class="material-icons text-primary">chevron_left
                            </i></a><a class="carousel-control-next ul-card-carousel" href="#carouselExampleControls2"
                            role="button" data-slide="next"><i class="material-icons text-primary">chevron_right
                            </i></a></div>
                </div>
                <div class="carousel slide" id="carouselExampleControls2" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="progress-wrapper pt-2">
                                <div class="progress-info"><span>Progress</span>
                                    <div class="progress-percentage"><span>80%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="progress-wrapper pt-2">
                                <div class="progress-info"><span>Progress</span>
                                    <div class="progress-percentage"><span>80%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Party</div>
                            <p class="text-gray-700">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="progress-wrapper pt-2">
                                <div class="progress-info"><span>Progress</span>
                                    <div class="progress-percentage"><span>80%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>Upcoming events</p>
                    <div><a class="carousel-control-prev ul-card-carousel" href="#carouselExampleControls3"
                            role="button" data-slide="prev"><i class="material-icons text-primary">chevron_left
                            </i></a><a class="carousel-control-next ul-card-carousel" href="#carouselExampleControls3"
                            role="button" data-slide="next"><i class="material-icons text-primary">chevron_right
                            </i></a></div>
                </div>
                <div class="carousel slide" id="carouselExampleControls3" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-title mb-sm">EGRET Launch Meeting</div>
                            <h6 class="text-primary font-weight-bold">02:30 PM to 04:00 PM</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center text-muted"><i
                                        class="material-icons text-17 text-success">add_location</i>
                                    <p class="m-0 font-weight-normal">New Jersey</p>
                                </div>
                                <button class="btn btn-opacity-primary btn-sm" type="button">VIEW</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Meeting</div>
                            <h6 class="text-primary font-weight-bold">02:30 PM to 04:00 PM</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center text-muted"><i
                                        class="material-icons text-17 text-success">add_location</i>
                                    <p class="m-0 font-weight-normal">New Jersey</p>
                                </div>
                                <button class="btn btn-opacity-primary btn-sm" type="button">VIEW</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-title mb-sm">EGRET Launch Meeting</div>
                            <h6 class="text-primary font-weight-bold">02:30 PM to 04:00 PM</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center text-muted"><i
                                        class="material-icons text-17 text-success">add_location</i>
                                    <p class="m-0 font-weight-normal">New Jersey</p>
                                </div>
                                <button class="btn btn-opacity-primary btn-sm" type="button">VIEW </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12 mb-md">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p>New Products</p>
                            <div><a class="carousel-control-prev ul-card-carousel" href="#carouselExampleControls4"
                                    role="button" data-slide="prev"><i class="material-icons text-primary">chevron_left
                                    </i></a><a class="carousel-control-next ul-card-carousel"
                                    href="#carouselExampleControls4" role="button" data-slide="next"><i
                                        class="material-icons text-primary">chevron_right </i></a></div>
                        </div>
                        <div class="carousel slide" id="carouselExampleControls4" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-md">
                                        <div class="d-flex align-items-center mb-md"><img
                                                class="rounded-circle avatar-md-lg mr-2"
                                                src="{{  asset('images/products/speaker-1.jpg')}}" alt="" />
                                            <div>
                                                <h4 class="m-0">Speaker 7:1</h4>
                                                <p class="text-muted m-0">Lorem Ipsum is simply dummy text of the
                                                    printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                        <div><span
                                                class="badge badge-opacity badge-primary badge-rounded mr-sm mb-2 mb-md-0">
                                                370 Purchases</span><span
                                                class="badge badge-opacity badge-danger badge-rounded mb-2 mb-md-0">
                                                41 Reviews</span></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap"><span
                                            class="badge badge-rounded badge-primary mb-4 mb-md-0">24 DEC,
                                            2020</span>
                                        <div class="text-right">
                                            <button class="btn btn-opacity-primary btn-sm mr-0"
                                                type="button">PREVIEW</button>
                                            <button class="btn btn-opacity-primary btn-sm mr-0"
                                                type="button">DETAILS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-md">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p>New User</p>
                            <div><a class="carousel-control-prev ul-card-carousel" href="#carouselExampleControls5"
                                    role="button" data-slide="prev"><i class="material-icons text-primary">chevron_left
                                    </i></a><a class="carousel-control-next ul-card-carousel"
                                    href="#carouselExampleControls5" role="button" data-slide="next"><i
                                        class="material-icons text-primary">chevron_right </i></a></div>
                        </div>
                        <div class="carousel slide" id="carouselExampleControls5" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center justify-content-between mb-lg flex-wrap">
                                        <div class="d-flex align-items-center mb-md"><img
                                                class="rounded-circle avatar-md-lg mr-2"
                                                src="{{  asset('images/faces/1.jpg')}}" alt="" />
                                            <div>
                                                <div class="card-title m-0">Timothy Clark Son</div>
                                                <p class="text-muted m-0">Manager</p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-opacity-facebook btn-sm"><i
                                                    class="fab fa-facebook-f"></i>Facebook</button>
                                            <button class="btn btn-opacity-twitter btn-sm"><i
                                                    class="fab fa-twitter"></i>Twitter </button>
                                        </div>
                                    </div><span class="badge badge-rounded badge-primary">24 DEC, 2020</span>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center justify-content-between mb-lg flex-wrap">
                                        <div class="d-flex align-items-center mb-md"><img
                                                class="rounded-circle avatar-md-lg mr-2"
                                                src="{{  asset('images/faces/2.jpg')}}" alt="" />
                                            <div>
                                                <div class="card-title m-0">Jhon Diggle</div>
                                                <p class="text-muted m-0">Front End Developer</p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-opacity-facebook btn-sm"><i
                                                    class="fab fa-facebook-f"></i>Facebook</button>
                                            <button class="btn btn-opacity-twitter btn-sm"><i
                                                    class="fab fa-twitter"></i>Twitter </button>
                                        </div>
                                    </div><span class="badge badge-rounded badge-primary">24 DEC, 2020</span>
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