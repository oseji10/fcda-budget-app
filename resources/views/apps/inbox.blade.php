@extends('layouts.entry')

@section('content')

<div class="inbox-main-sidebar-container" data-sidebar-container="main">
    <div class="sidebar-overlay"></div>
    <div class="inbox-main-content shadow-6dp" data-sidebar-content="main">
        <!--  SECONDARY SIDEBAR CONTAINER-->
        <div class="inbox-secondary-sidebar-container box-shadow-1" data-sidebar-container="secondary">
            <div data-sidebar-content="secondary">
                <div class="inbox-secondary-sidebar-content position-relative" style="min-height: 500px;">
                    <div class="inbox-topbar bg-card box-shadow-1 perfect-scrollbar rtl-ps-none pl-3 shadow-3dp"
                        data-suppress-scroll-y="true">
                        <!--  <span class="d-sm-none">Test</span>--><a
                            class="link-icon d-lg-none d-flex align-items-center" data-sidebar-toggle="main"><i
                                class="material-icons">arrow_back_ios</i></a><a
                            class="link-icon d-flex align-items-center mr-3 d-lg-none"
                            data-sidebar-toggle="secondary"><i class="material-icons">arrow_back</i> Inbox</a>
                        <div class="d-flex align-items-center"><a class="link-icon mr-3" href="href"><i
                                    class="material-icons align-middle">replay</i> Reply</a><a class="link-icon mr-3"
                                href="href"><i class="material-icons align-middle">forward</i> Forward</a><a
                                class="link-icon mr-3" href="href"><i
                                    class="material-icons align-middle">delete_forever</i> Delete</a></div>
                    </div>
                    <!--  EMAIL DETAILS-->
                    <div class="inbox-details perfect-scrollbar rtl-ps-none" data-suppress-scroll-x="true">
                        <div class="row no-gutters">
                            <div class="mr-2" style="width: 36px;"><img class="rounded-circle"
                                    src="{{asset('images/faces/1.jpg')}}" alt="alt" /></div>
                            <div class="col-xs-12">
                                <p class="m-0">Jhon Doe</p>
                                <p class="text-12 text-muted">20 Dec, 2018</p>
                            </div>
                        </div>
                        <h4 class="mb-3">Confirm your email</h4>
                        <div>
                            <p>Natus consequuntur perspiciatis esse beatae illo quos eaque.</p>
                            <p>Earum, quisquam, fugit? Numquam dolor magni nisi? Suscipit odit, ipsam iusto enim
                                culpa, temporibus vero possimus error voluptates sequi. Iusto ipsam, nihil? Eveniet
                                modi maxime animi excepturi a dignissimos doloribus, inventore sed ratione, ducimus
                                atque earum maiores tenetur officia commodi dicta tempora consequatur non nesciunt
                                ipsam, consequuntur quia fuga aspernatur impedit et? Natus, earum.</p>
                            <blockquote class="blockquote">Earum, quisquam, fugit? Numquam dolor magni nisi?
                                Suscipit odit, ipsam iusto enim culpa, temporibus vero possimus error voluptates
                                sequi.</blockquote>
                            <p>Earum, quisquam, fugit? Numquam dolor magni nisi? Suscipit odit, ipsam iusto enim
                                culpa, temporibus vero possimus error voluptates sequi. Iusto ipsam, nihil? Eveniet
                                modi maxime animi excepturi a dignissimos doloribus, inventore sed ratione, ducimus
                                atque earum maiores tenetur officia commodi dicta tempora consequatur non nesciunt
                                ipsam, consequuntur quia fuga aspernatur impedit et? Natus, earum.</p>
                            <br />Thanks<br />Jhone
                        </div>
                    </div>
                </div>
            </div>
            <!--  Secondary Inbox sidebar-->
            <div class="inbox-secondary-sidebar bg-card perfect-scrollbar rtl-ps-none" data-sidebar="secondary">
                <div class="mb-md"><i class="material-icons sidebar-close" data-sidebar-toggle="secondary">cancel</i>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/1.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/5.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/2.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/3.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/4.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/5.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/4.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
                <div class="mail-item">
                    <div class="avatar"><img src="{{asset('images/faces/9.jpg')}}" alt="alt" /></div>
                    <div class="col-xs-6 details"><span class="name text-muted">John Doe</span>
                        <p class="m-0">Confirm your email</p>
                    </div>
                    <div class="col-xs-3 date"><span class="text-muted">20 Dec 2018</span></div>
                </div>
            </div>
        </div>
    </div>
    <!--  MAIN INBOX SIDEBAR-->
    <div class="inbox-main-sidebar" data-sidebar="main" data-sidebar-position="left">
        <div class="pt-3 px-md pb-3"><i class="sidebar-close material-icons" data-sidebar-toggle="main">cancel</i>
            <button class="btn btn-raised btn-raised-primary btn-block mb-md" type="button">Compose</button>
            <div>
                <p class="text-muted mb-2">Browse</p>
                <ul class="inbox-main-nav">
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons">inbox</i>Inbox</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons">send</i>Sent</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons">folder_special</i> Starred</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons">drafts</i> Draft</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons">error</i> Spam</button>
                    </li>
                    <div class="egret-divider"> </div>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons text-primary">people</i> Social</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons text-danger">local_offer</i> Promotions</button>
                    </li>
                    <li>
                        <button class="btn btn-secondary d-flex btn-block justify-content-start pl-sm mb-sm"><i
                                class="material-icons text-warning">assignment_late</i> Forums</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection