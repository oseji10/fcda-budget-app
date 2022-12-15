@extends('layouts.entry')

@section('content')

<div class="mx-lg"> </div>
<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i>
                    </div>
                    <div class="ul-alert-p">
                        noUiSlider is a lightweight JavaScript range slider library with full multi-touch support.
                        It fits wonderfully in responsive designs and has no dependencies.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://refreshless.com/nouislider/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/leongersen/noUiSlider">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Nouislider Currency Formatting <a class="section-link"
        href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row align-items-center">
        <div class="col-lg-2 col-sm-6 mr-md">
            <div class="form-group">
                <label>Currency Example</label>
                <input type="text" class="form-control" id="nouislider-input-2" value="">
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div id="nouislider-2" class=""></div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Nouislider Currency Formatting --&gt;
    &lt;div class=&quot;row align-items-center&quot;&gt;
      &lt;div class=&quot;col-lg-2 col-sm-6 mr-md&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;label&gt;Currency Example&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nouislider-input-2&quot;  value=&quot;&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6&quot;&gt;
        &lt;div id=&quot;nouislider-2&quot; class=&quot;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
    var slider2 = document.getElementById(&quot;nouislider-2&quot;);
    
        noUiSlider.create(slider2, {
            start: [ 20000 ],
            connect: [true, false],
            step: 1000,
            range: {
                &quot;min&quot;: [ 20000 ],
                &quot;max&quot;: [ 80000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: &quot;.&quot;,
                postfix: &quot; (US $)&quot;,
            })
        });
        // init slider input
        var sliderInput2 = document.getElementById(&quot;nouislider-input-2&quot;);
    
        slider2.noUiSlider.on(&quot;update&quot;, function( values, handle ) {
            sliderInput2.value = values[handle];
        });
    
        sliderInput2.addEventListener(&quot;change&quot;, function(){
            slider2.noUiSlider.set(this.value);
        });
    
    
    });
    &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Slider With Tooltip <a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 mr-md d-flex justify-content-space">
            <div class="form-group d-flex justify-content-between ">
                <label>Slider with tooltip</label>
                <input type="text" class="form-control mr-xl" id="nouislider-input-3" value="">
            </div>
            <div class="form-group d-flex justify-content-between ">
                <input type="text" class="form-control" id="nouislider-input-3.1" value="">
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div id="nouislider-3" class=""></div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Slider with tooltip --&gt;
    &lt;div class=&quot;row align-items-center&quot;&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6 mr-md d-flex justify-content-space&quot;&gt;
        &lt;div class=&quot;form-group d-flex justify-content-between &quot;&gt;
          &lt;label&gt;Slider with tooltip&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control mr-xl&quot; id=&quot;nouislider-input-3&quot;  value=&quot;&quot;&gt;
          
        &lt;/div&gt;
        &lt;div class=&quot;form-group d-flex justify-content-between &quot;&gt;
          
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nouislider-input-3.1&quot;  value=&quot;&quot;&gt;
          
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6&quot;&gt;
        &lt;div id=&quot;nouislider-3&quot; class=&quot;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
    // tooltip-slider 
        var slider = document.getElementById(&quot;nouislider-3&quot;);
    
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            direction: &quot;rtl&quot;,
            tooltips: [true, wNumb({ decimals: 1 })],
            range: {
                &quot;min&quot;: [0],
                &quot;10%&quot;: [10, 10],
                &quot;50%&quot;: [80, 50],
                &quot;80%&quot;: 150,
                &quot;max&quot;: 200
            }
        });
       
    
        // init slider input
        var sliderInput0 = document.getElementById(&quot;nouislider-input-3&quot;);
        var sliderInput1 = document.getElementById(&quot;nouislider-input-3.1&quot;);
        var sliderInputs = [sliderInput1, sliderInput0];  
    
        slider.noUiSlider.on(&quot;update&quot;, function( values, handle ) {
            sliderInputs[handle].value = values[handle];
        });
    &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Slider State Colors <a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 mr-md d-flex justify-content-space">
            <div class="form-group d-flex justify-content-between ">
                <select class="form-control mr-xl" id="nouislider-input-select">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-between ">
                <input type="text" class="form-control" id="nouislider-input-number" value="">
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div id="nouislider-4" class=""></div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code=" &lt;div class=&quot;row align-items-center&quot;&gt;
    &lt;div class=&quot;col-lg-4 col-sm-6 mr-md d-flex justify-content-space&quot;&gt;
      &lt;div class=&quot;form-group d-flex justify-content-between &quot;&gt;
        &lt;select class=&quot;form-control mr-xl&quot; id=&quot;nouislider-input-select&quot;&gt;
          &lt;option value=&quot;&quot;&gt;&lt;/option&gt;
        &lt;/select&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-group d-flex justify-content-between &quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nouislider-input-number&quot;  value=&quot;&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6&quot;&gt;
        &lt;div id=&quot;nouislider-4&quot; class=&quot;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
    var slider = document.getElementById(&quot;nouislider-input-select&quot;);
    
    // Append the option elements
    for ( var i = -20; i &lt;= 40; i++ ){
    
        var option = document.createElement(&quot;option&quot;);
            option.text = i;
            option.value = i;
    
        slider.appendChild(option);
    }
    
    // init slider
    var html5Slider = document.getElementById(&quot;nouislider-4&quot;);
    
    noUiSlider.create(html5Slider, {
        start: [ 10, 30 ],
        connect: true,
        range: {
            &quot;min&quot;: -20,
            &quot;max&quot;: 40
        }
    });
    
    // init slider input
    var inputNumber = document.getElementById(&quot;nouislider-input-number&quot;);
    
    html5Slider.noUiSlider.on(&quot;update&quot;, function( values, handle ) {
    
        var value = values[handle];
    
        if ( handle ) {
            inputNumber.value = value;
        } else {
            slider.value = Math.round(value);
        }
    });
    
    slider.addEventListener(&quot;change&quot;, function(){
        html5Slider.noUiSlider.set([this.value, null]);
    });
    
    inputNumber.addEventListener(&quot;change&quot;, function(){
        html5Slider.noUiSlider.set([null, this.value]);
    });
    &lt;/script&gt;
    "></code>
<h2 class="doc-section-title" id="form-control">Soft Limit<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 mr-md">
            <div class="form-group">
                <label>Soft Limit</label>
                <input type="text" class="form-control" id="nouislider-input-5" value="">
                <small class="text-muted">Disables the edges of slider where handler bounces back when
                    released</small>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div id="nouislider-5" class=""></div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Soft Limit --&gt;
    &lt;div class=&quot;row align-items-center&quot;&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6 mr-md&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;label&gt;Soft Limit&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nouislider-input-5&quot;  value=&quot;&quot;&gt;
          &lt;small class=&quot;text-muted&quot;&gt;Disables the edges of slider where handler bounces back when released&lt;/small&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6&quot;&gt;
        &lt;div id=&quot;nouislider-5&quot; class=&quot;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
    var slider5 = document.getElementById(&quot;nouislider-5&quot;);
    
      noUiSlider.create(slider5, {
          start: 20,
          range: {
              min: 0,
              max: 100
          },
          pips: {
              mode: &quot;values&quot;,
              values: [20, 80],
              density: 4
          }
      });
    
      var sliderInput5 = document.getElementById(&quot;nouislider-input-5&quot;);
    
      slider5.noUiSlider.on(&quot;update&quot;, function( values, handle ) {
          sliderInput5.value = values[handle];
      });
    
      sliderInput5.addEventListener(&quot;change&quot;, function(){
          slider5.noUiSlider.set(this.value);
      });
    
    slider5.noUiSlider.on(&quot;change&quot;, function ( values, handle ) {
        if ( values[handle] &lt; 20 ) {
            slider5.noUiSlider.set(20);
        } else if ( values[handle] &gt; 80 ) {
            slider5.noUiSlider.set(80);
        }
    });
    &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Vertical Slider<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 mr-md">
            <div class="form-group">
                <label>Vertical Slider</label>
                <input type="text" class="form-control" id="nouislider-input-6" value="">
                <small class="text-muted">Vertical orientation slider example</small>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div id="nouislider-6" class=""></div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Vertical Slider --&gt;
    &lt;div class=&quot;row align-items-center&quot;&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6 mr-md&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;label&gt;Vertical Slider&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nouislider-input-6&quot;  value=&quot;&quot;&gt;
          &lt;small class=&quot;text-muted&quot;&gt;Vertical orientation slider example&lt;/small&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-lg-4 col-sm-6&quot;&gt;
        &lt;div id=&quot;nouislider-6&quot; class=&quot;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    
    &lt;script&gt;
      var verticalSlider = document.getElementById(&quot;nouislider-6&quot;);
    
        noUiSlider.create(verticalSlider, {
            start: 40,
            orientation: &quot;vertical&quot;,
            range: {
                &quot;min&quot;: 0,
                &quot;max&quot;: 100
            }
        }); 
    
        // init slider input
        var sliderInput = document.getElementById(&quot;nouislider-input-6&quot;);
    
        verticalSlider.noUiSlider.on(&quot;update&quot;, function( values, handle ) {
            sliderInput.value = values[handle];
        });
    
        sliderInput.addEventListener(&quot;change&quot;, function(){
            verticalSlider.noUiSlider.set(this.value);
        }); 
    
    &lt;/script&gt;"></code>


@endsection