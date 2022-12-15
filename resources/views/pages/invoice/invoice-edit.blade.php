@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="d-flex justify-content-end p-md">
                <button class="btn btn-opacity btn-warning mr-md">Cancel</button>
                <button class="btn btn-opacity btn-primary">Save</button>
            </div>
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="font-weight-bold">Order Info</h4>
                        <div class="mb-3 form-group">
                            <label class="form-label">Order Number</label>
                            <input class="form-control" name="orderNo" placeholder="Enter order number" type="text" />
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <label class="d-block text-12 text-muted mb-md">Order Status</label>
                        <div class="custom-control custom-radio radio-primary mb-md">
                            <input class="custom-control-input" id="customRadioInline1" type="radio"
                                name="customRadioInline" />
                            <label class="custom-control-label" for="customRadioInline1">Pending</label>
                        </div>
                        <div class="custom-control custom-radio radio-warning mb-md">
                            <input class="custom-control-input" id="customRadioInline2" type="radio"
                                name="customRadioInline" />
                            <label class="custom-control-label" for="customRadioInline2">Processing</label>
                        </div>
                        <div class="custom-control custom-radio radio-success mb-md">
                            <input class="custom-control-input" id="customRadioInline3" type="radio"
                                name="customRadioInline" />
                            <label class="custom-control-label" for="customRadioInline3">
                                Delivered

                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" id="ul-invoice-v3-datepicker" type="text" name="basic" />
                        </div>
                    </div>
                </div>
                <div class="row border-top my-lg py-lg justify-content-between mb-md">
                    <div class="col-lg-4 col-md-12">
                        <div class="card-title">Bill From</div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bill From</label>
                            <input class="form-control" id="exampleInputEmail1" type="email"
                                aria-describedby="emailHelp" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bill From Address</label>
                            <input class="form-control" id="exampleInputEmail1" type="email"
                                aria-describedby="emailHelp" placeholder="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card-title text-right">Bill To</div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bill To</label>
                            <input class="form-control" id="exampleInputEmail1" type="email"
                                aria-describedby="emailHelp" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bill To Address</label>
                            <input class="form-control" id="exampleInputEmail1" type="email"
                                aria-describedby="emailHelp" placeholder="" />
                        </div>
                    </div>
                </div>
                <div class="row mb-md">
                    <div class="col-md-12 mb-md">
                        <form class="form ul-repeater-invoidce-v3">
                            <div class="card-title mb-0">Products Add</div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item="">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-2 col-sm-12 form-group">
                                            <input type="text" class="form-control" placeholder="item name...">
                                        </div>
                                        <div class="col-lg-2 col-sm-12 form-group">
                                            <input type="number" class="form-control" id="password"
                                                placeholder="unit price...">
                                        </div>
                                        <div class="col-lg-2 col-sm-12 form-group">
                                            <input type="number" class="form-control" id="Email" placeholder="unit...">
                                        </div>
                                        <div class="col-lg-2 col-sm-12 form-group">
                                            <input type="text" class="form-control" id="password" placeholder="cost...">
                                        </div>
                                        <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2 m-0">
                                            <button
                                                class="btn btn-opacity btn-danger btn-icon rounded-circle btn-sm m-0"
                                                data-repeater-delete="" type="button">
                                                <i class="material-icons">clear</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col p-0">
                                    <button class="btn btn-opacity btn-primary mt-md" data-repeater-create=""
                                        type="button">Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mb-md">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <div class="ul-invoice-v3-total">
                            <p>Sub Total: <span class=""> $0</span></p>
                            <p>Vat(%):<span class=""> $0</span></p>
                            <p class="font-weight-semi">Grand Total: <span class=""> $0</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection