@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Nav pills</h2>
<div class="doc-example">
  <div class="nav-pills-primary">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
          role="tab" aria-controls="pills-home" aria-selected="true">Home</a></li>
      <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
          role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a></li>
      <li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
          role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a></li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <p>Lorem, ipsum dolor. 1</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <p>Lorem, ipsum dolor. 2</p>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <p>Lorem, ipsum dolor. 3</p>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;nav-pills-primary&quot;&gt;
    &lt;ul class=&quot;nav nav-pills mb-3&quot; id=&quot;pills-tab&quot; role=&quot;tablist&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link active&quot;
          id=&quot;pills-home-tab&quot;
          data-toggle=&quot;pill&quot;
          href=&quot;#pills-home&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;pills-home&quot;
          aria-selected=&quot;true&quot;
          &gt;Home&lt;/a
        &gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link&quot;
          id=&quot;pills-profile-tab&quot;
          data-toggle=&quot;pill&quot;
          href=&quot;#pills-profile&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;pills-profile&quot;
          aria-selected=&quot;false&quot;
          &gt;Profile&lt;/a
        &gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link&quot;
          id=&quot;pills-contact-tab&quot;
          data-toggle=&quot;pill&quot;
          href=&quot;#pills-contact&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;pills-contact&quot;
          aria-selected=&quot;false&quot;
          &gt;Contact&lt;/a
        &gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
      &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;pills-home&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;pills-home-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 1&lt;/p&gt;
      &lt;/div&gt;
      &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;pills-profile&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;pills-profile-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 2&lt;/p&gt;
      &lt;/div&gt;
      &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;pills-contact&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;pills-contact-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 3&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Nav Button pills</h2>
<div class="doc-example">
  <div class="nav-pills-primary">
    <div class="text-center">
      <ul class="nav nav-pills nav-pill-rounded mb-3 shadow-3dp" id="pills-tab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="demo-1" data-toggle="pill" href="#demo-pills-1" role="tab"
            aria-controls="demo-pills-1" aria-selected="true">Home</a></li>
        <li class="nav-item"><a class="nav-link" id="demo-2" data-toggle="pill" href="#demo-pills-2" role="tab"
            aria-controls="demo-pills-2" aria-selected="false">Profile</a></li>
      </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="demo-pills-1" role="tabpanel" aria-labelledby="demo-1">
        <p>Lorem, ipsum dolor. 1</p>
      </div>
      <div class="tab-pane fade" id="demo-pills-2" role="tabpanel" aria-labelledby="demo-2">
        <p>Lorem, ipsum dolor. 2</p>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;nav-pills-primary&quot;&gt;
    &lt;div class=&quot;text-center&quot;&gt;
      &lt;ul class=&quot;nav nav-pills nav-pill-rounded mb-3 shadow-3dp&quot; id=&quot;pills-tab&quot; role=&quot;tablist&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; id=&quot;demo-1&quot; data-toggle=&quot;pill&quot; href=&quot;#demo-pills-1&quot; role=&quot;tab&quot; aria-controls=&quot;demo-pills-1&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; id=&quot;demo-2&quot; data-toggle=&quot;pill&quot; href=&quot;#demo-pills-2&quot; role=&quot;tab&quot; aria-controls=&quot;demo-pills-2&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
    
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
        &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;demo-pills-1&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;demo-1&quot;&gt;
            &lt;p&gt;Lorem, ipsum dolor. 1&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tab-pane fade&quot; id=&quot;demo-pills-2&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;demo-2&quot;&gt;
            &lt;p&gt;Lorem, ipsum dolor. 2&lt;/p&gt;
        &lt;/div&gt;
    
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Nav Tabs</h2>
<div class="doc-example">
  <div class="nav-tabs-primary">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
          aria-controls="home" aria-selected="true">Home</a></li>
      <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
          aria-controls="profile" aria-selected="false">Profile</a></li>
      <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
          aria-controls="contact" aria-selected="false">Contact</a></li>
    </ul>
    <div class="tab-content p-16" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <p>Lorem, ipsum dolor. 1</p>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p>Lorem, ipsum dolor. 2</p>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <p>Lorem, ipsum dolor. 3</p>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;nav-tabs-primary&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link active&quot;
          id=&quot;home-tab&quot;
          data-toggle=&quot;tab&quot;
          href=&quot;#home&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;home&quot;
          aria-selected=&quot;true&quot;
          &gt;Home&lt;/a
        &gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link&quot;
          id=&quot;profile-tab&quot;
          data-toggle=&quot;tab&quot;
          href=&quot;#profile&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;profile&quot;
          aria-selected=&quot;false&quot;
          &gt;Profile&lt;/a
        &gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a
          class=&quot;nav-link&quot;
          id=&quot;contact-tab&quot;
          data-toggle=&quot;tab&quot;
          href=&quot;#contact&quot;
          role=&quot;tab&quot;
          aria-controls=&quot;contact&quot;
          aria-selected=&quot;false&quot;
          &gt;Contact&lt;/a
        &gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;tab-content p-16&quot; id=&quot;myTabContent&quot;&gt;
      &lt;div
        class=&quot;tab-pane fade show active&quot;
        id=&quot;home&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;home-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 1&lt;/p&gt;
      &lt;/div&gt;
      &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;profile&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;profile-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 2&lt;/p&gt;
      &lt;/div&gt;
      &lt;div
        class=&quot;tab-pane fade&quot;
        id=&quot;contact&quot;
        role=&quot;tabpanel&quot;
        aria-labelledby=&quot;contact-tab&quot;
      &gt;
        &lt;p&gt;Lorem, ipsum dolor. 3&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Collapsible</h2>
<div class="doc-example">
  <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
      aria-controls="collapseExample">
      Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
      aria-expanded="false" aria-controls="collapseExample">
      Button with data-target

    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
      keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.

    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;p&gt;
    &lt;a class=&quot;btn btn-primary&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
      Link with href
    &lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
      Button with data-target
    &lt;/button&gt;
  &lt;/p&gt;
  &lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
    &lt;div class=&quot;card card-body&quot;&gt;
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    &lt;/div&gt;
  &lt;/div&gt;"></code>


@endsection