@extends('layouts.entry')

@section('content')

<div class="px-lg py-xxxl bg-card">

    <div class="d-flex mb-xl"><img class="avatar-xl mr-lg" src="{{  asset('images/avatars/006-woman-1.svg')}}" alt="" />
        <div class="w-full">
            <div class="d-flex flex-column flex-wrap flex-sm-row align-items-sm-center mb-sm">
                <div class="mr-xl">
                    <h4 class="m-0 d-flex align-items-center">amanda_nash<i
                            class="material-icons text-18 text-primary mx-xs" data-toggle="tooltip"
                            title="Verified">verified</i></h4>
                    <p class="m-0 text-small text-muted">Amanda Nash</p>
                </div>
                <div class="my-sm">
                    <div class="badge badge-opacity badge-rounded badge-success">Lifestyle</div>
                    <div class="badge badge-opacity badge-rounded badge-warning">Music</div>
                </div>
                <div class="flex-grow-1"></div>
                <div>
                    <button class="btn btn-opacity btn-icon btn-light rounded-circle mr-xs"><i
                            class="material-icons">mail_outline</i></button>
                    <div class="dropdown d-inline">
                        <button class="btn btn-opacity btn-icon btn-light rounded-circle" data-toggle="dropdown"><i
                                class="material-icons">more_horiz</i></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#"><i
                                    class="material-icons icon icon-sm">visibility</i>View As</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons icon icon-sm">message</i>Messages</a>
                            <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">settings</i>Account
                                settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-sm">
                <p class="m-0 mr-xl"><span class="font-weight-semi">1,022 </span><span
                        class="text-small text-muted">Posts</span></p>
                <p class="m-0 mr-xl"><span class="font-weight-semi">100k </span><span
                        class="text-small text-muted">Followers</span></p>
                <p class="m-0 mr-xl"><span class="font-weight-semi">1540 </span><span
                        class="text-small text-muted">Following</span></p>
            </div>
            <p class="text-muted">Actor, musician, songwriter #amanda_nash, mailbox: hello@amandanash.com</p>
        </div>
    </div>

</div>
<div class="mt--xxl mb-xxxl px-lg position-relative z-index-default">

    <div class="nav-tabs-primary">
        <ul class="nav nav-tabs mb-xl" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#tabs-1">Timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tabs-2">Photos</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="tabs-1" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="card mb-md">
                            <div class="card-header justify-content-between align-items-center p-md">
                                <div class="font-weight-semi m-0">Basic info</div>
                            </div>
                            <div class="card-body px-md">
                                <div class="ul-list-group-1">
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">Country</h6>
                                                <small class="text-muted">USA</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">home</i></span></div>
                                        </div>
                                    </div>
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">Relationship</h6>
                                                <small class="text-muted">Single</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">favorite</i></span></div>
                                        </div>
                                    </div>
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">From</h6>
                                                <small class="text-muted">New york</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">public</i></span></div>
                                        </div>
                                    </div>
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">Studied @</h6>
                                                <small class="text-muted">University Of UI Lib</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">school</i></span></div>
                                        </div>
                                    </div>
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">Lives In</h6>
                                                <small class="text-muted">Texas</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">add_location</i></span></div>
                                        </div>
                                    </div>
                                    <div class="ul-list-item">
                                        <div class="d-flex justify-content-between align-items-center mb-md">
                                            <div class="flex-grow-1">
                                                <h6 class="text-14 m-0">Followers</h6>
                                                <small class="text-muted">120k followers</small>
                                            </div>
                                            <div class="ul-list-item-action"><span
                                                    class="badge badge-opacity badge-light badge-sm rounded-circle"><i
                                                        class="material-icons">notifications_none</i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-md">
                            <div class="card-header d-flex justify-content-between align-items-center p-md">
                                <div class="font-weight-semi m-0">Friends</div>
                            </div>
                            <div class="card-body px-md ul-list-group-1">
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/1.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Tim Clarkson</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-warning">
                                        star
                                    </i>
                                </div>
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/2.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Jhon Weaver</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-gray-400">
                                        star
                                    </i>
                                </div>
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/3.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Kane Frost</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-warning">
                                        star
                                    </i>
                                </div>
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/4.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Kane Frost</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-warning">star</i>
                                </div>
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/5.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Juggernaut Frost</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-warning">star</i>
                                </div>
                                <div class="ul-list-item d-flex justify-content-between align-items-center mb-md">
                                    <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2"
                                            src="{{  asset('images/faces/4.jpg')}}" alt="" />
                                        <div><a class="link-alt" href="#">
                                                <h6 class="text-14 m-0"> Bloodhound</h6>
                                            </a>
                                            <p class="text-muted text-small m-0">2 mutual friend</p>
                                        </div>
                                    </div><i class="material-icons text-gray-400">star</i>
                                </div>
                            </div>
                            <button class="btn btn-opacity btn-primary btn-blockrounded mx-lg mb-lg">View all
                                friends</button>
                        </div>
                        <div class="card mb-md">
                            <div class="card-header d-flex justify-content-between align-items-center py-sm">
                                <div class="font-weight-semi m-0">Photos</div>
                            </div>
                            <div class="card-body py-md">
                                <div class="ul-widget-profile-video row">
                                    <div class="col-xs-6 p-xs"><a class="d-block" href="#"><img class="w-full rounded"
                                                src="{{  asset('images/gallery/sq-10.jpg')}}" alt="" /></a></div>
                                    <div class="col-xs-6 p-xs"><a class="d-block" href="#"><img class="w-full rounded"
                                                src="{{  asset('images/gallery/sq-11.jpg')}}" alt="" /></a></div>
                                    <div class="col-xs-6 p-xs"><a class="d-block" href="#"><img class="w-full rounded"
                                                src="{{  asset('images/gallery/sq-13.jpg')}}" alt="" /></a></div>
                                    <div class="col-xs-6 p-xs"><a class="d-block" href="#"><img class="w-full rounded"
                                                src="{{  asset('images/gallery/sq-12.jpg')}}" alt="" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-md">
                            <div class="card-header d-flex justify-content-between align-items-center p-md">
                                <div class="font-weight-semi m-0">Travels</div>
                            </div>
                            <div class="card-body px-md ul-list-group-1">
                                <div class="ul-list-item d-flex align-items-center mb-md"><img
                                        class="avatar-sm rounded-circle mr-2"
                                        src="{{  asset('images/country/dubai.jpg')}}" alt="" />
                                    <div><a class="link-alt" href="#">
                                            <h6 class="text-14 m-0">Dubai</h6>
                                        </a>
                                        <p class="text-muted text-small m-0">2 days ago</p>
                                    </div>
                                </div>
                                <div class="ul-list-item d-flex align-items-center mb-md"><img
                                        class="avatar-sm rounded-circle mr-2"
                                        src="{{  asset('images/country/new_york.jpg')}}" alt="" />
                                    <div><a class="link-alt" href="#">
                                            <h6 class="text-14 m-0"> New York, USA</h6>
                                        </a>
                                        <p class="text-muted text-small m-0">2 years ago</p>
                                    </div>
                                </div>
                                <div class="ul-list-item d-flex align-items-center mb-md"><img
                                        class="avatar-sm rounded-circle mr-2"
                                        src="{{  asset('images/country/china.jpg')}}" alt="" />
                                    <div><a class="link-alt" href="#">
                                            <h6 class="text-14 m-0"> Shanghai, China</h6>
                                        </a>
                                        <p class="text-muted text-small m-0">11 months ago</p>
                                    </div>
                                </div>
                                <div class="ul-list-item d-flex align-items-center mb-md"><img
                                        class="avatar-sm rounded-circle mr-2"
                                        src="{{  asset('images/country/paris.jpg')}}" alt="" />
                                    <div><a class="link-alt" href="#">
                                            <h6 class="text-14 m-0"> Paris, France</h6>
                                        </a>
                                        <p class="text-muted text-small m-0">11 months ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row mb-md">
                            <div class="col-lg-1">
                                <div class="ul-widget-profile-img"><img class="rounded-circle avatar-md"
                                        src="{{  asset('images/faces/1.jpg')}}" alt="" /></div>
                            </div>
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"><img
                                                class="avatar-md rounded-circle mr-2"
                                                src="{{  asset('images/faces/1.jpg')}}" alt="alt" />
                                            <div><a class="link-alt" href="#">
                                                    <h6 class="text-14 m-0">Tim Clarkson</h6>
                                                </a>
                                                <p class="text-muted text-small m-0">11 Mar 2020</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn rounded-circle btn-icon mb-0" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                                    class="material-icons">more_horiz</i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">build</i>Action</a><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">add_shopping_cart</i>Another
                                                    action</a><a class="dropdown-item" href="#"><i
                                                        class="material-icons">create</i>Something</a></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0 mb-md">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s</p><img class="mb-md rounded"
                                            src="{{  asset('images/gallery/sq-16.jpg')}}" alt="" />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center avatar-group"><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/2.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/3.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/4.jpg')}}" />
                                                <div class="ml-2">
                                                    <p class="text-14 font-weight-semi m-0">Dan, Jon</p>
                                                    <p class="text-12 text-muted m-0">4 more...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><i
                                                    class="material-icons icon icon-sm">favorite_border</i><span
                                                    class="text-muted ml--xs mr-2">32</span><i
                                                    class="material-icons icon icon-sm">chat_bubble_outline</i><span
                                                    class="text-muted ml--xs mr-2">32</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-md">
                            <div class="col-lg-1">
                                <div class="ul-widget-profile-img"><img class="rounded-circle avatar-md"
                                        src="{{  asset('images/faces/2.jpg')}}" alt="" /></div>
                            </div>
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"><img
                                                class="avatar-md rounded-circle mr-2"
                                                src="{{  asset('images/faces/2.jpg')}}" alt="alt" />
                                            <div><a class="link-alt" href="#">
                                                    <h6 class="text-14 m-0">Bloodhound Shared <a href="#">Jacob's
                                                        </a><span>Post</span></h6>
                                                </a>
                                                <p class="text-muted text-small m-0">11 Mar 2020</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn rounded-circle btn-icon mb-0" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                                    class="material-icons">more_horiz</i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">build</i>Action</a><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">add_shopping_cart</i>Another
                                                    action</a><a class="dropdown-item" href="#"><i
                                                        class="material-icons">create</i>Something</a></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0 mb-md">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</p>
                                        <div class="border rounded p-md mb-md">
                                            <div class="d-flex align-items-center mb-md"><img
                                                    class="avatar-md rounded-circle mr-2"
                                                    src="{{  asset('images/faces/4.jpg')}}" alt="alt" />
                                                <div><a class="link-alt" href="#">
                                                        <h6 class="text-14 m-0">Mirage</h6>
                                                    </a>
                                                    <p class="text-muted text-small m-0">02 june 2019</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mb-md">Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s</p><img
                                                class="mb-md rounded" src="{{  asset('images/gallery/sq-16.jpg')}}"
                                                alt="" />
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center avatar-group"><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/2.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/3.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/4.jpg')}}" />
                                                <div class="ml-2">
                                                    <p class="text-14 font-weight-semi m-0">Dan, Jon</p>
                                                    <p class="text-12 text-muted m-0">4 more...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><i
                                                    class="material-icons icon icon-sm">favorite_border</i><span
                                                    class="text-muted ml--xs mr-2">32</span><i
                                                    class="material-icons icon icon-sm">chat_bubble_outline</i><span
                                                    class="text-muted ml--xs mr-2">32</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-md">
                            <div class="col-lg-1">
                                <div class="ul-widget-profile-img"><img class="rounded-circle avatar-md"
                                        src="{{  asset('images/faces/3.jpg')}}" alt="" /></div>
                            </div>
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"><img
                                                class="avatar-md rounded-circle mr-2"
                                                src="{{  asset('images/faces/3.jpg')}}" alt="alt" />
                                            <div><a class="link-alt" href="#">
                                                    <h6 class="text-14 m-0">Jhon Clarkson</h6>
                                                </a>
                                                <p class="text-muted text-small m-0">11 Mar 2020</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn rounded-circle btn-icon mb-0" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                                    class="material-icons">more_horiz</i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">build</i>Action</a><a
                                                    class="dropdown-item" href="#"><i
                                                        class="material-icons">add_shopping_cart</i>Another
                                                    action</a><a class="dropdown-item" href="#"><i
                                                        class="material-icons">create</i>Something</a></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0 mb-md">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s </p><img class="mb-md rounded"
                                            src="{{  asset('images/gallery/sq-15.jpg')}}" alt="" />
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center avatar-group"><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/2.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/1.jpg')}}" /><img
                                                    class="avatar-md rounded-circle"
                                                    src="{{  asset('images/faces/4.jpg')}}" />
                                                <div class="ml-2">
                                                    <p class="text-14 font-weight-semi m-0">Dan, Jon</p>
                                                    <p class="text-12 text-muted m-0">4 more...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center"><i
                                                    class="material-icons icon icon-sm">favorite_border</i><span
                                                    class="text-muted ml--xs mr-2">32</span><i
                                                    class="material-icons icon icon-sm">chat_bubble_outline</i><span
                                                    class="text-muted ml--xs mr-2">32</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                <p>2</p>
            </div>
        </div>
    </div>

</div>

@endsection