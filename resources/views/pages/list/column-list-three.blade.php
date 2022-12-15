@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-3 mb-md">
        <div class="bg-card rounded py-xl">
            <div class="px-md mb-xxl d-flex flex-column align-items-center border-bottom"><img class="avatar-lg mb-lg"
                    src="{{  asset('images/avatars/007-woman-2.svg')}}" />
                <p class="m-0 text-muted">Project manager</p>
                <p class="font-weight-semi mb-xl">Asiya Wolff</p>
            </div>
            <div class="d-flex flex-column mb-xl">
                <h6 class="px-md heading-label">TEAMS</h6><a class="d-flex hover-gray align-items-center py-xxs px-sm"
                    href="#"><i class="material-icons icon icon-sm">group</i><span
                        class="text-body font-weight-semi">Alpha</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">group</i><span
                        class="text-body font-weight-semi">Beta</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">group</i><span
                        class="text-body font-weight-semi">Sales</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">group</i><span
                        class="text-body font-weight-semi">Support</span></a>
            </div>
            <div class="d-flex-flex-column">
                <h6 class="px-md heading-label">My Team</h6><a class="d-flex hover-gray align-items-center py-xxs px-sm"
                    href="#"><i class="material-icons icon icon-sm">favorite</i><span
                        class="text-body font-weight-semi">Favorite</span></a>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/001-man.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/002-woman.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/003-man-1.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/004-bald.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/005-man-2.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/006-woman-1.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/avatars/007-woman-2.svg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/faces/5.jpg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-md">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-md">
                            <img class="avatar-lg" src="{{  asset('images/faces/1.jpg')}}">
                            <div class="dropdown">
                                <button class="btn btn-light rounded-circle btn-sm btn-icon" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">account_circle</i>View Profile</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">person_add</i>Add to a team</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="material-icons icon icon-sm">create</i>Edit User</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="card-title mb-2">
                                <a class="link-alt font-weight-semi" href="#">Jhon Clarkson</a>
                            </p>
                            <p class="text-muted text-small">It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout.</p>
                            <div class="mb-md">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                                <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="material-icons ">keyboard_arrow_left</i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="material-icons">keyboard_arrow_right</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection