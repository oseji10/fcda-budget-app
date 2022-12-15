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
                        A touchspin mobile and touch friendly input spinner component for Bootstrap 3. It supports
                        the mousewheel and the up/down keys.For more info please visit the plugin's<a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin">Github Repo</a>. </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Bootstrap Touch Spin<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-2 mb-md">
            <input id="demo1" type="text" value="55" name="demo1" />
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;input id=&quot;demo1&quot; type=&quot;text&quot; value=&quot;55&quot; name=&quot;demo1&quot;&gt;
    
&lt;script&gt;
 $(&quot;input[name=&quot;demo1&quot;]&quot;).TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10
 });
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Touch Spin Vertical Buttons<a class="section-link"
        href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-2 mb-md">
            <input id="demo_vertical" type="text" name="demo_vertical" />
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Vertical Buttons --&gt;
&lt;input id=&quot;demo_vertical&quot; type=&quot;text&quot; value=&quot;&quot; name=&quot;demo_vertical&quot;&gt;
    
&lt;script&gt;
 $(&quot;input[name=&quot;demo_vertical&quot;]&quot;).TouchSpin({
  verticalbuttons: true
});
&lt;/script&gt;

&lt;!-- Vertical Buttons With Icons --&gt;
&lt;input id=&quot;demo_vertical2&quot; type=&quot;text&quot; value=&quot;&quot; name=&quot;demo_vertical2&quot;&gt;

&lt;/script&gt;"></code>


@endsection