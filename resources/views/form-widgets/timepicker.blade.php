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
                        Bootstrap Timepicker
                        Easily select a time for a text input using your mouse or keyboards arrow keys.For more info
                        please visit the plugin's<a class="btn btn-link btn-link-primary m-0"
                            href="http://jdewit.github.io/bootstrap-timepicker/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/jdewit/bootstrap-timepicker">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Bootstrap Timepicker<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-2 mb-md time-picker-parent">
            <div class="input-group bootstrap-timepicker timepicker">
                <input class="form-control input-small" id="timepicker1" type="text" /><span
                    class="input-group-addon"><i class="material-icons">access_time</i></span>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;input-group bootstrap-timepicker timepicker&quot;&gt;
  &lt;input id=&quot;timepicker1&quot; type=&quot;text&quot; class=&quot;form-control input-small&quot;&gt;
  &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;material-icons&quot;&gt;access_time&lt;/i&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;script&gt;
 $(&quot;#timepicker1&quot;).timepicker({
       template: &quot;modal&quot;,
       icons:{
           up: &quot;fas fa-chevron-up&quot;,
           down: &quot;fas fa-chevron-down&quot;
       }
   });
&lt;/script&gt;"></code>

@endsection