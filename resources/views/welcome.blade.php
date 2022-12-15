<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <base href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blank - Egret Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400|Roboto:300,400,500,700,900|Material+Icons"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css">
    <link rel="stylesheet" href="assets/css/main.bundle.min.css">
</head>

<body>


    <!--search-panel-->
    {{-- @include('layouts.common.search-drawer') --}}
    <!--begin::sidebar-panel-notification-->
    <div class="ul-sidebar-panel" id="asideNotification" data-position="left">
        <!--begin::sidebar-panel-notification content-->
        <div class="pt-lg pb-md">
            <div class="ul-sidebar-panel-top pb-lg px-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="heading-label p-0">Notifications</div><i
                        class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
                </div>
            </div>
            <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 170px)">
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span
                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                            class="material-icons">cloud_upload</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Watson uploaded a
                                    file</a></p>
                            <p class="text-small text-muted m-0">15 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm"
                                src="assets/images/file-types/001-pdf.svg"><span class="text-small font-weight-semi"> <a
                                    class="text-body" href="#">progress_report.pdf</a></span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span
                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                            class="material-icons">description</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John commented on a
                                    task</a></p>
                            <p class="text-small text-muted m-0">5 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><span class="text-small">
                                What's the progress of this project? <br>Can you send me the files?</span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span
                        class="badge badge-opacity rounded-circle badge-warning mr-md"><i
                            class="material-icons">announcement</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John opened a new
                                    Topic</a></p>
                            <p class="text-small text-muted m-0">45 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span
                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                            class="material-icons">cloud_upload</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John uploaded a
                                    file</a></p>
                            <p class="text-small text-muted m-0">15 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm"
                                src="assets/images/file-types/004-xlsx.svg"><span class="text-small font-weight-semi">
                                <a class="text-body" href="#">budget_report.xlsx</a></span></div>
                    </div>
                </div>
                <div class="notification-item d-flex border-bottom mb-lg pb-lg px-lg"><span
                        class="badge badge-opacity rounded-circle badge-warning mr-md"><i
                            class="material-icons">announcement</i></span>
                    <div class="d-flex flex-column justify-content-center w-full">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">John opened a new
                                    Topic</a></p>
                            <p class="text-small text-muted m-0">45 min ago</p>
                        </div>
                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                    </div>
                </div>
            </div>
            <div class="px-xl py-md"><a class="btn btn-opacity btn-primary w-full">View All Notificaitons</a></div>
        </div>
        <!--end::sidebar-panel-notification content-->
    </div>
    <!--end::sidebar-panel-notification-->
    <!--Notification Tab-->
    @include('layouts.common.notification-tab-drawer')
    <!--Sidebar panel Profile-->
    <div class="ul-sidebar-panel" id="asideProfile" data-position="left">
        <div class="pt-lg pb-md px-lg">
            <div class="ul-sidebar-panel-top mb-md">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="heading-label p-0">Profile</div>
                    <div class="flex-grow-1"></div><i
                        class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
                </div>
            </div>
            <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 112px)">
                <div class="ul-sidebar-aside-profile d-flex mb-xxl align-items-center"><img
                        class="rounded-circle avatar-lg" src="assets/images/faces/1.jpg" alt="">
                    <div class="ul-sidebar-aside-info ml-md"><a class="link-alt" href="#">
                            <div class="font-weight-semi">Tim Clarkson</div>
                        </a>
                        <p class="text-small text-muted mb-sm">Front End Developer</p>
                        <div class="d-flex ml--xs"><a class="link-alt" href="#"><i
                                    class="fab fa-google text-muted icon icon-xs hover-gray"></i></a><a class="link-alt"
                                href="#"><i class="fab fa-twitter text-muted icon icon-xs hover-gray"></i></a><a
                                class="link-alt" href="#"><i
                                    class="fab fa-facebook-f text-muted icon icon-xs hover-gray"></i></a></div>
                    </div>
                </div>
                <div class="heading-label">Skills </div>
                <div class="d-flex justify-content-between"><span
                        class="badge rounded-circle badge-primary mr-sm">A</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Angular</p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>80%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span
                        class="badge rounded-circle badge-primary mr-sm">V</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Vue Js</p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>30%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span
                        class="badge rounded-circle badge-primary mr-sm">R</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">React </p>
                        <p class="text-muted text-small">Frontend framework</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>50%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-warning" role="success" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span
                        class="badge rounded-circle badge-primary mr-sm">W</span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Wordpress Website</p>
                        <p class="text-muted text-small">CMS</p>
                    </div>
                    <div class="flex-grow-1">
                        <div class="progress-wrapper mb-xl">
                            <div class="progress-info"><span></span>
                                <div class="progress-percentage"><span>30%</span></div>
                            </div>
                            <div class="progress mb-md">
                                <div class="progress-bar bg-success" role="warning" style="width: 30%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg"></div>
                <div class="heading-label">Activity</div>
                <div class="d-flex mb-md align-items-center"><span
                        class="badge rounded-circle badge-primary mr-sm">JH</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Urgent task
                                completed</a></p><span class="text-small text-muted">By Jhon at 3:30 PM</span>
                    </div>
                </div>
                <div class="d-flex mb-md align-items-center"><span
                        class="badge rounded-circle badge-success mr-sm">W</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Task from project
                                Alpha</a></p><span class="text-small text-muted">By Watson at 1:30 PM</span>
                    </div>
                </div>
                <div class="d-flex mb-md align-items-center"><span
                        class="badge rounded-circle badge-success mr-sm">R</span>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-small font-weight-semi m-0"> <a class="link-alt" href="#">Task from project
                                Beta</a></p><span class="text-small text-muted">By Rafi at 9:30 AM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ul-sidebar-panel-overlay"> </div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"> </script>
    <script src="assets/js/pages/doc.script.min.js"></script>
</body>

</html>