@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Headings<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <h1>h1. Done! heading</h1>
    <h2>h2. Done! heading</h2>
    <h3>h3. Done! heading</h3>
    <h4>h4. Done! heading</h4>
    <h5>h5. Done! heading</h5>
    <h6>h6. Done! heading</h6>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;h1&gt;h1. Done! heading&lt;/h1&gt;
&lt;h2&gt;h2. Done! heading&lt;/h2&gt;
&lt;h3&gt;h3. Done! heading&lt;/h3&gt;
&lt;h4&gt;h4. Done! heading&lt;/h4&gt;
&lt;h5&gt;h5. Done! heading&lt;/h5&gt;
&lt;h6&gt;h6. Done! heading&lt;/h6&gt;"></code>
<h2 class="doc-section-title" id="examples">Display Headings<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <h1 class="display-1">Display 1</h1>
    <h1 class="display-2">Display 2</h1>
    <h1 class="display-3">Display 3</h1>
    <h1 class="display-4">Display 4</h1>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;h1 class=&quot;display-1&quot;&gt;Display 1&lt;/h1&gt;
&lt;h1 class=&quot;display-2&quot;&gt;Display 2&lt;/h1&gt;
&lt;h1 class=&quot;display-3&quot;&gt;Display 3&lt;/h1&gt;
&lt;h1 class=&quot;display-4&quot;&gt;Display 4&lt;/h1&gt;"></code>
<h2 class="doc-section-title" id="examples">Headings and Title<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <h3 class="heading">Egret Heading</h3>
    <h3 class="heading-title">Egret Heading Title</h3>
    <h6 class="heading-muted">Egret Heading Muted </h6>
    <h6 class="heading-label">Egret Heading Label </h6>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;h3 class=&quot;heading&quot;&gt;Egret Heading&lt;/h3&gt;
&lt;h3 class=&quot;heading-title&quot;&gt;Egret Heading Title&lt;/h3&gt;"></code>
<h2 class="doc-section-title" id="examples">Lead<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <p class="lead">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.


    </p>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;p class=&quot;lead&quot;&gt;
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
&lt;/p&gt;"></code>
<h2 class="doc-section-title" id="examples">Inline Text Elements<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
    <p><u>This line of text will render as underlined</u></p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;"></code>
<h2 class="doc-section-title" id="examples">Blockquote<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <blockquote class="blockquote">
        <p class="mb-0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

        </p>
        <footer class="blockquote-footer"> </footer>
    </blockquote>
    <Someone>famous in
        <cite title="Source Title">Source Title</cite>
    </Someone>
    <blockquote class="blockquote blockquote-primary">
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat distinctio possimus ducimus ex quos
            eaque nobis, doloribus ut quae? Facere sint consequatur eos soluta iusto excepturi laudantium deserunt
            cum fugiat.

        </p>
        <footer class="blockquote-footer">Jhone Will</footer>
    </blockquote>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;blockquote class=&quot;blockquote&quot;&gt;
  &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Integer posuere erat a ante.
  &lt;/p&gt;
  &lt;footer class=&quot;blockquote-footer&quot;&gt;
    Someone famous in 
    &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
  &lt;/footer&gt;
&lt;/blockquote&gt;

&lt;blockquote class=&quot;blockquote blockquote-primary&quot;&gt;
  &lt;p class=&quot;mb-0&quot;&gt;
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
    distinctio possimus ducimus ex quos eaque nobis, doloribus ut
    quae? Facere sint consequatur eos soluta iusto excepturi
    laudantium deserunt cum fugiat.
  &lt;/p&gt;
  &lt;footer class=&quot;blockquote-footer&quot;&gt;Jhone Will&lt;/footer&gt;
&lt;/blockquote&gt;"></code>
<h2 class="doc-section-title" id="examples">Blockquote<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <blockquote class="blockquote">
        <p class="mb-0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.

        </p>
        <footer class="blockquote-footer"> </footer>
    </blockquote>
    <Someone>famous in
        <cite title="Source Title">Source Title</cite>
    </Someone>
    <blockquote class="blockquote blockquote-primary">
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat distinctio possimus ducimus ex quos
            eaque nobis, doloribus ut quae? Facere sint consequatur eos soluta iusto excepturi laudantium deserunt
            cum fugiat.

        </p>
        <footer class="blockquote-footer">Jhone Will</footer>
    </blockquote>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;blockquote class=&quot;blockquote&quot;&gt;
  &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Integer posuere erat a ante.
  &lt;/p&gt;
  &lt;footer class=&quot;blockquote-footer&quot;&gt;
    Someone famous in 
    &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
  &lt;/footer&gt;
&lt;/blockquote&gt;

&lt;blockquote class=&quot;blockquote blockquote-primary&quot;&gt;
  &lt;p class=&quot;mb-0&quot;&gt;
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
    distinctio possimus ducimus ex quos eaque nobis, doloribus ut
    quae? Facere sint consequatur eos soluta iusto excepturi
    laudantium deserunt cum fugiat.
  &lt;/p&gt;
  &lt;footer class=&quot;blockquote-footer&quot;&gt;Jhone Will&lt;/footer&gt;
&lt;/blockquote&gt;"></code>
<h2 class="doc-section-title" id="examples">Font Size<a class="section-link" href="#examples"></a></h2>

<div class="doc-example">
    <p>font size <b>10px</b> to <b>78px</b></p>
    <p class="text-10">Font Size 10px </p>
    <p class="text-11">Font Size 11px </p>
    <p class="text-12">Font Size 12px </p>
    <p class="text-13">Font Size 13px </p>
    <p class="text-16">.. </p>
    <p class="text-16">..</p>
    <p class="text-16">.. </p>
    <p class="text-16">.. </p>
    <p class="text-30">Font Size 30px </p>
    <p class="text-40">Font Size 40px </p>
    <p class="text-50">Font Size 50px </p>
    <p class="text-60">Font Size 60px </p>
    <p class="text-78">Font Size 78px </p>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;p class=&quot;text-10&quot;&gt;Font Size 10px &lt;/p&gt;
&lt;p class=&quot;text-11&quot;&gt;Font Size 11px &lt;/p&gt;
&lt;p class=&quot;text-12&quot;&gt;Font Size 12px &lt;/p&gt;
&lt;p class=&quot;text-13&quot;&gt;Font Size 13px &lt;/p&gt;
&lt;p class=&quot;text-30&quot;&gt;Font Size 30px &lt;/p&gt;
&lt;p class=&quot;text-40&quot;&gt;Font Size 40px &lt;/p&gt;
&lt;p class=&quot;text-50&quot;&gt;Font Size 50px &lt;/p&gt;
&lt;p class=&quot;text-60&quot;&gt;Font Size 60px &lt;/p&gt;
&lt;p class=&quot;text-78&quot;&gt;Font Size 78px &lt;/p&gt;"></code>


@endsection