{{-- if file exist --}}
{{-- if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
require __DIR__.'/../storage/framework/maintenance.php';
} --}}
@if ($pageName)

@if (file_exists('js/pages/'.$subCategory.'/'.$pageName.'.js'))
<script src="{{asset('js/pages/'.$subCategory.'/'.$pageName.'.js')}}"></script>
@endif


@endif

{{-- default for all pages if you show code  other wise comment out--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
<script src="{{asset('js/pages/doc.script.js')}}"></script>
{{--Page specific extra js --}}



@switch($pageName)
@case('analytic')
{{-- Dashboard --}}

@break

@case('jobManagement')
{{-- job management  --}}
<script src="{{asset('vendors/echarts/dist/echarts.min.js')}}"></script>
<script src="{{asset('js/data/series.js')}}"></script>

@break
@case('learningManagement')
{{-- learning management  --}}
<script src="{{asset('vendors/echarts/dist/echarts.min.js')}}"></script>


@break
@case('donation')
{{-- Donation  --}}
<script src="{{asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/pages/forms/forms.bootstrap-select.js')}}"></script>
@break
@case('filemanager')
{{-- File Manager  --}}
<script src="{{asset('js/pages/sidebar.script.js')}}"></script>
@break

@case('inbox')
{{-- File Manager  --}}
<script src="{{asset('js/pages/sidebar.script.js')}}"></script>
@break

@case('scrumBoard')
{{-- Scrumboard --}}
{{-- <script src="{{asset('js/pages/dragula.script.js')}}"></script> --}}

@break

@case('chat')
{{-- chat  --}}
<script src="{{asset('js/pages/sidebar.script.js')}}"></script>
@break

@case('invoice.edit')
{{-- invoice.edit  --}}

<script src="{{asset('vendors/jquery.repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('js/pages/invoice.invoice.v3.js')}}"></script>
@break

@case('dragAndDrop')
{{-- invoice.edit  --}}


<script src="{{asset('js/pages/dragula.script.js')}}"></script>
@break

@case('photo-grid')
{{-- invoice.edit  --}}



@break

@case('sidebar-block')
{{-- blocks/sidebar  --}}



@break

@case('credit-card-block')
{{-- credit card block  --}}

<script src="{{asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/pages/forms/forms.bootstrap-select.js')}}"></script>
@break

@case('accordion')
{{-- accordion  --}}



@break

@case('alert')
{{-- accordion  --}}



@break

@case('avatar')
{{-- avatar  --}}



@break

@case('badge')
{{-- badge  --}}



@break

@case('breadcrumb')
{{-- breadcrumb  --}}



@break

@case('buttons')
{{-- buttons  --}}



@break

@case('carousel')
{{-- carousel  --}}



@break

@case('dropdown')
{{-- dropdown  --}}



@break

@case('forms')
{{-- forms  --}}



@break

@case('forms-layout')
{{-- forms-layout  --}}



<script src="{{asset('js/pages/components.formsLayout.js')}}"></script>

@break

@case('list')
{{-- list  --}}





@break

@case('pagination')
{{-- pagination  --}}


@break

@case('popovers')
{{-- popovers  --}}



@break

@case('progressbar')
{{-- progressbar  --}}



@break

@case('snackbar')
{{-- snackbar  --}}


<script src="{{asset('vendors/snackbarjs/dist/snackbar.min.js')}}"></script>

@break

@case('tab')
{{-- tab  --}}


@break

@case('tooltip')
{{-- tooltip  --}}


@break

@case('tour')
{{-- tour  --}}


<script src="{{  asset('vendors/hopscotch/dist/js/hopscotch.min.js')}}"></script>
<script src="{{  asset('js/pages/hopscotch.script.js')}}"></script>
@break

@case('sweetAlert2')
{{-- sweet-alert  --}}


<script src="{{  asset('vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{  asset('js/pages/sweetAlert2.script.js')}}"></script>
@break

@case('editor')
{{-- editor  --}}


<script src="{{  asset('vendors/quill/dist/quill.min.js')}}"></script>
<script type="text/javascript">
    var toolbarOptions = [
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        ['blockquote', 'code-block'],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
    ]
    var quill = new Quill('#quill-container', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow' // or 'bubble'
    });
</script>
@break

@case('filepond')
{{-- editor  --}}


<script src="{{  asset('vendors/filepond/dist/filepond.min.js')}}"></script>
<script type="text/javascript">
    const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement);
        FilePond.create(
            document.querySelector('.filepond')
        );
 
</script>

@case('bootstrap-maxlength')
{{-- bootstrap-maxlength  --}}


<script src="{{  asset('vendors/bootstrap-maxlength/dist/bootstrap-maxlength.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.bootstrap-maxlength.js')}}"></script>

@break

@case('bootstrap-select')
{{-- bootstrap-select  --}}


<script src="{{  asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.bootstrap-select.js')}}"></script>

@break

@case('bootstrap-tagify')
{{-- bootstrap-tagify  --}}


<script src="{{  asset('vendors/@yaireo/tagify/dist/tagify.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.bootstrap-tagify.js')}}"></script>

@break

@case('clipboard')
{{-- clipboard  --}}


<script src="{{  asset('js/pages/clipboard.script.js')}}"></script>


@break

@case('datepicker')
{{-- datepicker  --}}


<script src="{{  asset('vendors/gijgo/js/gijgo.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.datepicker.js')}}"></script>


@break

@case('dropzone')
{{-- dropzone  --}}


<script src="{{  asset('vendors/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/dropzone.scripts.js')}}"></script>


@break

@case('form-repeater')
{{-- form-repeater  --}}


<script src="{{  asset('vendors/jquery.repeater/jquery.repeater.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.form-repeater.js')}}"></script>
@break

@case('inputmask')
{{-- inputmask  --}}


<script src="{{  asset('vendors/inputmask/dist/jquery.inputmask.min.js')}}"></script>
<script src="{{  asset('js/pages/inputmask.scripts.js')}}"></script>
@break

@case('nouislider')
{{-- nouislider  --}}


<script src="{{  asset('vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{  asset('vendors/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{  asset('js/pages/nouislider.script.js')}}"></script>
@break

@case('select2')
{{-- select2  --}}
<script src="{{  asset('vendors/select2/dist/js/select2.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/select2.scripts.js')}}"></script>

@break

@case('timepicker')
{{-- timepicker  --}}
<script src="{{  asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/forms.timePicker.js')}}"></script>

@break

@case('touchspin')
{{-- touchspin  --}}
<script src="{{  asset('vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/bootstrap-touchspin.script.js')}}"></script>

@break

@case('typehead')
{{-- typehead  --}}
<script src="{{  asset('vendors/typeahead.js/dist/typeahead.jquery.min.js')}}"></script>
<script src="{{  asset('vendors/typeahead.js/dist/typeahead.bundle.min.js')}}"></script>
<script src="{{  asset('vendors/bloodhound-js/dist/bloodhound.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/typeahead.scripts.js')}}"></script>

@break

@case('uppy')
{{-- uppy  --}}
<script src="{{  asset('vendors/uppy/dist/uppy.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/uppy.script.js')}}"></script>

@break

@case('validation')
{{-- validation  --}}
<script src="{{  asset('vendors/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js')}}"></script>
<script src="{{  asset('js/pages/forms/formValidations.js')}}"></script>


@break

@case('imagecrop')
{{-- imagecrop  --}}
<script src="{{  asset('vendors/cropperjs/dist/cropper.min.js')}}"></script>
<script>
    const image = document.getElementById('image');
        const cropper = new Cropper(image, {
            aspectRatio: 16 / 9,
            crop(event) {
                console.log(event.detail.x);
                console.log(event.detail.y);
                console.log(event.detail.width);
                console.log(event.detail.height);
                console.log(event.detail.rotate);
                console.log(event.detail.scaleX);
                console.log(event.detail.scaleY);
            },
        });
</script>


@break


@default
<script>
    console.log('No custom Styles available.')
</script>
@endswitch