@extends('layouts.entry')

@section('content')

<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i>
                    </div>
                    <div class="ul-alert-p">
                        Select2 is a jQuery based replacement for select boxes. It supports searching, remote data
                        sets, and infinite scrolling of results. Select2 gives you a customizable select box with
                        support for searching, tagging, remote data sets, infinite scrolling, and many other highly
                        used options.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://select2.org/getting-started/basic-usage">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0" href="https://github.com/select2/select2">Github
                            Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Select2 Examples<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleFormControlInput1">Basic Example</label>
                <select class="form-control js-example-basic-single" name="state">
                    <option value="AL">Pathfinder</option>
                    <option value="WY">Mirage</option>
                    <option value="WY">Wraith</option>
                    <option value="WY">Banglore</option>
                    <option value="WY">Gabby</option>
                    <option value="WY">Wattson</option>
                    <option value="WY">Blodhound</option>
                    <option value="WY">Caustic</option>
                    <option value="WY">Octane</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleFormControlInput1">Multi Select Boxes</label>
                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="WY">Goku</option>
                    <option value="WY">Jane</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleFormControlInput1">Remote Data</label>
                <select class="js-data-example-ajax"></select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label for="exampleFormControlInput1">Disabled</label>
                <select class="form-control js-example-disabled" name="state">
                    <option value="AL">Pathfinder</option>
                    <option value="WY">Mirage</option>
                    <option value="WY">Wraith</option>
                    <option value="WY">Banglore</option>
                    <option value="WY">Gabby</option>
                    <option value="WY">Wattson</option>
                    <option value="WY">Blodhound</option>
                    <option value="WY">Caustic</option>
                    <option value="WY">Octane</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- basic --&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot;&gt;Basic Example&lt;/label&gt;
  &lt;select class=&quot;js-example-basic-single&quot; name=&quot;state&quot;&gt;
    &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
&lt;script&gt;
 $(document).ready(function() {
  $(&quot;.js-example-basic-single&quot;).select2();
 });
&lt;/script&gt;

&lt;!-- Multi Select Boxes--&gt;

&lt;div class=&quot;form-group&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot;&gt;Multi Select Boxes&lt;/label&gt;
  &lt;select class=&quot;js-example-basic-multiple&quot; name=&quot;states[]&quot; multiple=&quot;multiple&quot;&gt;
    &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Goku&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Jane&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;script&gt;
$(document).ready(function() {
  $(&quot;.js-example-basic-multiple&quot;).select2();
});
&lt;/script&gt;
&lt;!-- Remote Data--&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot;&gt;Remote Data&lt;/label&gt;
  &lt;select class=&quot;js-data-example-ajax&quot;&gt;&lt;/select&gt;
&lt;/div&gt;


&lt;script&gt;
  $(&quot;.js-data-example-ajax&quot;).select2({
 dropdownParent: $(&quot;.main-content-body&quot;),
 ajax: {
  url: &quot;https://api.github.com/search/repositories&quot;,
  dataType: &quot;json&quot;,
  processResults: function (data) {

   var results = $.map(data.items, function (item) {
    return {
     text: item.name,
     id: item.id
    }
   })
   return {results: results}
  }
 }
});
&lt;/script&gt;
&lt;!-- Disabled--&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label for=&quot;exampleFormControlInput1&quot;&gt;Basic Example&lt;/label&gt;
  &lt;select class=&quot;js-example-disabled&quot; name=&quot;state&quot;&gt;
    &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;


&lt;script&gt;
  $(document).ready(function () {
 $(&quot;.js-example-disabled&quot;).select2({
   disabled:true
 });
});
&lt;/script&gt;"></code>

@endsection