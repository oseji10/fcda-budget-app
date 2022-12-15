<div class="sidebar-3 d-flex">
    <div class="sidebar-panel-aside bg-slate d-flex flex-column">
        <div class="logo mt-md"><img src="{{  asset('images/egret.png')}}" alt=""></div>
        <div class="sidebar-panel-aside-list scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <div class="sidebar-panel-aside-middle flex-1">
                <ul class="text-center p-0 mt-md">
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="Dashboard"><i
                                class="material-icons text-white text-18">dashboard</i></a></li>
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="Order"><i
                                class="material-icons text-white text-18">watch</i></a></li>
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="User Feedback"><i
                                class="material-icons text-white text-18">dynamic_feed</i></a></li>
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="User Settings"><i
                                class="material-icons text-white text-18">settings</i></a></li>
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="Finance Reports"><i
                                class="material-icons text-white text-18">speaker_notes</i></a></li>
                    <li> <a class="btn btn-secondary rounded-circle btn-icon" href="#" data-toggle="tooltip"
                            data-placement="right" title="Card Membership"><i
                                class="material-icons text-white text-18">card_membership</i></a></li>
                </ul>
            </div>
        </div>
        <div class="flex-grow-1"> </div>
        <div>
            <div class="sidebar-panel-aside-list">
                <ul class="text-center p-0 mt-md">
                    <li> <a class="button btn btn-secondary rounded-circle btn-icon" href="#"
                            data-sidebar-panel="asideSearch" data-toggle="tooltip" data-placement="right"
                            title="Search"><i class="material-icons text-white text-18">search</i></a></li>
                    <li>
                        <button class="btn btn-secondary rounded-circle btn-icon btn-badge"
                            data-sidebar-panel="asideNotification" data-toggle="tooltip" data-placement="right"
                            title="Notifications"><span class="badge badge-danger">3</span><i
                                class="material-icons text-white text-18">notifications</i></button>
                    </li>
                    <li>
                        <button class="btn btn-secondary rounded-circle btn-icon"
                            data-sidebar-panel="asideNotificationTab" data-toggle="tooltip" data-placement="right"
                            title="Actions"><i class="material-icons text-white text-18">dashboard</i></button>
                    </li>
                    <li><img class="avatar-xs cursor-pointer rounded-circle" src="{{  asset('images/faces/1.jpg')}}"
                            data-sidebar-panel="asideProfile"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- user-->
    <div class="sidebar-panel-main scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <div class="app-user mt-3 text-center"></div>
        <!-- user close-->
        <!-- side-nav start-->
        <div class="side-nav">
            <div class="main-menu">
                <nav class="sidebar-nav">
                    <ul class="metismenu show-on-load" id="ul-menu">
                        <li class=" {{ Request::is('dashboard/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                href="#"><i class="material-icons nav-icon d-none">dashboard</i>Dashboards</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='learning-management' ? 'mm-active' : '' }}"><a
                                        href="{{route('learning-management')}}"><i class="bullet-icon"></i>Learning
                                        Management</a></li>
                                <li class="{{ Route::currentRouteName()=='job-management' ? 'mm-active' : '' }}"><a
                                        href="{{route('job-management')}}"><i class="bullet-icon"></i>Job
                                        Management</a></li>
                                <li class="{{ Route::currentRouteName()=='analytic' ? 'mm-active' : '' }}"><a
                                        href="{{route('analytic')}}"><i class="bullet-icon"></i>Analytic</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='crypto-currency' ? 'mm-active' : '' }}"><a
                                        href="{{route('crypto-currency')}}"><i
                                            class="bullet-icon"></i>Cryptocurrency</a></li>
                                <li class="{{ Route::currentRouteName()=='sales' ? 'mm-active' : '' }}"><a
                                        href="{{route('sales')}}"><i class="bullet-icon"></i>Sales</a></li>
                                <li class="{{ Route::currentRouteName()=='subscription' ? 'mm-active' : '' }}"><a
                                        href="{{route('subscription')}}"><i class="bullet-icon"></i>Subscription</a>
                                </li>
                            </ul>
                        </li><span class="main-menu-title">CUSTOM</span>
                        <li class="{{ Request::is('pages/*') ? 'mm-active' : '' }}"><a class="has-arrow" href="#"><i
                                    class="material-icons nav-icon d-none">web_asset</i>Pages</a>
                            <ul class="mm-collapse">
                                <li class="{{ Request::is('pages/faq/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i class="material-icons nav-icon d-none">feedback</i>FAQ</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='faq-v1' ? 'mm-active' : '' }}"><a
                                                href="{{route('faq-v1')}}"><i class="bullet-icon"></i>FAQ
                                                V1</a></li>
                                        <li class="{{ Route::currentRouteName()=='faq-v2' ? 'mm-active' : '' }}"><a
                                                href="{{route('faq-v2')}}"><i class="bullet-icon"></i>FAQ
                                                V2</a></li>
                                        <li class="{{ Route::currentRouteName()=='faq-v3' ? 'mm-active' : '' }}"><a
                                                href="{{route('faq-v3')}}"><i class="bullet-icon"></i>FAQ
                                                V3</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pages/list/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i class="material-icons nav-icon d-none">list</i>List</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='column-list' ? 'mm-active' : '' }}"><a
                                                href="{{route('column-list')}}"><i class="bullet-icon"></i>List
                                                Column</a></li>
                                        <li
                                            class="{{ Route::currentRouteName()=='column-list-two' ? 'mm-active' : '' }}">
                                            <a href="{{route('column-list-two')}}"><i class="bullet-icon"></i>List
                                                Column 2</a></li>
                                        <li
                                            class="{{ Route::currentRouteName()=='column-list-three' ? 'mm-active' : '' }}">
                                            <a href="{{route('column-list-three')}}"><i class="bullet-icon"></i>List
                                                Column 3</a></li>
                                        <li
                                            class="{{ Route::currentRouteName()=='column-list-row' ? 'mm-active' : '' }}">
                                            <a href="{{route('column-list-row')}}"><i class="bullet-icon"></i>List
                                                Column Row</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pages/pricing/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i
                                            class="material-icons nav-icon d-none">monetization_on</i>Pricing</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='pricing-v1' ? 'mm-active' : '' }}">
                                            <a href="{{route('pricing-v1')}}"><i class="bullet-icon"></i>Pricing
                                                v1</a></li>
                                        <li class="{{ Route::currentRouteName()=='pricing-v2' ? 'mm-active' : '' }}">
                                            <a href="{{route('pricing-v2')}}"><i class="bullet-icon"></i>Pricing
                                                v2</a></li>
                                        <li class="{{ Route::currentRouteName()=='pricing-v3' ? 'mm-active' : '' }}">
                                            <a href="{{route('pricing-v3')}}"><i class="bullet-icon"></i>Pricing
                                                v3</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pages/invoice/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i class="material-icons nav-icon d-none">all_inbox</i>Invoice</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='invoice-v1' ? 'mm-active' : '' }}">
                                            <a href="{{route('invoice-v1')}}"><i class="bullet-icon"></i>Invoice
                                                v1</a></li>
                                        <li class="{{ Route::currentRouteName()=='invoice-v2' ? 'mm-active' : '' }}">
                                            <a href="{{route('invoice-v2')}}"><i class="bullet-icon"></i>Invoice
                                                v2</a></li>
                                        <li class="{{ Route::currentRouteName()=='invoice-edit' ? 'mm-active' : '' }}">
                                            <a href="{{route('invoice-edit')}}"><i class="bullet-icon"></i>Edit
                                                Invoice</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('pages/profile/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i class="material-icons nav-icon d-none">person</i>Profile</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='profile-v1' ? 'mm-active' : '' }}">
                                            <a href="{{route('profile-v1')}}"><i class="bullet-icon"></i>Profile
                                                v1</a></li>
                                        <li class="{{ Route::currentRouteName()=='profile-v2' ? 'mm-active' : '' }}">
                                            <a href="{{route('profile-v2')}}"><i class="bullet-icon"></i>Profile
                                                v2</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName()=='drag-and-drop' ? 'mm-active' : '' }}">
                                    <a href="{{route('drag-and-drop')}}"><i
                                            class="material-icons nav-icon d-none">open_with</i>Drag
                                        &amp; Drop</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='photo-grid' ? 'mm-active' : '' }}">
                                    <a href="{{route('photo-grid')}}"><i
                                            class="material-icons nav-icon d-none">open_with</i>Photo
                                        Grid</a></li>
                                <li class="{{ Request::is('pages/session/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                        href="#"><i
                                            class="material-icons nav-icon d-none">settings_applications</i>Session</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='error-404' ? 'mm-active' : '' }}">
                                            <a href="{{route('error-404')}}"><i class="bullet-icon"></i>404</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName()=='error-505' ? 'mm-active' : '' }}">
                                            <a href="{{route('error-505')}}"><i class="bullet-icon"></i>error</a>
                                        </li>
                                        <li
                                            class="{{ Route::currentRouteName()=='forgot-password' ? 'mm-active' : '' }}">
                                            <a href="{{route('forgot-password')}}"><i class="bullet-icon"></i>forgot</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName()=='lock-screen' ? 'mm-active' : '' }}">
                                            <a href="{{route('lock-screen')}}"><i class="bullet-icon"></i>lockscreen</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName()=='signin-v1' ? 'mm-active' : '' }}">
                                            <a href="{{route('signin-v1')}}"><i class="bullet-icon"></i>signin</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName()=='signin-v2' ? 'mm-active' : '' }}">
                                            <a href="{{route('signin-v2')}}"><i class="bullet-icon"></i>signin
                                                2</a></li>
                                        <li class="{{ Route::currentRouteName()=='signin-v3' ? 'mm-active' : '' }}">
                                            <a href="{{route('signin-v3')}}"><i class="bullet-icon"></i>signin
                                                3</a></li>
                                        <li class="{{ Route::currentRouteName()=='signin-v4' ? 'mm-active' : '' }}">
                                            <a href="{{route('signin-v4')}}"><i class="bullet-icon"></i>signin
                                                4</a></li>
                                        <li class="{{ Route::currentRouteName()=='signup-v1' ? 'mm-active' : '' }}">
                                            <a href="{{route('signup-v1')}}"><i class="bullet-icon"></i>signup</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName()=='signup-v2' ? 'mm-active' : '' }}">
                                            <a href="{{route('signup-v2')}}"><i class="bullet-icon"></i>signup
                                                2</a></li>
                                        <li class="{{ Route::currentRouteName()=='signup-v3' ? 'mm-active' : '' }}">
                                            <a href="{{route('signup-v3')}}"><i class="bullet-icon"></i>signup
                                                3</a></li>
                                        <li class="{{ Route::currentRouteName()=='signup-v4' ? 'mm-active' : '' }}">
                                            <a href="{{route('signup-v4')}}"><i class="bullet-icon"></i>signup
                                                4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('apps/*') ? 'mm-active' : '' }}"><a class="has-arrow" href="#"><i
                                    class="material-icons nav-icon d-none">web</i>Apps</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='note' ? 'mm-active' : '' }}">
                                    <a href="{{route('note')}}"><i
                                            class="material-icons nav-icon d-none">book</i>Note</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='file-manager' ? 'mm-active' : '' }}">
                                    <a href="{{route('file-manager')}}"><i
                                            class="material-icons nav-icon d-none">save</i>File
                                        Manager</a></li>
                                <li class="{{ Route::currentRouteName()=='inbox' ? 'mm-active' : '' }}">
                                    <a href="{{route('inbox')}}"><i
                                            class="material-icons nav-icon d-none">all_inbox</i>Inbox</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='scrumboard' ? 'mm-active' : '' }}">
                                    <a href="{{route('scrumboard')}}"><i
                                            class="material-icons nav-icon d-none">all_inbox</i>Scrumboard</a></li>
                                <li class="{{ Route::currentRouteName()=='chat' ? 'mm-active' : '' }}">
                                    <a href="{{route('chat')}}"><i
                                            class="material-icons nav-icon d-none">chat</i>Chat</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('blocks/*') ? 'mm-active' : '' }}"><a class="has-arrow" href="#"><i
                                    class="material-icons nav-icon d-none">view_array</i>Blocks</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='sidebar-block' ? 'mm-active' : '' }}">
                                    <a href="{{route('sidebar-block')}}"><i class="bullet-icon"></i>Sidebars</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='credit-card-block' ? 'mm-active' : '' }}">
                                    <a href="{{route('credit-card-block')}}"><i class="bullet-icon"></i>Credit
                                        Cards</a></li>
                            </ul>
                        </li><span class="main-menu-title">DESIGN SYSTEM</span>
                        <li class="{{ Request::is('components/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                href="#"><i
                                    class="material-icons nav-icon d-none">settings_input_component</i>Components</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='accordion' ? 'mm-active' : '' }}">
                                    <a href="{{route('accordion')}}"><i class="bullet-icon"></i>Accordion</a></li>
                                <li class="{{ Route::currentRouteName()=='alert' ? 'mm-active' : '' }}">
                                    <a href="{{route('alert')}}"><i class="bullet-icon"></i>Alert</a></li>
                                <li class="{{ Route::currentRouteName()=='avatar' ? 'mm-active' : '' }}">
                                    <a href="{{route('avatar')}}"><i class="bullet-icon"></i>Avatars</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='badge' ? 'mm-active' : '' }}">
                                    <a href="{{route('badge')}}"><i class="bullet-icon"></i>Badge</a></li>
                                <li class="{{ Route::currentRouteName()=='breadcrumb' ? 'mm-active' : '' }}">
                                    <a href="{{route('breadcrumb')}}"><i class="bullet-icon"></i>Breadcrumb</a></li>
                                <li class="{{ Route::currentRouteName()=='buttons' ? 'mm-active' : '' }}">
                                    <a href="{{route('buttons')}}"><i class="bullet-icon"></i>Buttons</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='dropdown' ? 'mm-active' : '' }}">
                                    <a href="{{route('dropdown')}}"><i class="bullet-icon"></i>Dropdown</a></li>
                                <li class="{{ Route::currentRouteName()=='carousel' ? 'mm-active' : '' }}">
                                    <a href="{{route('carousel')}}"><i class="bullet-icon"></i>Carousel</a></li>
                                <li class="{{ Route::currentRouteName()=='forms' ? 'mm-active' : '' }}">
                                    <a href="{{route('forms')}}"><i class="bullet-icon"></i>Forms</a></li>
                                <li class="{{ Route::currentRouteName()=='forms-layout' ? 'mm-active' : '' }}">
                                    <a href="{{route('forms-layout')}}"><i class="bullet-icon"></i>Forms
                                        Layout</a></li>
                                <li class="{{ Route::currentRouteName()=='list' ? 'mm-active' : '' }}">
                                    <a href="{{route('list')}}"><i class="bullet-icon"></i>List</a></li>
                                <li class="{{ Route::currentRouteName()=='pagination' ? 'mm-active' : '' }}">
                                    <a href="{{route('pagination')}}"><i class="bullet-icon"></i>Pagination</a></li>
                                <li class="{{ Route::currentRouteName()=='popovers' ? 'mm-active' : '' }}">
                                    <a href="{{route('popovers')}}"><i class="bullet-icon"></i>Popovers</a></li>
                                <li class="{{ Route::currentRouteName()=='progressbar' ? 'mm-active' : '' }}">
                                    <a href="{{route('progressbar')}}"><i class="bullet-icon"></i>Progressbar</a></li>
                                <li class="{{ Route::currentRouteName()=='snackbar' ? 'mm-active' : '' }}">
                                    <a href="{{route('snackbar')}}"><i class="bullet-icon"></i>Snackbar</a></li>
                                <li class="{{ Route::currentRouteName()=='tab' ? 'mm-active' : '' }}">
                                    <a href="{{route('tab')}}"><i class="bullet-icon"></i>Tab</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='sweet-alert' ? 'mm-active' : '' }}">
                                    <a href="{{route('sweet-alert')}}"><i class="bullet-icon"></i>SweetAlert
                                        2</a></li>
                                <li class="{{ Route::currentRouteName()=='tooltip' ? 'mm-active' : '' }}">
                                    <a href="{{route('tooltip')}}"><i class="bullet-icon"></i>Tooltip</a>
                                </li>

                                <li class="{{ Route::currentRouteName()=='tour' ? 'mm-active' : '' }}">
                                    <a href="{{route('tour')}}"><i class="bullet-icon"></i>Tour</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('form-widgets/*') ? 'mm-active' : '' }}"><a class="has-arrow"
                                href="#"><i class="material-icons nav-icon d-none">text_format</i>Form
                                Widgets</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='validation' ? 'mm-active' : '' }}">
                                    <a href="{{route('validation')}}"><i class="bullet-icon"></i>Form
                                        Validation</a></li>
                                <li class="{{ Route::currentRouteName()=='datepicker' ? 'mm-active' : '' }}">
                                    <a href="{{route('datepicker')}}"><i class="bullet-icon"></i>Datepicker</a></li>
                                <li class="{{ Route::currentRouteName()=='form-repeater' ? 'mm-active' : '' }}">
                                    <a href="{{route('form-repeater')}}"><i class="bullet-icon"></i>Form
                                        Repeater</a></li>
                                <li class="{{ Route::currentRouteName()=='timepicker' ? 'mm-active' : '' }}">
                                    <a href="{{route('timepicker')}}"><i class="bullet-icon"></i>Time
                                        Picker</a></li>
                                <li class="{{ Route::currentRouteName()=='touchspin' ? 'mm-active' : '' }}">
                                    <a href="{{route('touchspin')}}"><i class="bullet-icon"></i>Touch
                                        Spin</a></li>
                                <li class="{{ Route::currentRouteName()=='bootstrap-maxlength' ? 'mm-active' : '' }}">
                                    <a href="{{route('bootstrap-maxlength')}}"><i class="bullet-icon"></i>Bootstrap
                                        Maxlength</a></li>
                                <li class="{{ Route::currentRouteName()=='bootstrap-tagify' ? 'mm-active' : '' }}">
                                    <a href="{{route('bootstrap-tagify')}}"><i class="bullet-icon"></i>Bootstrap
                                        Tagify</a></li>
                                <li class="{{ Route::currentRouteName()=='select2' ? 'mm-active' : '' }}">
                                    <a href="{{route('select2')}}"><i class="bullet-icon"></i>Select2</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='bootstrap-select' ? 'mm-active' : '' }}">
                                    <a href="{{route('bootstrap-select')}}"><i class="bullet-icon"></i>Bootstrap
                                        Select</a></li>
                                <li class="{{ Route::currentRouteName()=='typehead' ? 'mm-active' : '' }}">
                                    <a href="{{route('typehead')}}"><i class="bullet-icon"></i>Typeahead</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='inputmask' ? 'mm-active' : '' }}">
                                    <a href="{{route('inputmask')}}"><i class="bullet-icon"></i>Inputmask</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='nouislider' ? 'mm-active' : '' }}">
                                    <a href="{{route('nouislider')}}"><i class="bullet-icon"></i>Nouislider</a></li>
                                <li class="{{ Route::currentRouteName()=='clipboard' ? 'mm-active' : '' }}">
                                    <a href="{{route('clipboard')}}"><i class="bullet-icon"></i>Clipboard</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='dropzone' ? 'mm-active' : '' }}">
                                    <a href="{{route('dropzone')}}"><i class="bullet-icon"></i>Dropzone</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='uppy' ? 'mm-active' : '' }}">
                                    <a href="{{route('uppy')}}"><i class="bullet-icon"></i>Uppy</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='filepond' ? 'mm-active' : '' }}">
                                    <a href="{{route('filepond')}}"><i class="bullet-icon"></i>FilePond</a></li>
                                <li class="{{ Route::currentRouteName()=='editor' ? 'mm-active' : '' }}">
                                    <a href="{{route('editor')}}"><i class="bullet-icon"></i>Editor</a>
                                </li>
                                <li class="{{ Route::currentRouteName()=='imagecrop' ? 'mm-active' : '' }}">
                                    <a href="{{route('imagecrop')}}"><i class="bullet-icon"></i>Image
                                        Crop</a></li>
                                <li class="{{ Request::is('form-widgets/wizard/*') ? 'mm-active' : '' }}"><a
                                        class="has-arrow" href="#"><i class="bullet-icon"></i>Wizard</a>
                                    <ul class="mm-collapse">
                                        <li class="{{ Route::currentRouteName()=='wizard1' ? 'mm-active' : '' }}">
                                            <a href="{{route('wizard1')}}"><i class="bullet-icon"></i>Wizard v1</a></li>
                                        <li class="{{ Route::currentRouteName()=='wizard2' ? 'mm-active' : '' }}">
                                            <a href="{{route('wizard2')}}"><i class="bullet-icon"></i>Wizard v2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('widgets/*') ? 'mm-active' : '' }}"><a class="has-arrow" href="#"><i
                                    class="material-icons nav-icon d-none">widgets</i>Widgets</a>
                            <ul class="mm-collapse">
                                <li class="{{ Route::currentRouteName()=='general' ? 'mm-active' : '' }}">
                                    <a href="{{route('general')}}"><i class="bullet-icon"></i>General</a></li>
                                <li class="{{ Route::currentRouteName()=='table' ? 'mm-active' : '' }}">
                                    <a href="{{route('table')}}"><i class="bullet-icon"></i>Table
                                        widgets</a></li>
                                <li class="{{ Route::currentRouteName()=='charts' ? 'mm-active' : '' }}">
                                    <a href="{{route('charts')}}"><i class="bullet-icon"></i>Charts</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li><a class="has-arrow" href="#"><i
                                                    class="material-icons nav-icon d-none">table_chart</i>DataTables</a>
                                            <ul class="mm-collapse">
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>Basic</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="datatables/basic/table.datatables.html"><i
                                                                    class="bullet-icon"></i>Datatable Basic</a></li>
                                                        <li><a href="datatables/basic/table.datatableScrollable.html"><i
                                                                    class="bullet-icon"></i>Scrollable</a></li>
                                                        <li><a href="datatables/basic/table.datatableComplexHeader.html"><i
                                                                    class="bullet-icon"></i>Complex Header</a></li>
                                                        <li><a href="datatables/basic/table.datatablePagintaionOption.html"><i
                                                                    class="bullet-icon"></i>Pagination Option</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>Advanced</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="datatables/advanced/table.datatableColumnRendering.html"><i
                                                                    class="bullet-icon"></i>Column Rendering</a></li>
                                                        <li><a href="datatables/advanced/table.datatableMultipleControl.html"><i
                                                                    class="bullet-icon"></i>Multiple Controls</a></li>
                                                        <li><a href="datatables/advanced/table.datatableRowGrouping.html"><i
                                                                    class="bullet-icon"></i>Row Grouping</a></li>
                                                        <li><a href="datatables/advanced/table.datatableFooterCallback.html"><i
                                                                    class="bullet-icon"></i>Footer Callback</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>Data Source</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="datatables/data-source/table.datatableHTML.html"><i
                                                                    class="bullet-icon"></i>Datatable HTML</a></li>
                                                        <li><a href="datatables/data-source/table.datatableAjax.html"><i
                                                                    class="bullet-icon"></i>Ajax</a></li>
                                                        <li><a href="datatables/data-source/table.datatableJavascript.html"><i
                                                                    class="bullet-icon"></i>Javascript</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>Search Options</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="datatables/search/table.datatableColumnSelect.html"><i
                                                                    class="bullet-icon"></i>Column Select</a></li>
                                                        <li><a href="datatables/search/table.datatableColumnSearch.html"><i
                                                                    class="bullet-icon"></i>Column Search</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>Extensions</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="datatables/extension/table.datatableButton.html"><i
                                                                    class="bullet-icon"></i>Datatable Button</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="datatables/gijgo.grid.html"><i class="bullet-icon"></i>Gijgo
                                                        Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="has-arrow" href="#"><i class="material-icons nav-icon d-none">pie_chart</i>Charts</a>
                                            <ul class="mm-collapse">
                                                <li><a href="charts/charts.eChart.html"><i class="bullet-icon"></i>ECharts</a>
                                                </li>
                                                <li><a href="charts/charts.chartjs.html"><i class="bullet-icon"></i>ChartJS</a>
                                                </li>
                                                <li><a class="has-arrow" href="#"><i class="bullet-icon"></i>ApexChart</a>
                                                    <ul class="mm-collapse">
                                                        <li><a href="charts/apexCharts/apexCharts.area.html"><i
                                                                    class="bullet-icon"></i>Area</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.bar.html"><i
                                                                    class="bullet-icon"></i>Bar</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.bubble.html"><i
                                                                    class="bullet-icon"></i>Bubble</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.candleStick.html"><i
                                                                    class="bullet-icon"></i>Candlestick</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.column.html"><i
                                                                    class="bullet-icon"></i>Column</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.line.html"><i
                                                                    class="bullet-icon"></i>Line</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.mix.html"><i
                                                                    class="bullet-icon"></i>Mix</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.pie.html"><i
                                                                    class="bullet-icon"></i>Pie</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.radar.html"><i
                                                                    class="bullet-icon"></i>Radar</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.RadialBar.html"><i
                                                                    class="bullet-icon"></i>Radialbar</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.sparkline.html"><i
                                                                    class="bullet-icon"></i>Sparkline</a></li>
                                                        <li><a href="charts/apexCharts/apexCharts.scatter.html"><i
                                                                    class="bullet-icon"></i>Scatter</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                        <span class="main-menu-title">SYSTEM UTILITIES</span>
                        <li class="{{ Route::currentRouteName()=='sass-variable' ? 'mm-active' : '' }}">
                            <a href="{{route('sass-variable')}}"><i
                                    class="material-icons nav-icon d-none text-16">style</i>Sass
                                Variables</a></li>
                        <li class="{{ Route::currentRouteName()=='background' ? 'mm-active' : '' }}">
                            <a href="{{route('background')}}"><i
                                    class="material-icons nav-icon d-none text-16">style</i>Backgrounds</a></li>
                        <li class="{{ Route::currentRouteName()=='colors' ? 'mm-active' : '' }}">
                            <a href="{{route('colors')}}"><i
                                    class="material-icons nav-icon d-none text-16">color_lens</i>Colors</a>
                        </li>
                        <li class="{{ Route::currentRouteName()=='shadow' ? 'mm-active' : '' }}">
                            <a href="{{route('shadow')}}"><i
                                    class="material-icons nav-icon d-none text-16">flip_to_front</i>Shadows</a></li>
                        <li class="{{ Route::currentRouteName()=='spacing' ? 'mm-active' : '' }}">
                            <a href="{{route('spacing')}}"><i
                                    class="material-icons nav-icon d-none text-16">space_bar</i>Spacings</a>
                        </li>
                        <li class="{{ Route::currentRouteName()=='typography' ? 'mm-active' : '' }}">
                            <a href="{{route('typography')}}"><i
                                    class="material-icons nav-icon d-none text-16">text_fields</i>Typography</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>