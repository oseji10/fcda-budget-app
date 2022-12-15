@if ($pageName)
@if (file_exists('css/pages/'.$subCategory.'/'.$pageName.'.css'))
<link rel="stylesheet" href="{{asset('css/pages/'.$subCategory.'/'.$pageName.'.css')}}" />
@endif

@endif

{{-- default for all pages if you show code  other wise comment out--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
{{--Page specific extra css --}}
@switch($pageName)
@case('analytic')
{{-- Dashboard --}}

@break

@case('donation')
{{-- Dashboard 2 --}}
<link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" />

@break
@case('scrumBoard')
{{-- scrumBoard --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/pages/dist/css/bootstrap-select.min.css')}}" /> --}}

@break
@case('photo-grid')
{{-- Photo-Grid --}}


@break
@case('sidebar-block')
{{-- Photo-Grid --}}


@break

@case('credit-card-block')
{{-- Photo-Grid --}}

<link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" />

@break

@case('accordion')
{{-- Photo-Grid --}}



@break

@case('alert')
{{-- alert --}}



@break

@case('avatar')
{{-- avater --}}



@break
@case('badge')
{{-- badge --}}



@break

@case('breadcrumb')
{{-- breadcrumb --}}



@break
@case('buttons')
{{-- buttons --}}



@break
@case('carousel')
{{-- carousel --}}



@break

@case('dropdown')
{{-- dropdown --}}



@break

@case('forms')
{{-- forms --}}



@break

@case('forms-layout')
{{-- forms-layout --}}



@break

@case('list')
{{-- list --}}



@break

@case('pagination')
{{-- pagination --}}



@break

@case('popovers')
{{-- popovers --}}

@break

@case('progressbar')
{{-- popovers --}}

@break

@case('snackbar')
{{-- snackbar --}}

<link rel="stylesheet" href="{{  asset('vendors/snackbarjs/dist/snackbar.min.css')}}" />
@break

@case('tab')
{{-- tab --}}


@break

@case('tooltip')
{{-- tooltip --}}


@break

@case('tour')
{{-- tour --}}


<link rel="stylesheet" href="{{  asset('vendors/hopscotch/dist/css/hopscotch.min.css')}}" />
@break

@case('sweetAlert2')
{{-- sweet-alert --}}


<link rel="stylesheet" href="{{  asset('vendors/sweetalert2/dist/sweetalert2.min.css')}}" />
@break

@case('editor')
{{-- editor --}}


<link rel="stylesheet" href="{{  asset('vendors/quill/dist/quill.snow.css')}}" />
@break

@case('filepond')
{{-- filepond --}}


<link rel="stylesheet" href="{{  asset('vendors/filepond/dist/filepond.min.css')}}" />
@break

@case('bootstrap-maxlength')
{{-- bootstrap-maxlength --}}



@break

@case('bootstrap-select')
{{-- bootstrap-select --}}


<link rel="stylesheet" href="{{  asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" />
@break

@case('bootstrap-tagify')
{{-- bootstrap-tagify --}}


<link rel="stylesheet" href="{{  asset('vendors/@yaireo/tagify/dist/tagify.css')}}" />
@break


@case('clipboard')
{{-- clipboard --}}



@break

@case('datepicker')
{{-- datepicker --}}


<link rel="stylesheet" href="{{  asset('vendors/gijgo/css/gijgo.min.css')}}" />
@break

@case('dropzone')
{{-- dropzone --}}


<link rel="stylesheet" href="{{  asset('vendors/dropzone/dist/min/dropzone.min.css')}}" />
@break

@case('form-repeater')
{{-- form-repeater --}}



@break
@case('nouislider')
{{-- nouislider --}}
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/nouislider/distribute/nouislider.min.css') }}" />


@break

@case('select2')
{{-- nouislider --}}
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/dist/css/select2.min.css') }}" />


@break

@case('timepicker')
{{-- timepicker --}}
<link rel="stylesheet" type="text/css"
    href="{{ asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" />


@break

@case('touchspin')
{{-- touchspin --}}
<link rel="stylesheet" type="text/css"
    href="{{ asset('vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" />


@break

@case('uppy')
{{-- uppy --}}
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/uppy/dist/uppy.min.css') }}" />


@break

@case('imagecrop')
{{-- imagecrop --}}
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/cropperjs/dist/cropper.min.css') }}" />


@break





@default

<script>
    console.log('No custom Styles available.')
</script>
@endswitch