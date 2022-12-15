@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Snackbar</h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-12">
      <button type="button" class="btn btn-raised btn-primary" data-toggle="snackbar"
        data-content="Free fried chicken here!" data-html-allowed="true" data-timeout="0">Snackbar</button>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-primary&quot; data-toggle=&quot;snackbar&quot; data-content=&quot;Free fried chicken here!&quot; data-html-allowed=&quot;true&quot; data-timeout=&quot;0&quot;&gt;Snackbar&lt;/button&gt;
  "></code>
<h2 class="doc-section-title" id="examples">Toast</h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-12">
      <button type="button" class="btn btn-raised-primary" data-toggle="snackbar" data-style="toast"
        data-content="Fried chicken out of stock.">Toast</button>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised-primary&quot; data-toggle=&quot;snackbar&quot; data-style=&quot;toast&quot; data-content=&quot;Fried chicken out of stock.&quot;&gt; Toast&lt;/button&gt;
  "></code>

@endsection