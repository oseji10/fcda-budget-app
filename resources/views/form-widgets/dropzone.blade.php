@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="form-control">Dropzone<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-lg-6">
            <form action="/file-upload" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Dropzone --&gt;
&lt;form action=&quot;/file-upload&quot; class=&quot;dropzone&quot;&gt;
  &lt;div class=&quot;fallback&quot;&gt;
    &lt;input name=&quot;file&quot; type=&quot;file&quot;/&gt;
  &lt;/div&gt;
&lt;/form&gt;"></code>


@endsection