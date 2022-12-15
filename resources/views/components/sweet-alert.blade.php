@extends('layouts.entry')

@section('content')
=
<div class="row mb-md">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="ul-alert d-flex align-items-center">
          <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
          <div class="ul-alert-p">
            A beautiful, responsive, customizable, accessible (wai-aria) replacement for javascript's popup boxes zero
            dependencies
            <a class="btn btn-link btn-link-primary m-0" target="_blank" href="https://sweetalert2.github.io/">Demo
              Page</a> or <a class="btn btn-link btn-link-primary m-0" target="_blank"
              href="https://github.com/sweetalert2/sweetalert2">Github Repo</a>.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="doc-section-title" id="examples">Basic ALerts<a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><button type="button" class="btn btn-raised btn-raised-primary" id="basic-alert">Basic</button>
  <button type="button" class="btn btn-raised btn-raised-primary" id="with-title">With Title</button>
  <button type="button" class="btn btn-raised btn-raised-primary" id="with-html">With Html</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
    &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary&quot; id=&quot;basic-alert&quot;&gt;Basic&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary&quot; id=&quot;with-title&quot;&gt;With Title&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary&quot; id=&quot;with-html&quot;&gt;With Html&lt;/button&gt;


&lt;script&gt; 
$(&quot;#basic-alert&quot;).on(&quot;click&quot;, function () { 
  Swal.fire(&quot;Here a message!&quot;); 

});


$(&quot;#with-title&quot;).on(&quot;click&quot;, function () { 
     Swal.fire(
         &quot;The Internet?&quot;,
         &quot;That thing is still around?&quot;
     );
});
 
 
$(&quot;#with-html&quot;).on(&quot;click&quot;, function () {
     Swal.fire({
         title: &quot;HTML &lt;small&gt;Title&lt;/small&gt;!&quot;,
         text: &quot;A custom &lt;span style=&quot;color:#F6BB42&quot;&gt;html&lt;span&gt; message.&quot;,
         html: true,
         buttonsStyling: false,
         confirmButtonClass: &quot;btn btn-lg btn-primary&quot;
     });
});
&lt;/script&gt;"></code>
<h2 class="doc-section-title" id="examples">Alert Types<a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><button type="button" class="btn btn-raised btn-raised-success" id="alert-success">Success
    ALert</button>
  <button type="button" class="btn btn-raised btn-raised-info" id="alert-info">Info Alert</button>
  <button type="button" class="btn btn-raised btn-raised-danger" id="alert-error">Error Alert</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-success&quot; id=&quot;alert-success&quot;&gt;Success ALert&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-info&quot; id=&quot;alert-info&quot;&gt;Info Alert&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-danger&quot; id=&quot;alert-error&quot;&gt;Error Alert&lt;/button&gt;

$(&quot;#alert-success&quot;).on(&quot;click&quot;, function () {
  Swal.fire({
      icon: &quot;success&quot;,
      title: &quot;Your work has been saved&quot;,
      showConfirmButton: false,
      timer: 1500
    })
});


$(&quot;#alert-info&quot;).on(&quot;click&quot;, function () {
    Swal.fire({
        title: &quot;&lt;strong&gt;HTML &lt;u&gt;example&lt;/u&gt;&lt;/strong&gt;&quot;,
        icon: &quot;info&quot;,
        html:
          &quot;You can use &lt;b&gt;bold text&lt;/b&gt;, &quot; +
          &quot;&lt;a href=&quot;//sweetalert2.github.io&quot;&gt;links&lt;/a&gt; &quot; +
          &quot;and other HTML tags&quot;,
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
          &quot;&lt;i class=&quot;fa fa-thumbs-up&quot;&gt;&lt;/i&gt; Great!&quot;,
        confirmButtonAriaLabel: &quot;Thumbs up, great!&quot;,
        cancelButtonText:
          &quot;&lt;i class=&quot;fa fa-thumbs-down&quot;&gt;&lt;/i&gt;&quot;,
        cancelButtonAriaLabel: &quot;Thumbs down&quot;
      })
 });
 
$(&quot;#alert-error&quot;).on(&quot;click&quot;, function () {
  Swal.fire({
      icon: &quot;error&quot;,
      title: &quot;Oops...&quot;,
      text: &quot;Something went wrong!&quot;,
      footer: &quot;&lt;a href&gt;Why do I have this issue?&lt;/a&gt;&quot;
    })
});
"></code>
<h2 class="doc-section-title" id="examples">Random<a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><button type="button" class="btn btn-raised btn-raised-primary "
    id="custom-position">Positioned Dialog</button>
  <button type="button" class="btn btn-raised btn-raised-danger" id="delete-confirm">Delete Confirm</button>
  <button type="button" class="btn btn-raised btn-raised-primary" id="chaining">Chaining Modal</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary &quot; id=&quot;custom-position&quot;&gt;Positioned Dialog&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-danger&quot; id=&quot;delete-confirm&quot;&gt;Delete Confirm&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary&quot; id=&quot;chaining&quot;&gt;Chaining Modal&lt;/button&gt;


&lt;script&gt;
  $(&quot;#custom-position&quot;).on(&quot;click&quot;, function () {
      Swal.fire({
          position: &quot;top-end&quot;,
          icon: &quot;success&quot;,
          title: &quot;Your work has been saved&quot;,
          showConfirmButton: false,
          timer: 1500
        })
  });

$(&quot;#delete-confirm&quot;).on(&quot;click&quot;, function(){
  Swal.fire({
    title: &quot;Are you sure?&quot;,
    text: &quot;You wont be able to revert this!&quot;,
    icon: &quot;warning&quot;,
    showCancelButton: true,
    confirmButtonColor: &quot;#3085d6&quot;,
    cancelButtonColor: &quot;#d33&quot;,
    confirmButtonText: &quot;Yes, delete it!&quot;
  }).then((result) =&gt; {
    if (result.value) {
      Swal.fire(
        &quot;Deleted!&quot;,
        &quot;Your file has been deleted.&quot;,
        &quot;success&quot;
      )
    }
  })
});


$(&quot;#chaining&quot;).on(&quot;click&quot;, function(){
  Swal.mixin({
    input: &quot;text&quot;,
    confirmButtonText:&quot;Next &amp;rarr;&quot;,
    showCancelButton: true,
    progressSteps: [&quot;1&quot;, &quot;2&quot;, &quot;3&quot;]
  }).queue([
    {
      title: &quot;Question 1&quot;,
      text: &quot;Chaining swal2 modals is easy&quot;
    },
    &quot;Question 2&quot;,
    &quot;Question 3&quot;
  ]).then((result) =&gt; {
    if (result.value) {
      const answers = JSON.stringify(result.value)
      Swal.fire({
        title: &quot;All done!&quot;,
        html: `
          Your answers:
          &lt;pre&gt;&lt;code&gt;${answers}&lt;/code&gt;&lt;/pre&gt;
        `,
        confirmButtonText: &quot;Lovely!&quot;
      })
    }
  })
 });
&lt;/script&gt;"></code>


@endsection