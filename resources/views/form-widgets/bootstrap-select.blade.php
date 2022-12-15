@extends('layouts.entry')

@section('content')


<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
                    <div class="ul-alert-p">
                        The jQuery plugin that brings select elements into the 21st century with
                        intuitive multiselection, searching, and much more.
                        For more info please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://developer.snapappointments.com/bootstrap-select/examples/">Demo
                            Page</a> or <a class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/snapappointments/bootstrap-select">Github
                            Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Bootstrap Select<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <select class="selectpicker" data-style="border">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <select class="selectpicker" data-style="btn-raised-default">
                <optgroup label="Picnic">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </optgroup>
                <optgroup label="Camping">
                    <option>Tent</option>
                    <option>Flashlight</option>
                    <option>Toilet Paper</option>
                </optgroup>
            </select>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!--Default Usage--&gt;
&lt;select class=&quot;selectpicker&quot; data-style=&quot;border&quot;&gt;
&lt;option&gt;Mustard&lt;/option&gt;
&lt;option&gt;Ketchup&lt;/option&gt;
&lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;

&lt;!--select boxes with group --&gt;
&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-raised-default&quot;&gt;
&lt;optgroup label=&quot;Picnic&quot;&gt;
&lt;option&gt;Mustard&lt;/option&gt;
&lt;option&gt;Ketchup&lt;/option&gt;
&lt;option&gt;Relish&lt;/option&gt;
&lt;/optgroup&gt;
&lt;optgroup label=&quot;Camping&quot;&gt;
&lt;option&gt;Tent&lt;/option&gt;
&lt;option&gt;Flashlight&lt;/option&gt;
&lt;option&gt;Toilet Paper&lt;/option&gt;
&lt;/optgroup&gt;
&lt;/select&gt;
"></code>
<h2 class="doc-section-title" id="form-control">Bootstrap Live Search<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md"><select class="selectpicker" data-live-search="true" data-style="border">
                <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                <option data-tokens="mustard">Burger, Shake and a Smile</option>
                <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!--Live Search--&gt;
&lt;select class=&quot;selectpicker&quot; data-live-search=&quot;true&quot; data-style=&quot;border&quot;&gt;
&lt;option data-tokens=&quot;ketchup mustard&quot;&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
&lt;option data-tokens=&quot;mustard&quot;&gt;Burger, Shake and a Smile&lt;/option&gt;
&lt;option data-tokens=&quot;frosting&quot;&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;"></code>
<h2 class="doc-section-title" id="form-control">Limit the number of selections<a class="section-link"
        href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <select class="selectpicker" multiple="multiple" data-max-options="2" data-style="border">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
                <option>Cheese</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <select class="selectpicker" data-style="border" multiple="multiple">
                <optgroup label="Condiments" data-max-options="2">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </optgroup>
                <optgroup label="Breads" data-max-options="2">
                    <option>Plain</option>
                    <option>Steamed</option>
                    <option>Toasted</option>
                </optgroup>
            </select>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!--Limit The number Of Selection 1--&gt;
&lt;select class=&quot;selectpicker&quot; multiple data-max-options=&quot;2&quot; data-style=&quot;border&quot;&gt;
&lt;option&gt;Mustard&lt;/option&gt;
&lt;option&gt;Ketchup&lt;/option&gt;
&lt;option&gt;Relish&lt;/option&gt;
&lt;option&gt;Cheese&lt;/option&gt;
&lt;/select&gt;


&lt;!--Limit The number Of Selection 2--&gt;
&lt;select class=&quot;selectpicker&quot; data-style=&quot;border&quot; multiple&gt;
&lt;optgroup label=&quot;Condiments&quot; data-max-options=&quot;2&quot;&gt;
&lt;option&gt;Mustard&lt;/option&gt;
&lt;option&gt;Ketchup&lt;/option&gt;
&lt;option&gt;Relish&lt;/option&gt;
&lt;/optgroup&gt;
&lt;optgroup label=&quot;Breads&quot; data-max-options=&quot;2&quot;&gt;
&lt;option&gt;Plain&lt;/option&gt;
&lt;option&gt;Steamed&lt;/option&gt;
&lt;option&gt;Toasted&lt;/option&gt;
&lt;/optgroup&gt;
&lt;/select&gt;"></code>



@endsection