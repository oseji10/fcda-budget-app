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
                        typeahead.js a flexible JavaScript library that provides a strong foundation for building
                        robust typeaheads. typeahead.js is a fast and fully-featured autocomplete library.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="http://twitter.github.io/typeahead.js/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/twitter/typeahead.js">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Typeahead Example<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="form-group"><label>Basic Example</label>
                <div id="the-basics">
                    <input class="form-control typeahead " type="text" placeholder="States of USA">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="form-group"><label>Prefatch</label>
                <div id="prefetch">
                    <input class="form-control typeahead" type="text" placeholder="Countries">
                </div>
                <div class="text-muted text-12">Prefetched data is fetched and processed on initialization. If the
                    browser supports local storage, the processed data will be cached there to prevent additional
                    network requests on subsequent page loads.</div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- basic --&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label&gt;Basic Example&lt;/label&gt;
  &lt;div id=&quot;the-basics&quot;&gt;
    &lt;input class=&quot;typeahead form-control&quot; type=&quot;text&quot; placeholder=&quot;States of USA&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
var substringMatcher = function(strs) {
 return function findMatches(q, cb) {
   var matches, substringRegex;

   // an array that will be populated with substring matches
   matches = [];

   // regex used to determine if a string contains the substring `q`
   var substrRegex = new RegExp(q, &quot;i&quot;);

   // iterate through the pool of strings and for any string that
   // contains the substring `q`, add it to the `matches` array
   $.each(strs, function(i, str) {
     if (substrRegex.test(str)) {
       matches.push(str);
     }
   });

   cb(matches);
 };
};

var states = [&quot;Alabama&quot;, &quot;Alaska&quot;, &quot;Arizona&quot;, &quot;Arkansas&quot;, &quot;California&quot;,
 &quot;Colorado&quot;, &quot;Connecticut&quot;, &quot;Delaware&quot;, &quot;Florida&quot;, &quot;Georgia&quot;, &quot;Hawaii&quot;,
 &quot;Idaho&quot;, &quot;Illinois&quot;, &quot;Indiana&quot;, &quot;Iowa&quot;, &quot;Kansas&quot;, &quot;Kentucky&quot;, &quot;Louisiana&quot;,
 &quot;Maine&quot;, &quot;Maryland&quot;, &quot;Massachusetts&quot;, &quot;Michigan&quot;, &quot;Minnesota&quot;,
 &quot;Mississippi&quot;, &quot;Missouri&quot;, &quot;Montana&quot;, &quot;Nebraska&quot;, &quot;Nevada&quot;, &quot;New Hampshire&quot;,
 &quot;New Jersey&quot;, &quot;New Mexico&quot;, &quot;New York&quot;, &quot;North Carolina&quot;, &quot;North Dakota&quot;,
 &quot;Ohio&quot;, &quot;Oklahoma&quot;, &quot;Oregon&quot;, &quot;Pennsylvania&quot;, &quot;Rhode Island&quot;,
 &quot;South Carolina&quot;, &quot;South Dakota&quot;, &quot;Tennessee&quot;, &quot;Texas&quot;, &quot;Utah&quot;, &quot;Vermont&quot;,
 &quot;Virginia&quot;, &quot;Washington&quot;, &quot;West Virginia&quot;, &quot;Wisconsin&quot;, &quot;Wyoming&quot;
];

$(&quot;#the-basics .typeahead&quot;).typeahead({
 hint: true,
 highlight: true,
 minLength: 1
},
{
 name: &quot;states&quot;,
 source: substringMatcher(states)
});
&lt;/script&gt;


&lt;!-- Prefatch --&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label&gt;Prefatch&lt;/label&gt;
  &lt;div id=&quot;prefetch&quot;&gt;
    &lt;input class=&quot;form-control typeahead&quot; type=&quot;text&quot; placeholder=&quot;Countries&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;text-muted text-12&quot;&gt;Prefetched data is fetched and processed on initialization. If the browser supports local storage, the processed data will be cached there to prevent additional network requests on subsequent page loads.&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
$(&quot;#the-basics .typeahead&quot;).typeahead({
 hint: true,
 highlight: true,
 minLength: 1
},
{
 name: &quot;states&quot;,
 source: substringMatcher(states)
});

var countries = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // url points to a json file that contains an array of country names, see
  // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
  prefetch: &quot;../assets/js/data/countries.json&quot;
});

// passing in `null` for the `options` arguments will result in the default
// options being used
$(&quot;#prefetch .typeahead&quot;).typeahead(null, {
  name: &quot;countries&quot;,
  source: countries
});
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Typeahead Example 2<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="form-group"><label>Bloodhound (Suggestion Engine)</label>
                <div id="bloodhound">
                    <input class="form-control typeahead" type="text" placeholder="States of USA">
                </div>
                <div class="text-muted text-12">Bloodhound offers advanced functionalities such as prefetching and
                    backfilling with remote data.</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-md">
            <div class="form-group"><label>Scrollable Dropdown Menu</label>
                <div id="scrollable-dropdown-menu">
                    <input class="form-control typeahead" type="text" placeholder="Countries">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Bloodhound Suggestion--&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label&gt;Bloodhound (Suggestion Engine)&lt;/label&gt;
  &lt;div id=&quot;bloodhound&quot;&gt;
    &lt;input class=&quot;form-control typeahead&quot; type=&quot;text&quot; placeholder=&quot;States of USA&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;text-muted text-12&quot;&gt;Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.&lt;/div&gt;
&lt;/div&gt;


&lt;script&gt;
var states = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // `states` is an array of state names defined in &quot;The Basics&quot;
  local: states
});

$(&quot;#bloodhound .typeahead&quot;).typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: &quot;states&quot;,
  source: states
});
&lt;/script&gt;


&lt;!-- Scrolldown --&gt;
&lt;div class=&quot;form-group&quot;&gt;
  &lt;label&gt;Scrollable Dropdown Menu&lt;/label&gt;
  &lt;div id=&quot;scrollable-dropdown-menu&quot;&gt;
    &lt;input class=&quot;form-control typeahead&quot; type=&quot;text&quot; placeholder=&quot;Countries&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;script&gt;
$(&quot;#scrollable-dropdown-menu .typeahead&quot;).typeahead(null, {
  name: &quot;countries&quot;,
  limit: 10,
  source: countries
});
&lt;/script&gt;"></code>



@endsection