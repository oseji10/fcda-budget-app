@extends('layouts.entry')

@section('content')

<div class="row pt-xxxl">
    <div class="col-md-12 text-center pt-xxxl">
        <h1 class="mb-xl">Hi, How can we help you?</h1>
        <form class="mb-xxxl" action="">
            <div class="custom-input-1 bg-card light mx-auto py-sm pl-md text-16 mb-xxxl border-0 shadow-6dp show-on-load"
                style="max-width: 400px">
                <i class="material-icons">search</i>
                <input type="text" class="" id="" placeholder="Search knowledge base" aria-describedby="">
                <button class="btn btn-raised btn-primary" type="submit">Search</button>
            </div>
        </form>
        <div class="pb-xl"></div>
        <p class="text-muted">Or Browse by category</p>
    </div>
</div>
<div class="row">
    <div class="col-md-12 py-xl mb-lg">
        <div class="nav-pills-primary">
            <ul class="nav nav-pills-card justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link m-sm active" data-toggle="pill" href="#pills-1" role="tab"
                        aria-controls="pills-home" aria-selected="true"><i
                            class="material-icons icon text-33 mb-sm">home</i>
                        <p class="font-weight-semi m-0">Getting started</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-sm" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-home"
                        aria-selected="true"><i class="material-icons icon text-33 mb-sm">layers</i>
                        <p class="font-weight-semi m-0">Plans & Pricing</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-sm" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-home"
                        aria-selected="true"><i class="material-icons icon text-33 mb-sm">contact_support</i>
                        <p class="font-weight-semi m-0">Sales Questions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-sm" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-home"
                        aria-selected="true"><i class="material-icons icon text-33 mb-sm">360</i>
                        <p class="font-weight-semi m-0">Usage Guide</p>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="accordion" id="accordion1">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #1

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                                data-parent="#accordion1">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #2

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                data-parent="#accordion1">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #3

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                                data-parent="#accordion1">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                    wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt you probably haven"t heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="pills-2" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="accordion" id="accordion2">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1"
                                aria-expanded="true" aria-controls="collapse2-1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #1

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #2

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapse2-3" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #3

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-3" aria-labelledby="headingThree"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="pills-3" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="accordion" id="accordion2">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1"
                                aria-expanded="true" aria-controls="collapse2-1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #1

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #2

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapse2-3" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #3

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-3" aria-labelledby="headingThree"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="pills-4" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="accordion" id="accordion2">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1"
                                aria-expanded="true" aria-controls="collapse2-1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #1

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #2

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapse2-3" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link">
                                        Collapsible Group Item #3

                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse2-3" aria-labelledby="headingThree"
                                data-parent="#accordion2">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                    you probably haven"t heard of them accusamus labore sustainable VHS.



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection