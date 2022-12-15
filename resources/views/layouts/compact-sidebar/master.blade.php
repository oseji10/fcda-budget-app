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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css">

        <!--Page Level Styles -->
        @include('layouts.pages.styles')

        {{-- Common css styles --}}
        <link rel="stylesheet" href="{{asset('css/main.bundle.css')}}" />

        {{-- <link rel="stylesheet" href="{{asset('css/pages/dashboard/analytic.css')}}" /> --}}


        {{--Extra  page specific css if needed--}}
        @yield('page-css')
    </head>

    <body>
        {{-- mobile toggle --}}
        <div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="assets/images/egret.png" alt="">
            <div class="flex-grow-1"></div>
            <button class="btn btn-icon ul-header-menu-toggle text-white"><i class="material-icons">menu</i></button>
        </div>

        <div class="app-admin-wrap-layout-3 sidebar-full subheader-fixed">
            @include('layouts.compact-sidebar.sidebar')
            <div class="main-content-wrap">
                <!-- header start-->
                <!-- header close-->
                <!-- main content start-->
                <div class="main-content-body">
                    @include('layouts.common.breadcrumb')
                    <div class="container my-xxxl">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div class="ul-sidebar-3-overlay"></div>

        <!--search-panel-->
        @include('layouts.common.search-drawer')

        <!--Notification Tab-->
        @include('layouts.common.notification-tab-drawer')

        <!--begin::sidebar-panel-notification-->
        @include('layouts.common.notification-drawer')
        <!--end::sidebar-panel-notification-->
        <!--Sidebar panel Profile-->
        @include('layouts.common.profile-drawer')
        <!--end::sidebar-panel-Profile-->
        <div class="ul-sidebar-panel-overlay"></div>
        <script src="{{asset('js/vendors.bundle.min.js')}}"></script>
        <script src="{{asset('js/layout3-main-bundle.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"> </script>
        @include('layouts.pages.scripts')
        @yield('page-js')
        {{-- <script src="{{asset('js/pages/dashboard/analytic2.js')}}"></script> --}}
    </body>

</html>