@extends('layouts.entry')
@section('content')

<h2 class="doc-section-title" id="form-control">Gallery<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="heading">Media Gallery</h3>
                    <div class="row">
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-10.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-16.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-15.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-17.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-13.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-12.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-11.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-10.jpg')}}" /></div>
                        <div class="col-md-4 p-0"><img src="{{ asset('images/gallery/sq-15.jpg')}}" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-10.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-16.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-15.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-17.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-13.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-12.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-11.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-10.jpg')}}&quot;/&gt;&lt;/div&gt;
    &lt;div class=&quot;col-md-4 p-0&quot;&gt;&lt;img src=&quot;{{ asset('images/gallery/sq-15.jpg')}}&quot;/&gt;&lt;/div&gt;
&lt;/div&gt;">
                        <h2 class="doc-section-title" id="form-control">Gallery<a class="section-link" href="#form-control"></a></h2>
                        <div class="doc-example"></div>
                        <div class="copy-code">
                            <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top" title="Copy to clipboard"></button>Copy
                        </div><code class="code" data-code=""></code>
</code>

@endsection