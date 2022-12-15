<!-- header start-->
<div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="{{  asset('images/egret.png')}}" alt="">
    <div class="flex-grow-1"></div>
    <button class="btn btn-icon btn-primary rounded-circle ul-header-menu-toggle text-white"><i
            class="material-icons">menu</i></button><i
        class="material-icons text-white ul-mobile-header-toggle">more_vert</i>
</div>
<div class="ul-header-4 px-md">
    <div class="ul-header-4-content">
        <div class="ul-header-topbar">
            <div class="flex-grow-1"><img class="logo" src="{{  asset('images/egret.png')}}"></div>
            <div class="ul-search-full-width">
                <button class="toggle-search btn btn-secondary rounded-circle btn-icon mr-2" type="button"><i
                        class="material-icons">search</i></button>
                <div class="ul-search-input-area">
                    <input id="app-search" type="text" placeholder="Explore Egret..." aria-label="Search">
                    <button class="btn btn-secondary rounded-circle btn-icon toggle-search" type="button"><i
                            class="material-icons">close</i></button>
                </div>
                <div class="ul-search-result-area" data-perfect-scrollbar="" data-suppress-scroll-x="false">
                    <div class="search-result"></div>
                </div>
            </div>
            <div class="dropdown language-dropdown">
                <div class="header-btn-group">
                    <button class="btn btn-secondary rounded-circle btn-icon mr-2" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img class="avatar-xs rounded-circle"
                            src="{{  asset('images/flags/1x1/us.svg')}}" alt=""></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#"> <img
                                class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/us.svg')}}"
                                alt="">English</a><a class="dropdown-item" href="#"> <img
                                class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/es.svg')}}"
                                alt="">Spanish</a><a class="dropdown-item" href="#"> <img
                                class="avatar-xxs rounded-circle mr-sm" src="{{  asset('images/flags/1x1/in.svg')}}"
                                alt="">Hindi</a></div>
                </div>
            </div>
            <button class="btn btn-secondary rounded-circle btn-icon btn-badge mr-2"
                data-sidebar-panel="asideNotification"><span class="badge badge-danger">3</span><i
                    class="material-icons">notifications</i></button>
            <div class="dropdown profile-dropdown">
                <div class="header-btn-group">
                    <button class="btn btn-secondary rounded-circle btn-icon" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img class="rounded-circle"
                            src="{{  asset('images/faces/1.jpg')}}" alt=""></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#"><i
                                class="material-icons mr-2">person</i> Profile</a><a class="dropdown-item" href="#"><i
                                class="material-icons mr-2">settings</i>Account setting</a><a class="dropdown-item"
                            href="#"><i class="material-icons mr-2">notifications_off</i>Disable alerts</a><a
                            class="dropdown-item" href="#"><i class="material-icons mr-2">exit_to_app</i>Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header close-->