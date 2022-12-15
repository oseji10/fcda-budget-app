@extends('layouts.entry')

@section('content')

<div class="row">
  <div class="col-md-6">
    <h2 class="doc-section-title" id="examples">Default List<a class="section-link" href="#examples"></a></h2>
    <div class="doc-example">
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <List>Item One</List><span class="badge badge-primary badge-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <List>Item Two</List><span class="badge badge-primary badge-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <List>Item Three</List><span class="badge badge-primary badge-pill">1</span>
        </li>
      </ul>
    </div>
    <div class="copy-code">
      <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      List Item One
      &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;14&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      List Item Two
      &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;2&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      List Item Three
      &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;1&lt;/span&gt;
    &lt;/li&gt;
  &lt;/ul&gt;"></code>
  </div>
  <div class="col-md-6">
    <h2 class="doc-section-title" id="examples">Egret List<a class="section-link" href="#examples"></a></h2>
    <div class="doc-example">
      <div class="ul-list-group-1">
        <div class="ul-list-item">
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge badge-opacity badge-rectangle badge-success mr-md"> <i
                class="material-icons">view_week</i></span>
            <div class="flex-grow-1">
              <h6 class="text-13 font-weight-normal m-0">Data structure test</h6>
              <small class="text-muted">23 December 2019</small>
            </div>
            <div class="ul-list-item-action">
              <button class="btn rounded-circle btn-icon">
                <i class="material-icons text-success">play_circle_outline</i>
              </button>
            </div>
          </div>
        </div>
        <div class="ul-list-item">
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge badge-opacity badge-rectangle badge-primary mr-md"> <i
                class="material-icons">library_books</i></span>
            <div class="flex-grow-1">
              <h6 class="text-13 font-weight-normal m-0">Design pattern test</h6>
              <small class="text-muted">23 December 2019</small>
            </div>
            <div class="ul-list-item-action">
              <button class="btn rounded-circle btn-icon">
                <i class="material-icons text-primary">play_circle_outline</i>
              </button>
            </div>
          </div>
        </div>
        <div class="ul-list-item">
          <div class="d-flex justify-content-between align-items-center">
            <span class="badge badge-opacity badge-rectangle badge-secondary mr-md"> <i
                class="material-icons">games</i></span>
            <div class="flex-grow-1">
              <h6 class="text-13 font-weight-normal m-0">Algorithm test</h6>
              <small class="text-muted">23 December 2019</small>
            </div>
            <div class="ul-list-item-action">
              <button class="btn rounded-circle btn-icon">
                <i class="material-icons text-secondary">play_circle_outline</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-code">
      <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div class=&quot;ul-list-group-1&quot;&gt;
    &lt;div class=&quot;ul-list-item&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
        &lt;span class=&quot;badge badge-opacity badge-rectangle badge-success mr-md&quot;&gt; &lt;i class=&quot;material-icons&quot;&gt;view_week&lt;/i&gt;&lt;/span&gt;
        &lt;div class=&quot;flex-grow-1&quot;&gt;
          &lt;h6 class=&quot;text-13 font-weight-normal m-0&quot;&gt;Data structure test&lt;/h6&gt;
          &lt;small class=&quot;text-muted&quot;&gt;23 December 2019&lt;/small&gt;
        &lt;/div&gt;
        &lt;div class=&quot;ul-list-item-action&quot;&gt;
          &lt;button class=&quot;btn rounded-circle btn-icon&quot;&gt;
            &lt;i class=&quot;material-icons text-success&quot;&gt;play_circle_outline&lt;/i&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class=&quot;ul-list-item&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
        &lt;span class=&quot;badge badge-opacity badge-rectangle badge-primary mr-md&quot;&gt; &lt;i class=&quot;material-icons&quot;&gt;library_books&lt;/i&gt;&lt;/span&gt;
        &lt;div class=&quot;flex-grow-1&quot;&gt;
          &lt;h6 class=&quot;text-13 font-weight-normal m-0&quot;&gt;Design pattern test&lt;/h6&gt;
          &lt;small class=&quot;text-muted&quot;&gt;23 December 2019&lt;/small&gt;
        &lt;/div&gt;
        &lt;div class=&quot;ul-list-item-action&quot;&gt;
          &lt;button class=&quot;btn rounded-circle btn-icon&quot;&gt;
            &lt;i class=&quot;material-icons text-primary&quot;&gt;play_circle_outline&lt;/i&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
    &lt;div class=&quot;ul-list-item&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-between align-items-center&quot;&gt;
        &lt;span class=&quot;badge badge-opacity badge-rectangle badge-secondary mr-md&quot;&gt; &lt;i class=&quot;material-icons&quot;&gt;games&lt;/i&gt;&lt;/span&gt;
        &lt;div class=&quot;flex-grow-1&quot;&gt;
          &lt;h6 class=&quot;text-13 font-weight-normal m-0&quot;&gt;Algorithm test&lt;/h6&gt;
          &lt;small class=&quot;text-muted&quot;&gt;23 December 2019&lt;/small&gt;
        &lt;/div&gt;
        &lt;div class=&quot;ul-list-item-action&quot;&gt;
          &lt;button class=&quot;btn rounded-circle btn-icon&quot;&gt;
            &lt;i class=&quot;material-icons text-secondary&quot;&gt;play_circle_outline&lt;/i&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  
  &lt;/div&gt;"></code>
  </div>
</div>
<h2 class="doc-section-title" id="examples">Fancy Egret List<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="list-group ul-list-group-2">
    <div class="list-group-item"><img class="item-thumbnail" src="{{  asset('images/logos/logo-8.png')}}" alt="" />
      <div class="item-content">
        <h4>Full Stack Javascript Engineer.</h4>
        <div class="item-footer"><span><i class="text-primary fas fa-building"></i>On site</span><span><i
              class="text-success fas fa-map-marker-alt"></i>Hyderabad</span><span><i
              class="text-danger fas fa-user-clock"></i>Full Time</span><span><i class="text-warning fas fa-clock"></i>2
            days ago</span></div>
      </div>
      <div class="item-action">
        <button class="btn btn-raised btn-raised-light">apply now</button>
      </div>
    </div>
    <div class="list-group-item"><span class="item-icon"><i class="fas fa-user-tie m-0"></i></span>
      <div class="item-content">
        <h4>Vertual Assistance</h4>
        <div class="item-footer"><span><i class="text-primary fas fa-globe"></i>Remote</span><span><i
              class="text-success fas fa-map-marker-alt"></i>Delhi</span><span><i
              class="text-danger fas fa-user-clock"></i>Part Time</span><span><i class="text-warning fas fa-clock"></i>7
            days ago</span></div>
      </div>
      <div class="item-action">
        <button class="btn btn-raised btn-raised-light">apply now</button>
      </div>
    </div>
    <div class="list-group-item"><img class="item-thumbnail" src="{{  asset('images/logos/logo-4.png')}}" alt="" />
      <div class="item-content">
        <h4>Front End Developer (React)</h4>
        <div class="item-footer"><span><i class="text-primary fas fa-globe"></i>Remote</span><span><i
              class="text-success fas fa-map-marker-alt"></i>San Francisco</span><span><i
              class="text-danger fas fa-user-clock"></i>Full Time</span><span><i class="text-warning fas fa-clock"></i>3
            days ago</span></div>
      </div>
      <div class="item-action">
        <button class="btn btn-raised btn-raised-light">apply now</button>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code=""></code>

@endsection