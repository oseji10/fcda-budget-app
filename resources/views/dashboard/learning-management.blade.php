@extends('layouts.entry')
@section('title')
Learning Management dashboard
@endsection
@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12 mb-lg">
                <div class="card">
                    <div class="px-xl pt-xl pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title mb-sm">Welcome Back! Watson</h4>
                                <p class="text-small">You have completed <span class="font-weight-bold">70%</span>
                                    of your goal this week! Start a new goal and improve your result. </p>
                            </div>
                            <div class="col-md-6">
                                <div class="mb--lg" id="welcome_progress_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col 1 -->
            <div class="col-lg-6 mb-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Results</div>
                        <div class="ul-container d-flex justify-content-between align-items-baseline">
                            <div class="mr-2"><i class="material-icons text-10 text-warning">lens</i></div>
                            <div class="lm-title flex-grow-1">
                                <p class="font-weight-semi mb-0">React</p>
                                <p class="text-small text-muted">20 March</p>
                            </div>
                            <div class="ul-progressbar flex-grow-1">
                                <div class="progress-wrapper mb-xl">
                                    <div class="progress-info">
                                        <span></span>
                                        <div class="progress-percentage">
                                            <span>40%</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ul-container d-flex justify-content-between align-items-baseline">
                            <div class="mr-2"><i class="material-icons text-10 text-info">lens</i></div>
                            <div class="ul-title flex-grow-1">
                                <p class="font-weight-semi mb-0">Angular</p>
                                <p class="text-small text-muted">10 March</p>
                            </div>
                            <div class="ul-progressbar flex-grow-1">
                                <div class="progress-wrapper mb-xl">
                                    <div class="progress-info">
                                        <span></span>
                                        <div class="progress-percentage">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ul-container d-flex justify-content-between align-items-baseline">
                            <div class="mr-2"><i class="material-icons text-10 text-warning">lens</i></div>
                            <div class="ul-title flex-grow-1">
                                <p class="font-weight-semi mb-0">Vue</p>
                                <p class="text-small text-muted">20 March</p>
                            </div>
                            <div class="ul-progressbar flex-grow-1">
                                <div class="progress-wrapper mb-xl">
                                    <div class="progress-info">
                                        <span></span>
                                        <div class="progress-percentage">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ul-container d-flex justify-content-between align-items-baseline">
                            <div class="mr-2"><i class="material-icons text-10 text-info">lens</i></div>
                            <div class="ul-title flex-grow-1">
                                <p class="font-weight-semi mb-0">CSS</p>
                                <p class="text-small text-muted">10 March</p>
                            </div>
                            <div class="ul-progressbar flex-grow-1">
                                <div class="progress-wrapper mb-xl">
                                    <div class="progress-info">
                                        <span></span>
                                        <div class="progress-percentage">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ul-container d-flex justify-content-between align-items-baseline">
                            <div class="mr-2"><i class="material-icons text-10 text-info">lens</i></div>
                            <div class="ul-title flex-grow-1">
                                <p class="font-weight-semi mb-0">HTML</p>
                                <p class="text-small text-muted">10 March</p>
                            </div>
                            <div class="ul-progressbar flex-grow-1">
                                <div class="progress-wrapper mb-xl">
                                    <div class="progress-info">
                                        <span></span>
                                        <div class="progress-percentage">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-lg">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title">Study Time Last Week</div>
                        <div id="dashboard_learningManagement" style="height:350px"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-lg">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                            <span class="badge badge-opacity rounded-circle badge-light">
                                <h5 class="font-weight-semi text-white m-0">R</h5>
                            </span>
                            <div class="ml-2 flex-grow-1">
                                <p class="m-0 text-white font-weight-normal">You watched today</p>
                                <p class="text-white text-small m-0">React tutorial</p>
                            </div>
                            <div class="grid-button">
                                <button class="btn btn-primary rounded-circle btn-icon">
                                    <i class="material-icons text-white text-30">play_arrow</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-lg">
                <div class="card bg-danger">
                    <div class="card-body">
                        <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                            <span class="badge badge-opacity rounded-circle badge-light mr-sm">
                                <h5 class="font-weight-semi text-white m-0">P</h5>
                            </span>
                            <div class="ml-2 flex-grow-1">
                                <p class="m-0 text-white font-weight-normal">You watched today</p>
                                <p class="text-white text-small m-0">Python 101</p>
                            </div>
                            <div class="grid-button">
                                <button class="btn btn-danger rounded-circle btn-icon">
                                    <i class="material-icons text-white text-30">play_arrow</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-lg">
                <div class="card table-responsive">
                    <table class="table borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-muted"></th>
                                <th scope="col" class="text-muted">Started</th>
                                <th scope="col" class="text-muted">Course</th>
                                <th scope="col" class="text-muted">Progress</th>
                                <th scope="col" class="text-muted">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/angular.png')}}" />
                                </td>
                                <td class="align-middle text-muted">20 May, 20200</td>
                                <th scope="row" class="align-middle">
                                    <span class="font-weight-semi">Angular Beyond The Basics</span>
                                </th>
                                <td class="align-middle">
                                    <div class="progress-wrapper">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-warning rounded-circle btn-icon">
                                        <i class="material-icons text-25">play_circle_filled</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/react.png')}}">
                                </td>
                                <td class="align-middle text-muted">20 May, 20200</td>
                                <th scope="row" class="align-middle">
                                    <span class="font-weight-semi">React Development Course</span>
                                </th>
                                <td class="align-middle">
                                    <div class="progress-wrapper">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-warning rounded-circle btn-icon">
                                        <i class="material-icons text-25">play_circle_filled</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/webpack.png')}}">
                                </td>
                                <td class="align-middle text-muted">20 May, 20200</td>
                                <th scope="row" class="align-middle">
                                    <span class="font-weight-semi">Webpack For Busy Developer</span>
                                </th>
                                <td class="align-middle">
                                    <div class="progress-wrapper">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-warning rounded-circle btn-icon">
                                        <i class="material-icons text-25">play_circle_filled</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/sass.png')}}">
                                </td>
                                <td class="align-middle text-muted">20 May, 20200</td>
                                <th scope="row" class="align-middle">
                                    <span class="font-weight-semi">Complete SASS Course</span>
                                </th>
                                <td class="align-middle">
                                    <div class="progress-wrapper">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-warning rounded-circle btn-icon">
                                        <i class="material-icons text-25">play_circle_filled</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/bootstrap.png')}}">
                                </td>
                                <td class="align-middle text-muted">20 May, 2020</td>
                                <th scope="row" class="align-middle">
                                    <span class="font-weight-semi">Bootstrap For Everyone</span>
                                </th>
                                <td class="align-middle">
                                    <div class="progress-wrapper">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-warning rounded-circle btn-icon">
                                        <i class="material-icons text-25">play_circle_filled</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-lg rounded gray-200">
                    <div class="card-body">
                        <img class="" src="{{asset('images/illustrations/upgrade.svg')}}" />
                        <p class="m-0 pt-xl pb-xl font-weight-normal">Upgrade to <b>PRO</b> for <br> more resources
                        </p>
                        <button type="button" class="btn btn-raised btn-raised-primary">UPGRADE NOW</button>
                    </div>
                </div>
                <div class="ul-achivements mb-xxl">
                    <h6 class="heading-label">Achivements</h6>
                    <div class="d-flex align-items-center">
                        <img class="avatar-xs mr-md" src="{{asset('images/illustrations/badge-1.svg')}}"
                            data-toggle="tooltip" data-placement="top" title="Completed first course">
                        <img class="avatar-xs mr-md" src="{{asset('images/illustrations/badge-2.svg')}}"
                            data-toggle="tooltip" data-placement="top" title="Won a challenge">
                        <img class="avatar-xs mr-md" src="{{asset('images/illustrations/badge-3.svg')}}"
                            data-toggle="tooltip" data-placement="top" title="Won a competition">
                    </div>
                </div>
                <div class="ul-list-group-1 mb-xxl">
                    <h6 class="heading-label">Reminder</h6>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">view_week</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Data structure test</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">library_books</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Design pattern test</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">games</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Algorithm test</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">textsms</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Spanish 201</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ul-list-group-1">
                    <h6 class="heading-label">Upcoming Challenges</h6>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">web</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Create a simple website</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">list_alt</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Simple TODO app</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">description</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Invoice App</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ul-list-item mb-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-opacity rounded-circle badge-light mr-md"> <i
                                    class="material-icons text-body">assignment_turned_in</i></span>
                            <div class="flex-grow-1">
                                <h6 class="text-small font-weight-semi m-0">Order management app</h6>
                                <small class="text-muted text-small">23 December 2019</small>
                            </div>
                            <div class="ul-reminder-action">
                                <button class="btn rounded-circle btn-icon">
                                    <i class="material-icons text-muted">more_horiz</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection