<div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="{{  asset('images/egret.png')}}" alt="" />
    <div class="flex-grow-1"></div>
    <button class="btn btn-icon btn-primary rounded-circle ul-header-menu-toggle text-white"><i
            class="material-icons">menu</i></button>
    <button class="btn btn-icon btn-primary rounded-circle ul-mobile-header-toggle text-white"><i
            class="material-icons">more_vert</i></button>
</div>
<header class="ul-header-2 pt-xxxl">
    <div class="container">
        <div class="pb-xxxl d-flex justify-content-between"><a href=""><img class="ul-brand-logo"
                    src="{{  asset('images/egret.png')}}" alt="" /></a>
            <div>
                <div class="ul-header-topbar">
                    <div class="flex-grow-1"></div>
                    <div class="dropdown dropup ul-search-dropdown dropleft">
                        <div class="custom-input-1 secondary mr-3" data-toggle="dropdown"><i
                                class="material-icons">search</i>
                            <input class="toggle-dropdown-search" id="app-search" type="text"
                                placeholder="Search here..." tabindex="1" />
                        </div>
                        <div class="dropdown-menu p-0">
                            <div class="search-result"></div>
                        </div>
                    </div>
                    <div class="dropdown language-dropdown">
                        <button class="btn btn-outline btn-secondary rounded-circle btn-icon mr-3 mb-0" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                class="language-img rounded-circle" src="{{  asset('images/flags/1x1/us.svg')}}"
                                alt="" /></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#"> <img
                                    class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/us.svg')}}"
                                    alt="" />English</a><a class="dropdown-item" href="#"> <img
                                    class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/es.svg')}}"
                                    alt="" />Spanish</a><a class="dropdown-item" href="#"> <img
                                    class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/in.svg')}}"
                                    alt="" />Hindi</a></div>
                    </div>
                    <button class="btn btn-outline btn-secondary rounded-circle btn-icon btn-badge mr-3 mb-0"
                        type="button" data-sidebar-panel="asideNotification"><span class="badge badge-danger">3</span><i
                            class="material-icons">notifications</i></button>
                    <button class="btn btn-outline btn-secondary rounded-circle btn-icon btn-badge mr-3 mb-0"
                        type="button" data-sidebar-panel="asideShortcuts" aria-haspopup="true" aria-expanded="false"><i
                            class="material-icons">dashboard</i></button>
                    <div class="dropdown profile-dropdown">
                        <button class="btn btn-outline btn-secondary rounded-circle btn-icon mb-0" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                class="rounded-circle avatar-xs" src="{{  asset('images/faces/1.jpg')}}"
                                alt="" /></button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#"><i
                                    class="material-icons mr-2">person</i> Profile</a><a class="dropdown-item"
                                href="#"><i class="material-icons mr-2">settings</i>Account setting</a><a
                                class="dropdown-item" href="#"><i
                                    class="material-icons mr-2">notifications_off</i>Disable alerts</a><a
                                class="dropdown-item" href="#"><i class="material-icons mr-2">exit_to_app</i>Sign
                                out</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-header-navigation bg-card py-md px-md rounded-top">
            <div class="ul-header-menu-wrap"><i class="material-icons ul-header-menu-toggle">close</i>
                <div class="ul-header-menu">
                    <ul class="ul-header-nav">


                        <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link" href="#">Dashboards</a>
                            <div class="ul-menu-submenu">
                                <ul class="ul-menu-subnav">

                                    <li class="ul-menu-item"><a class="ul-menu-link" href="{{route('analytic')}}"> <i
                                                class="material-icons ul-menu-item-icon">dashboard</i>Analytic</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link" href="{{route('sales')}}"> <i
                                                class="material-icons ul-menu-item-icon">settings</i>Sales</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link"
                                            href="{{route('learning-management')}}"> <i
                                                class="material-icons ul-menu-item-icon">reply_all</i>Learning
                                            Management</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link"
                                            href="{{route('crypto-currency')}}"> <i
                                                class="material-icons ul-menu-item-icon">dashboard</i>Crypto
                                            Currency</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link" href="{{route('job-management')}}">
                                            <i class="material-icons ul-menu-item-icon">dashboard</i>Job Management</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link" href="#">Components</a>
                            <div class="ul-menu-submenu">
                                <ul class="ul-menu-subnav">
                                    <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link" href="#"> <i
                                                class="material-icons ul-menu-item-icon">home</i>UI Kits</a>
                                        <div class="ul-menu-submenu">
                                            <ul class="ul-menu-subnav">
                                                <li class="ul-menu-item ul-menu-item-submenu"><a class="ul-menu-link"
                                                        href="#"> <i
                                                            class="material-icons ul-menu-item-icon">remove</i>Buttons
                                                        1</a>
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
                                                            <li class="ul-menu-item"><a class="ul-menu-link"
                                                                    href="#">Child 3</a></li>
                                                            <li class="ul-menu-item"><a class="ul-menu-link"
                                                                    href="#">Child 4</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                                class="material-icons ul-menu-item-icon">dashboard</i>Apps</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                                class="material-icons ul-menu-item-icon">settings</i>Pages</a></li>
                                    <li class="ul-menu-item"><a class="ul-menu-link" href="#"> <i
                                                class="material-icons ul-menu-item-icon">reply_all</i>Plugins</a></li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>