@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Filepond Image Upload (Single File)<a class="section-link"
        href="#examples"></a></h2>
<div class="doc-example">
    <input type="file" />
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;input type=&quot;file&quot;&gt;
&lt;script&gt;
const inputElement = document.querySelector(&quot;input[type=&quot;file&quot;]&quot;);
const pond = FilePond.create( inputElement );
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="examples">Filepond Image Upload (Multiple File)<a class="section-link"
        href="#examples"></a></h2>
<div class="doc-example">
    <input class="filepond" type="file" name="filepond" multiple="multiple" data-max-file-size="3MB"
        data-max-files="3" />
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;input type=&quot;file&quot; class=&quot;filepond&quot;  name=&quot;filepond&quot; multiple data-max-file-size=&quot;3MB&quot; data-max-files=&quot;3&quot;&gt;
&lt;script&gt;
FilePond.create(
document.querySelector(&quot;.filepond&quot;)
);
&lt;/script&gt;"></code>


@endsection