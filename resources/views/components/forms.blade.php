@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="form-control">Form controls<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <button class="btn btn-raised-primary btn-icon">
            <i class="material-icons">home</i>
          </button>
        </div>
        <input type="text" class="form-control" id="" placeholder="Username" aria-describedby="">
        <div class="input-group-append">
          <button class="btn btn-raised-primary btn-icon">
            <i class="material-icons">home</i>
          </button>
        </div>
      </div>
      <div class="input-group input-light mb-3">
        <input class="form-control" type="text" placeholder="Username" value="No icon" aria-label="Username"
          aria-describedby="basic-addon1" />
      </div>
      <div class="input-group with-icon input-light mb-3">
        <div class="input-group-prepend"><i class="input-group-text fas fa-user"></i></div>
        <input class="form-control" type="text" placeholder="Username" value="With icon" aria-label="Username"
          aria-describedby="basic-addon1" />
      </div>
      <div class="input-group with-icon input-light">
        <div class="input-group-prepend"><i class="input-group-text far fa-keyboard"></i></div>
        <textarea class="form-control" aria-label="With textarea">Textarea</textarea>
      </div>
    </div>
    <!-- End Default controls-->
    <!-- Rounded controls-->
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
      &lt;div class=&quot;input-group&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
          &lt;button class=&quot;btn btn-raised-primary btn-icon&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;home&lt;/i&gt;
          &lt;/button&gt;
          
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;&quot; placeholder=&quot;Username&quot; aria-describedby=&quot;&quot; &gt;
        &lt;div class=&quot;input-group-append&quot;&gt;
          &lt;button class=&quot;btn btn-raised-primary btn-icon&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;home&lt;/i&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;input-group  input-light mb-3&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; value=&quot;No icon&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;input-group with-icon input-light mb-3&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
          &lt;i class=&quot;input-group-text fas fa-user&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; value=&quot;With icon&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;input-group with-icon input-light&quot;&gt;
        &lt;div class=&quot;input-group-prepend&quot;&gt;
          &lt;i class=&quot;input-group-text far fa-keyboard&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
      &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;Textarea&lt;/textarea&gt;
      &lt;/div&gt;
  &lt;/div&gt;
    &lt;!-- End Default controls --&gt;
    "></code>
<h2 class="doc-section-title" id="form-control">Custom Inputs<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-6">
      <div class="custom-input-1 light">
        <i class="material-icons">search</i>
        <input type="text" class="" id="" placeholder="Username" aria-describedby="">
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;custom-input-1 light&quot;&gt;
  &lt;i class=&quot;material-icons&quot;&gt;search&lt;/i&gt;
  &lt;input type=&quot;text&quot; class=&quot;&quot; id=&quot;&quot; placeholder=&quot;Username&quot; aria-describedby=&quot;&quot; &gt;
&lt;/div&gt;"></code>
<h2 class="doc-section-title" id="control-states">Form control states<a class="section-link" href="#control-states"></a>
</h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group with-icon has-success input-light mb-3">
        <div class="input-group-prepend"><i class="input-group-text far fa-file-alt"></i></div>
        <input class="form-control" value="Success" type="text" placeholder="Username" aria-label="Username"
          aria-describedby="basic-addon1" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group with-icon has-error input-light mb-3">
        <div class="input-group-prepend"><i class="input-group-text far fa-file-alt"></i></div>
        <input class="form-control" value="Error" type="text" placeholder="Username" aria-label="Username"
          aria-describedby="basic-addon1" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group with-icon has-warning input-light mb-3">
        <div class="input-group-prepend"><i class="input-group-text far fa-file-alt"></i></div>
        <input class="form-control" value="Warning" type="text" placeholder="Username" aria-label="Username"
          aria-describedby="basic-addon1" />
      </div>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;div class=&quot;input-group  with-icon has-success input-light mb-3&quot;&gt;
      &lt;div class=&quot;input-group-prepend&quot;&gt;
        &lt;i class=&quot;input-group-text far fa-file-alt&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;input value=&quot;Success&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;div class=&quot;input-group with-icon has-error input-light mb-3&quot;&gt;
      &lt;div class=&quot;input-group-prepend&quot;&gt;
          &lt;i class=&quot;input-group-text far fa-file-alt&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;input value=&quot;Error&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;div class=&quot;input-group with-icon has-warning input-light mb-3&quot;&gt;
      &lt;div class=&quot;input-group-prepend&quot;&gt;
        &lt;i class=&quot;input-group-text far fa-file-alt&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;input value=&quot;Warning&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;"></code>
<h2 class="doc-section-title" id="checkbox">Checkboxes<a class="section-link" href="#checkbox"></a></h2>
<div class="doc-example">
  <div class="mb-md custom-control custom-checkbox checkbox-primary mb-md">
    <input class="custom-control-input" id="customCheck2" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck2">Primary</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-secondary">
    <input class="custom-control-input" id="customCheck3" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck3">Secondary</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-success">
    <input class="custom-control-input" id="customCheck4" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck4">Success</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-danger">
    <input class="custom-control-input" id="customCheck5" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck5">Danger</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-info">
    <input class="custom-control-input" id="customCheck6" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck6">Info</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-light">
    <input class="custom-control-input" id="customCheck7" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck7">Light</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-dark">
    <input class="custom-control-input" id="customCheck8" type="checkbox" checked="" />
    <label class="custom-control-label" for="customCheck8">Dark</label>
  </div>
  <div class="mb-md custom-control custom-checkbox checkbox-dark">
    <input class="custom-control-input" id="customCheck9" type="checkbox" disabled="" checked="" />
    <label class="custom-control-label" for="customCheck9">Disabled</label>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-primary mb-md&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck2&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck2&quot;&gt;
    Primary
  &lt;/label&gt;
&lt;/div&gt;
 
&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-secondary&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck3&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck3&quot;&gt;
    Secondary
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-success&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck4&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck4&quot;&gt;
    Success
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-danger&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck5&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck5&quot;&gt;
    Danger
  &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-info&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck6&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck6&quot;&gt;
    Info
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-light&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck7&quot; checked=&quot;&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck7&quot;&gt;
    Light
  &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-dark&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck8&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck8&quot;&gt;
Dark
&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-dark&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck9&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
&lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck9&quot;&gt;
Disabled
&lt;/label&gt;
&lt;/div&gt;"></code>
<h2 class="doc-section-title" id="radio">Radio<a class="section-link" href="#radio"></a></h2>
<div class="doc-example">
  <div class="custom-control custom-radio radio-primary mb-md">
    <input class="custom-control-input" id="customRadioInline1" type="radio" name="customRadioInline" checked="" />
    <label class="custom-control-label" for="customRadioInline1">Primary</label>
  </div>
  <div class="custom-control custom-radio radio-secondary mb-md">
    <input class="custom-control-input" id="customRadioInline3" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline3">Secondary</label>
  </div>
  <div class="custom-control custom-radio radio-success mb-md">
    <input class="custom-control-input" id="customRadioInline2" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline2">Success</label>
  </div>
  <div class="custom-control custom-radio radio-warning mb-md">
    <input class="custom-control-input" id="customRadioInline4" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline4">Warning</label>
  </div>
  <div class="custom-control custom-radio radio-danger mb-md">
    <input class="custom-control-input" id="customRadioInline5" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline5">Danger</label>
  </div>
  <div class="custom-control custom-radio radio-info mb-md">
    <input class="custom-control-input" id="customRadioInline6" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline6">Info</label>
  </div>
  <div class="custom-control custom-radio radio-light mb-md">
    <input class="custom-control-input" id="customRadioInline7" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline7">Light</label>
  </div>
  <div class="custom-control custom-radio radio-dark mb-md">
    <input class="custom-control-input" id="customRadioInline8" type="radio" name="customRadioInline" />
    <label class="custom-control-label" for="customRadioInline8">Dark</label>
  </div>
  <div class="custom-control custom-radio radio-dark mb-md">
    <input class="custom-control-input" id="customRadioInline9" type="radio" name="customRadioInline" disabled="" />
    <label class="custom-control-label" for="customRadioInline9">Disabled</label>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;custom-control custom-radio radio-primary mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline1&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot; checked=&quot;&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline1&quot;&gt;
    Primary
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-secondary mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline3&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline3&quot;&gt;
    Secondary
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-success mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline2&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline2&quot;&gt;
    Success
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-warning mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline4&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline4&quot;&gt;
    Warning
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-danger mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline5&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline5&quot;&gt;
    Danger
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-info mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline6&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline6&quot;&gt;
    Info
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-light mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline7&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline7&quot;&gt;
    Light
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-dark mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline8&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline8&quot;&gt;
    Dark
    &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;custom-control custom-radio radio-dark mb-md&quot;&gt;
    &lt;input type=&quot;radio&quot; id=&quot;customRadioInline9&quot; name=&quot;customRadioInline&quot; class=&quot;custom-control-input&quot; disabled=&quot;&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadioInline9&quot;&gt;
    Disabled
    &lt;/label&gt;
    &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="switch">Switch<a class="section-link" href="#switch"></a></h2>
<div class="doc-example">
  <label class="switch switch-primary my-md"><span>Primary</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-secondary my-md"><span>Secondary</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-success my-md"><span>Success</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-warning my-md"><span>Warning</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-danger my-md"><span>Danger</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-light my-md"><span>Light</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-dark my-md"><span>Dark</span>
    <input type="checkbox" checked="" /><span class="slider"></span>
  </label><br />
  <label class="switch switch-dark my-md"><span>Disabled</span>
    <input type="checkbox" disabled="" /><span class="slider"></span>
  </label>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;label class=&quot;switch switch-primary my-md&quot;&gt;
    &lt;span&gt;Primary&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-secondary my-md&quot;&gt;
    &lt;span&gt;Secondary&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-success my-md&quot;&gt;
    &lt;span&gt;Success&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-warning my-md&quot;&gt;
    &lt;span&gt;Warning&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-danger my-md&quot;&gt;
    &lt;span&gt;Danger&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-light my-md&quot;&gt;
    &lt;span&gt;Light&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-dark my-md&quot;&gt;
    &lt;span&gt;Dark&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; checked=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;br&gt;
    &lt;label class=&quot;switch switch-dark my-md&quot;&gt;
    &lt;span&gt;Disabled&lt;/span&gt;
    &lt;input type=&quot;checkbox&quot; disabled=&quot;&quot;&gt;
    &lt;span class=&quot;slider&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;"></code>


@endsection