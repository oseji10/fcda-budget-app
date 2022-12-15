@php
$layout = session('layout');
$layoutName='layouts';
@endphp

@if ($layout)
@include('layouts.'.$layout.'.master')
@else
@include('layouts.large-sidebar.master')
@endif