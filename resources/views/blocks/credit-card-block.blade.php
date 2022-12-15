@extends('layouts.entry')

@section('content')

<div class="mt-lg mx-lg">
    <div class="doc-example">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="py-md d-flex justify-content-between align-items-center mb-lg">
                            <div class="card-title">Saved Cards</div>
                            <div class="mt--sm"><select class="selectpicker" data-style="border">
                                    <option>Visa Card 4143 **** 3457</option>
                                    <option>Master Card 3743 **** 4089</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="credit-card-wrap shadow rounded p-md" style="width: 350px">
                                    <div class="d-flex justify-content-between mb-xxxl">
                                        <div><span class="text-muted">Primary card</span>
                                            <h2 class="m-0">$2,080.5</h2>
                                        </div><img class="icon icon-sm"
                                            src="{{  asset('images/payment-card/004-visa.svg')}}" />
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div>
                                            <p class="font-weight-semi m-0">Tim Clarkson</p><span
                                                class="text-small text-muted">4143 **** 3457</span>
                                        </div><span class="text-small text-muted">04/2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="max-width: 300px">
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
                            </div>
                        </div>
                        <div class="d-flex my-md">
                            <div class="flex-grow-1"></div><a class="btn btn-opacity btn-primary btn-sm mr-md">Add new
                                Card</a><a class="btn btn-opacity btn-danger btn-sm">Remove this Card</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-code">
        <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
            title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div class=&quot;py-md d-flex justify-content-between align-items-center mb-lg&quot;&gt;
  &lt;div class=&quot;card-title&quot;&gt;Saved Cards&lt;/div&gt;
  &lt;div class=&quot;mt--sm&quot;&gt;
    &lt;span class=&quot;bmd-form-group is-filled&quot;&gt;
      &lt;div class=&quot;dropdown bootstrap-select&quot;&gt;
        &lt;select class=&quot;selectpicker&quot; data-style=&quot;border&quot;&gt;
          &lt;option&gt;Visa Card 4143 **** 3457&lt;/option&gt;
          &lt;option&gt;Master Card 3743 **** 4089&lt;/option&gt;
        &lt;/select&gt;
        &lt;button type=&quot;button&quot; tabindex=&quot;-1&quot; class=&quot;btn dropdown-toggle border&quot; data-toggle=&quot;dropdown&quot; role=&quot;combobox&quot; aria-owns=&quot;bs-select-1&quot; aria-haspopup=&quot;listbox&quot; aria-expanded=&quot;false&quot; title=&quot;Visa Card 4143 **** 3457&quot;&gt;
          &lt;div class=&quot;filter-option&quot;&gt;
            &lt;div class=&quot;filter-option-inner&quot;&gt;&lt;div class=&quot;filter-option-inner-inner&quot;&gt;Visa Card 4143 **** 3457&lt;/div&gt;&lt;/div&gt;
          &lt;/div&gt;
        &lt;/button&gt;
        &lt;div class=&quot;dropdown-menu&quot;&gt;
          &lt;div class=&quot;inner show&quot; role=&quot;listbox&quot; id=&quot;bs-select-1&quot; tabindex=&quot;-1&quot;&gt;&lt;ul class=&quot;dropdown-menu inner show&quot; role=&quot;presentation&quot;&gt;&lt;/ul&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row justify-content-between&quot;&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;div class=&quot;credit-card-wrap shadow rounded p-md&quot; style=&quot;width: 350px;&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-between mb-xxxl&quot;&gt;
        &lt;div&gt;
          &lt;span class=&quot;text-muted&quot;&gt;Primary card&lt;/span&gt;
          &lt;h2 class=&quot;m-0&quot;&gt;$2,080.5&lt;/h2&gt;
        &lt;/div&gt;
        &lt;img class=&quot;icon icon-sm&quot; src=&quot;{{  asset('images/payment-card/004-visa.svg')}}&quot; /&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex justify-content-between align-items-end&quot;&gt;
        &lt;div&gt;
          &lt;p class=&quot;font-weight-semi m-0&quot;&gt;Tim Clarkson&lt;/p&gt;
          &lt;span class=&quot;text-small text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
        &lt;/div&gt;
        &lt;span class=&quot;text-small text-muted&quot;&gt;04/2024&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot; style=&quot;max-width: 300px;&quot;&gt;
    &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
      &lt;p&gt;Card Type:&lt;/p&gt;
      &lt;span class=&quot;text-muted&quot;&gt;Visa&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
      &lt;p&gt;Card Holder:&lt;/p&gt;
      &lt;span class=&quot;text-muted&quot;&gt;Tim Clarkson&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
      &lt;p&gt;Card Number:&lt;/p&gt;
      &lt;span class=&quot;text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
      &lt;p&gt;Validation Date:&lt;/p&gt;
      &lt;span class=&quot;text-muted&quot;&gt;04/2024&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
      &lt;p&gt;Balance:&lt;/p&gt;
      &lt;span class=&quot;text-muted&quot;&gt;2,080.5USD&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex my-md&quot;&gt;
  &lt;div class=&quot;flex-grow-1&quot;&gt;&lt;/div&gt;
  &lt;a class=&quot;btn btn-opacity btn-primary btn-sm mr-md&quot;&gt;Add new Card&lt;/a&gt;&lt;a class=&quot;btn btn-opacity btn-danger btn-sm&quot;&gt;Remove this Card&lt;/a&gt;
&lt;/div&gt;"></code>
    <div class="doc-example">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-title p-md m-0">Saved Cards</div>
                    <div class="p-lg" data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: 400px">
                        <div class="credit-card-wrap shadow rounded p-md mb-lg">
                            <div class="d-flex justify-content-between mb-xxxl">
                                <div><span class="text-muted">Primary card</span>
                                    <h2 class="m-0">$2,080.5</h2>
                                </div><img class="icon icon-sm" src="{{  asset('images/payment-card/004-visa.svg')}}" />
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="font-weight-semi m-0">Tim Clarkson</p><span
                                        class="text-small text-muted">4143 **** 3457</span>
                                </div><span class="text-small text-muted">04/2024</span><i
                                    class="material-icons icon icon-xs cursor-pointer hover-gray" data-toggle="tooltip"
                                    title="Remove this card">delete</i>
                            </div>
                        </div>
                        <div class="credit-card-wrap shadow rounded p-md mb-lg">
                            <div class="d-flex justify-content-between mb-xxxl">
                                <div><span class="text-muted">Additional card</span>
                                    <h2 class="m-0">$1,080.5</h2>
                                </div><img class="icon icon-sm"
                                    src="{{  asset('images/payment-card/002-mastercard.svg')}}" />
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="font-weight-semi m-0">Tim Clarkson</p><span
                                        class="text-small text-muted">4143 **** 3457</span>
                                </div><span class="text-small text-muted">04/2024</span><i
                                    class="material-icons icon icon-xs cursor-pointer hover-gray" data-toggle="tooltip"
                                    title="Remove this card">delete</i>
                            </div>
                        </div>
                        <div class="credit-card-wrap shadow rounded p-md mb-lg">
                            <div class="d-flex justify-content-between mb-xxxl">
                                <div><span class="text-muted">Additional card</span>
                                    <h2 class="m-0">$380.5</h2>
                                </div><img class="icon icon-sm"
                                    src="{{  asset('images/payment-card/003-american express.svg')}}" />
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="font-weight-semi m-0">Tim Clarkson</p><span
                                        class="text-small text-muted">4143 **** 3457</span>
                                </div><span class="text-small text-muted">04/2024</span><i
                                    class="material-icons icon icon-xs cursor-pointer hover-gray" data-toggle="tooltip"
                                    title="Remove this card">delete</i>
                            </div>
                        </div>
                    </div>
                    <div class="p-md gray-200 border-top">
                        <button class="btn btn-flat btn-primary w-full" data-toggle="modal"
                            data-target="#addNewCardModal">Add New Card</button>
                        <!-- Modal-->
                        <div class="modal fade" id="addNewCardModal" tabindex="-1" role="dialog"
                            aria-labelledby="addNewCardModaltitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="card-title m-0" id="addNewCardModaltitle">Add new Card</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="m-0">
                                            <div class="input-group with-icon input-light mb-3">
                                                <div class="input-group-prepend">
                                                    <i class="input-group-text material-icons">person</i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Name on Card">
                                            </div>
                                            <div class="input-group with-icon input-light mb-3">
                                                <div class="input-group-prepend">
                                                    <i class="input-group-text material-icons">credit_card</i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Card Number">
                                            </div>
                                            <div class="row mb-md">
                                                <div class="col-6">
                                                    <div class="input-group with-icon input-light mb-3">
                                                        <div class="input-group-prepend">
                                                            <i
                                                                class="input-group-text material-icons">calendar_today</i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Exp Date">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group with-icon input-light mb-3">
                                                        <div class="input-group-prepend">
                                                            <i class="input-group-text material-icons">security</i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="CVV Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1"></div><button type="button"
                                                    class="btn btn-opacity btn-danger mr-md"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-flat btn-primary">Save
                                                    Card</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-xl">Primary Card</div>
                        <div class="credit-card-wrap shadow rounded p-md w-full">
                            <div class="d-flex justify-content-between mb-xxxl">
                                <div><span class="text-muted">Current balance</span>
                                    <h2 class="m-0">$2,080.5</h2>
                                </div><img class="icon icon-sm" src="{{  asset('images/payment-card/004-visa.svg')}}" />
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="font-weight-semi m-0">Tim Clarkson</p><span
                                        class="text-small text-muted">4143 **** 3457</span>
                                </div><span class="text-small text-muted">04/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-md gray-200 border-top">
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
                        <p>Balance:</p><span class="text-muted">2,080.5USD </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-code">
        <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
            title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-5&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;div class=&quot;card-title p-md m-0&quot;&gt;Saved Cards&lt;/div&gt;
      &lt;div class=&quot;p-lg ps ps--active-y&quot; data-perfect-scrollbar=&quot;&quot; data-suppress-scroll-x=&quot;true&quot; style=&quot;height: 400px;&quot;&gt;
        &lt;div class=&quot;credit-card-wrap shadow rounded p-md mb-lg&quot;&gt;
          &lt;div class=&quot;d-flex justify-content-between mb-xxxl&quot;&gt;
            &lt;div&gt;
              &lt;span class=&quot;text-muted&quot;&gt;Primary card&lt;/span&gt;
              &lt;h2 class=&quot;m-0&quot;&gt;$2,080.5&lt;/h2&gt;
            &lt;/div&gt;
            &lt;img class=&quot;icon icon-sm&quot; src=&quot;{{  asset('images/payment-card/004-visa.svg')}}&quot; /&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex justify-content-between align-items-end&quot;&gt;
            &lt;div&gt;
              &lt;p class=&quot;font-weight-semi m-0&quot;&gt;Tim Clarkson&lt;/p&gt;
              &lt;span class=&quot;text-small text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
            &lt;/div&gt;
            &lt;span class=&quot;text-small text-muted&quot;&gt;04/2024&lt;/span&gt;&lt;i class=&quot;material-icons icon icon-xs cursor-pointer hover-gray&quot; data-toggle=&quot;tooltip&quot; title=&quot;&quot; data-original-title=&quot;Remove this card&quot;&gt;delete&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;credit-card-wrap shadow rounded p-md mb-lg&quot;&gt;
          &lt;div class=&quot;d-flex justify-content-between mb-xxxl&quot;&gt;
            &lt;div&gt;
              &lt;span class=&quot;text-muted&quot;&gt;Additional card&lt;/span&gt;
              &lt;h2 class=&quot;m-0&quot;&gt;$1,080.5&lt;/h2&gt;
            &lt;/div&gt;
            &lt;img class=&quot;icon icon-sm&quot; src=&quot;{{  asset('images/payment-card/002-mastercard.svg')}}&quot; /&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex justify-content-between align-items-end&quot;&gt;
            &lt;div&gt;
              &lt;p class=&quot;font-weight-semi m-0&quot;&gt;Tim Clarkson&lt;/p&gt;
              &lt;span class=&quot;text-small text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
            &lt;/div&gt;
            &lt;span class=&quot;text-small text-muted&quot;&gt;04/2024&lt;/span&gt;&lt;i class=&quot;material-icons icon icon-xs cursor-pointer hover-gray&quot; data-toggle=&quot;tooltip&quot; title=&quot;&quot; data-original-title=&quot;Remove this card&quot;&gt;delete&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;credit-card-wrap shadow rounded p-md mb-lg&quot;&gt;
          &lt;div class=&quot;d-flex justify-content-between mb-xxxl&quot;&gt;
            &lt;div&gt;
              &lt;span class=&quot;text-muted&quot;&gt;Additional card&lt;/span&gt;
              &lt;h2 class=&quot;m-0&quot;&gt;$380.5&lt;/h2&gt;
            &lt;/div&gt;
            &lt;img class=&quot;icon icon-sm&quot; src=&quot;{{  asset('images/payment-card/003-american express.svg')}}&quot; /&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex justify-content-between align-items-end&quot;&gt;
            &lt;div&gt;
              &lt;p class=&quot;font-weight-semi m-0&quot;&gt;Tim Clarkson&lt;/p&gt;
              &lt;span class=&quot;text-small text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
            &lt;/div&gt;
            &lt;span class=&quot;text-small text-muted&quot;&gt;04/2024&lt;/span&gt;&lt;i class=&quot;material-icons icon icon-xs cursor-pointer hover-gray&quot; data-toggle=&quot;tooltip&quot; title=&quot;&quot; data-original-title=&quot;Remove this card&quot;&gt;delete&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;ps__rail-x&quot; style=&quot;left: 0px; bottom: -193px;&quot;&gt;&lt;div class=&quot;ps__thumb-x&quot; tabindex=&quot;0&quot; style=&quot;left: 0px; width: 0px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;
        &lt;div class=&quot;ps__rail-y&quot; style=&quot;top: 193px; height: 400px; right: 0px;&quot;&gt;&lt;div class=&quot;ps__thumb-y&quot; tabindex=&quot;0&quot; style=&quot;top: 112px; height: 232px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;p-md gray-200 border-top&quot;&gt;
        &lt;button class=&quot;btn btn-flat btn-primary w-full&quot; data-toggle=&quot;modal&quot; data-target=&quot;#addNewCardModal&quot;&gt;Add New Card&lt;/button&gt;
        &lt;!-- Modal--&gt;
        &lt;div class=&quot;modal fade&quot; id=&quot;addNewCardModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;addNewCardModaltitle&quot; aria-hidden=&quot;true&quot;&gt;
          &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
              &lt;div class=&quot;modal-header&quot;&gt;
                &lt;p class=&quot;card-title m-0&quot; id=&quot;addNewCardModaltitle&quot;&gt;Add new Card&lt;/p&gt;
                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                  &lt;span aria-hidden=&quot;true&quot;&gt;×&lt;/span&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class=&quot;modal-body&quot;&gt;
                &lt;form class=&quot;m-0&quot;&gt;
                  &lt;span class=&quot;bmd-form-group&quot;&gt;
                    &lt;div class=&quot;input-group with-icon input-light mb-3&quot;&gt;
                      &lt;div class=&quot;input-group-prepend&quot;&gt;
                        &lt;i class=&quot;input-group-text material-icons&quot;&gt;person&lt;/i&gt;
                      &lt;/div&gt;
                      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Name on Card&quot; /&gt;
                    &lt;/div&gt;
                  &lt;/span&gt;
                  &lt;span class=&quot;bmd-form-group&quot;&gt;
                    &lt;div class=&quot;input-group with-icon input-light mb-3&quot;&gt;
                      &lt;div class=&quot;input-group-prepend&quot;&gt;
                        &lt;i class=&quot;input-group-text material-icons&quot;&gt;credit_card&lt;/i&gt;
                      &lt;/div&gt;
                      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Card Number&quot; /&gt;
                    &lt;/div&gt;
                  &lt;/span&gt;
                  &lt;div class=&quot;row mb-md&quot;&gt;
                    &lt;div class=&quot;col-6&quot;&gt;
                      &lt;span class=&quot;bmd-form-group&quot;&gt;
                        &lt;div class=&quot;input-group with-icon input-light mb-3&quot;&gt;
                          &lt;div class=&quot;input-group-prepend&quot;&gt;
                            &lt;i class=&quot;input-group-text material-icons&quot;&gt;calendar_today&lt;/i&gt;
                          &lt;/div&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Exp Date&quot; /&gt;
                        &lt;/div&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-6&quot;&gt;
                      &lt;span class=&quot;bmd-form-group&quot;&gt;
                        &lt;div class=&quot;input-group with-icon input-light mb-3&quot;&gt;
                          &lt;div class=&quot;input-group-prepend&quot;&gt;
                            &lt;i class=&quot;input-group-text material-icons&quot;&gt;security&lt;/i&gt;
                          &lt;/div&gt;
                          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;CVV Code&quot; /&gt;
                        &lt;/div&gt;
                      &lt;/span&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;d-flex&quot;&gt;
                    &lt;div class=&quot;flex-grow-1&quot;&gt;&lt;/div&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-opacity btn-danger mr-md&quot; data-dismiss=&quot;modal&quot;&gt;Cancel&lt;/button&gt;
                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-flat btn-primary&quot;&gt;Save Card&lt;/button&gt;
                  &lt;/div&gt;
                &lt;/form&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-5&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;div class=&quot;card-title mb-xl&quot;&gt;Primary Card&lt;/div&gt;
        &lt;div class=&quot;credit-card-wrap shadow rounded p-md w-full&quot;&gt;
          &lt;div class=&quot;d-flex justify-content-between mb-xxxl&quot;&gt;
            &lt;div&gt;
              &lt;span class=&quot;text-muted&quot;&gt;Current balance&lt;/span&gt;
              &lt;h2 class=&quot;m-0&quot;&gt;$2,080.5&lt;/h2&gt;
            &lt;/div&gt;
            &lt;img class=&quot;icon icon-sm&quot; src=&quot;{{  asset('images/payment-card/004-visa.svg')}}&quot; /&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex justify-content-between align-items-end&quot;&gt;
            &lt;div&gt;
              &lt;p class=&quot;font-weight-semi m-0&quot;&gt;Tim Clarkson&lt;/p&gt;
              &lt;span class=&quot;text-small text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
            &lt;/div&gt;
            &lt;span class=&quot;text-small text-muted&quot;&gt;04/2024&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;p-md gray-200 border-top&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
        &lt;p&gt;Card Type:&lt;/p&gt;
        &lt;span class=&quot;text-muted&quot;&gt;Visa&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
        &lt;p&gt;Card Holder:&lt;/p&gt;
        &lt;span class=&quot;text-muted&quot;&gt;Tim Clarkson&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
        &lt;p&gt;Card Number:&lt;/p&gt;
        &lt;span class=&quot;text-muted&quot;&gt;4143 **** 3457&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
        &lt;p&gt;Validation Date:&lt;/p&gt;
        &lt;span class=&quot;text-muted&quot;&gt;04/2024&lt;/span&gt;
      &lt;/div&gt;
      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
        &lt;p&gt;Balance:&lt;/p&gt;
        &lt;span class=&quot;text-muted&quot;&gt;2,080.5USD &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;"></code>
</div>

@endsection