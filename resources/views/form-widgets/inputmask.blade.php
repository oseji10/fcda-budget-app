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
                        jquery.inputmask is a jquery plugin which create an input mask. An inputmask helps the user
                        with the input by ensuring a predefined format. This can be usefull for dates, numerics,
                        phone numbers, etc.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://robinherbots.github.io/Inputmask/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/RobinHerbots/Inputmask">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Inputmask Example<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Date</label>
                <input id="inputmask_1" class="form-control" />
                <small><span class="text-muted">Custom date format:</span><span class="text-danger">
                        mm/dd/yyyy</span></small>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Custom Placeholder</label>
                <input id="inputmask_2" class="form-control" />
                <small><span class="text-muted">Custom mask with placeholder:</span><span class="text-danger">
                        mm/dd/yyyy</span></small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Phone Number</label>
                <input id="inputmask_3" class="form-control" />
                <small><span class="text-muted">Phone number mask:</span><span class="text-danger"> (999) 999-9999
                    </span></small>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Empty Placeholder</label>
                <input id="inputmask_4" class="form-control" />
                <small><span class="text-muted">Phone number mask:</span><span class="text-danger">
                        99-9999999</span></small>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- date format --&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Date&lt;/label&gt;
     &lt;input id=&quot;inputmask_1&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Custom date format:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt; mm/dd/yyyy&lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    //dateformat
    &lt;script&gt;
     $(&quot;#inputmask_1&quot;).inputmask(&quot;99/99/9999&quot;, {
      removeMaskOnSubmit: true,
      &quot;placeholder&quot;: &quot;dd/mm/yyyy&quot;
    });
    &lt;/script&gt;
    
    
    &lt;!--Custom Placeholder--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Custom Placeholder&lt;/label&gt;
     &lt;input id=&quot;inputmask_2&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Custom mask with placeholder:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt; mm/dd/yyyy&lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    // custom placeholder 
    &lt;script&gt;
    $(&quot;#inputmask_2&quot;).inputmask(&quot;99/99/9999&quot;, {
     &quot;placeholder&quot;: &quot;*&quot;
    });
    &lt;/script&gt;
    
    
    &lt;!-- Phone Number --&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Phone Number&lt;/label&gt;
     &lt;input id=&quot;inputmask_3&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Phone number mask:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt; (999) 999-9999 &lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
     // phone number 
      $(&quot;#inputmask_3&quot;).inputmask(&quot;mask&quot;, {
         &quot;mask&quot;: &quot;(999) 999-9999&quot;
      }); 
    &lt;/script&gt;
    &lt;!--empty-placeholder--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Empty Placeholder&lt;/label&gt;
     &lt;input id=&quot;inputmask_4&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Phone number mask:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt; 99-9999999&lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
    // empty placeholder
    $(&quot;inputmask_4&quot;).inputmask({
        &quot;mask&quot;: &quot;99-9999999&quot;,
        placeholder: &quot;&quot; // remove underscores from the input mask
    });
    &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Inputmask Example 2<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Repeating Mask</label>
                <input id="inputmask_5" class="form-control" />
                <small><span class="text-muted">Mask:</span><span class="text-danger"> 9999999999</span></small>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Right Align</label>
                <input id="inputmask_6" class="form-control" />
                <small class="text-muted">Right aligned numeric mask</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Currency</label>
                <input id="inputmask_7" class="form-control" />
                <small><span class="text-muted">Currency Format:</span><span class="text-danger">$ ___.__1.234,56
                    </span></small>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>IP Address</label>
                <input id="inputmask_8" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="form-group">
                <label>Email Address</label>
                <input id="inputmask_9" class="form-control" />
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Repeating Mask --&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Repeating Mask&lt;/label&gt;
     &lt;input id=&quot;inputmask_5&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Mask:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt; 9999999999&lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    // repeating mask
    &lt;script&gt;
    $(&quot;#inputmask_5&quot;).inputmask({
     &quot;mask&quot;: &quot;9&quot;,
     &quot;repeat&quot;: 10,
     &quot;greedy&quot;: false
    }); // ~ mask &quot;9&quot; or mask &quot;99&quot; or ... mask &quot;9999999999&quot;  
    &lt;/script&gt;
    
    
    &lt;!-- Right Align --&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Right Align&lt;/label&gt;
     &lt;input id=&quot;inputmask_6&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small class=&quot;text-muted&quot;&gt;Right aligned numeric mask&lt;/small&gt;
    &lt;/div&gt;
    
    
    // Right Align
    &lt;script&gt;
     $(&quot;#inputmask_6&quot;).inputmask(&quot;decimal&quot;, {
        rightAlignNumerics: false
    });
    &lt;/script&gt;
    
    
    &lt;!--Currency--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Currency&lt;/label&gt;
     &lt;input id=&quot;inputmask_7&quot;  class=&quot;form-control&quot; /&gt;
     &lt;small&gt;&lt;span class=&quot;text-muted&quot;&gt;Currency Format:&lt;/span&gt;&lt;span class=&quot;text-danger&quot;&gt;$ ___.__1.234,56 &lt;/span&gt;&lt;/small&gt;
    &lt;/div&gt;
    
    
    // currency format
    &lt;script&gt;
    $(&quot;#inputmask_7&quot;).inputmask(&quot;$‚¬ 999.999.999,99&quot;, {
     numericInput: true
    }); //123456  =&gt;  $‚¬ ___.__1.234,56
    &lt;/script&gt;
    
    
    &lt;!--IP Address--&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;IP Address&lt;/label&gt;
     &lt;input id=&quot;inputmask_8&quot;  class=&quot;form-control&quot; /&gt;
    &lt;/div&gt;
    
    
    //ip address
    &lt;script&gt;
     $(&quot;#inputmask_8&quot;).inputmask({
      &quot;mask&quot;: &quot;999.999.999.999&quot;
    });
    &lt;/scipt&gt;
    
    
    &lt;!--Email Address --&gt;
    &lt;div class=&quot;form-group&quot;&gt;
     &lt;label&gt;Email Address&lt;/label&gt;
     &lt;input id=&quot;inputmask_9&quot;  class=&quot;form-control&quot; /&gt;
    &lt;/div&gt;
    
    
    // email address
    &lt;script&gt;
      $(&quot;#inputmask_9&quot;).inputmask({
        mask: &quot;*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]&quot;,
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace(&quot;mailto:&quot;, &quot;&quot;);
        },
        definitions: {
            &quot;*&quot;: {
                validator: &quot;[0-9A-Za-z!#$%&amp;'*+/=?^_`{|}~-]&quot;,
                cardinality: 1,
                casing: &quot;lower&quot;
            }
        }
       });
    &lt;/script&gt;"></code>



@endsection