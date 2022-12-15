@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Avatar<a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><img class="avatar-xxs m-md" src="{{  asset('images/avatars/001-man.svg')}}">
  <img class="avatar-xs m-md" src="{{  asset('images/avatars/002-woman.svg')}}">
  <img class="avatar-sm m-md" src="{{  asset('images/avatars/003-man-1.svg')}}">
  <img class="avatar-md m-md" src="{{  asset('images/avatars/004-bald.svg')}}">
  <img class="avatar-lg m-md" src="{{  asset('images/avatars/005-man-2.svg')}}">
  <img class="avatar-xl m-md" src="{{  asset('images/avatars/006-woman-1.svg')}}">
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;img class=&quot;avatar-xxs&quot; src=&quot;{{  asset('images/avatars/001-man.svg')}}&quot;&gt;
&lt;img class=&quot;avatar-xs&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot;&gt;
&lt;img class=&quot;avatar-sm&quot; src=&quot;{{  asset('images/avatars/003-man-1.svg')}}&quot;&gt;
&lt;img class=&quot;avatar-md&quot; src=&quot;{{  asset('images/avatars/004-bald.svg')}}&quot;&gt;
&lt;img class=&quot;avatar-lg&quot; src=&quot;{{  asset('images/avatars/005-man-2.svg')}}&quot;&gt;
&lt;img class=&quot;avatar-xl&quot; src=&quot;{{  asset('images/avatars/006-woman-1.svg')}}&quot;&gt;"></code>
<h2 class="doc-section-title" id="examples">Avatar Group<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
  <div class="d-flex align-items-center avatar-group m-md">
    <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/001-man.svg')}}" data-toggle="tooltip"
      data-placement="top" title="John M">
    <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/002-woman.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alison W">
    <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/007-woman-2.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alisa J">
  </div>
  <div class="d-flex align-items-center avatar-group m-md">
    <img class="avatar-md rounded-circle" src="{{  asset('images/avatars/001-man.svg')}}" data-toggle="tooltip"
      data-placement="top" title="John M">
    <img class="avatar-md rounded-circle" src="{{  asset('images/avatars/002-woman.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alison W">
    <img class="avatar-md rounded-circle" src="{{  asset('images/avatars/007-woman-2.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alisa J">
  </div>
  <div class="d-flex align-items-center avatar-group m-md">
    <img class="avatar-lg rounded-circle" src="{{  asset('images/avatars/001-man.svg')}}" data-toggle="tooltip"
      data-placement="top" title="John M">
    <img class="avatar-lg rounded-circle" src="{{  asset('images/avatars/002-woman.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alison W">
    <img class="avatar-lg rounded-circle" src="{{  asset('images/avatars/007-woman-2.svg')}}" data-toggle="tooltip"
      data-placement="top" title="Alisa J">
  </div>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;d-flex align-items-center avatar-group&quot;&gt;
  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/001-man.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/007-woman-2.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-center avatar-group&quot;&gt;
  &lt;img class=&quot;avatar-md rounded-circle&quot; src=&quot;{{  asset('images/avatars/001-man.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
  &lt;img class=&quot;avatar-md rounded-circle&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
  &lt;img class=&quot;avatar-md rounded-circle&quot; src=&quot;{{  asset('images/avatars/007-woman-2.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-center avatar-group&quot;&gt;
  &lt;img class=&quot;avatar-lg rounded-circle&quot; src=&quot;{{  asset('images/avatars/001-man.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
  &lt;img class=&quot;avatar-lg rounded-circle&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
  &lt;img class=&quot;avatar-lg rounded-circle&quot; src=&quot;{{  asset('images/avatars/007-woman-2.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
&lt;/div&gt;"></code>


@endsection