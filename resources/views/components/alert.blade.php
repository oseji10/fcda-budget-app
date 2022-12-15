@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Custom Alerts<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres" role="alert">
    <div class="bg-primary d-flex align-items-center p-md mr-sm"><i class="material-icons text-white">done</i></div>
    <div class="p-md">
      <div class="card-title m-0">Success!</div><span class="text-muted text-small">Photo successfully uploaded.</span>
    </div>
    <div class="d-flex align-items-center"><button class="close icon icon-sm hover-gray" type="button"
        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
  </div>
  <div class="alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres" role="alert">
    <div class="bg-warning d-flex align-items-center p-md mr-sm"><i class="material-icons text-white">warning</i></div>
    <div class="p-md">
      <div class="card-title m-0">Warning!</div><span class="text-muted text-small">Photo size is too big.</span>
    </div>
    <div class="d-flex align-items-center"><button class="close icon icon-sm hover-gray" type="button"
        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
  </div>
  <div class="alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres" role="alert">
    <div class="bg-danger d-flex align-items-center p-md mr-sm"><i class="material-icons text-white">error</i></div>
    <div class="p-md">
      <div class="card-title m-0">Error!</div><span class="text-muted text-small">Photo upload failed!</span>
    </div>
    <div class="d-flex align-items-center"><button class="close icon icon-sm hover-gray" type="button"
        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres&quot; role=&quot;alert&quot;&gt;
      &lt;div class=&quot;bg-primary d-flex align-items-center p-md mr-sm&quot;&gt;&lt;i class=&quot;material-icons text-white&quot;&gt;done&lt;/i&gt;&lt;/div&gt;
      &lt;div class=&quot;p-md&quot;&gt;
          &lt;div class=&quot;card-title m-0&quot;&gt;Success!&lt;/div&gt;&lt;span class=&quot;text-muted text-small&quot;&gt;Photo successfully uploaded.&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex align-items-center&quot;&gt;&lt;button class=&quot;close icon icon-sm hover-gray&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
  &lt;/div&gt;
  
  &lt;div class=&quot;alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres&quot; role=&quot;alert&quot;&gt;
      &lt;div class=&quot;bg-warning d-flex align-items-center p-md mr-sm&quot;&gt;&lt;i class=&quot;material-icons text-white&quot;&gt;warning&lt;/i&gt;&lt;/div&gt;
      &lt;div class=&quot;p-md&quot;&gt;
          &lt;div class=&quot;card-title m-0&quot;&gt;Warning!&lt;/div&gt;&lt;span class=&quot;text-muted text-small&quot;&gt;Photo size is too big.&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex align-items-center&quot;&gt;&lt;button class=&quot;close icon icon-sm hover-gray&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
  &lt;/div&gt;
  
  &lt;div class=&quot;alert d-flex shadow border-0 p-0 col-6 rounded overflow-hidden align-items-stres&quot; role=&quot;alert&quot;&gt;
      &lt;div class=&quot;bg-danger d-flex align-items-center p-md mr-sm&quot;&gt;&lt;i class=&quot;material-icons text-white&quot;&gt;error&lt;/i&gt;&lt;/div&gt;
      &lt;div class=&quot;p-md&quot;&gt;
          &lt;div class=&quot;card-title m-0&quot;&gt;Error!&lt;/div&gt;&lt;span class=&quot;text-muted text-small&quot;&gt;Photo upload failed!&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex align-items-center&quot;&gt;&lt;button class=&quot;close icon icon-sm hover-gray&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Bootstrap Alerts<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="alert alert-primary" role="alert"><strong class="text-capitalize">Primary!</strong> Lorem ipsum dolor sit
    amet.
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span></button>
  </div>
  <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> Lorem ipsum dolor sit
    amet.
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span></button>
  </div>
  <div class="alert alert-info" role="alert"><strong class="text-capitalize">Info!</strong> Lorem ipsum dolor sit amet.
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span></button>
  </div>
  <div class="alert alert-warning" role="alert"><strong class="text-capitalize">Warning!</strong> Lorem ipsum dolor sit
    amet.
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span></button>
  </div>
  <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Danger!</strong> Lorem ipsum dolor sit
    amet.
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">×</span></button>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;&lt;strong class=&quot;text-capitalize&quot;&gt;Primary!&lt;/strong&gt; Lorem ipsum dolor sit amet.
    &lt;button class=&quot;close&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;&lt;strong class=&quot;text-capitalize&quot;&gt;Success!&lt;/strong&gt; Lorem ipsum dolor sit amet.
    &lt;button class=&quot;close&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;&lt;strong class=&quot;text-capitalize&quot;&gt;Info!&lt;/strong&gt; Lorem ipsum dolor sit amet.
    &lt;button class=&quot;close&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;&lt;strong class=&quot;text-capitalize&quot;&gt;Warning!&lt;/strong&gt; Lorem ipsum dolor sit amet.
    &lt;button class=&quot;close&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;&lt;strong class=&quot;text-capitalize&quot;&gt;Danger!&lt;/strong&gt; Lorem ipsum dolor sit amet.
    &lt;button class=&quot;close&quot; type=&quot;button&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;&lt;/button&gt;
  &lt;/div&gt;"></code>

@endsection