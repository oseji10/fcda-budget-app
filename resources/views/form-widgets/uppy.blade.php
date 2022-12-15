@extends('layouts.entry')

@section('content')

<div class="row mb-md">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="ul-alert d-flex align-items-center">
          <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
          <div class="ul-alert-p">
            Uppy is a sleek, modular open source JavaScript file uploader.
            For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
              href="https://uppy.io/docs/">Demo Page</a> or <a class="btn btn-link btn-link-primary m-0"
              href="https://github.com/transloadit/uppy">Github Repo</a>.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="doc-section-title" id="form-control">Basic Examples<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
  <div id="uppy-1"></div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Uppy-1 --&gt;
&lt;div id=&quot;uppy-1&quot;&gt;&lt;/div&gt;

&lt;script&gt;
  var uppy = Uppy.Core()
   .use(Uppy.Dashboard, {
   inline: true,
   target: &quot;#uppy-1&quot;
})
   .use(Uppy.Tus, {endpoint: &quot;https://master.tus.io/files/&quot;})
   
   uppy.on(&quot;complete&quot;, (result) =&gt; {
   console.log(&quot;Upload complete! We’ve uploaded these files:&quot;, result.successful)
})
&lt;/script&gt;"></code>

@endsection