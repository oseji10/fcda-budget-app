@extends('layouts.entry')

@section('content')

<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
                    <div class="ul-alert-p">Bootstrap-Maxlength uses a Twitter Bootstrap label to show a visual feedback
                        to the user about the maximum length of the field where the user is inserting text. Uses the
                        HTML5 attribute "maxlength" to work.For more info please visit the plugin's<a
                            class="btn btn-link btn-link-primary m-0"
                            href="http://mimo84.github.io/bootstrap-maxlength/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/mimo84/bootstrap-maxlength">Github Repo</a>.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Bootstrap Maxlength<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleInputEmail1">Default Usage</label>
                <input maxlength="25" type="text" class="form-control basicMaxlength" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">The badge will show up by default when the remaining
                    chars are 10 or less</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleInputEmail1">Options Class Usage</label>
                <input maxlength="10" type="text" class="form-control maxlengthOne mb-2" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleInputEmail1">All the Options</label>
                <input maxlength="10" type="text" class="form-control maxlengthTwo mb-2" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!--Default Usage--&gt;
&lt;div class=&quot;form-group&quot;&gt;
&lt;label for=&quot;exampleInputEmail1&quot;&gt;Default Usage&lt;/label&gt;
&lt;input maxlength=&quot;25&quot; type=&quot;text&quot; class=&quot;form-control basicMaxlength&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;The badge will show up by default when the remaining chars are 10 or less&lt;/small&gt;
&lt;/div&gt;

&lt;script&gt;
$(&quot;input.basicMaxlength&quot;).maxlength({
appendToParent:true,
});
&lt;/script&gt;

&lt;!-- option class usage--&gt;
&lt;div class=&quot;form-group&quot;&gt;
&lt;label for=&quot;exampleInputEmail1&quot;&gt;Options Class Usage&lt;/label&gt;
&lt;input maxlength=&quot;10&quot;  type=&quot;text&quot; class=&quot;form-control maxlengthOne mb-2&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;/div&gt;

&lt;script&gt;
$(&quot;input.maxlengthOne&quot;).maxlength({
appendToParent:true,
threshold: 5,
warningClass: &quot;badge badge-primary&quot;,
limitReachedClass: &quot;badge badge-danger&quot;
});
&lt;/script&gt;

&lt;!--All the Options--&gt;
&lt;div class=&quot;form-group&quot;&gt;
&lt;label for=&quot;exampleInputEmail1&quot;&gt;All the Options&lt;/label&gt;
&lt;input maxlength=&quot;10&quot;  type=&quot;text&quot; class=&quot;form-control maxlengthTwo mb-2&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;/div&gt;

&lt;script&gt;
$(&quot;input.maxlengthTwo&quot;).maxlength({
appendToParent:true,
alwaysShow: true,
threshold: 10,
warningClass: &quot;badge badge-success&quot;,
limitReachedClass: &quot;badge badge-danger&quot;,
separator: &quot; of &quot;,
preText: &quot;You have &quot;,
postText: &quot; chars remaining.&quot;,
validate: true
});
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Bootstrap Maxlength Position<a class="section-link"
        href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <p>The field counter can be positioned at the top, bottom, left or right. You can also place the maxlength
                indicator on the corners: bottom-right, top-right, top-left, bottom-left and centered-right.</p>All you
            need to do is specify the <mark class="text-danger"> placement </mark> option, with one of those strings. If
            none is specified, the positioning will be defauted to 'bottom'.<div class="form-group">
                <label for="exampleInputEmail1">Left</label>
                <input maxlength="25" type="text" class="form-control maxlengthL" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;form-group&quot;&gt;
&lt;label for=&quot;exampleInputEmail1&quot;&gt;Left&lt;/label&gt;
&lt;input maxlength=&quot;25&quot; type=&quot;text&quot; class=&quot;form-control maxlengthL&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;/div&gt;

&lt;script&gt;
$(&quot;input.maxlengthL&quot;).maxlength({
appendToParent:true,
alwaysShow: true,
placement: &quot;left&quot;,
warningClass: &quot;badge badge-primary&quot;,
limitReachedClass: &quot;badge badge-danger&quot;
});
&lt;/script&gt;"></code>


@endsection