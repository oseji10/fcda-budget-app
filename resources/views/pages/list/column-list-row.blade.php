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
        <div class="ul-column-list-row mb-md">
            <div class="card">
                <div class="card-body">
                    <div class="ul-list-row d-flex align-items-center justify-content-between">
                        <img class="avatar-md rounded-circle mr-md" src="{{  asset('images/avatars/001-man.svg')}}">
                        <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                            <div class="ul-list-row-label flex-grow-1">
                                <p class="font-weight-semi m-0">Tim Clarkson</p>
                                <span class="text-muted">Vue Developer</span>
                            </div>
                            <div class="ul-list-row-progressbar progress-wrapper flex-grow-1 my-md mr-lg">
                                <div class="progress-info">
                                    <span class="text-muted">Profile completion</span>
                                    <div class="progress-percentage">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ul-list-row-link flex-grow-1">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                    <p class="text-muted text-small m-0"> Registered 3 mins ago</p>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-column-list-row mb-md">
            <div class="card">
                <div class="card-body">
                    <div class="ul-list-row d-flex align-items-center justify-content-between">
                        <img class="avatar-md rounded-circle mr-md" src="{{  asset('images/avatars/002-woman.svg')}}">
                        <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                            <div class="ul-list-row-label flex-grow-1">
                                <p class="font-weight-semi m-0">Tim Clarkson</p>
                                <span class="text-muted">Vue Developer</span>
                            </div>
                            <div class="ul-list-row-progressbar progress-wrapper flex-grow-1 my-md mr-lg">
                                <div class="progress-info">
                                    <span class="text-muted">Profile completion</span>
                                    <div class="progress-percentage">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ul-list-row-link flex-grow-1">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                    <p class="text-muted text-small m-0"> Registered 3 mins ago</p>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-column-list-row mb-md">
            <div class="card">
                <div class="card-body">
                    <div class="ul-list-row d-flex align-items-center justify-content-between">
                        <img class="avatar-md rounded-circle mr-md" src="{{  asset('images/avatars/003-man-1.svg')}}">
                        <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                            <div class="ul-list-row-label flex-grow-1">
                                <p class="font-weight-semi m-0">Tim Clarkson</p>
                                <span class="text-muted">Vue Developer</span>
                            </div>
                            <div class="ul-list-row-progressbar progress-wrapper flex-grow-1 my-md mr-lg">
                                <div class="progress-info">
                                    <span class="text-muted">Profile completion</span>
                                    <div class="progress-percentage">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ul-list-row-link flex-grow-1">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                    <p class="text-muted text-small m-0"> Registered 3 mins ago</p>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-column-list-row mb-md">
            <div class="card">
                <div class="card-body">
                    <div class="ul-list-row d-flex align-items-center justify-content-between">
                        <img class="avatar-md rounded-circle mr-md" src="{{  asset('images/avatars/004-bald.svg')}}">
                        <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                            <div class="ul-list-row-label flex-grow-1">
                                <p class="font-weight-semi m-0">Tim Clarkson</p>
                                <span class="text-muted">Vue Developer</span>
                            </div>
                            <div class="ul-list-row-progressbar progress-wrapper flex-grow-1 my-md mr-lg">
                                <div class="progress-info">
                                    <span class="text-muted">Profile completion</span>
                                    <div class="progress-percentage">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ul-list-row-link flex-grow-1">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                    <p class="text-muted text-small m-0"> Registered 3 mins ago</p>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-column-list-row mb-md">
            <div class="card">
                <div class="card-body">
                    <div class="ul-list-row d-flex align-items-center justify-content-between">
                        <img class="avatar-md rounded-circle mr-md" src="{{  asset('images/avatars/006-woman-1.svg')}}">
                        <div class="ul-list-row-wrapper d-flex flex-1 align-items-center flex-wrap">
                            <div class="ul-list-row-label flex-grow-1">
                                <p class="font-weight-semi m-0">Tim Clarkson</p>
                                <span class="text-muted">Vue Developer</span>
                            </div>
                            <div class="ul-list-row-progressbar progress-wrapper flex-grow-1 my-md mr-lg">
                                <div class="progress-info">
                                    <span class="text-muted">Profile completion</span>
                                    <div class="progress-percentage">
                                        <span>40%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ul-list-row-link flex-grow-1">
                                <div class="">
                                    <i class="fab fa-google text-google mr-1"></i>
                                    <a class="text-muted" href="#">ui-lib@gmail.com</a>
                                </div>
                                <div class="">
                                    <i class="fab fa-twitter text-twitter mr-1"></i>
                                    <a class="text-muted" href="#">uilib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between py-sm">
                    <p class="text-muted text-small m-0"> Registered 3 mins ago</p>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm mr-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm my-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
        <!--pagination-->
        <ul class="pagination mt-md">
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

@endsection