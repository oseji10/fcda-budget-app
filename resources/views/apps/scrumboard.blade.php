@extends('layouts.entry')

@section('content')

<div class="parent ex-1">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-md">
            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="card-title m-0">File</div>
                    <div class="dropdown">
                        <button class="btn btn-sm rounded-circle btn-icon" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons">more_vert</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons icon icon-sm">visibility</i>Action</a>
                            <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">message</i>Another
                                action</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons icon icon-sm">settings</i>Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dragula" id="left-defaults">
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <div class="d-flex mb-md"><i
                                        class="material-icons text-15 text-success mr-1">verified_user</i>
                                    <p class="m-0 text-success">Completed</p>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/1.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <div class="d-flex mb-md"><i
                                        class="material-icons text-15 text-success mr-1">verified_user</i>
                                    <p class="m-0 text-success">Completed</p>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/1.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <div class="d-flex mb-md"><i
                                        class="material-icons text-15 text-success mr-1">verified_user</i>
                                    <p class="m-0 text-success">Completed</p>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/1.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-md">
            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="card-title m-0">File</div>
                    <div class="dropdown">
                        <button class="btn btn-sm rounded-circle btn-icon" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons">more_vert</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons icon icon-sm">visibility</i>Action</a>
                            <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">message</i>Another
                                action</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons icon icon-sm">settings</i>Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dragula" id="right-defaults">
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <div class="d-flex mb-md"><i
                                        class="material-icons text-15 text-success mr-1">verified_user</i>
                                    <p class="m-0 text-success">Completed</p>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/1.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/2.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/3.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/3.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/4.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-md">
            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="card-title m-0">File</div>
                    <div class="dropdown">
                        <button class="btn btn-sm rounded-circle btn-icon" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="material-icons">more_vert</i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                href="#"><i class="material-icons icon icon-sm">visibility</i>Action</a>
                            <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">message</i>Another
                                action</a>
                            <a class="dropdown-item" href="#"><i
                                    class="material-icons icon icon-sm">settings</i>Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dragula" id="right-2-defaults">
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/3.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <div class="d-flex mb-md"><i
                                        class="material-icons text-15 text-success mr-1">verified_user</i>
                                    <p class="m-0 text-success">Completed</p>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/1.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                        <div class="card mb-md cursor-pointer">
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                <div class="d-flex justify-content-between align-items-center"><span class="text-muted">
                                        <i
                                            class="material-icons align-middle text-18 mr-1">query_builder</i>5/2/2020</span><img
                                        class="avatar-md rounded-circle mr-2" src="{{asset('images/faces/2.jpg')}}"
                                        alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-md">
            <div class="card">
                <div class="card-body text-center">
                    <!-- Button trigger modal -->
                    <button class="btn btn-primary btn-block" type="button" data-toggle="modal"
                        data-target="#exampleModalCenter"><span
                            class="material-icons align-middle mr-1 text-18">add</span>Add Column</button>
                    <!--  Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="card-title text-left mb-lg">Create Column</div>
                                    <div class="input-group with-icon input-light mb-3">
                                        <div class="input-group-prepend"><i class="input-group-text fas fa-user"></i>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Name" aria-label="Username"
                                            aria-describedby="basic-addon1" />
                                    </div>
                                    <div class="d-flex justify-content-between mt-lg">
                                        <div></div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>
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