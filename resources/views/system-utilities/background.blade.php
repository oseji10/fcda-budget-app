@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Backgrounds<a class="section-link" href="#examples"></a></h2>
<div class="doc-example">
    <div class="ul-icon-box-1 mx-auto mb-xxl">
        <i class="flaticon-money text-56"></i>
    </div>
    <div class="ul-icon-box ul-icon-box-animate-onhover mx-auto mb-xxl">
        <div class="bg-group ul-animate fallingLeaves"><img src="{{  asset('images/illustrations/leaf-1.svg')}}" /><img
                src="{{  asset('images/illustrations/leaf-1.svg')}}" /><img
                src="{{  asset('images/illustrations/leaf-1.svg')}}" /><img
                src="{{  asset('images/illustrations/leaf-1.svg')}}" /><img
                src="{{  asset('images/illustrations/leaf-1.svg')}}" /><img
                src="{{  asset('images/illustrations/leaf-1.svg')}}" />
        </div><i class="flaticon-paper-plane text-primary text-72"></i>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code=""></code>


@endsection