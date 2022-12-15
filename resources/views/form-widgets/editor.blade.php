@extends('layouts.entry')

@section('content')

<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
                    <div class="ul-alert-p">
                        The best way to get started is try a simple example.
                        Quill is initialized with a DOM element to contain the editor. The contents of that element will
                        become the initial contents of Quill.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="examples">Quill Editor<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div id="quill-container">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br /></p>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div id=&quot;quill-container&quot;&gt;
&lt;p&gt;Hello World!&lt;/p&gt;
&lt;p&gt;Some initial &lt;strong&gt;bold&lt;/strong&gt; text&lt;/p&gt;
&lt;p&gt;&lt;br&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;script&gt;
var toolbarOptions = [
[{ &quot;header&quot;: [1, 2, 3, 4, 5, 6, false] }],
[{ &quot;list&quot;: &quot;ordered&quot;}, { &quot;list&quot;: &quot;bullet&quot; }],
[&quot;blockquote&quot;, &quot;code-block&quot;],
[&quot;bold&quot;, &quot;italic&quot;, &quot;underline&quot;],
[&quot;image&quot;, &quot;code-block&quot;]
]
var quill = new Quill(&quot;#quill-container&quot;, {
modules: {
toolbar: toolbarOptions
},
theme: &quot;snow&quot; 
});
&lt;/script&gt;"> </code>

@endsection