@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Default <a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><span class="badge badge-solid mr-sm badge-primary">Primary</span><span
    class="badge badge-solid mr-sm badge-secondary">Secondary</span><span
    class="badge badge-solid mr-sm badge-success">Success</span><span
    class="badge badge-solid mr-sm badge-danger">Danger</span><span
    class="badge badge-solid mr-sm badge-warning">Warning</span><span
    class="badge badge-solid mr-sm badge-info">Info</span><span
    class="badge badge-solid mr-sm badge-light">Light</span><span class="badge badge-solid mr-sm badge-dark">Dark</span>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-light&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge badge-dark&quot;&gt;Dark&lt;/span&gt;"></code>
<h2 class="doc-section-title" id="examples">Button with Badge <a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <button class="btn btn-outline btn-primary btn-badge"><span class="badge badge-primary">06</span>Messages</button>
  <button class="btn btn-raised btn-primary btn-badge"><span class="badge badge-white">06</span>Messages</button>
  <button class="btn btn-secondary btn-icon btn-badge"><span class="badge badge-danger">3</span><i
      class="material-icons">notifications </i></button>
  <button class="btn btn-raised btn-primary btn-icon btn-badge"><span class="badge badge-warning">3</span><i
      class="material-icons">notifications </i></button>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;button class=&quot;btn btn-outline btn-primary btn-badge&quot;&gt;&lt;span class=&quot;badge badge-primary&quot;&gt;06&lt;/span&gt;Messages&lt;/button&gt;
&lt;button class=&quot;btn btn-raised btn-primary btn-badge&quot;&gt;&lt;span class=&quot;badge badge-white&quot;&gt;06&lt;/span&gt;Messages&lt;/button&gt;

&lt;button class=&quot;btn btn-secondary btn-icon btn-badge&quot;&gt;
  &lt;span class=&quot;badge badge-danger&quot;&gt;3&lt;/span&gt;
  &lt;i class=&quot;material-icons&quot;&gt;notifications&lt;/i&gt;
&lt;/button&gt;

&lt;button class=&quot;btn btn-raised btn-primary btn-icon btn-badge&quot;&gt;
  &lt;span class=&quot;badge badge-warning&quot;&gt;3&lt;/span&gt;
  &lt;i class=&quot;material-icons&quot;&gt;notifications&lt;/i&gt;
&lt;/button&gt;"></code>
<h2 class="doc-section-title" id="examples">Badge with Avatar <a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex"><span class="badge badge-avatar-primary mr-2">
    <img class="avatar-xs rounded-circle mr-1" src="{{  asset('images/faces/1.jpg')}}">
    <label class="m-0">Timothy Clarkson</label>
  </span>
  <span class="badge badge-avatar-secondary mr-2">
    <img class="avatar-xs rounded-circle mr-1" src="{{  asset('images/faces/2.jpg')}}">
    <label class="m-0">Jhon </label>
  </span>
  <span class="badge badge-avatar-success mr-2">
    <img class="avatar-xs rounded-circle mr-1" src="{{  asset('images/faces/3.jpg')}}">
    <label class="m-0">Mirage </label>
  </span>
  <span class="badge badge-avatar-danger mr-2">
    <img class="avatar-xs rounded-circle mr-1" src="{{  asset('images/faces/4.jpg')}}">
    <label class="m-0">Banglore </label>
  </span>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-avatar-primary&quot;&gt;
  &lt;img class=&quot;avatar-xs rounded-circle mr-1&quot; src=&quot;{{  asset('images/faces/1.jpg')}}&quot;&gt;
  &lt;label class=&quot;m-0&quot;&gt;Timothy Clarkson&lt;/label&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-avatar-secondary&quot;&gt;
  &lt;img class=&quot;avatar-xs rounded-circle mr-1&quot; src=&quot;{{  asset('images/faces/2.jpg')}}&quot;&gt;
  &lt;label class=&quot;m-0&quot;&gt;Jhon &lt;/label&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-avatar-success&quot;&gt;
  &lt;img class=&quot;avatar-xs rounded-circle mr-1&quot; src=&quot;{{  asset('images/faces/3.jpg')}}&quot;&gt;
  &lt;label class=&quot;m-0&quot;&gt;Mirage &lt;/label&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-avatar-danger&quot;&gt;
  &lt;img class=&quot;avatar-xs rounded-circle mr-1&quot; src=&quot;{{  asset('images/faces/4.jpg')}}&quot;&gt;
  &lt;label class=&quot;m-0&quot;&gt;Banglore &lt;/label&gt;
&lt;/span&gt;"> </code>
<h2 class="doc-section-title" id="examples">Links <a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><a class="badge mr-sm badge-primary" href="#">Primary</a><a class="badge mr-sm badge-secondary"
    href="#">Secondary</a><a class="badge mr-sm badge-success" href="#">Success</a><a class="badge mr-sm badge-danger"
    href="#">Danger</a><a class="badge mr-sm badge-warning" href="#">Warning</a><a class="badge mr-sm badge-info"
    href="#">Info</a><a class="badge mr-sm badge-light" href="#">Light</a><a class="badge mr-sm badge-dark"
    href="#">Dark</a></div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;a href=&quot;#&quot; class=&quot;badge badge-primary&quot;&gt;Primary&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-secondary&quot;&gt;Secondary&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-success&quot;&gt;Success&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-danger&quot;&gt;Danger&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-warning&quot;&gt;Warning&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-info&quot;&gt;Info&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-light&quot;&gt;Light&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-dark&quot;&gt;Dark&lt;/a&gt;"></code>
<h2 class="doc-section-title" id="examples">Rounded Variations <a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><span class="badge badge-rounded badge-xxs mr-sm badge-primary">Primary</span><span
    class="badge badge-rounded badge-xs mr-sm badge-secondary">Secondary</span><span
    class="badge badge-rounded badge-sm mr-sm badge-success">Success</span><span
    class="badge badge-rounded mr-sm badge-danger">Danger</span><span
    class="badge badge-rounded mr-sm badge-warning">Warning</span><span
    class="badge badge-rounded mr-sm badge-info">Info</span><span
    class="badge badge-rounded mr-sm badge-light">Light</span><span
    class="badge badge-rounded mr-sm badge-dark">Dark</span></div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-rounded badge-xxs badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-xs badge-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-sm badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-light&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge badge-rounded badge-dark&quot;&gt;Dark&lt;/span&gt;"></code>
<h2 class="doc-section-title" id="examples">Circle Variations <a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex"><span class="badge rounded-circle badge-primary badge-xxs mr-sm">P</span><span
    class="badge rounded-circle badge-secondary badge-xs mr-sm">S</span><span
    class="badge rounded-circle badge-success badge-sm mr-sm">D</span><span
    class="badge rounded-circle badge-danger mr-sm">E</span><span
    class="badge rounded-circle badge-warning mr-sm">W</span><span
    class="badge rounded-circle rounded-circle badge-info mr-sm">I</span><span
    class="badge rounded-circle badge-light mr-sm">L</span><span class="badge rounded-circle badge-dark mr-sm">D</span>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge rounded-circle badge-primary badge-xxs&quot;&gt;P&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-secondary badge-xs&quot;&gt;S&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-success badge-sm&quot;&gt;D&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-danger&quot;&gt;E&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-warning&quot;&gt;W&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-info&quot;&gt;I&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-light&quot;&gt;L&lt;/span&gt;
&lt;span class=&quot;badge rounded-circle badge-dark&quot;&gt;D&lt;/span&gt;"></code>
<h2 class="doc-section-title" id="examples">Square Variations <a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex"><span class="badge badge-primary badge-rectangle badge-xxs mr-sm">P</span><span
    class="badge badge-secondary badge-rectangle badge-xs mr-sm">S</span><span
    class="badge badge-success badge-rectangle badge-sm mr-sm">D</span><span
    class="badge badge-danger badge-rectangle mr-sm">E</span><span
    class="badge badge-warning badge-rectangle mr-sm">W</span><span
    class="badge badge-info badge-rectangle mr-sm">I</span><span
    class="badge badge-light badge-rectangle mr-sm">L</span><span
    class="badge badge-dark badge-rectangle mr-sm">D</span></div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-primary badge-rectangle badge-xxs&quot;&gt;P&lt;/span&gt;
&lt;span class=&quot;badge badge-secondary badge-rectangle badge-xs&quot;&gt;S&lt;/span&gt;
&lt;span class=&quot;badge badge-success badge-rectangle badge-sm&quot;&gt;D&lt;/span&gt;
&lt;span class=&quot;badge badge-danger badge-rectangle&quot;&gt;E&lt;/span&gt;
&lt;span class=&quot;badge badge-warning badge-rectangle&quot;&gt;W&lt;/span&gt;
&lt;span class=&quot;badge badge-info badge-rectangle&quot;&gt;I&lt;/span&gt;
&lt;span class=&quot;badge badge-light badge-rectangle&quot;&gt;L&lt;/span&gt;
&lt;span class=&quot;badge badge-dark badge-rectangle&quot;&gt;D&lt;/span&gt;"></code>
<h2 class="doc-section-title" id="examples">Opacity Variations <a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex"><span class="badge badge-opacity badge-rectangle badge-primary badge-xxs mr-sm"> <i
      class="material-icons">card_travel</i></span><span
    class="badge badge-opacity badge-rectangle badge-secondary badge-xs mr-sm"><i
      class="material-icons">all_inbox</i></span><span
    class="badge badge-opacity badge-rectangle badge-success badge-sm mr-sm"><i
      class="material-icons">add_shopping_cart</i></span><span
    class="badge badge-opacity badge-rectangle badge-danger mr-sm"><i
      class="material-icons">error_outline</i></span><span
    class="badge badge-opacity badge-rectangle badge-warning mr-sm"><i
      class="material-icons">view_headline</i></span><span
    class="badge badge-opacity badge-rectangle badge-info mr-sm"><i
      class="material-icons">report_problem</i></span><span
    class="badge badge-opacity badge-rectangle badge-light badge-lg mr-sm"><i
      class="material-icons">laptop_chromebook</i></span><span
    class="badge badge-opacity badge-rectangle badge-dark badge-xl mr-sm"><i class="material-icons">games</i></span>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-opacity badge-rectangle badge-primary badge-xxs&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;card_travel&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-secondary badge-xs&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;all_inbox&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-success badge-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;add_shopping_cart&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-danger mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;error_outline&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-warning mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;view_headline&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-info mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;report_problem&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-light badge-lg mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;laptop_chromebook&lt;/i&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-opacity badge-rectangle badge-dark badge-xl mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;games&lt;/i&gt;
&lt;/span&gt;
"> </code>
<h2 class="doc-section-title" id="examples">Opacity with Text Variations <a class="section-link" href="#examples"></a>
</h2>
<div class="doc-example d-flex"><span class="badge badge-opacity badge-rounded badge-primary badge-xxs mr-sm"> <i
      class="material-icons">card_travel</i> 5 new jobs</span><span
    class="badge badge-opacity badge-rounded badge-secondary badge-xs mr-sm"><i class="material-icons">all_inbox</i> 5
    new message</span><span class="badge badge-opacity badge-rounded badge-success badge-sm mr-sm"><i
      class="material-icons">add_shopping_cart</i> 10 items added</span><span
    class="badge badge-opacity badge-rounded badge-danger mr-sm"><i class="material-icons">error_outline</i> 8 server
    errors</span><span class="badge badge-opacity badge-danger mr-sm"><i class="material-icons">error_outline</i> 8
    server errors</span></div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-opacity badge-rounded badge-primary badge-xxs mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;card_travel&lt;/i&gt; 5 new jobs
&lt;/span&gt;
&lt;span class=&quot;badge badge-opacity badge-rounded badge-secondary badge-xs mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;all_inbox&lt;/i&gt; 5 new message
&lt;/span&gt;
&lt;span class=&quot;badge badge-opacity badge-rounded badge-success badge-sm mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;add_shopping_cart&lt;/i&gt; 10 items added
&lt;/span&gt;
&lt;span class=&quot;badge badge-opacity badge-rounded badge-danger mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;error_outline&lt;/i&gt; 8 server errors
&lt;/span&gt;
&lt;span class=&quot;badge badge-opacity badge-danger mr-sm&quot;&gt;
&lt;i class=&quot;material-icons&quot;&gt;error_outline&lt;/i&gt; 8 server errors
&lt;/span&gt;"> </code>
<div class="mx-lg"></div>
<h2 class="doc-section-title" id="examples">Badge Brand <a class="section-link" href="#examples"></a></h2>
<div class="doc-example d-flex"><span class="badge badge-brand mr-2">
    <img class="" src="{{  asset('images/payment-card/master-card.png')}}">
  </span>
  <span class="badge badge-brand mr-2">
    <img class="" src="{{  asset('images/payment-card/paypal.png')}}">
  </span>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;span class=&quot;badge badge-brand&quot;&gt;
&lt;img class=&quot;&quot; src=&quot;{{  asset('images/payment-card/master-card.png')}}&quot;&gt;
&lt;/span&gt;

&lt;span class=&quot;badge badge-brand&quot;&gt;
&lt;img class=&quot;&quot; src=&quot;{{  asset('images/payment-card/paypal.png')}}&quot;&gt;
&lt;/span&gt;"> </code>

@endsection