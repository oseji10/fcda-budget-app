@extends('layouts.entry')

@section('content')

<div class="row mb-md">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="ul-alert d-flex align-items-center">
          <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
          <div class="ul-alert-p">
            A JQuery validation plugin for bootstrap forms.For more info please visit the plugin's<a
              class="btn btn-link btn-link-primary m-0"
              href="http://reactiveraven.github.io/jqBootstrapValidation/">Demo Page</a> or <a
              class="btn btn-link btn-link-primary m-0"
              href="https://github.com/ReactiveRaven/jqBootstrapValidation">Github Repo</a>. </div>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="doc-section-title" id="form-control">Basic Form Validation<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
  <form class="form-horizontal error" novalidate>
    <div class="row">
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="text" class="form-control" placeholder="Username" required
              data-validation-required-message="Full Name Required" />
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="email" class="form-control" placeholder="example@domain.com" required
              data-validation-required-message="Email Fill is Required" />
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-raised-primary" type="submit">Submit</button>
  </form>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;form class=&quot;form-horizontal error&quot; novalidate&gt;
    &lt;div class=&quot;row&quot;&gt;
    
      &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
        &lt;div class=&quot;control-group&quot;&gt;
          &lt;div class=&quot;controls&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;username&quot; required data-validation-required-message=&quot;Full Name Required&quot; /&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    
      &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
        &lt;div class=&quot;control-group&quot;&gt;
          &lt;div class=&quot;controls&quot;&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;example@domain.com&quot; required data-validation-required-message=&quot;Email Fill is Required&quot; /&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    
    &lt;/div&gt;
    &lt;button class=&quot;btn btn-raised-primary&quot; type=&quot;submit&quot;&gt;Submit&lt;/button&gt;
  &lt;/form&gt;
  
  &lt;script&gt;
    $(&quot;input,select,textarea&quot;).not(&quot;[type=submit]&quot;).jqBootstrapValidation();
  &lt;/script&gt;"></code>
<h2 class="doc-section-title" id="form-control">Inputs Validation<a class="section-link" href="#form-control"></a>
</h2>
<div class="doc-example">
  <form class="form-horizontal error" novalidate>
    <div class="row">
      <div class="col-md-4 mb-md">
        <div class="control-group ">
          <div class="controls">
            <input type="text" class="form-control" placeholder="Username" required
              data-validation-required-message="Full Name Required" />
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="number" class="form-control" placeholder="Type number..." required
              data-validation-required-message="type number" />
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="number" class="form-control" placeholder="Enter number between 1 & 10" required
              data-validation-required-message="type number" max="10" name="some_field" />
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="text" name="numeric" class="form-control" required=""
              data-validation-containsnumber-regex="(\d)+"
              data-validation-containsnumber-message="The number field may only contain number not characters."
              placeholder="Enter Numbers only" />
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="text" name="alpha" class="form-control" required=""
              data-validation-containsnumber-regex="^[a-zA-Z]+$"
              data-validation-containsnumber-message="The character field may only contain  characters."
              placeholder="Enter Character only">
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="text" name="minChar" class="form-control"
              data-validation-required-message="The min field must be at least 5 characters." minlength="5"
              placeholder="Enter minimum 5 characters">
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="text" name="digit" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*"
              data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
              data-validation-required-message="The digits field must be numeric and exactly contain 5 digits"
              maxlength="5" minlength="5" placeholder="Enter Exactly 5 digits">
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="password" name="password" class="form-control"
              data-validation-required-message="This field is required" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md">
        <div class="control-group">
          <div class="controls">
            <input type="password" name="password2" data-validation-match-match="password" class="form-control"
              data-validation-required-message="Confirm password must match" placeholder="Confirm Password">
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-raised-primary" type="submit">Submit</button>
  </form>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;form class=&quot;form-horizontal error&quot; novalidate&gt;
    &lt;div class=&quot;row&quot;&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group &quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;username&quot; required data-validation-required-message=&quot;Full Name Required&quot; /&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;type number...&quot; required data-validation-required-message=&quot;type number&quot; /&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;ENTER NUMBER BETWEEN 1 &amp; 10&quot; required data-validation-required-message=&quot;type number&quot;   max=&quot;10&quot; name=&quot;some_field&quot; /&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;text&quot; name=&quot;numeric&quot; class=&quot;form-control&quot; required=&quot;&quot; data-validation-containsnumber-regex=&quot;(d)+&quot; data-validation-containsnumber-message=&quot;The number field may only contain number not characters.&quot; placeholder=&quot;Enter Numbers only&quot; /&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;text&quot; name=&quot;alpha&quot; class=&quot;form-control&quot; required=&quot;&quot; data-validation-containsnumber-regex=&quot;^[a-zA-Z]+$&quot; data-validation-containsnumber-message=&quot;The character field may only contain  characters.&quot; placeholder=&quot;Enter Character only&quot;&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;text&quot; name=&quot;minChar&quot; class=&quot;form-control&quot; data-validation-required-message=&quot;The min field must be at least 5 characters.&quot; minlength=&quot;5&quot; placeholder=&quot;Enter minimum 5 characters&quot; &gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;text&quot; name=&quot;digit&quot; class=&quot;form-control&quot; data-validation-regex-regex=&quot;([^a-z]*[A-Z]*)*&quot; data-validation-containsnumber-regex=&quot;([^0-9]*[0-9]+)+&quot; data-validation-required-message=&quot;The digits field must be numeric and exactly contain 5 digits&quot; maxlength=&quot;5&quot; minlength=&quot;5&quot; placeholder=&quot;Enter Exactly 5 digits&quot;&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;password&quot; name=&quot;password&quot; class=&quot;form-control&quot; data-validation-required-message=&quot;This field is required&quot; placeholder=&quot;Password&quot;&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      
        &lt;div class=&quot;col-md-4 mb-md&quot;&gt;
          &lt;div class=&quot;control-group&quot;&gt;
            &lt;div class=&quot;controls&quot;&gt;
              &lt;input type=&quot;password&quot; name=&quot;password2&quot; data-validation-match-match=&quot;password&quot; class=&quot;form-control&quot; data-validation-required-message=&quot;Confirm password must match&quot; placeholder=&quot;Confirm Password&quot;&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;button class=&quot;btn btn-raised-primary&quot; type=&quot;submit&quot;&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
    
    &lt;script&gt;
      $(&quot;input,select,textarea&quot;).not(&quot;[type=submit]&quot;).jqBootstrapValidation();
    &lt;/script&gt;"></code>


@endsection