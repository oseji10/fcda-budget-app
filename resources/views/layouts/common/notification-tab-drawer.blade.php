<div class="ul-sidebar-panel" id="asideNotificationTab" data-position="left">
    <div>
        <div class="nav-pills-primary">
            <ul class="nav nav-pills p-lg" id="pills-tab" role="tablist">
                <li class="nav-item"><a class="nav-link py-sm active" id="pills-home-tab" data-toggle="pill"
                        href="#notifications" role="tab" aria-controls="pills-home"
                        aria-selected="true">Notifications</a></li>
                <li class="nav-item"><a class="nav-link py-sm" id="pills-profile-tab" data-toggle="pill" href="#actions"
                        role="tab" aria-controls="pills-profile" aria-selected="false">Actions</a>
                </li>
                <li class="nav-item"><a class="nav-link py-sm" id="pills-contact-tab" data-toggle="pill"
                        href="#settings" role="tab" aria-controls="pills-contact" aria-selected="false">Settings</a>
                </li><span class="flex-grow-1"></span><i
                    class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
            </ul>
            <div class="tab-content px-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="notifications" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 170px)">
                        <div class="row px-lg">
                            <div class="col-12 mb-md">
                                <div class="card flex-row mb-lg py-md px-lg"><span
                                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                                            class="material-icons">cloud_upload</i></span>
                                    <div class="d-flex flex-column justify-content-center w-full">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="text-small font-weight-semi m-0"> <a class="link-alt"
                                                    href="#">Watson uploaded a file</a></p>
                                            <p class="text-small text-muted m-0">15 min ago</p>
                                        </div>
                                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm"
                                                src="{{asset('images/file-types/001-pdf.svg')}}"><span
                                                class="text-small font-weight-semi"> <a class="text-body"
                                                    href="#">progress_report.pdf</a></span></div>
                                    </div>
                                </div>
                                <div class="card flex-row mb-lg py-md px-lg"><span
                                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                                            class="material-icons">description</i></span>
                                    <div class="d-flex flex-column justify-content-center w-full">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="text-small font-weight-semi m-0"> <a class="link-alt"
                                                    href="#">John commented on a task</a></p>
                                            <p class="text-small text-muted m-0">5 min ago</p>
                                        </div>
                                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                                        <div class="px-md py-sm gray-100 rounded"><span class="text-small">
                                                What's the progress of this project? <br>Can you send me the
                                                files?</span></div>
                                    </div>
                                </div>
                                <div class="card flex-row mb-lg py-md px-lg"><span
                                        class="badge badge-opacity rounded-circle badge-warning mr-md"><i
                                            class="material-icons">announcement</i></span>
                                    <div class="d-flex flex-column justify-content-center w-full">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="text-small font-weight-semi m-0"> <a class="link-alt"
                                                    href="#">John opened a new Topic</a></p>
                                            <p class="text-small text-muted m-0">45 min ago</p>
                                        </div>
                                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                                    </div>
                                </div>
                                <div class="card flex-row mb-lg py-md px-lg"><span
                                        class="badge badge-opacity rounded-circle badge-primary mr-md"><i
                                            class="material-icons">cloud_upload</i></span>
                                    <div class="d-flex flex-column justify-content-center w-full">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="text-small font-weight-semi m-0"> <a class="link-alt"
                                                    href="#">John uploaded a file</a></p>
                                            <p class="text-small text-muted m-0">15 min ago</p>
                                        </div>
                                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                                        <div class="px-md py-sm gray-100 rounded"><img class="icon-sm"
                                                src="{{asset('images/file-types/004-xlsx.svg')}}"><span
                                                class="text-small font-weight-semi"> <a class="text-body"
                                                    href="#">budget_report.xlsx</a></span></div>
                                    </div>
                                </div>
                                <div class="card flex-row mb-lg py-md px-lg"><span
                                        class="badge badge-opacity rounded-circle badge-warning mr-md"><i
                                            class="material-icons">announcement</i></span>
                                    <div class="d-flex flex-column justify-content-center w-full">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="text-small font-weight-semi m-0"> <a class="link-alt"
                                                    href="#">John opened a new Topic</a></p>
                                            <p class="text-small text-muted m-0">45 min ago</p>
                                        </div>
                                        <p class="text-muted text-small mb-sm">On <a href="">Project alpha</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-xl py-md"><a class="btn btn-opacity btn-primary w-full">View All
                            Notificaitons</a></div>
                </div>
                <div class="tab-pane fade px-lg" id="actions" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card mb-3">
                        <div class="card-header font-weight-semi">Verify email address</div>
                        <div class="card-body">
                            <p class="card-text text-small font-weight-normal">Please verify your email address to
                                get full access of our services.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-opacity btn-primary btn-sm">Send Verification Link</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade px-lg" id="settings" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 120px)">
                        <div class="heading-label pb-sm">Notifications</div>
                        <div class="pb-xl">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Enable Notifications:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Disable Log:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox"><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">New Orders:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                        </div>
                        <div class="heading-label pb-sm">Series</div>
                        <div class="pb-xl">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Enable Notifications:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Disable Log:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox"><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">New Orders:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                        </div>
                        <div class="heading-label pb-sm">Clients</div>
                        <div class="pb-xl">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Enable Notifications:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">Disable Log:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox"><span class="slider"></span>
                                </label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-weight-normal m-0">New Orders:</p>
                                <label class="switch switch-primary my-md">
                                    <input type="checkbox" checked><span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>