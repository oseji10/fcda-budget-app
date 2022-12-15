@extends('layouts.entry')

@section('content')

<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
                    <div class="ul-alert-p">
                        A modern approach to copy text to clipboard. No Flash. No frameworks. Just 3kb gzipped.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://clipboardjs.com/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/zenorocha/clipboard.js">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="examples">Clipboards 1 <a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="input-group">
                <input type="text" class="form-control" id="clipboard-1" placeholder="Type Some Value to copy">
                <div class="input-group-append">
                    <button class="btn btn-raised-primary btn-icon" data-clipboard-target="#clipboard-1"
                        data-toggle='tooltip' data-placement='top' title='Copy the value'>
                        <i class="material-icons">file_copy</i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;input-group&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;clipboard-1&quot; placeholder=&quot;Type Some Value to copy&quot;&gt;
&lt;div class=&quot;input-group-append&quot;&gt;
&lt;button class=&quot;btn btn-raised-primary btn-icon&quot; data-clipboard-target=&quot;#clipboard-1&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Copy the value&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;file_copy&lt;/i&gt;
&lt;/div&gt;
&lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Clipboards 2<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="input-group">
                <textarea id="bar" class="form-control text-left"
                    rows="7">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. </textarea>
            </div>
            <button class="btn btn-outline-primary mt-xl" data-clipboard-action="cut" data-clipboard-target="#bar"
                data-toggle='tooltip' data-placement='top' title='Cut The Clipboard'>Cut The Clipboard</button>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code"
    data-code="&lt;div class=&quot;input-group&quot;&gt;
&lt;textarea id=&quot;bar&quot; class=&quot;form-control text-left&quot; rows=&quot;7&quot;&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,
| nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. &lt;/textarea&gt;

&lt;/div&gt;
&lt;button class=&quot;btn btn-outline-primary mt-xl&quot;  data-clipboard-action=&quot;cut&quot; data-clipboard-target=&quot;#bar&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Cut The Clipboard&quot;&gt;Cut The Clipboard&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="examples">Clipboards 3<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="input-group">
                <textarea id="bar2" class="form-control text-left"
                    rows="7">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. </textarea>
            </div>
            <button class="btn btn-outline-success mt-xl" data-clipboard-action="copy" data-clipboard-target="#bar2"
                data-toggle='tooltip' data-placement='top' title='Cut The Clipboard'>Copy The Clipboard</button>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code"
    data-code="&lt;div class=&quot;input-group&quot;&gt;
&lt;textarea id=&quot;bar2&quot; class=&quot;form-control text-left&quot; rows=&quot;7&quot;&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis,
| nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. &lt;/textarea&gt;

&lt;/div&gt;
&lt;button class=&quot;btn btn-outline-success mt-xl&quot;  data-clipboard-action=&quot;copy&quot; data-clipboard-target=&quot;#bar2&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Cut The Clipboard&quot;&gt;Copy The Clipboard&lt;/button&gt;"></code>





@endsection