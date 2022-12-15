@extends('layouts.entry')

@section('content')

<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i>
                    </div>
                    <div class="ul-alert-p">
                        Forms Repeater
                        Creates an interface to add and remove a repeatable group of input elements.For more info
                        please visit the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://github.com/DubFriend/jquery.repeater">Github Repo</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-md">
        <div class="card">
            <div class="card-header card-title">Repeating Forms</div>
            <div class="card-body">
                <form class="form ul-repeater-default">
                    <div data-repeater-list="group-a">
                        <div data-repeater-item="">
                            <div class="row justify-content-between">
                                <div class="col-lg-2 col-sm-12 form-group">
                                    <label for="Email">Email </label>
                                    <input type="email" class="form-control" id="Email" placeholder="your email...">
                                </div>
                                <div class="col-lg-2 col-sm-12 form-group">
                                    <label for="products">Products</label>
                                    <input type="text" class="form-control" id="password" placeholder="products...">
                                </div>
                                <div class="col-lg-2 col-sm-12 form-group">
                                    <label for="gender">Gender</label>
                                    <select name="group-a[0][gender]" id="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">female</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-12 form-group">
                                    <label for="Profession">Status</label>
                                    <select name="group-a[0][profession]" id="Profession" class="form-control">
                                        <option value="status-a">Active</option>
                                        <option value="status-b">Deactive</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2 m-0">
                                    <button class="btn btn-raised-danger d-flex align-items-center btn-sm"
                                        data-repeater-delete="" type="button">
                                        <i class="material-icons">clear</i>Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col p-0">
                            <button class="btn btn-raised-primary btn-sm d-flex align-items-center"
                                data-repeater-create="" type="button">
                                <i class="material-icons">add</i>Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-md">
        <div class="card">
            <div class="card-header card-title">Contact List</div>
            <div class="card-body">
                <form class="form ul-repeater-default">
                    <div class="form-group">
                        <div class="col p-0">
                            <button class="btn btn-raised-primary d-flex align-items-center btn-sm"
                                data-repeater-create="" type="button">
                                <i class="material-icons">add</i>Add</button>
                        </div>
                    </div>
                    <div data-repeater-list="group-a">
                        <div data-repeater-item="">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="first name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="last name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="phone number....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group d-flex align-items-center pt-2 m-0">
                                    <button class="btn btn-raised-danger d-flex align-items-center btn-sm"
                                        data-repeater-delete="" type="button">
                                        <i class="material-icons m-0">clear</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div data-repeater-item="">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="first name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="last name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="phone number....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group d-flex align-items-center pt-2 m-0">
                                    <button class="btn btn-raised-danger d-flex align-items-center btn-sm"
                                        data-repeater-delete="" type="button">
                                        <i class="material-icons m-0">clear</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div data-repeater-item="">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="first name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="last name....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group">
                                    <input type="text" class="form-control" id="" placeholder="phone number....">
                                </div>
                                <div class="col-lg-3 col-sm-12 form-group d-flex align-items-center pt-2 m-0">
                                    <button class="btn btn-raised-danger d-flex align-items-center btn-sm"
                                        data-repeater-delete="" type="button">
                                        <i class="material-icons m-0">clear</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection