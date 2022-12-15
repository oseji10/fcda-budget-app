@extends('layouts.entry')

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form id="ul-note-form"></form>
                        <div class="input-group input-light mb-3">
                            <input class="form-control" id="title" type="text" placeholder="title..."
                                aria-label="Username" aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group input-light">
                            <textarea class="form-control" id="desc" placeholder="description..."></textarea>
                        </div>
                        <button class="btn btn-raised btn-raised-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ul-note-mobile-sidebar">
    <button class="btn btn-raised btn-raised-primary rounded-circle btn-icon"><i
            class="material-icons">menu</i></button>
</div>
<div class="ul-note-wrapper">
    <div class="ul-note-sidebar  p-md h-80">
        <div class="c">
            <div class="cb">
                <!-- Button trigger modal -->
                <button class="btn btn-raised-primary btn-block" type="button" data-toggle="modal"
                    data-target="#exampleModal">
                    Add





                </button>
                <ul class="list-group list-group-flush perfect-scrollbar" data-suppress-scroll-y="true">
                    <li class="list-group-item"><i class="material-icons">notes</i>All Notes</li>
                    <li class="list-group-item"><i class="material-icons">star_border</i>Favourites</li>
                    <li class="list-group-item mb-lg"><i class="material-icons">local_offer</i>Tags</li>
                    <li class="list-group-item"><i class="material-icons">notes</i>Personal</li>
                    <li class="list-group-item"><i class="material-icons">star_border</i>Work</li>
                    <li class="list-group-item"><i class="material-icons">local_offer</i>Social</li>
                    <li class="list-group-item"><i class="material-icons">local_offer</i>Important</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ul-note-container pl-4" id="note-container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-md">
                <div class="card">
                    <div class="card-body blue-200">
                        <div class="card-title">Meeting With Kelly</div>
                        <p>11/05/2020</p>
                        <p>Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="ul-note-action"><a href=""><i
                                        class="material-icons ul-fav-note">star_border</i></a><a href="#"><i
                                        class="material-icons remove-note">delete_outline</i></a></div><a href=""><i
                                    class="material-icons">donut_large</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-md">
                <div class="card">
                    <div class="card-body orange-200">
                        <div class="card-title">Meeting With Kelly</div>
                        <p>11/05/2020</p>
                        <p>Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="ul-note-action"><a href=""><i
                                        class="material-icons ul-fav-note">star_border</i></a><a class="remove-note"
                                    href="#"><i class="material-icons remove-note">delete_outline</i></a></div><a
                                href=""><i class="material-icons">donut_large</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-md">
                <div class="card">
                    <div class="card-body purple-300">
                        <div class="card-title">Meeting With Kelly</div>
                        <p>11/05/2020</p>
                        <p>Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="ul-note-action"><a href=""><i class="material-icons">star_border</i></a><a
                                    class="remove-note" href="#"><i
                                        class="material-icons remove-note">delete_outline</i></a></div><a href=""><i
                                    class="material-icons">donut_large</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-md">
                <div class="card">
                    <div class="card-body green-200">
                        <div class="card-title">Meeting With Kelly</div>
                        <p>11/05/2020</p>
                        <p>Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="ul-note-action"><a href=""><i
                                        class="material-icons favorite-note">star_border</i></a><a class="remove-note"
                                    href="#"><i class="material-icons remove-note">delete_outline</i></a></div><a
                                href=""><i class="material-icons">donut_large</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection