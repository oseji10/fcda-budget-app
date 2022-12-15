@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-title">Author Sales</div>
                    <div class="dropdown">
                        <button class="btn btn-primary" id="dropdownMenuButton" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons m-0">more_horiz</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons">build</i>Action</a><a class="dropdown-item"
                                href="#"><i class="material-icons">add_shopping_cart</i>Another action</a><a
                                class="dropdown-item" href="#"><i class="material-icons">create</i>Something </a></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold pl-md">$34M</h4>
                    </div>
                    <div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-title">New Product</div>
                    <div class="dropdown">
                        <button class="btn btn-primary" id="dropdownMenuButton" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons m-0">more_horiz</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons">build</i>Action</a><a class="dropdown-item"
                                href="#"><i class="material-icons">add_shopping_cart</i>Another action</a><a
                                class="dropdown-item" href="#"><i class="material-icons">create</i>Something </a></div>
                    </div>
                </div>
                <div class="flex-grow-1"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold pl-md">$6.5M</h4>
                    </div>
                    <div>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="card-title">New Product</div>
                    <div class="dropdown">
                        <button class="btn btn-primary" id="dropdownMenuButton" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons m-0">more_horiz</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons">build</i>Action</a><a class="dropdown-item"
                                href="#"><i class="material-icons">add_shopping_cart</i>Another action</a><a
                                class="dropdown-item" href="#"><i class="material-icons">create</i>Something </a></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold pl-lg">17M</h4>
                    </div>
                    <div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="d-flex justify-content-between p-md mb-md">
                <div>
                    <div class="card-title mb-1">New Users</div>
                    <p class="text-muted m-0">34 Week</p>
                </div>
                <h5 class="font-weight-bold">+789</h5>
            </div>
            <div id="chart4"></div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="d-flex justify-content-between p-md mb-lg">
                <div>
                    <div class="card-title mb-1">Daily Orders</div>
                    <p class="text-muted m-0">12 Week</p>
                </div>
                <h5 class="font-weight-bold">3,400</h5>
            </div>
            <div id="chart5"></div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="d-flex justify-content-between p-md mb-lg">
                <div>
                    <div class="card-title mb-1">Revenue</div>
                    <p class="text-muted m-0">One Day</p>
                </div>
                <h5 class="font-weight-bold">95%</h5>
            </div>
            <div id="chart6"></div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Best Framework</div>
                <div class="dropdown">
                    <button class="btn btn-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item"
                            href="#"><i class="material-icons">create</i>Something </a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="nav-pills-primary">
                    <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link text-center p-2 active" id="pills-home-tab"
                                data-toggle="pill" href="#pills-settings" role="tab" aria-controls="pills-home"
                                aria-selected="true"> <i class="material-icons text-16">settings</i>
                                <p class="m-0 font-weight-normal text-12">Settings</p>
                            </a></li>
                        <li class="nav-item"><a class="nav-link text-center p-2" id="pills-profile-tab"
                                data-toggle="pill" href="#pills-code" role="tab" aria-controls="pills-profile"
                                aria-selected="false"> <i class="material-icons text-16">code</i>
                                <p class="m-0 font-weight-normal text-12">Code</p>
                            </a></li>
                        <li class="nav-item"><a class="nav-link text-center p-2" id="pills-profile-tab"
                                data-toggle="pill" href="#pills-design" role="tab" aria-controls="pills-profile"
                                aria-selected="false"> <i class="material-icons text-16">text_fields</i>
                                <p class="m-0 font-weight-normal text-12">Design</p>
                            </a></li>
                    </ul>
                    <div class="tab-content bg-transparent" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-settings" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Addidas Template </h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>80%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Agency Template </h6>
                                    <p class="text-muted text-13 m-0">Single Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>50%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Vue.js Template</h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>20%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Medical Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>90%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">React.js Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>70%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Agency Template </h6>
                                    <p class="text-muted text-13 m-0">Single Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>50%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Addidas Template </h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>80%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Vue.js Template</h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>20%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">React.js Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>70%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Medical Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>90%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-design" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Addidas Template </h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>80%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Agency Template </h6>
                                    <p class="text-muted text-13 m-0">Single Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>50%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Vue.js Template</h6>
                                    <p class="text-muted text-13 m-0">Landing Page</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>20%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">Medical Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>90%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-md">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 text-14">React.js Template </h6>
                                    <p class="text-muted text-13 m-0">Admin Dashboard</p>
                                </div>
                                <div class="progress-wrapper flex-grow-1 p-0">
                                    <div class="progress-info"><span></span>
                                        <div class="progress-percentage"><span>70%</span></div>
                                    </div>
                                    <div class="progress mb-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Statistics</div>
                <div class="dropdown">
                    <button class="btn btn-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item"
                            href="#"><i class="material-icons">create</i>Something </a></div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart7"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Revenue</div>
                <div class="dropdown">
                    <button class="btn btn-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item"
                            href="#"><i class="material-icons">create</i>Something </a></div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart8"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Best Framework</div>
                <div class="dropdown">
                    <button class="btn btn-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item"
                            href="#"><i class="material-icons">create</i>Something </a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-xl"><a class="link-alt" href="#">
                        <h6 class="mb-1 text-14">Addidas Template</h6>
                        <p class="text-muted text-13 m-0">Single Page</p>
                    </a>
                    <div class="d-flex align-items-center">
                        <div id="chart-sm1"></div>
                        <div class="ml-md">
                            <h6 class="mb-1 text-14">4.3k</h6><span class="badge badge-primary">+240</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-xl"><a class="link-alt" href="#">
                        <h6 class="mb-1 text-14">React.js Template</h6>
                        <p class="text-muted text-13 m-0">frontend</p>
                    </a>
                    <div class="d-flex align-items-center">
                        <div id="chart-sm2"></div>
                        <div class="ml-md">
                            <h6 class="mb-1 text-14">4.3k</h6><span class="badge badge-danger">+240</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-xl"><a class="link-alt" href="#">
                        <h6 class="mb-1 text-14">Vue.js Template</h6>
                        <p class="text-muted text-13 m-0">Admin Dashboard</p>
                    </a>
                    <div class="d-flex align-items-center">
                        <div id="chart-sm3"></div>
                        <div class="ml-md">
                            <h6 class="mb-1 text-14">7.3k</h6><span class="badge badge-warning">+340</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-xl"><a class="link-alt" href="#">
                        <h6 class="mb-1 text-14">Angular Template</h6>
                        <p class="text-muted text-13 m-0">Single Page</p>
                    </a>
                    <div class="d-flex align-items-center">
                        <div id="chart-sm4"></div>
                        <div class="ml-md">
                            <h6 class="mb-1 text-14">17.3k</h6><span class="badge badge-success">+340</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-xl"><a class="link-alt" href="#">
                        <h6 class="mb-1 text-14">Ember.js</h6>
                        <p class="text-muted text-13 m-0">Landing Page</p>
                    </a>
                    <div class="d-flex align-items-center">
                        <div id="chart-sm5"></div>
                        <div class="ml-md">
                            <h6 class="mb-1 text-14">17.3k</h6><span class="badge badge-info">+340</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">Statisctics</div>
                <div class="dropdown">
                    <button class="btn btn-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><i
                                class="material-icons">build</i>Action</a><a class="dropdown-item" href="#"><i
                                class="material-icons">add_shopping_cart</i>Another action</a><a class="dropdown-item"
                            href="#"><i class="material-icons">create</i>Something </a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center my-lg">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="mr-md">
                                <h6>Sales</h6>
                                <p class="text-muted m-0">+23%</p>
                            </div>
                            <div id="chart-sm6"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="mr-md">
                                <h6>Sales</h6>
                                <p class="text-muted m-0">+23%</p>
                            </div>
                            <div id="chart-sm7"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="mr-md">
                                <h6>Sales</h6>
                                <p class="text-muted m-0">+23%</p>
                            </div>
                            <div id="chart-sm8"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="mr-md">
                                <h6>Sales</h6>
                                <p class="text-muted m-0">+23%</p>
                            </div>
                            <div id="chart-sm9"></div>
                        </div>
                    </div>
                </div>
                <div id="chart9"></div>
            </div>
        </div>
    </div>
</div>



@endsection