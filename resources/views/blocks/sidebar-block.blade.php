@extends('layouts.entry')

@section('content')

<div class="mx-lg">
    <h2 class="doc-section-title" id="examples">Default <a class="section-link" href="#examples"></a></h2>
    <div class="doc-example">
        <div class="gray-100 py-xl" style="width: 240px">
            <div class="px-md mb-xxl d-flex flex-column align-items-center border-bottom"><img class="avatar-lg mb-lg"
                    src="{{  asset('images/faces/1.jpg')}}" />
                <p class="m-0 text-muted">Hello</p>
                <p class="font-weight-semi mb-xl">Micheal White</p>
            </div>
            <div class="d-flex flex-column mb-xl">
                <h6 class="px-md heading-label">LABELS</h6><a class="d-flex hover-gray align-items-center py-xxs px-sm"
                    href="#"><i class="material-icons icon icon-sm">inbox</i><span
                        class="text-body font-weight-semi">Inbox</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">send</i><span
                        class="text-body font-weight-semi">Sent</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">edit</i><span
                        class="text-body font-weight-semi">Drafts</span></a><a
                    class="d-flex hover-gray align-items-center py-xxs px-sm" href="#"><i
                        class="material-icons icon icon-sm">favorite</i><span
                        class="text-body font-weight-semi">Favorite</span></a>
            </div>
            <div class="d-flex-flex-column">
                <h6 class="px-md heading-label">My Team</h6><a class="d-flex hover-gray align-items-center py-xxs px-sm"
                    href="#"><i class="material-icons icon icon-sm">favorite</i><span
                        class="text-body font-weight-semi">Favorite</span></a>
            </div>
        </div>
    </div>
    <div class="copy-code">
        <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
            title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div class=&quot;gray-100 py-xl&quot; style=&quot;width: 240px;&quot;&gt;
  &lt;div class=&quot;px-md mb-xxl d-flex flex-column align-items-center border-bottom&quot;&gt;
    &lt;img class=&quot;avatar-lg mb-lg&quot; src=&quot;{{  asset('images/faces/1.jpg')}}&quot; /&gt;
    &lt;p class=&quot;m-0 text-muted&quot;&gt;Hello&lt;/p&gt;
    &lt;p class=&quot;font-weight-semi mb-xl&quot;&gt;Micheal White&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex flex-column mb-xl&quot;&gt;
    &lt;h6 class=&quot;px-md heading-label&quot;&gt;LABELS&lt;/h6&gt;
    &lt;a class=&quot;d-flex hover-gray align-items-center py-xxs px-sm&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;inbox&lt;/i&gt;&lt;span class=&quot;text-body font-weight-semi&quot;&gt;Inbox&lt;/span&gt;&lt;/a&gt;
    &lt;a class=&quot;d-flex hover-gray align-items-center py-xxs px-sm&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;send&lt;/i&gt;&lt;span class=&quot;text-body font-weight-semi&quot;&gt;Sent&lt;/span&gt;&lt;/a&gt;
    &lt;a class=&quot;d-flex hover-gray align-items-center py-xxs px-sm&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;edit&lt;/i&gt;&lt;span class=&quot;text-body font-weight-semi&quot;&gt;Drafts&lt;/span&gt;&lt;/a&gt;
    &lt;a class=&quot;d-flex hover-gray align-items-center py-xxs px-sm&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;favorite&lt;/i&gt;&lt;span class=&quot;text-body font-weight-semi&quot;&gt;Favorite&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex-flex-column&quot;&gt;
    &lt;h6 class=&quot;px-md heading-label&quot;&gt;My Team&lt;/h6&gt;
    &lt;a class=&quot;d-flex hover-gray align-items-center py-xxs px-sm&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;favorite&lt;/i&gt;&lt;span class=&quot;text-body font-weight-semi&quot;&gt;Favorite&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;"></code>
</div>

@endsection