@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Examples<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <button class="btn btn-default mb-lg" type="button">Default</button>
  <button class="btn btn-primary mb-lg" type="button">Primary</button>
  <button class="btn btn-info mb-lg" type="button">Info</button>
  <button class="btn btn-success mb-lg" type="button">Success</button>
  <button class="btn btn-danger mb-lg" type="button">Danger</button>
  <button class="btn btn-warning mb-lg" type="button">Warning</button><br />
  <button class="btn btn-opacity-default" type="button">Default</button>
  <button class="btn btn-opacity-primary" type="button">Primary</button>
  <button class="btn btn-opacity-info" type="button">Info</button>
  <button class="btn btn-opacity-success" type="button">Success</button>
  <button class="btn btn-opacity-danger" type="button">Danger</button>
  <button class="btn btn-opacity-warning" type="button">Warning</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
  
  &lt;button class=&quot;btn btn-opacity-default&quot; type=&quot;button&quot;&gt;Default&lt;/button&gt;
  &lt;button class=&quot;btn btn-opacity-primary&quot; type=&quot;button&quot;&gt;Primary&lt;/button&gt;
  &lt;button class=&quot;btn btn-opacity-info&quot; type=&quot;button&quot;&gt;Info&lt;/button&gt;
  &lt;button class=&quot;btn btn-opacity-success&quot; type=&quot;button&quot;&gt;Success&lt;/button&gt;
  &lt;button class=&quot;btn btn-opacity-danger&quot; type=&quot;button&quot;&gt;Danger&lt;/button&gt;
  &lt;button class=&quot;btn btn-opacity-warning&quot; type=&quot;button&quot;&gt;Warning&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="raised">Raised Buttons<a class="section-link" href="#raised"></a></h2>
<p></p>
<div class="doc-example">
  <button class="btn btn-raised btn-raised-default m-xxl" type="button">Default</button>
  <button class="btn btn-raised btn-raised-primary m-xxl" type="button">Primary</button>
  <button class="btn btn-raised btn-raised-info m-xxl" type="button">Info</button>
  <button class="btn btn-raised btn-raised-success m-xxl" type="button">Success</button>
  <button class="btn btn-raised btn-raised-danger m-xxl" type="button">Danger</button>
  <button class="btn btn-raised btn-raised-warning m-xxl" type="button">Warning</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-default&quot;&gt;Default&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary&quot;&gt;Primary&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-info&quot;&gt;Info&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-success&quot;&gt;Success&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-danger&quot;&gt;Danger&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-warning&quot;&gt;Warning&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="outline">Outline Buttons<a class="section-link" href="#outline"></a></h2>
<p></p>
<div class="doc-example">
  <button class="btn btn-outline btn-outline-primary" type="button">Primary</button>
  <button class="btn btn-outline btn-outline-info" type="button">Info</button>
  <button class="btn btn-outline btn-outline-success" type="button">Success</button>
  <button class="btn btn-outline btn-outline-danger" type="button">Danger</button>
  <button class="btn btn-outline btn-outline-warning" type="button">Warning</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-info&quot;&gt;Info&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-success&quot;&gt;Success&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-warning&quot;&gt;Warning&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="link">Links<a class="section-link" href="#link"></a></h2>
<p></p>
<div class="doc-example">
  <button class="btn btn-link btn-link-primary">Primary</button>
  <button class="btn btn-link btn-link-info">Info</button>
  <button class="btn btn-link btn-link-success">Success</button>
  <button class="btn btn-link btn-link-warning">Warning</button>
  <button class="btn btn-link btn-link-danger">Danger</button>
  <button class="btn btn-link btn-link-light">Light</button>
  <button class="btn btn-link btn-link-dark">Dark</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="
  &lt;button class=&quot;btn btn-link btn-link-primary &quot;&gt;Primary&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-info&quot;&gt;Info&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-success&quot;&gt;Success&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-warning&quot;&gt;Warning&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-danger&quot;&gt;Danger&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-light&quot;&gt;Light&lt;/button&gt;
  &lt;button class=&quot;btn btn-link btn-link-dark&quot;&gt;Dark&lt;/button&gt;
  "></code>
<h2 class="doc-section-title" id="variation">Button Variation<a class="section-link" href="#variation"></a></h2>
<p></p>
<div class="doc-example">
  <button class="btn btn-primary btn-rounded" type="button">Default rounded</button>
  <button class="btn btn-outline btn-outline-primary btn-rounded" type="button">Outline rounded</button>
  <button class="btn btn-raised btn-raised-primary btn-rounded" type="button">Raised rounded</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-rounded&quot;&gt;Default rounded&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline btn-outline-primary btn-rounded&quot;&gt;Outline rounded&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-raised btn-raised-primary btn-rounded&quot;&gt;Raised rounded&lt;/button&gt;"></code>
<h3 class="doc-section-title" id="icon">Icon buttons<a class="section-link" href="#icon"></a></h3>
<p></p>
<div class="doc-example">
  <button class="btn btn-primary" type="button"><i data-feather="shopping-cart"></i> Feather Icon</button>
  <button class="btn btn-primary" type="button"><i class="fas fa-download"></i> Fontawesome</button>
  <button class="btn btn-raised btn-raised-primary rounded-circle btn-icon"><i class="fas fa-download"></i></button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="
  &lt;button class=&quot;btn btn-primary&quot;&gt;&lt;i data-feather=&quot;shopping-cart&quot;&gt;&lt;/i&gt;Feather Icon&lt;/button&gt;
  &lt;button class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;fas fa-download&quot;&gt;&lt;/i&gt;Fontawesome&lt;/button&gt;
  &lt;button class=&quot;btn btn-raised btn-raised-primary rounded-circle btn-icon&quot;&gt;&lt;i class=&quot;fas fa-download&quot;&gt;&lt;/i&gt;&lt;/button&gt;"></code>
<h3 class="doc-section-title" id="social">Social Buttons<a class="section-link" href="#social"></a></h3>
<p></p>
<div class="doc-example">
  <button class="btn btn-google m-sm"><i class="fab fa-google"></i> Google</button>
  <button class="btn btn-facebook m-sm"><i class="fab fa-facebook-f"></i>Facebook</button>
  <button class="btn btn-twitter m-sm"><i class="fab fa-twitter"></i>Twitter</button><br />
  <button class="btn btn-google btn-raised m-sm">Google</button>
  <button class="btn btn-facebook btn-raised m-sm">Facebook</button>
  <button class="btn btn-twitter btn-raised m-sm">Twitter</button><br />
  <button class="btn btn-google btn-outline m-sm"><i class="fab fa-google"></i>Google</button>
  <button class="btn btn-outline btn-facebook m-sm"><i class="fab fa-facebook-f"></i>Facebook</button>
  <button class="btn btn-twitter btn-outline m-sm"><i class="fab fa-twitter"></i>Twitter</button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="
  &lt;button class=&quot;btn btn-google&quot;&gt;&lt;i class=&quot;fab fa-google&quot;&gt;&lt;/i&gt; Google&lt;/button&gt;
  &lt;button class=&quot;btn btn-facebook&quot;&gt;&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;Facebook&lt;/button&gt;
  &lt;button class=&quot;btn btn-twitter&quot;&gt;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;Twitter&lt;/button&gt;
  &lt;button class=&quot;btn btn-google btn-raised&quot;&gt;Google&lt;/button&gt;
  &lt;button class=&quot;btn btn-facebook btn-raised&quot;&gt;Facebook&lt;/button&gt;
  &lt;button class=&quot;btn btn-twitter btn-raised&quot;&gt;Twitter&lt;/button&gt;
  &lt;button class=&quot;btn btn-google btn-outline&quot;&gt;&lt;i class=&quot;fab fa-google&quot;&gt;&lt;/i&gt;Google&lt;/button&gt;
  &lt;button class=&quot;btn btn-outline btn-facebook&quot;&gt;&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;Facebook&lt;/button&gt;
  &lt;button class=&quot;btn btn-twitter btn-outline&quot;&gt;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;Twitter&lt;/button&gt;"></code>
<h3 class="doc-section-title" id="size">Button Size<a class="section-link" href="#size"></a></h3>
<p></p>
<div class="doc-example">
  <button class="btn btn-primary btn-sm" type="button">Small button</button>
  <button class="btn btn-primary" type="button">Default button</button>
  <button class="btn btn-primary btn-lg" type="button">Large button</button>
  <button class="btn btn-raised btn-raised-primary rounded-circle btn-sm btn-icon"><i
      class="fas fa-download"></i></button>
  <button class="btn btn-raised btn-raised-primary rounded-circle btn-icon"><i class="fas fa-download"></i></button>
  <button class="btn btn-raised btn-raised-primary rounded-circle btn-lg btn-icon"><i
      class="fas fa-download"></i></button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code"
  data-code="&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Default button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;
  &lt;button class=&quot;btn btn-raised btn-raised-primary rounded-circle btn-sm btn-icon&quot;&gt;&lt;i class=&quot;fas fa-download&quot;&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class=&quot;btn btn-raised btn-raised-primary rounded-circle btn-icon&quot;&gt;&lt;i class=&quot;fas fa-download&quot;&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;button class=&quot;btn btn-raised btn-raised-primary rounded-circle btn-lg btn-icon&quot;&gt;&lt;i class=&quot;fas fa-download&quot;&gt;&lt;/i&gt;&lt;/button&gt;"></code>



@endsection