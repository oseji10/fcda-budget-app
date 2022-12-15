@extends('layouts.entry')

@section('content')


<h2 class="doc-section-title" id="examples">Basic Dropdown<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="dropdown d-inline">
    <button class="btn btn-opacity btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="material-icons text-14">settings</i>Click Me</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
      &lt;i class=&quot;material-icons text-14&quot;&gt;
         build
      &lt;/i&gt;
       button
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  "></code>
<h2 class="doc-section-title" id="examples">Dropdown items with Icon<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="dropdown d-inline">
    <button class="btn btn-opacity btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Click Me</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">assignment</i>Action</a>
      <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">message</i>Another action</a>
      <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">settings</i>Something </a>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;dropdown d-inline&quot;&gt;
    &lt;button class=&quot;btn btn-opacity btn-primary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
      Click Me
    &lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;assignment&lt;/i&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;message&lt;/i&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;settings&lt;/i&gt;Something &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Avatar Dropdown<a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex">
  <div class="dropdown">
    <button class="btn btn-raised-primary pr-sm pl-md rounded" type="button" id="dropdownMenuButton"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="m-0 text-white mr-2">Clarkson</span>
      <img class="avatar-xs rounded-circle mr-1" src="{{  asset('images/avatars/003-man-1.svg')}}">
    </button>
    <div class="" aria-labelledby="dropdownMenuButton">
      <div class="card dropdown-menu p-0 ul-avatar-dropdown">
        <div class="card-header bg-primary">
          <div class="ul-avatar-dropdown-container">
            <img class="avatar-md rounded-circle mr-2" src="{{  asset('images/avatars/003-man-1.svg')}}">
            <div class="content">
              <p class="font-weight-semi text-white m-0">Jhon Clark</p>
              <p class="text-small text-muted my-xs">BTS,func Idi</p>
            </div>
          </div>
        </div>
        <div class="mt-xl">
          <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">account_box</i>My
            Profile</a>
          <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">assignment</i>My Tasks</a>
          <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">message</i>Messages</a>
          <a class="dropdown-item link-alt" href="#"><i class="material-icons icon icon-sm">settings</i>Settings</a>
        </div>
        <div class="card-footer text-muted">
          <button type="button" class="btn btn-raised btn-raised-primary btn-sm">SIGN OUT</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button class=&quot;btn btn-raised-primary p-2 rounded&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
      &lt;span class=&quot;m-0 text-white mr-2&quot;&gt;Clarkson&lt;/span&gt;
      &lt;img class=&quot;avatar-xs rounded-circle mr-1&quot; src=&quot;{{  asset('images/faces/1.jpg')}}&quot;&gt;
    &lt;/button&gt;
  
    &lt;div class=&quot;&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
      &lt;div class=&quot;card dropdown-menu p-0 ul-avatar-dropdown&quot;&gt;
        &lt;div class=&quot;card-header bg-primary&quot;&gt;
          &lt;div class=&quot;ul-avatar-dropdown-container&quot;&gt;
            &lt;img class=&quot;avatar-md rounded-circle mr-2&quot; src=&quot;{{  asset('images/faces/1.jpg')}}&quot;&gt;
            &lt;div class=&quot;content&quot;&gt;
              &lt;p class=&quot;font-weight-semi text-white m-0&quot;&gt;Jhon Clark&lt;/p&gt;
              &lt;p class=&quot;text-small text-muted my-xs&quot;&gt;BTS,func Idi&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;mt-xl&quot;&gt;
          &lt;a class=&quot;dropdown-item link-alt&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;account_box&lt;/i&gt;My Profile&lt;/a&gt;
          &lt;a class=&quot;dropdown-item link-alt&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;assignment&lt;/i&gt;My Tasks&lt;/a&gt;
          &lt;a class=&quot;dropdown-item link-alt&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;message&lt;/i&gt;Messages&lt;/a&gt;
          &lt;a class=&quot;dropdown-item link-alt&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;settings&lt;/i&gt;Settings&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-footer text-muted&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary btn-sm&quot;&gt;SIGN OUT&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Icon Notification<a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex">
  <div class="dropdown">
    <button class="btn btn-raised btn-raised-primary rounded-circle btn-icon" id="dropdownMenuButton"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="material-icons">notifications</i>
    </button>
    <div class="" aria-labelledby="dropdownMenuButton">
      <div class="card dropdown-menu p-0 ul-notification">
        <div class="card-header bg-primary d-flex flex-column">
          <h3 class="card-title text-white">User Notification</h3>
          <a href="#" class="badge badge-white text-muted shadow-2dp ul-notification-alert">40 Notifications</a>
        </div>
        <div class="ul-scroll-dropdown" data-perfect-scrollbar="" data-suppress-scroll-x="true">
          <div class="mt-xs mb-lg ul-notification-scrolldown">
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-success">receipt</i>
              <div class="d-flex flex-column">
                <p class="m-0">New Order Has Been Received</p>
                <p class="text-muted m-0">2 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-primary">how_to_reg</i>
              <div class="d-flex flex-column">
                <p class="m-0">New Customer Has Been Received</p>
                <p class="text-muted m-0">4 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-warning">done_all</i>
              <div class="d-flex flex-column">
                <p class="m-0">Application has been approved</p>
                <p class="text-muted m-0">2 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-danger">add_shopping_cart</i>
              <div class="d-flex flex-column">
                <p class="m-0">New Order Has Been Received</p>
                <p class="text-muted m-0">2 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-primary">how_to_reg</i>
              <div class="d-flex flex-column">
                <p class="m-0">New Customer Has Been Received</p>
                <p class="text-muted m-0">4 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-warning">done_all</i>
              <div class="d-flex flex-column">
                <p class="m-0">Application has been approved</p>
                <p class="text-muted m-0">2 hrs ago</p>
              </div>
            </a>
            <a class="dropdown-item" href="#"><i class="material-icons text-20 text-danger">add_shopping_cart</i>
              <div class="d-flex flex-column">
                <p class="m-0">New Order Has Been Received</p>
                <p class="text-muted m-0">2 hrs ago</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;dropdown&quot;&gt;
    &lt;button class=&quot;btn btn-raised btn-raised-primary rounded-circle btn-icon&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
      &lt;i class=&quot;material-icons&quot;&gt;notifications&lt;/i&gt;
    &lt;/button&gt;
  
    &lt;div class=&quot;&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
      
        &lt;div class=&quot;card dropdown-menu p-0 ul-notification&quot;&gt;
          &lt;div class=&quot;card-header bg-primary d-flex flex-column&quot;&gt;
            &lt;h3 class=&quot;card-title text-white&quot;&gt;User Notification&lt;/h3&gt;
            &lt;a href=&quot;#&quot; class=&quot;badge badge-white text-muted shadow-2dp ul-notification-alert&quot;&gt;40 Notifications&lt;/a&gt;
          &lt;/div&gt;
          &lt;div class=&quot;ul-scroll-dropdown&quot; data-perfect-scrollbar=&quot;&quot; data-suppress-scroll-x=&quot;true&quot;&gt;
              &lt;div class=&quot;mt-xl ul-notification-scrolldown&quot;&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-success&quot;&gt;receipt&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;New Order Has Been Received&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;2 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-primary&quot;&gt;how_to_reg&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;New Customer Has Been Received&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;4 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-warning&quot;&gt;done_all&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;Application has been approved&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;2 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-danger&quot;&gt;add_shopping_cart&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;New Order Has Been Received&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;2 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-primary&quot;&gt;how_to_reg&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;New Customer Has Been Received&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;4 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-warning&quot;&gt;done_all&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;Application has been approved&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;2 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons text-20 text-danger&quot;&gt;add_shopping_cart&lt;/i&gt;
                  &lt;div class=&quot;d-flex flex-column&quot;&gt;
                    &lt;p class=&quot;m-0&quot;&gt;New Order Has Been Received&lt;/p&gt;
                    &lt;p class=&quot;text-muted m-0&quot;&gt;2 hrs ago&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/a&gt;
                
              &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
  
    &lt;/div&gt;
  &lt;/div&gt;"></code>



@endsection