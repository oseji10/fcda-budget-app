<div class="subheader px-lg">
    <div class="subheader-container">
        <div class="subheader-main d-none d-lg-flex">
            <h3 class="subheader-title text-capitalize">
                @if ($pageTitle)
                {{$pageTitle}}
                @endif </h3>
            <nav class="ul-breadcrumb" aria-label="breadcrumb">
                <ol class="ul-breadcrumb-items">
                    <li class="breadcrumb-home"><a href="#"> <i class="material-icons">
                                home
                            </i></a></li>
                    <li class="breadcrumb-item text-capitalize"><a href="#"> @if ($subCategory)
                            {{$subCategory}}
                            @endif </a></li>
                    <li class="breadcrumb-item active text-capitalize" aria-current="page">
                        @if ($pageTitle)
                        {{$pageTitle}}
                        @endif
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex-grow-1"></div>
        <div class="subheader-toolbar"><a class="btn btn-opacity-primary btn-sm btn-icon mr-2"><i
                    class="far fa-calendar-alt"></i></a><a class="btn btn-opacity-primary btn-sm btn-icon mr-2"><i
                    class="fa fa-plus"></i></a>
            <button class="btn btn-sm btn-opacity btn-primary" id="reportrange"><i
                    class="fa fa-calendar mr-sm"></i><span></span></button>
        </div>
    </div>
</div>