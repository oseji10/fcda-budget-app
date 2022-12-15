@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Paginations</h2>
<div class="doc-example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
          class="material-icons">keyboard_arrow_left</i></a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">2 <span
          class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#"><i class="material-icons">keyboard_arrow_right</i></a></li>
  </ul>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;ul class=&quot;pagination&quot;&gt;
  &lt;li class=&quot;page-item&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;
      &lt;i class=&quot;material-icons &quot;&gt;keyboard_arrow_left&lt;/i&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;material-icons&quot;&gt;keyboard_arrow_right&lt;/i&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;"></code>
<h2 class="doc-section-title" id="examples">Sizes</h2>
<div class="doc-example">
  <nav class="mb-xl" aria-label="navigation">
    <ul class="pagination pagination-sm">
      <li class="page-item"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
            class="material-icons">keyboard_arrow_left</i></a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page"><a class="page-link" href="#">2 <span
            class="sr-only">(current)</span></a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#"><i class="material-icons">keyboard_arrow_right</i></a></li>
    </ul>
  </nav>
  <nav class="mb-xl" aria-label="navigation">
    <ul class="pagination pagination-lg">
      <li class="page-item"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
            class="material-icons">keyboard_arrow_left</i></a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page"><a class="page-link" href="#">2 <span
            class="sr-only">(current)</span></a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#"><i class="material-icons">keyboard_arrow_right</i></a></li>
    </ul>
  </nav>
</div>
<div class="copy-code">
  <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
    title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- small--&gt;
&lt;ul class=&quot;pagination&quot;&gt;
  &lt;li class=&quot;page-item&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;
      &lt;i class=&quot;material-icons &quot;&gt;keyboard_arrow_left&lt;/i&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;page-item&quot;&gt;
    &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;material-icons&quot;&gt;keyboard_arrow_right&lt;/i&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Large --&gt;
&lt;nav aria-label=&quot;navigation&quot; class=&quot;mb-xl&quot;&gt;
  &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;
        &lt;i class=&quot;material-icons&quot;&gt;keyboard_arrow_left&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
        &lt;i class=&quot;material-icons&quot;&gt;keyboard_arrow_right&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;"></code>


@endsection