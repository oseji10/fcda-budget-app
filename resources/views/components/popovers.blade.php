@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Popovers</h2>
<div class="doc-example">
  <button class="btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm" type="button" data-container="body"
    data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    on top

  </button>
  <button class="btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm" type="button" data-container="body"
    data-toggle="popover" data-placement="right"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    on right

  </button>
  <button class="btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm" type="button" data-container="body"
    data-toggle="popover" data-placement="bottom"
    data-content="Vivamussagittis lacus vel augue laoreet rutrum faucibus.">
    on bottom

  </button>
  <button class="btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm" type="button" data-container="body"
    data-toggle="popover" data-placement="left"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    on left


  </button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="&lt;button class=&quot;btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;on top&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;on right&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamussagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;on bottom&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-secondary mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;on left&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="examples">Colors</h2>
<div class="doc-example">
  <button class="btn btn-sm btn-raised btn-raised-primary mb-sm mr-sm" type="button" data-container="body"
    data-color="primary" data-toggle="popover" data-placement="top"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Primary

  </button>
  <button class="btn btn-sm btn-raised btn-raised-success mb-sm mr-sm" type="button" data-container="body"
    data-color="success" data-toggle="popover" data-placement="right"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Success

  </button>
  <button class="btn btn-sm btn-raised btn-raised-warning mb-sm mr-sm" type="button" data-container="body"
    data-color="warning" data-toggle="popover" data-placement="bottom"
    data-content="Vivamussagittis lacus vel augue laoreet rutrum faucibus.">
    Warning

  </button>
  <button class="btn btn-sm btn-raised btn-raised-danger mb-sm mr-sm" type="button" data-container="body"
    data-color="danger" data-toggle="popover" data-placement="left"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Danger

  </button>
  <button class="btn btn-sm btn-raised btn-raised-info mb-sm mr-sm" type="button" data-container="body"
    data-color="info" data-toggle="popover" data-placement="left"
    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Info

  </button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="&lt;button class=&quot;btn btn-sm btn-raised btn-raised-primary mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-color=&quot;primary&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Primary&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-success mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-color=&quot;success&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Success&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-warning mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-color=&quot;warning&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-content=&quot;Vivamussagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Warning&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-danger mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-color=&quot;danger&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Danger&lt;/button&gt;
  &lt;button class=&quot;btn btn-sm btn-raised btn-raised-info mb-sm mr-sm&quot; type=&quot;button&quot; data-container=&quot;body&quot; data-color=&quot;info&quot; data-toggle=&quot;popover&quot; data-placement=&quot;left&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Info&lt;/button&gt;"></code>


@endsection