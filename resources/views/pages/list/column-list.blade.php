@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-xl-4 col-lg-6 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap ">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/avatars/004-bald.svg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">React Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/avatars/001-man.svg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Zac Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">Vue Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/avatars/003-man-1.svg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Jhon Wick</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/avatars/002-woman.svg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Julien Wattson</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/5.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Ryan Hurt</a>
                            </p>
                            <p class="text-muted text-small m-0">UI/UX</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/1.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">React Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/2.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Zac Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">Vue Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/3.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Jhon Wick</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/4.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Julien Wattson</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/3.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Jhon Wick</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/4.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Julien Wattson</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/5.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Ryan Hurt</a>
                            </p>
                            <p class="text-muted text-small m-0">UI/UX</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/1.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Timothy Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">React Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/2.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Zac Clarkson</a>
                            </p>
                            <p class="text-muted text-small m-0">Vue Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
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
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <img class="avatar-md mr-md" src="{{  asset('images/faces/3.jpg')}}">
                        <div>
                            <p class="m-0">
                                <a class="font-weight-semi link-alt" href="#">Jhon Wick</a>
                            </p>
                            <p class="text-muted text-small m-0">Angular Developer</p>
                        </div>
                    </div>
                    <div class="ul-card-list--right mt-md">
                        <button class="btn btn-opacity-google rounded-circle btn-icon btn-sm"><i
                                class="fab fa-google"></i></button>
                        <button class="btn btn-opacity-facebook rounded-circle btn-icon btn-sm"><i
                                class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-opacity-twitter rounded-circle btn-icon btn-sm"><i
                                class="fab fa-twitter"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class="ul-card-list--progressbar flex-grow-1 mr-xxl">
                        <div class="progress-wrapper">
                            <div class="progress-info mb-2">
                                <span>Progressbar</span>
                                <div class="progress-percentage ml-2">
                                    <span>40%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="egret-card-action my-sm">
                        <button type="button" class="btn btn-opacity btn-primary btn-sm">CHAT</button>
                        <button type="button" class="btn btn-opacity btn-primary btn-sm">PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="list-pagination pl-2">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="row mt-xl ML-2">
</div>

@endsection