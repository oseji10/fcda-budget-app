@extends('layouts.entry')

@section('content')


<h2 class="doc-section-title" id="examples">Tooltip <a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <button class="btn btn-sm btn-raised btn-raised-default" type="button" data-toggle="tooltip" data-placement="top"
    title="Tooltip on top">
    on top

  </button>
  <button class="btn btn-sm btn-raised btn-raised-default" type="button" data-toggle="tooltip" data-placement="right"
    title="Tooltip on right">
    on right

  </button>
  <button class="btn btn-sm btn-raised btn-raised-default" type="button" data-toggle="tooltip" data-placement="bottom"
    title="Tooltip on bottom">
    on bottom

  </button>
  <button class="btn btn-sm btn-raised btn-raised-default" type="button" data-toggle="tooltip" data-placement="left"
    title="Tooltip on left">
    on left

  </button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-raised btn-raised-default&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;
  on top
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-raised btn-raised-default&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;
  on right
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-raised btn-raised-default&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;
  on bottom
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-raised btn-raised-default&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;
  on left
&lt;/button&gt;"></code>

@endsection