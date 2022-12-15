@extends('layouts.session')
@section('content')
<div class="page-wrap height-100">
    <div class="app-error">
        <div class="fix d-flex align-items-center">
            <i class="material-icons mr-md text-warning">warning</i>
            <div class="error-text">
                <h1 class="error-title font-weight-bold">505</h1>
                <div class="error-subtitle">Server Error!</div>
            </div>
        </div>
        <div class="error-action d-flex justify-content-around mt-xxl">
            <button type="button" class="btn btn-opacity btn-primary btn-sm mr-0"> Back to Dashboard </button>
            <button type="button" class="btn btn-opacity btn-danger btn-sm"> Report the problem</button>
        </div>
    </div>
</div>
@endsection