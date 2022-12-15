@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Progressbar<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress-wrapper mb-xl">
    <div class="progress-info"><span></span>
      <div class="progress-percentage"><span>80%</span></div>
    </div>
    <div class="progress mb-md">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
  </div>
  <div class="progress-wrapper mb-xl">
    <div class="progress-info"><span></span>
      <div class="progress-percentage"><span>50%</span></div>
    </div>
    <div class="progress mb-md">
      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
  </div>
  <div class="progress-wrapper mb-xl">
    <div class="progress-info"><span></span>
      <div class="progress-percentage"><span>40%</span></div>
    </div>
    <div class="progress mb-md">
      <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
  </div>
  <div class="progress-wrapper mb-xl">
    <div class="progress-info"><span></span>
      <div class="progress-percentage"><span>30%</span></div>
    </div>
    <div class="progress mb-md">
      <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100"></div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress-wrapper mb-xl&quot;&gt;
    &lt;div class=&quot;progress-info&quot;&gt;
      &lt;span&gt;&lt;/span&gt;
      &lt;div class=&quot;progress-percentage&quot;&gt;
        &lt;span&gt;80%&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;progress mb-md&quot;&gt;
      &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 80%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  
  &lt;div class=&quot;progress-wrapper mb-xl&quot;&gt;
    &lt;div class=&quot;progress-info&quot;&gt;
      &lt;span&gt;&lt;/span&gt;
      &lt;div class=&quot;progress-percentage&quot;&gt;
        &lt;span&gt;50%&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;progress mb-md&quot;&gt;
      &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  
  &lt;div class=&quot;progress-wrapper mb-xl&quot;&gt;
    &lt;div class=&quot;progress-info&quot;&gt;
      &lt;span&gt;&lt;/span&gt;
      &lt;div class=&quot;progress-percentage&quot;&gt;
        &lt;span&gt;40%&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;progress mb-md&quot;&gt;
      &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 40%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  
  &lt;div class=&quot;progress-wrapper mb-xl&quot;&gt;
    &lt;div class=&quot;progress-info&quot;&gt;
      &lt;span&gt;&lt;/span&gt;
      &lt;div class=&quot;progress-percentage&quot;&gt;
        &lt;span&gt;30%&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;progress mb-md&quot;&gt;
      &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Height<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress mb-md" style="height: 10px;">
    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
      aria-valuemax="100"></div>
  </div>
  <div class="progress" style="height: 20px;">
    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
      aria-valuemax="100"></div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress mb-md&quot; style=&quot;height: 10px;&quot;&gt;
    &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; style=&quot;height: 20px;&quot;&gt;
    &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Labels<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress">
    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
      aria-valuemax="100">25%</div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Multiple Bars<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
      aria-valuemax="100"></div>
    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
      aria-valuemax="100"></div>
    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
      aria-valuemax="100"></div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 15%&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 20%&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Striped<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress mb-md">
    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress mb-md">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress mb-md">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress mb-md">
    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress mb-md">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress mb-md&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped&quot; role=&quot;progressbar&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress mb-md&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress mb-md&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress mb-md&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress mb-md&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Animation<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="progress" style="height: 15px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
      aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;progress&quot;  style=&quot;height: 15px;&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;"></code>

@endsection