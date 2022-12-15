@extends('layouts.entry')
@section('content')

<h2 class="doc-section-title" id="examples">Dragula<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="parent ex-1">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="left-defaults">
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Software Engineer</h6>
                                <p class="text-muted m-0">Tim Clarkson</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/2.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Unit Testing Engineer</h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/3.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">UI/UX Designer</h6>
                                <p class="text-muted m-0">Bloodhound</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/4.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Backend Developer</h6>
                                <p class="text-muted m-0">Wraith</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/5.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Frontend Developer</h6>
                                <p class="text-muted m-0">Phantom Jhon</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="right-defaults">
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Software Engineer</h6>
                                <p class="text-muted m-0">Tim Clarkson</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/5.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Unit Testing Engineer</h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/4.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">UI/UX Designer</h6>
                                <p class="text-muted m-0">Bloodhound</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/3.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Backend Developer</h6>
                                <p class="text-muted m-0">Wraith</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div
                            class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/2.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1 text-sm-left text-center">
                                <h6 class="m-0">Frontend Developer</h6>
                                <p class="text-muted m-0">Phantom Jhon</p>
                            </div>
                            <button class="btn btn-raised-primary btn-sm">View </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
    dragula([document.getElementById(&quot;left-defaults&quot;), document.getElementById(&quot;right-defaults&quot;)])
        .on(&quot;drag&quot;, function (el) {
        console.log(el);
        el.className += &quot; el-drag-ex-1&quot;;
        }).on(&quot;drop&quot;, function (el) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-1&quot;, &quot;);
        }).on(&quot;cancel&quot;, function (el) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-1&quot;, &quot;);
    });"></code>
<h2 class="doc-section-title" id="examples">Icon Change<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="parent ex-1">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="left-events">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Software Engineer</h6>
                                <p class="text-muted m-0">Tim Clarkson</p>
                            </div><i class="material-icons text-warning">grade </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/2.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Unit Testing Engineer</h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div><i class="material-icons text-warning">grade </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/3.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">UI/UX Designer</h6>
                                <p class="text-muted m-0">Bloodhound</p>
                            </div><i class="material-icons text-warning">grade </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/4.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Backend Developer</h6>
                                <p class="text-muted m-0">Wraith</p>
                            </div><i class="material-icons text-warning">grade </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/5.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Frontend Developer</h6>
                                <p class="text-muted m-0">Phantom Jhon</p>
                            </div><i class="material-icons text-warning">grade </i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="right-events">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Software Engineer</h6>
                                <p class="text-muted m-0">Tim Clarkson</p>
                            </div><i class="material-icons text-danger">favorite </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/5.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Unit Testing Engineer</h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div><i class="material-icons text-danger">favorite </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/4.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">UI/UX Designer</h6>
                                <p class="text-muted m-0">Bloodhound</p>
                            </div><i class="material-icons text-danger">favorite </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/3.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Backend Developer</h6>
                                <p class="text-muted m-0">Wraith</p>
                            </div><i class="material-icons text-danger">favorite </i>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex text-sm-left text-center"><img
                                class="avatar-md rounded-circle mr-2" src="{{  asset('images/faces/2.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Frontend Developer</h6>
                                <p class="text-muted m-0">Phantom Jhon</p>
                            </div><i class="material-icons text-danger">favorite </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
  &lt;script&gt;
    dragula([document.getElementById(&quot;left-events&quot;), document.getElementById(&quot;right-events&quot;)])
        .on(&quot;drag&quot;, function (el) {
        console.log(el);
        el.className += &quot; el-drag-ex-2&quot;;
        el.className = el.className.replace(&quot;ex-move&quot;, &quot;);
        })
        .on(&quot;drop&quot;, function (el, target, source, sibling) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-2&quot;, &quot;);
        el.className += &quot; ex-moved&quot;;
        })
        .on(&quot;over&quot;, function (el, container) {
        container.className += &quot; ex-over&quot;;
        })
        .on(&quot;out&quot;, function (el, container) {
        container.className = container.className.replace(&quot;ex-over&quot;, &quot;);
        })
        .on(&quot;cancel&quot;, function (el) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-2&quot;, &quot;);
    });
  &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="examples">Delete User<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="parent ex-1">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="left-remove">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex align-items-center text-sm-left text-center"><img
                                class="avatar-md rounded mr-2 mb-md" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div>
                                <h6 class="mb-1">Richard McClintock, a Latin professor <a class="badge badge-primary"
                                        href="#">Status</a></h6>
                                <p class="text-muted m-0">05 min ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex align-items-center text-sm-left text-center"><img
                                class="avatar-md rounded mr-2 mb-md" src="{{  asset('images/faces/2.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="mb-1">The standard chunk of Lorem Ipsum <a class="badge badge-primary"
                                        href="#">Status</a></h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="right-remove">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex align-items-center text-sm-left text-center"><img
                                class="avatar-md rounded mr-2 mb-md" src="{{  asset('images/faces/1.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">All the Lorem Ipsum generators on the Internet <a
                                        class="badge badge-primary" href="#">Status</a></h6>
                                <p class="text-muted m-0">Tim Clarkson</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex align-items-center text-sm-left text-center"><img
                                class="avatar-md rounded mr-2 mb-md" src="{{  asset('images/faces/5.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">The standard chunk of Lorem Ipsum <a class="badge badge-primary"
                                        href="#">Status</a></h6>
                                <p class="text-muted m-0">Jhon Doe</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-sm-flex align-items-center text-sm-left text-center"><img
                                class="avatar-md rounded mr-2 mb-md" src="{{  asset('images/faces/4.jpg')}}" alt=""
                                srcset="" />
                            <div class="flex-grow-1">
                                <h6 class="m-0">Lorem Ipsum is not simply random text <a class="badge badge-primary"
                                        href="#">Status</a></h6>
                                <p class="text-muted m-0">Bloodhound</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;script&gt;
  dragula([document.getElementById(&quot;left-remove&quot;), document.getElementById(&quot;right-remove&quot;)], { removeOnSpill: true })
      .on(&quot;drag&quot;, function (el) {
      console.log(el);
      el.className += &quot; el-drag-ex-3&quot;;
      }).on(&quot;drop&quot;, function (el) {
      console.log(el);
      el.className = el.className.replace(&quot;el-drag-ex-3&quot;, &quot;);
      }).on(&quot;cancel&quot;, function (el) {
      console.log(el);
      el.className = el.className.replace(&quot;el-drag-ex-3&quot;, &quot;);
    });
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="examples">News Feed<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="parent ex-1">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="left-feed">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body">
                            <div class="d-sm-flex text-sm-left text-center"><img class="avatar-md rounded mr-2"
                                    src="{{  asset('images/faces/2.jpg')}}" alt="" srcset="" />
                                <div class="flex-1">
                                    <h6 class="font-weight-normal mb-1">Jhon Doe</h6>
                                    <p class="text-muted text-12">08 hours ago</p>
                                </div>
                            </div>
                            <div class="text-sm-left text-center my-lg">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-5 avatar-group m-0 text-sm-left text-center"><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/5.jpg')}}" />
                                </div>
                                <div class="col-lg-6 col-sm-7 text-sm-right text-center"><span><a href="#">Tom
                                            Hiddle</a> and 12 other like this</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body">
                            <div class="d-sm-flex text-sm-left text-center"><img class="avatar-md rounded mr-2"
                                    src="{{  asset('images/faces/4.jpg')}}" alt="" srcset="" />
                                <div class="flex-1">
                                    <h6 class="font-weight-normal mb-1">Jhon Doe</h6>
                                    <p class="text-muted text-12">08 hours ago</p>
                                </div>
                            </div>
                            <div class="text-sm-left text-center my-lg">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-5 avatar-group m-0 text-sm-left text-center"><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/5.jpg')}}" />
                                </div>
                                <div class="col-lg-6 col-sm-7 text-sm-right text-center"><span><a href="#">Tom
                                            Hiddle</a> and 12 other like this</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="right-feed">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body">
                            <div class="d-sm-flex text-sm-left text-center"><img class="avatar-md rounded mr-2"
                                    src="{{  asset('images/faces/4.jpg')}}" alt="" srcset="" />
                                <div class="flex-1">
                                    <h6 class="font-weight-normal mb-1">Jhon Doe</h6>
                                    <p class="text-muted text-12">08 hours ago</p>
                                </div>
                            </div>
                            <div class="text-sm-left text-center my-lg">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-5 avatar-group m-0 text-sm-left text-center"><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/5.jpg')}}" />
                                </div>
                                <div class="col-lg-6 col-sm-7 text-sm-right text-center"><span><a href="#">Tom
                                            Hiddle</a> and 12 other like this</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body">
                            <div class="d-sm-flex text-sm-left text-center"><img class="avatar-md rounded mr-2"
                                    src="{{  asset('images/faces/5.jpg')}}" alt="" srcset="" />
                                <div class="flex-1">
                                    <h6 class="font-weight-normal mb-1">Jhon Doe</h6>
                                    <p class="text-muted text-12">08 hours ago</p>
                                </div>
                            </div>
                            <div class="text-sm-left text-center my-lg">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-5 avatar-group m-0 text-sm-left text-center"><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                        class="avatar-sm rounded-circle" src="{{  asset('images/faces/5.jpg')}}" />
                                </div>
                                <div class="col-lg-6 col-sm-7 text-sm-right text-center"><span><a href="#">Tom
                                            Hiddle</a> and 12 other like this</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;script&gt;
  dragula([document.getElementById(&quot;left-feed&quot;), document.getElementById(&quot;right-feed&quot;)])
        .on(&quot;drag&quot;, function (el) {
        console.log(el);
        el.className += &quot; el-drag-ex-1&quot;;
        }).on(&quot;drop&quot;, function (el) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-1&quot;, &quot;);
        }).on(&quot;cancel&quot;, function (el) {
        console.log(el);
        el.className = el.className.replace(&quot;el-drag-ex-1&quot;, &quot;);
    });
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="examples">Drag Handler<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="parent ex-1">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="left-handle">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>Head Of Dept</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>IT Tech</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>Sr Data Analysist</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="dragula" id="right-handle">
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>HR Manager</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>Sr Frontend Engineer</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-md cursor-pointer">
                        <div class="card-body d-block d-xl-flex">
                            <div class="avatar-group text-center text-sm-left mr-2"><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/3.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/4.jpg')}}" /><img
                                    class="avatar-md rounded-circle" src="{{  asset('images/faces/5.jpg')}}" /></div>
                            <div class="flex-1">
                                <div
                                    class="d-sm-flex d-block justify-content-between text-sm-left text-center align-items-center">
                                    <div>Sr Backend Engineer</div>
                                    <div><span class="badge badge-opacity badge-primary mx-auto"><i
                                                class="material-icons handle cursor-move">add</i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;script&gt;
   dragula([document.getElementById(&quot;left-handle&quot;), document.getElementById(&quot;right-handle&quot;)], {
      
      moves: function (el, container, handle) {
        return handle.classList.contains(&quot;handle&quot;);
      }
      }).on(&quot;drag&quot;, function (el) {
      console.log(el);
      el.className += &quot; el-drag-ex-5&quot;;
      }).on(&quot;drop&quot;, function (el) {
      console.log(el);
      el.className = el.className.replace(&quot;el-drag-ex-5&quot;, &quot;);
      }).on(&quot;cancel&quot;, function (el) {
      console.log(el);
      el.className = el.className.replace(&quot;el-drag-ex-5&quot;, &quot;);
    })
  &lt;/script&gt;"></code>

@endsection