@extends('layouts.entry')

@section('content')

<p>Where <code>property</code> is one of:</p>
<ul>
    <li><code>m</code> - for classes that set <code>margin</code></li>
    <li><code>p</code> - for classes that set <code>padding</code></li>
</ul>
<p>Where <code>sides</code> is one of:</p>
<ul>
    <li><code>t</code> - for classes that set <code>margin-top</code> or <code>padding-top</code></li>
    <li><code>b</code> - for classes that set <code>margin-bottom</code> or <code>padding-bottom</code></li>
    <li><code>l</code> - for classes that set <code>margin-left</code> or <code>padding-left</code></li>
    <li><code>r</code> - for classes that set <code>margin-right</code> or <code>padding-right</code></li>
    <li><code>x</code> - for classes that set both <code>*-left</code> and <code>*-right</code></li>
    <li><code>y</code> - for classes that set both <code>*-top</code> and <code>*-bottom</code></li>
    <li>blank - for classes that set a <code>margin</code> or <code>padding</code> on all 4 sides of the element
    </li>
</ul>
<p>Where <code>size</code> is one of:
    <ul>
        <li><code>0</code> - for classes that eliminate the <code>margin</code> or <code>padding</code> by setting
            it to <code>0</code></li>
        <li><code>xxxs</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>.0625rem</code></li>
        <li><code>xxs</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>.125rem</code></li>
        <li><code>xs</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>.25rem</code></li>
        <li><code>sm</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>.5rem</code></li>
        <li><code>md</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>1rem</code></li>
        <li><code>lg</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>1.5rem</code></li>
        <li><code>xl</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>2rem</code></li>
        <li><code>xxl</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>2.5rem</code></li>
        <li><code>xxxl</code> - (by default) for classes that set the <code>margin</code> or <code>padding</code> to
            <code>3rem</code></li>
        <li><code>auto</code> - for classes that set the <code>margin</code> to auto</li>
    </ul>
    <p>Negative margins</p>
    <ul>
        <li><code>-xxxs</code> - (by default) for classes that set the <code>margin</code> to <code>-.0625rem</code>
        </li>
        <li><code>-xxs</code> - (by default) for classes that set the <code>margin</code> to <code>-.125rem</code>
        </li>
        <li><code>-xs</code> - (by default) for classes that set the <code>margin</code> to <code>-.25rem</code>
        </li>
        <li><code>-sm</code> - (by default) for classes that set the <code>margin</code> to <code>-.5rem</code></li>
        <li><code>-md</code> - (by default) for classes that set the <code>margin</code> to <code>-1rem</code></li>
        <li><code>-lg</code> - (by default) for classes that set the <code>margin</code> to <code>-1.5rem</code>
        </li>
        <li><code>-xl</code> - (by default) for classes that set the <code>margin</code> to <code>-2rem</code></li>
        <li><code>-xxl</code> - (by default) for classes that set the <code>margin</code> to <code>-2.5rem</code>
        </li>
        <li><code>-xxxl</code> - (by default) for classes that set the <code>margin</code> to <code>-3rem</code>
        </li>
    </ul>
</p>
<h2 class="doc-section-title" id="examples">Examples<a class="section-link" href="#examples"></a></h2>
<div class="doc-example"><small class="text-muted">Positive margin right</small>
    <div class="mb-md">
        <div class="mr-xl d-inline-block py-sm px-md border rounded">
            <code>&lt;div class="mr-xl"&gt; Margin Right 2rem &lt;/div&gt;</code></div>
        <div class="d-inline-block py-sm px-md border rounded">Lorem ipsum dolor sit amet</div>
    </div><small class="text-muted">Negative margin right</small>
    <div class="mb-md">
        <div class="mr--md d-inline-block py-sm px-md border rounded">
            <code>&lt;div class="mr--md"&gt; Margin Right -1rem &lt;/div&gt;</code></div>
        <div class="d-inline-block py-sm px-md border rounded">Lorem ipsum dolor sit amet</div>
    </div><small class="text-muted">Positive margin bottom</small>
    <div class="mb-md">
        <div class="mb-md d-block py-sm px-md border rounded" style="max-width: 400px">
            <code>&lt;div class="mb-md"&gt; Margin Bottom 1rem &lt;/div&gt;</code></div>
        <div class="d-inline-block py-sm px-md border rounded">Lorem ipsum dolor sit amet </div>
    </div><small class="text-muted">Negative margin bottom</small>
    <div class="mb-md">
        <div class="mb--sm d-block py-sm px-md border rounded" style="max-width: 400px">
            <code>&lt;div class="mb--sm"&gt; Margin Bottom -.5rem &lt;/div&gt;</code></div>
        <div class="d-inline-block py-sm px-md border rounded">Lorem ipsum dolor sit amet </div>
    </div>
    <div class="mx-auto" style="max-width: 400px"><small class="text-muted">Margin auto</small></div>
    <div class="mb-md">
        <div class="mx-auto py-sm px-md border rounded" style="max-width: 400px">
            <code>&lt;div class="md--md"&gt; Margin Left & Right auto &lt;/div&gt; </code></div>
    </div>
</div>


@endsection