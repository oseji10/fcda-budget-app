<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <base href="" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Page Title --}}
        <title>{{ config('app.name') }} Dashboard Template | @yield('title', $pageTitle ?? '')</title>
        {{-- favicon --}}
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.ico')}}" />
        {{-- Material font Icons --}}
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
        {{-- Google Fonts --}}
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap"
            rel="stylesheet" />


        {{-- Fontawesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />

        {{-- Common css styles --}}
        <link rel="stylesheet" href="{{asset('css/vendors.bundle.min.css')}}" />

        <!--Page Level Styles -->
        @include('layouts.pages.styles')

        {{-- Common css styles --}}
        <link rel="stylesheet" href="{{asset('css/main.bundle.css')}}" />

        {{-- <link rel="stylesheet" href="{{asset('css/pages/dashboard/analytic.css')}}" /> --}}


        {{--Extra  page specific css if needed--}}
        @yield('page-css')
    </head>

    <body>
        <div class="app-admin-wrap-layout-4 sidebar-full">
            <div class="narrow-sidebar"><span class="m-auto"> </span>
                <button class="btn btn-primary rounded-circle btn-sm btn-icon text-white mr-0 my-sm"
                    data-toggle="tooltip" data-placement="left" title="Cart"><i
                        class="material-icons">shopping_cart</i></button>
                <button class="btn btn-primary rounded-circle btn-sm btn-icon text-white mr-0 my-sm"
                    data-toggle="tooltip" data-placement="left" title="Messages"><i
                        class="material-icons">chat</i></button><span class="m-auto"></span>
                <button
                    class="btn btn-raised btn-raised-primary rounded-circle btn-sm btn-icon mr-0 narrow-sidebar-toggle-button open"><i
                        class="material-icons">
                        keyboard_arrow_right
                    </i></button>
                <div class="toggle"></div>
            </div>
            <div class="main-content-wrap">
                @include('layouts.saas.header')
                <div class="d-flex ul-inner-layout-4">
                    @include('layouts.saas.sidebar')
                    <!-- main content start-->
                    <div class="main-content-body-layout-4">
                        <!-- Start:: content (Your custom content)-->
                        {{-- Breadcrumb --}}
                        @include('layouts.saas.breadcrumb')

                        {{-- main page content start here  --}}
                        <div class="container mt-xxxl">
                            @yield('content')
                        </div>

                        <!-- Start:: content (Your custom content)-->

                    </div>
                    <!-- End:: content body-->
                </div>
                {{-- end of ul-inner-layout-4 --}}



                {{-- customizer --}}

            </div>




            <!--begin::sidebar-panel-notification-->
            @include('layouts.common.notification-drawer')
            <!--end::sidebar-panel-notification-->


            <div class="ul-sidebar-panel-overlay"></div>
            <script src="{{asset('js/vendors.bundle.min.js')}}"></script>
            <script src="{{asset('js/layout4-main-bundle.js')}}"></script>
            <script src="{{asset('vendors/feather-icons/dist/feather.min.js')}}"></script>
            @include('layouts.pages.scripts')
            @yield('page-js')
            {{-- <script src="{{asset('js/pages/dashboard/analytic2.js')}}"></script> --}}
    </body>

</html>