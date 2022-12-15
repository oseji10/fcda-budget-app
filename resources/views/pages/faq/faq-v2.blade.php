@extends('layouts.entry')

@section('content')

<div>
    <div class="bg-primary text-center py-xxxl">
        <form class="mb-xxxl mt-xxl" action="">
            <div class="custom-input-1 bg-card light mx-auto py-sm pl-md text-16 mb-xxxl border-0 shadow-6dp show-on-load"
                style="max-width: 400px">
                <i class="material-icons">search</i>
                <input type="text" class="" id="" placeholder="Search knowledge base" aria-describedby="">
                <button class="btn btn-raised btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="card mt--xl mb-xl">
            <div class="card-body px-xl">
                <div class="nav-tabs-primary">
                    <ul class="nav nav-tabs mb-lg" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tabs-1">Getting Started</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tabs-2">Pricing</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabs-tabContent">
                        <div class="tab-pane fade active show" id="tabs-1" role="tabpanel"
                            aria-labelledby="tabs-home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="accordion" id="accordion1">
                                        <div class="collapsed" id="headingOne" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How to install?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseOne" aria-labelledby="headingOne"
                                            data-parent="#accordion1">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="headingTwo" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How can I change colors?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                            data-parent="#accordion1">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="headingThree" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How to add page?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseThree" aria-labelledby="headingThree"
                                            data-parent="#accordion1">Anim pariatur
                                            cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                            labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven"t heard of them
                                            accusamus labore sustainable VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="accordion" id="accordion2">
                                        <div class="collapsed" id="heading4" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How to install?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapse4" aria-labelledby="heading4"
                                            data-parent="#accordion2">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="heading5" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How can I change colors?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapse5" aria-labelledby="heading5"
                                            data-parent="#accordion2">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="heading6" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">How to add page?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapse6" aria-labelledby="heading6"
                                            data-parent="#accordion2">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tabs-profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="accordion" id="accordion1">
                                        <div class="collapsed" id="headingOne" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">What is regular license?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseOne" aria-labelledby="headingOne"
                                            data-parent="#accordion1">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="headingTwo" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">What is unlimited license?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                            data-parent="#accordion1">Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                                            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                            bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven"t heard of them accusamus labore sustainable
                                            VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                        <div class="collapsed" id="headingThree" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <h5 class="d-flex align-items-center justify-content-between mb-md">
                                                <button class="btn btn-link">What is enterpise lisence?</button>
                                                <button class="btn btn-sm btn-icon rounded-circle"><i
                                                        class="material-icons icon">keyboard_arrow_down</i></button>
                                            </h5>
                                        </div>
                                        <div class="px-xs collapse" id="collapseThree" aria-labelledby="headingThree"
                                            data-parent="#accordion1">Anim pariatur
                                            cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                            labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                            raw denim aesthetic synth nesciunt you probably haven"t heard of them
                                            accusamus labore sustainable VHS.
                                            <div class="pb-lg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tabs-contact-tab">
                            <p>Lorem, ipsum dolor. 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection