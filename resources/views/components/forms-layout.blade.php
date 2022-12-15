@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Form Basic<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="row">
    <div class="col-md-6">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mb-md custom-control custom-checkbox checkbox-primary mb-md">
          <input type="checkbox" class="custom-control-input" id="customCheck2">
          <label class="custom-control-label" for="customCheck2">Check Me Out</label>
        </div>
        <button type="submit" class="btn btn-raised-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;form&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
        &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We will never share your email with anyone else.&lt;/small&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;mb-md custom-control custom-checkbox checkbox-primary mb-md&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck2&quot;&gt;
        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck2&quot;&gt;
          Check Me Out
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;button type=&quot;submit&quot; class=&quot;btn btn-raised-primary&quot;&gt;Submit&lt;/button&gt;
    &lt;/form&gt;"></code>

<div class="mx-lg">
  <h2 class="doc-section-title" id="examples">Form Inputs<a class="section-link" href="#examples"></a></h2>
  <div class="doc-example">
    <form>
      <div class="row">
        <div class="form-group col-md-6 mb-md pl-0">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="First Name....">
        </div>
        <div class="form-group col-md-6 pl-0">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name....">
        </div>
        <div class="form-group col-md-6 mb-md pl-0">
          <label for="">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email....">
        </div>
        <div class="form-group col-md-6 pl-0">
          <label for="">Phone</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone...">
        </div>
        <div class="form-group col-md-6 mb-md pl-0">
          <label for="">Credit Card Number</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Credit Number....">
        </div>
        <div class="form-group col-md-6 pl-0">
          <label for="">Website</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="website...">
        </div>
        <div class="form-group col-md-6 mb-md pl-0">
          <label for="">Birth Date</label>
          <input class="form-control" type="text" name="basic" id="ul-form-layoute-date">
        </div>
        <div class="form-group col-md-6 pl-0">
          <label for="">Website</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="website...">
        </div>
      </div>
    </form>
  </div>
  <div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
      title="Copy to clipboard">Copy</button>
  </div><code class="code" data-code="&lt;form&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;form-group col-md-6 mb-md pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;First Name&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;First Name....&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Last Name&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Last Name....&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 mb-md pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Email address&lt;/label&gt;
          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email....&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Phone&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;phone...&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 mb-md pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Credit Card Number&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Credit Number....&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Website&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;website...&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 mb-md pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Birth Date&lt;/label&gt;
          &lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;basic&quot; id=&quot;ul-form-layoute-date&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group col-md-6 pl-0&quot;&gt;
          &lt;label for=&quot;&quot;&gt;Website&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;website...&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/form&gt;"></code>
</div>
@endsection