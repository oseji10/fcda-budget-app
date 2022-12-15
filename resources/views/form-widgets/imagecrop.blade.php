@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Filepond Image Upload<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div><img id="image" src="{{  asset('images/photo-wide-1.jpg')}}" /></div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;input type=&quot;file&quot;&gt;
&lt;script&gt;
  const inputElement = document.querySelector(&quot;input[type=&quot;file&quot;]&quot;);
  const pond = FilePond.create( inputElement );
&lt;/script&gt;"></code>



@endsection