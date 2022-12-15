@extends('layouts.entry')

@section('content')

<div class="filemanager-main-sidebar-container rounded shadow-3dp" data-sidebar-container="main">
    <div class="sidebar-overlay"></div>
    <div data-sidebar-content="main">
        <div class="filemanager-main-sidebar-content d-flex flex-column h-full position-relative">
            <div
                class="filemanager-topbar bg-card py-md pl-3 shadow-3dp d-flex flex-row justify-content-between align-items-center">
                <div><a class="link-icon d-flex align-items-center mr-3 d-lg-none" data-sidebar-toggle="main"><i
                            class="material-icons">arrow_back</i> Inbox</a>
                    <div class="custom-input-1 light"><i class="material-icons">search</i>
                        <input type="text" placeholder="Search files" aria-describedby="aria-describedby" />
                    </div>
                </div>
                <div class="filemanager-action"><a class="link-icon mr-3" href="href"><i
                            class="material-icons align-middle">how_to_reg</i></a><a class="link-icon mr-3"
                        href="href"><i class="material-icons align-middle">delete_forever</i></a><a
                        class="link-icon mr-3" href="href"><i class="material-icons align-middle">more_vert</i></a>
                </div>
            </div>
            <!-- DETAILS-->
            <div class="filemanager-details h-full py-lg px-xl perfect-scrollbar rtl-ps-none"
                data-suppress-scroll-x="true">
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <div class="card-title">All Files</div>
                        <p class="font-weight-semi m-0 text-muted text-12">RECENTLY ACCESSED FILES</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card" data-sidebar-panel="filemanager"><img
                                class="card-img-top avatar-md mx-auto my-lg" src="{{asset('images/logos/react.png')}}"
                                alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/sass.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/angular.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/webpack.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <p class="font-weight-semi m-0 text-muted text-12">FOLDER</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Project</p>
                                    <p class="text-muted m-0 text-12"> 2 files, 3.05mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Video</p>
                                    <p class="text-muted m-0 text-12"> 25 files, 63mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Music</p>
                                    <p class="text-muted m-0 text-12"> 25 files, 63mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Documents</p>
                                    <p class="text-muted m-0 text-12"> 25 files, 63mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Application Design</p>
                                    <p class="text-muted m-0 text-12"> 25 files, 63mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card">
                            <div class="card-body d-flex align-items-center"><i
                                    class="material-icons mr-2">folder_open</i>
                                <div>
                                    <p class="font-weight-semi m-0">Photos</p>
                                    <p class="text-muted m-0 text-12"> 25 files, 63mb </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-md">
                        <p class="font-weight-semi m-0 text-muted text-12"> FILES</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/react.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/sass.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/angular.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-md">
                        <div class="card"><img class="card-img-top avatar-md mx-auto my-lg"
                                src="{{asset('images/logos/webpack.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <p class="card-text font-weight-semi m-0">Filemanager.pdf</p>
                                <p class="text-muted font-weight-semi m-0">20.5kb</p>
                                <p class="m-0 text-12">Last accessed: 3 Hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filemanager-main-sidebar bg-card h-full p-md perfect-scrollbar rtl-ps-none" data-sidebar="main">
        <div class="mb-md"><i class="material-icons sidebar-close" data-sidebar-toggle="main">cancel</i></div>
        <div class="ul-sidebar-left">
            <div>
                <button class="btn btn-raised-primary btn-block d-flex align-items-center"><i
                        class="material-icons">add</i>Add File</button>
                <div class="mt-xxxl">
                    <div class="text-muted font-weight-semi text-uppercase">My Drive</div>
                    <div class="my-md">
                        <button class="btn btn-secondary btn-block d-flex align-items-center justify-content-start"><i
                                class="material-icons">folder_open</i>Admin Information</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">important_devices</i>My Devices</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">query_builder</i>Recents</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">star_half</i>Important</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">delete_forever</i>Delete Files</button>
                    </div>
                    <div class="text-muted font-weight-semi mb-md text-uppercase">Labels</div>
                    <div class="my-md">
                        <button class="btn btn-secondary btn-block d-flex align-items-center justify-content-start"><i
                                class="material-icons">folder_open</i>Admin Information</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">important_devices</i>My Devices</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">query_builder</i>Recents</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">star_half</i>Important</button>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start"><i
                                class="material-icons">delete_forever</i>Delete Files</button>
                    </div>
                    <div class="text-muted font-weight-semi mb-md text-uppercase">storage status</div>
                    <div class="my-md d-flex align-items-center ul-filemanager-progressbar"><i
                            class="material-icons text-muted">save</i>
                        <div><small>02GB used of 30GB</small>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection