@extends('layouts.entry')
@section('title')
Donation dashboard
@endsection
@section('content')

<div class="row">
    <div class="col-lg-4 col-12 mb-lg">
        <div class="card mb-lg">
            <div class="card-body">
                <div class="d-flex align-items-center"><span
                        class="badge badge-opacity badge-primary rounded-circle badge-xl mr-md"><i
                            class="material-icons text-primary">person</i></span>
                    <div>
                        <div class="card-title m-0">Personal Info</div>
                        <p class="text-12 m-0 font-weight-normal">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-opacity btn-primary" type="button">Manage Your Account</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center"><span
                        class="badge badge-opacity badge-primary rounded-circle badge-xl mr-md"><i
                            class="material-icons text-primary">settings</i></span>
                    <div>
                        <div class="card-title m-0">Settings</div>
                        <p class="text-12 m-0 font-weight-normal">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-opacity btn-primary" type="button">Account Settings</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-12 mb-lg">
        <div class="card">
            <div class="card-body">
                <div class="pb-md d-flex justify-content-between align-items-center">
                    <div class="card-title">Saved Cards</div>
                    <div class="mt--sm"><select class="selectpicker" data-style="border">
                            <option>Visa Card 4143 **** 3457</option>
                            <option>Master Card 3743 **** 4089</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-12">
                        <div class="credit-card-wrap bg-slate shadow rounded p-md mb-lg" style="max-width: 350px">
                            <div class="d-flex justify-content-between mb-xxxl">
                                <div><span class="text-white">Primary card</span>
                                    <h2 class="text-white m-0">$2,080.5</h2>
                                </div><img class="icon icon-sm" src="{{asset('images/payment-card/004-visa.svg')}}" />
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="font-weight-semi text-white m-0">Tim Clarkson</p><span
                                        class="text-small text-white">4143 **** 3457</span>
                                </div><span class="text-small text-white">04/2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 pl-lg">
                        <div class="d-flex justify-content-between">
                            <p>Card Type:</p><span class="text-muted">Visa</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Card Holder:</p><span class="text-muted">Tim Clarkson</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Card Number:</p><span class="text-muted">4143 **** 3457</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Validation Date:</p><span class="text-muted">04/2024</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Balance:</p><span class="text-muted">2,080.5USD</span>
                        </div>
                        <div class="d-flex flex-wrap mt-md"><a class="btn btn-opacity btn-primary m-xs" href="">Add
                                new Card</a><a class="btn btn-opacity btn-danger m-xs" href="">Remove this Card</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-lg">
        <div class="table-responsive">
            <table class="table borderless table-hover shadow-6dp bg-card m-0">
                <thead>
                    <tr>
                        <th scope="col" class="text-muted border-0"></th>
                        <th scope="col" class="text-muted border-0">Date</th>
                        <th scope="col" class="text-muted border-0">Description</th>
                        <th scope="col" class="text-muted border-0">Category</th>
                        <th scope="col" class="text-muted border-0">Amount</th>
                        <th scope="col" class="text-muted border-0">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle border-0">
                            <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/001-spotify.svg')}}" />
                        </td>
                        <td class="align-middle text-muted border-0">2 July, 2020</td>
                        <td scope="row" class="align-middle border-0">
                            <span class="font-weight-semi">Spotify Subscriptoin fee</span>
                        </td>
                        <td class="align-middle border-0">
                            <span class="font-weight-semi">Music</span>
                        </td>
                        <td class="align-middle border-0">
                            <span class="font-weight-semi text-danger">-$10</span>
                        </td>
                        <td class="align-middle border-0">
                            <span class="badge badge-opacity badge-warning rounded-circle badge-xs">
                                <i class="material-icons">pending</i>
        </div>
        </span>
        </td>
        </tr>
        <tr>
            <td class="align-middle">
                <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/003-apple.svg')}}" />
            </td>
            <td class="align-middle text-muted">3 July, 2020</td>
            <td scope="row" class="align-middle">
                <span class="font-weight-semi">App Store Payment</span>
            </td>
            <td class="align-middle">
                <span class="font-weight-semi">Software</span>
            </td>
            <td class="align-middle">
                <span class="font-weight-semi text-danger">-$100</span>
            </td>
            <td class="align-middle">
                <span class="badge badge-opacity badge-success rounded-circle badge-xs">
                    <i class="material-icons">done</i>
    </div>
    </span>
    </td>
    </tr>
    <tr>
        <td class="align-middle">
            <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/004-windows.svg')}}" />
        </td>
        <td class="align-middle text-muted">6 July, 2020</td>
        <td scope="row" class="align-middle">
            <span class="font-weight-semi">Software Purchase</span>
        </td>
        <td class="align-middle">
            <span class="font-weight-semi">Software</span>
        </td>
        <td class="align-middle">
            <span class="font-weight-semi text-danger">-$140</span>
        </td>
        <td class="align-middle">
            <span class="badge badge-opacity badge-success rounded-circle badge-xs">
                <i class="material-icons">done</i>
</div>
</span>
</td>
</tr>
<tr>
    <td class="align-middle">
        <img class="avatar-xs rounded ml-md" src="{{asset('images/logos/005-google.svg')}}" />
    </td>
    <td class="align-middle text-muted">6 July, 2020</td>
    <td scope="row" class="align-middle">
        <span class="font-weight-semi">Adsense Revenue</span>
    </td>
    <td class="align-middle">
        <span class="font-weight-semi">Advertising</span>
    </td>
    <td class="align-middle">
        <span class="font-weight-semi text-success">+$2100</span>
    </td>
    <td class="align-middle">
        <span class="badge badge-opacity badge-success rounded-circle badge-xs">
            <i class="material-icons">done</i>
            </div>
        </span>
    </td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-md-12 mb-md">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="py-md">
                    <div class="card-title mb-0">Premium Plan - $700.0/ Per Annual</div>
                    <p class="text-muted m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </p>
                </div>
                <button class="btn btn-opacity btn-primary" type="button">Manage Subscription</button>
            </div>
        </div>
        <div class="card-footer py-md">
            <p class="m-0">Learn More:
                <button class="btn btn-link btn-link-primary mb-0">Advance Option</button>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 mb-md">
    <div class="card">
        <div class="card-body">
            <div class="ul-donation-item d-flex align-items-center justify-content-between py-lg flex-wrap"><img
                    class="mr-md mb-md" src="{{asset('images/illustrations/undraw_monitor.svg')}}" alt="" />
                <div class="col-sm-6">
                    <div class="card-title m-0">We are here to help you :)</div>
                    <p class="text-muted">Ask a question or file a support ticketn or report an issues. Our team support
                        team will get back to you by email.</p>
                </div>
                <button class="btn btn-outline btn-outline-success" type="button">Get Support </button>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 mb-md">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Billing List</div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bill</th>
                            <th scope="col">Starting Date</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-primary" scope="row">2567</th>
                            <td>Premium Subscription</td>
                            <td class="text-muted">23-02-2020</td>
                            <td class="text-muted">27-02-2020</td>
                            <td class="text-dark font-weight-semi">$300.00</td>
                            <td class="text-warning">Pending</td>
                        </tr>
                        <tr>
                            <th class="text-primary" scope="row">2568</th>
                            <td>Basic Subscription</td>
                            <td class="text-muted">23-02-2020</td>
                            <td class="text-muted">27-02-2020</td>
                            <td class="text-dark font-weight-semi">$500.00</td>
                            <td class="text-danger">Rejected</td>
                        </tr>
                        <tr>
                            <th class="text-primary" scope="row">2569</th>
                            <td>Enterprise Subscription</td>
                            <td class="text-muted">23-02-2020</td>
                            <td class="text-muted">27-02-2020</td>
                            <td class="text-dark font-weight-semi">$700.00</td>
                            <td class="text-success">Delivered</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Start:: content (Your custom content)-->
@endsection