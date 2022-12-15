<!-- Start::Mobile header-->
<div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="{{asset('images/egret.png')}}" alt="" />
    <div class="flex-grow-1"></div>
    <button class="sidebar-full-toggle btn btn-icon btn-primary rounded-circle text-white"><i
            class="material-icons">menu</i></button>
    <button class="btn btn-icon ul-header-menu-toggle btn-icon btn-primary rounded-circle text-white"><i
            class="material-icons">more_vert</i></button><i
        class="material-icons text-white ul-mobile-header-toggle">more_horiz</i>
</div>
<!-- End::Mobile header  -->

<!-- Start::Main header  -->
<header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
    <!-- Start::Header menu-->
    <div>
        <div class="ul-header-menu-wrap"><i class="material-icons ul-header-menu-toggle">close</i>
            <div class="ul-header-menu">
                <ul class="ul-header-nav">
                    <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link" href="#">Dashboards</a>
                    </li>
                    <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link" href="#">Components</a>
                        <div class="ul-menu-submenu">
                            <ul class="ul-menu-subnav">
                                <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link" href="#"> <i
                                            class="material-icons ul-menu-item-icon">home</i>UI
                                        Kits</a>
                                    <div class="ul-menu-submenu">
                                        <ul class="ul-menu-subnav">
                                            <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link"
                                                    href="#"> <i
                                                        class="material-icons ul-menu-item-icon">remove</i>Buttons</a>
                                                <div class="ul-menu-submenu">
                                                    <ul class="ul-menu-subnav">
                                                        <li class="ul-menu-item"><a class="ul-menu-link" href="#">
                                                                <i
                                                                    class="material-icons ul-menu-item-icon">done</i>Child
                                                                1</a></li>
                                                        <li class="ul-menu-item"><a class="ul-menu-link" href="#">
                                                                <i
                                                                    class="material-icons ul-menu-item-icon">done</i>Child
                                                                2</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                                        class="material-icons ul-menu-item-icon">remove</i>Badges</a>
                                            </li>
                                            <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link"
                                                    href="#"> <i
                                                        class="material-icons ul-menu-item-icon">remove</i>Alerts</a>
                                                <div class="ul-menu-submenu">
                                                    <ul class="ul-menu-subnav">
                                                        <li class="ul-menu-item"><a class="ul-menu-link" href="#">Child
                                                                3</a></li>
                                                        <li class="ul-menu-item"><a class="ul-menu-link" href="#">Child
                                                                4</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                            class="material-icons ul-menu-item-icon">dashboard</i>Apps</a>
                                </li>
                                <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                            class="material-icons ul-menu-item-icon">settings</i>Pages</a>
                                </li>
                                <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                            class="material-icons ul-menu-item-icon">reply_all</i>Plugins</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End::Header menu-->
    <div class="ul-header-topbar">
        <div class="flex-grow-1"></div>
        <div class="ul-search-full-width">
            <button class="toggle-search btn btn-opacity-default rounded-circle btn-icon mx-xs" type="button"><i
                    class="material-icons">search</i></button>
            <div class="ul-search-input-area">
                <input id="app-search" type="text" placeholder="Explore Egret..." aria-label="Search" />
                <button class="btn btn-opacity-default rounded-circle btn-icon toggle-search" type="button"><i
                        class="material-icons">close</i></button>
            </div>
            <div class="ul-search-result-area">
                <div class="search-result"></div>
            </div>
        </div>
        <div class="dropdown language-dropdown mx-xx">
            <div class="header-btn-group">
                <button class="btn btn-opacity-default rounded-circle btn-icon" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><img class="avatar-xs rounded-circle"
                        src="{{asset('images/flags/1x1/us.svg')}}" alt="" /></button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#"> <img
                            class="avatar-xxs rounded-circle mr-sm" src="{{asset('images/flags/1x1/us.svg')}}"
                            alt="" />English</a><a class="dropdown-item" href="#"> <img
                            class="avatar-xxs rounded-circle mr-sm" src="{{asset('images/flags/1x1/es.svg')}}"
                            alt="" />Spanish</a><a class="dropdown-item" href="#"> <img
                            class="avatar-xxs rounded-circle mr-sm" src="{{asset('images/flags/1x1/in.svg')}}"
                            alt="" />Hindi</a>
                </div>
            </div>
        </div>
        <button class="btn btn-opacity-default rounded-circle btn-icon btn-badge"
            data-sidebar-panel="asideNotification"><span class="badge badge-danger">3</span><i
                class="material-icons">notifications</i></button>
        <div class="dropdown profile-dropdown ml-xs">
            <div class="header-btn-group">
                <button class="btn d-flex py-1 pl-2 pr-0 rounded" id="dropdownTopUserProfile" type="button"
                    data-sidebar-panel="asideProfile"><span class="m-0 mr-2 font-weight-normal">Hi,
                        Watson</span><img class="avatar-sm rounded-circle mr-1"
                        src="{{asset('images/faces/1.jpg')}}" /></button>
                <div aria-labelledby="dropdownTopUserProfile">
                    <div class="card dropdown-menu p-0 ul-avatar-dropdown">
                        <div class="card-header bg-primary">
                            <div class="ul-avatar-dropdown-container"><img class="avatar-md rounded-circle mr-2"
                                    src="{{asset('images/faces/1.jpg')}}" />
                                <div class="content">
                                    <p class="text-white font-weight-semi m-0">Watson Joyce</p>
                                    <p class="text-small text-muted my-xs">BTS,func Idi</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-xl"><a class="dropdown-item link-alt" href="#"><i
                                    class="material-icons icon icon-sm">account_box</i>My Profile</a><a
                                class="dropdown-item link-alt" href="#"><i
                                    class="material-icons icon icon-sm">assignment</i>My Tasks</a><a
                                class="dropdown-item link-alt" href="#"><i
                                    class="material-icons icon icon-sm">message</i>Messages</a><a
                                class="dropdown-item link-alt" href="#"><i
                                    class="material-icons icon icon-sm">settings</i>Settings</a></div>
                        <div class="card-footer text-muted">
                            <button class="btn btn-raised btn-raised-primary btn-sm" type="button">SIGN
                                OUT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End::Main header-->