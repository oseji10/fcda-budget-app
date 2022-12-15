@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="form-control">Date & Time picker<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-6 mb-md">
            <label class="mb-sm">DatePicker</label>
            <input id="datepicker" width="200px" value="12/08/2019" />
        </div>
        <div class="col-md-6 mb-md">
            <label class="mb-sm">Date Time Picker</label>
            <input id="datetimepicker" width="200px" value="01:32 12/08/2019" />
        </div>
        <div class="col-md-6">
            <label class="mb-sm">Time Picker(Click Icon)</label>
            <input id="timepicker" width="200px" />
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Datepicker --&gt; 
&lt;input id=&quot;datepicker&quot; width=&quot;276&quot; value=&quot;12/08/2019&quot;/&gt;
&lt;script&gt;$(&quot;#datepicker&quot;).datepicker({ showOtherMonths: true });&lt;/script&gt;

&lt;!--Datetimepicker --&gt; 
&lt;input id=&quot;datetimepicker&quot; width=&quot;312&quot;/&gt;
&lt;script&gt;$(&quot;#datetimepicker&quot;).datetimepicker({ footer: true, modal: true });&lt;/script&gt;

&lt;!--Timepicker--&gt; 
&lt;input id=&quot;timepicker&quot; width=&quot;276&quot;/&gt;
&lt;script&gt;$(&quot;#timepicker&quot;).timepicker();&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Datepicker Range<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <input class="form-control" type="text" name="basic" />
        </div>
        <div class="col-lg-4 col-md-6">
            <input class="form-control" type="text" name="dates" />
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- basic --&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;basic&quot;&gt;
&lt;script&gt;
$(&quot;input[name=&quot;basic&quot;]&quot;).daterangepicker({
  singleDatePicker: true,
  parentEl: &quot;.main-content-body&quot;,
});
&lt;/script&gt;

&lt;!--dates--&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;dates&quot;&gt;
&lt;script&gt;
  $(&quot;input[name=&quot;dates&quot;]&quot;).daterangepicker({
    parentEl: &quot;.main-content-body&quot;,
  });
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Date Range Picker With Times<a class="section-link"
        href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <input class="form-control" type="text" name="datetimes" />
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- datetimes --&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;datetimes&quot; /&gt;
&lt;script&gt;
$(function() {
  $(&quot;input[name=&quot;datetimes&quot;]&quot;).daterangepicker({
    parentEl: &quot;.main-content-body&quot;,
    timePicker: true,
    startDate: moment().startOf(&quot;hour&quot;),
    endDate: moment().startOf(&quot;hour&quot;).add(32, &quot;hour&quot;),
    locale: {
      format: &quot;M/DD hh:mm A&quot;
    }
  });
});
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Predefined Date Ranges<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div id="reportrange" class="btn btn-raised-primary">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div id=&quot;reportrange&quot; class=&quot;btn btn-raised-primary&quot;&gt;
  &lt;i class=&quot;fa fa-calendar&quot;&gt;&lt;/i&gt;&amp;nbsp;
  &lt;span&gt;&lt;/span&gt; &lt;i class=&quot;fa fa-caret-down&quot;&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;script&gt;
$(function() {

    var start = moment().subtract(29, &quot;days&quot;);
    var end = moment();

    function cb(start, end) {
        $(&quot;#reportrange span&quot;).html(start.format(&quot;MMMM D, YYYY&quot;) + &quot; - &quot; + end.format(&quot;MMMM D, YYYY&quot;));
    }

    $(&quot;#reportrange&quot;).daterangepicker({
        parentEl: &quot;.main-content-body&quot;,
        startDate: start,
        endDate: end,
        ranges: {
           &quot;Today&quot;: [moment(), moment()],
           &quot;Yesterday&quot;: [moment().subtract(1, &quot;days&quot;), moment().subtract(1, &quot;days&quot;)],
           &quot;Last 7 Days&quot;: [moment().subtract(6, &quot;days&quot;), moment()],
           &quot;Last 30 Days&quot;: [moment().subtract(29, &quot;days&quot;), moment()],
           &quot;This Month&quot;: [moment().startOf(&quot;month&quot;), moment().endOf(&quot;month&quot;)],
           &quot;Last Month&quot;: [moment().subtract(1, &quot;month&quot;).startOf(&quot;month&quot;), moment().subtract(1, &quot;month&quot;).endOf(&quot;month&quot;)]
        }
    }, cb);

    cb(start, end);

});
&lt;/script&gt;"></code>

@endsection