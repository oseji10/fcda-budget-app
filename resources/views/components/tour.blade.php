@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Tour</h2>
<div class="doc-example">
  <div class="row mb-4">
    <div class="col-md-6 mb-4">
      <div class="card text-left">
        <div class="card-body">
          <h4 class="card-title">Start the Tour</h4>
          <button id="startTourBtn" class="btn btn-large btn-raised-primary">Take a tour</button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card text-left" id="create-tour">
        <div class="card-body">
          <h4 class="card-title">Create your own tour</h4>
          <p id="my-first-tour-file">Myfirst tour</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!--html--&gt;
&lt;div class=&quot;row mb-4&quot;&gt;

&lt;div class=&quot;col-md-6 mb-4&quot;&gt;
  &lt;div class=&quot;card text-left&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;Start the Tour&lt;/h4&gt;
      &lt;button id=&quot;startTourBtn&quot; class=&quot;btn btn-large btn-raised-primary&quot;&gt;Take a tour&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;col-md-6&quot;&gt;
  &lt;div class=&quot;card text-left&quot; id=&quot;create-tour&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;Create your own tour&lt;/h4&gt;
      &lt;p id=&quot;my-first-tour-file&quot;&gt;Myfirst tour&lt;/p&gt; 
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;  

//Javascript code
&lt;script&gt;
  &quot;use strict&quot;;

  var tour;
  $(document).ready(function () {
    tour = {
      id: &quot;demo-tour&quot;,
      showPrevButton: !0,
      steps: [{
        title: &quot;MegaMenu&quot;,
        content: &quot;Clean Mega menu &quot;,
        target: &quot;megaMenu&quot;,
        placement: &quot;bottom&quot;
      }, {
        title: &quot;search bar&quot;,
        content: &quot;Search here for anything&quot;,
        target: &quot;search-bar&quot;,
        placement: &quot;bottom&quot;
      }, {
        title: &quot;Create your Tour&quot;,
        content: &quot;Create new tour easily&quot;,
        target: &quot;create-tour&quot;,
        placement: &quot;top&quot;
      }]
    };
  });
  $(&quot;#startTourBtn&quot;).on(&quot;click&quot;, function (t) {
    hopscotch.startTour(tour);
  });
&lt;/script&gt;
"></code>

@endsection