@extends('layouts.entry')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="py-md">
                <div class="w-80 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pt-xxxl pb-xxxl d-flex justify-content-between flex-wrap">
                                <h1 class="display-2 pb-xl pt-xl">INVOICE</h1>
                                <div class="ul-invoice-v1-header d-flex flex-column"><img class="avatar-md mr-2  mb-md"
                                        src="{{  asset('images/logos/logo-circle.svg')}}" alt="" srcset="" />
                                    <p class="m-0 text-gray-500">4798 Forest Avenue,New York, contact@ui-lib.com
                                        646-822-3760 nc.com 646-822-3760</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ul-divider mt-xxxl mb-xxxl"></div>
                            <div class="ul-invoice-header-v1-items d-flex justify-content-between flex-wrap">
                                <div class="ul-invoice-v1-header-left mb-xl d-flex flex-column"><span>INVOICE
                                        TO:</span><span class="text-gray-500">Iris Watson, P.O. Box 283 8562 Fusce
                                        Rd.
                                        Frederick Nebraska 20620</span></div>
                                <div class="ul-invoice-v1-header-right">
                                    <div class="ul-invoice-v1-heder-date mb-md"><span
                                            class="mr-2 mb-md">DATE:</span><span class="text-gray-500">Dec 16,
                                            2020</span></div>
                                    <div class="ul-invoice-v1-heder-id">
                                        <spani class="mr-2">INVOICE NO:</spani><span class="text-gray-500">UI0987</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-md gray-200">
                <div class="w-80 mx-auto">
                    <div class="table-responsive mb-xxxl">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pl-0" scope="col">DESCRIPTION</th>
                                    <th scope="col">HOURS</th>
                                    <th scope="col">RATE</th>
                                    <th class="text-right pr-0" scope="col">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold pl-0">UI/UX for Mobile App</td>
                                    <td class="font-weight-bold">50 </td>
                                    <td class="font-weight-bold">$50.00 </td>
                                    <td class="font-weight-bold text-primary text-right pr-0">$2500.00 </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold pl-0">Front-End Development</td>
                                    <td class="font-weight-bold">130 </td>
                                    <td class="font-weight-bold">$50.00 </td>
                                    <td class="font-weight-bold text-primary text-right pr-0">$6500.00</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold pl-0">Back-End Development</td>
                                    <td class="font-weight-bold">130 </td>
                                    <td class="font-weight-bold">$80.00 </td>
                                    <td class="font-weight-bold text-primary text-right pr-0">$10400.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ul-invoice-v1-total-amount d-flex justify-content-between flex-wrap">
                        <div class="ul-invoice-v1-bank-transfer mb-md">
                            <p class="text-muted font-weight-semi text-18 m-0">BANK TRANSFER: </p>
                            <div class="ul-invoice-v1-item d-flex mb-1">
                                <p class="m-0 mr-2 font-weight-semi">Account Name:</p><span>Manchester United
                                </span>
                            </div>
                            <div class="ul-invoice-v1-item d-flex mb-1">
                                <p class="m-0 mr-2 font-weight-semi">Account Number:</p><span>
                                    378282246310005</span>
                            </div>
                            <div class="ul-invoice-v1-item d-flex mb-1">
                                <p class="m-0 mr-2 font-weight-semi">Code:</p><span> BARC0032US</span>
                            </div>
                        </div>
                        <div class="ul-invoice-v1-total text-right">
                            <p class="text-muted m-0 font-weight-semi text-18">TOTAL AMOUNT: </p>
                            <h3 class="m-0 text-primary font-weight-bold">$19400.00 </h3>
                            <p class="m-0 text-muted">tax include</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-md">
                <div class="w-80 mx-auto">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline btn-outline-primary" type="button">Download invoice </button>
                        <button class="btn btn-raised btn-raised-primary" type="button">Print invoice </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection