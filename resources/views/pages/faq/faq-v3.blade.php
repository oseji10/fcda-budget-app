@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-3">
        <div class="ul-vertical-nav rounded">
            <div class="card py-xl">
                <div class="d-flex flex-column"><a class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm"
                        href="#aboutus"><i class="material-icons icon icon-sm">business</i><span
                            class="text-body font-weight-semi">About us</span></a><a
                        class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm" href="#license"><i
                            class="material-icons icon icon-sm">assignment_turned_in</i><span
                            class="text-body font-weight-semi">License</span></a><a
                        class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm" href="#"><i
                            class="material-icons icon icon-sm">devices</i><span
                            class="text-body font-weight-semi">Multi Apllication</span></a><a
                        class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm" href="#"><i
                            class="material-icons icon icon-sm">check_box</i><span
                            class="text-body font-weight-semi">Terms of use</span></a><a
                        class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm" href="#"><i
                            class="material-icons icon icon-sm">military_tech</i><span
                            class="text-body font-weight-semi">Reward policy</span></a><a
                        class="d-flex hover-gray align-items-center mb-sm py-xxs px-sm" href="#"><i
                            class="material-icons icon icon-sm">mood</i><span
                            class="text-body font-weight-semi">Warranty policy</span></a></div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-uppercase font-weight-bold text-small text-muted" id="aboutus">About us</p>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <p class="font-weight-semi m-0">Collapsible Group Item #1</p><span class="flex-grow-1"></span><i
                        class="i-arrow ti-angle-down"></i>
                </div>
                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="m-0">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <p class="font-weight-semi m-0">Collapsible Group Item #2</p><span class="flex-grow-1"></span><i
                        class="i-arrow ti-angle-down"></i>
                </div>
                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="m-0">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    <p class="font-weight-semi mb-0">Collapsible Group Item #3</p><span class="flex-grow-1"></span><i
                        class="i-arrow ti-angle-down"></i>
                </div>
                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="m-0">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="text-uppercase font-weight-bold text-small text-muted" id="license">License</p>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse1"
                        aria-expanded="true" aria-controls="collapseOne">
                        <p class="font-weight-semi m-0">Collapsible Group Item #1</p><span class="flex-grow-1"></span><i
                            class="i-arrow ti-angle-down"></i>
                    </div>
                    <div class="collapse show" id="collapse1" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="m-0">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapse2"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <p class="font-weight-semi m-0">Collapsible Group Item #2</p><span class="flex-grow-1"></span><i
                            class="i-arrow ti-angle-down"></i>
                    </div>
                    <div class="collapse" id="collapse2" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="m-0">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapse3"
                        aria-expanded="false" aria-controls="collapseThree">
                        <p class="font-weight-semi mb-0">Collapsible Group Item #3</p><span
                            class="flex-grow-1"></span><i class="i-arrow ti-angle-down"></i>
                    </div>
                    <div class="collapse" id="collapse3" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="m-0">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection