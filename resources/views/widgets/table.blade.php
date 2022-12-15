@extends('layouts.entry')

@section('content')

<h2 class="doc-section-title" id="examples">Transactions</h2>
<div class="doc-example">
    <div class="table-responsive p-md">
        <table class="table borderless table-hover">
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
            <tbody class="shadow">
                <tr>
                    <td class="align-middle border-0">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/001-spotify.svg')}}" />
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
            <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/003-apple.svg')}}" />
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
        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/004-windows.svg')}}" />
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
        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/005-google.svg')}}" />
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
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;table-responsive p-md&quot;&gt;
                  &lt;table class=&quot;table borderless table-hover&quot;&gt;
                    &lt;thead&gt;
                      &lt;tr&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Date&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Description&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Category&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Amount&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Status&lt;/th&gt;
                      &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody class=&quot;shadow&quot;&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle border-0&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/001-spotify.svg')}}&quot; /&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted border-0&quot;&gt;2 July, 2020&lt;/td&gt;
                        &lt;td scope=&quot;row&quot; class=&quot;align-middle border-0&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Spotify Subscriptoin fee&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle border-0&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Music&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle border-0&quot;&gt;
                          &lt;span class=&quot;font-weight-semi text-danger&quot;&gt;-$10&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle border-0&quot;&gt;
                          &lt;span class=&quot;badge badge-opacity badge-warning rounded-circle badge-xs&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;pending&lt;/i&gt;&lt;/div&gt;
                          &lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/003-apple.svg')}}&quot; /&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;3 July, 2020&lt;/td&gt;
                        &lt;td scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;App Store Payment&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Software&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi text-danger&quot;&gt;-$100&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;badge badge-opacity badge-success rounded-circle badge-xs&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;done&lt;/i&gt;&lt;/div&gt;
                          &lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/004-windows.svg')}}&quot; /&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;6 July, 2020&lt;/td&gt;
                        &lt;td scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Software Purchase&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Software&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi text-danger&quot;&gt;-$140&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;badge badge-opacity badge-success rounded-circle badge-xs&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;done&lt;/i&gt;&lt;/div&gt;
                          &lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/005-google.svg')}}&quot; /&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;6 July, 2020&lt;/td&gt;
                        &lt;td scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Adsense Revenue&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Advertising&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi text-success&quot;&gt;+$2100&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;badge badge-opacity badge-success rounded-circle badge-xs&quot;&gt;
                            &lt;i class=&quot;material-icons&quot;&gt;done&lt;/i&gt;&lt;/div&gt;
                          &lt;/span&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                    &lt;/tbody&gt;
                  &lt;/table&gt;
                &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Files </h2>
<div class="doc-example">
    <div class="table-responsive p-md">
        <table class="table borderless table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-muted border-0"></th>
                    <th scope="col" class="text-muted border-0">Name</th>
                    <th scope="col" class="text-muted border-0">Date</th>
                    <th scope="col" class="text-muted border-0">Members</th>
                    <th scope="col" class="text-muted border-0"></th>
                </tr>
            </thead>
            <tbody class="shadow">
                <tr>
                    <td class="align-middle border-0">
                        <img class="avatar-sm rounded ml-md" src="{{  asset('images/file-types/001-pdf.svg')}}" />
                    </td>
                    <td class="align-middle font-weight-semi border-0"><a class="text-body"
                            href="">Project_alpha_report.pdf</a></td>
                    <td class="align-middle border-0">
                        <span class="text-muted">01/10/2020</span>
                    </td>
                    <td class="align-middle border-0">
                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/001-man.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="John M">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/002-woman.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alison W">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/007-woman-2.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alisa J">
                        </div>
                    </td>
                    <td class="align-middle border-0">
                        <div class="dropdown d-inline">
                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">assignment</i>Open file</a>
                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person</i>View
                                    members</a>
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">person_add</i>Add member</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle border-0">
                        <img class="avatar-sm rounded ml-md" src="{{  asset('images/file-types/002-psd.svg')}}" />
                    </td>
                    <td class="align-middle font-weight-semi border-0"><a class="text-body"
                            href="">Project_alpha_UI.pdf</a></td>
                    <td class="align-middle border-0">
                        <span class="text-muted">01/10/2020</span>
                    </td>
                    <td class="align-middle border-0">
                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/003-man-1.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="John M">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/004-bald.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alison W">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/006-woman-1.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alisa J">
                        </div>
                    </td>
                    <td class="align-middle border-0">
                        <div class="dropdown d-inline">
                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">assignment</i>Open file</a>
                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person</i>View
                                    members</a>
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">person_add</i>Add member</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle border-0">
                        <img class="avatar-sm rounded ml-md" src="{{  asset('images/file-types/005-documents.svg')}}" />
                    </td>
                    <td class="align-middle font-weight-semi border-0"><a class="text-body"
                            href="">Project_alpha_report.pdf</a></td>
                    <td class="align-middle border-0">
                        <span class="text-muted">01/10/2020</span>
                    </td>
                    <td class="align-middle border-0">
                        <div class="col-md-4 d-flex align-items-center avatar-group m-0">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/006-woman-1.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="John M">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/002-woman.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alison W">
                            <img class="avatar-sm rounded-circle" src="{{  asset('images/avatars/007-woman-2.svg')}}"
                                data-toggle="tooltip" data-placement="top" title="Alisa J">
                        </div>
                    </td>
                    <td class="align-middle border-0">
                        <div class="dropdown d-inline">
                            <button class="btn btn-light btn-icon btn-sm rounded-circle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="material-icons">more_horiz</i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">assignment</i>Open file</a>
                                <a class="dropdown-item" href="#"><i class="material-icons icon icon-sm">person</i>View
                                    members</a>
                                <a class="dropdown-item" href="#"><i
                                        class="material-icons icon icon-sm">person_add</i>Add member</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;table-responsive p-md&quot;&gt;
                        &lt;table class=&quot;table borderless table-hover&quot;&gt;
                          &lt;thead&gt;
                            &lt;tr&gt;
                              &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;&lt;/th&gt;
                              &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Name&lt;/th&gt;
                              &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Date&lt;/th&gt;
                              &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;Members&lt;/th&gt;
                              &lt;th scope=&quot;col&quot; class=&quot;text-muted border-0&quot;&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                          &lt;/thead&gt;
                          &lt;tbody class=&quot;shadow&quot;&gt;
                            &lt;tr&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;img class=&quot;avatar-sm rounded ml-md&quot; src=&quot;{{  asset('images/file-types/001-pdf.svg')}}&quot; /&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle font-weight-semi border-0&quot;&gt;
                                a.text-body(href=&quot;&quot;) Project_alpha_report.pdf
                              &lt;/td&gt;
                              
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;span class=&quot;text-muted&quot;&gt;01/10/2020&lt;/span&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;col-md-4 d-flex align-items-center avatar-group m-0&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/001-man.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/007-woman-2.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;dropdown d-inline&quot;&gt;
                                  &lt;button class=&quot;btn btn-light btn-icon btn-sm rounded-circle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    i.material-icons more_horiz
                                  &lt;/button&gt;
                                  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;assignment&lt;/i&gt;Open file&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person&lt;/i&gt;View members&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person_add&lt;/i&gt;Add member&lt;/a&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;img class=&quot;avatar-sm rounded ml-md&quot; src=&quot;{{  asset('images/file-types/002-psd.svg')}}&quot; /&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle font-weight-semi border-0&quot;&gt;
                                a.text-body(href=&quot;&quot;) Project_alpha_UI.pdf
                              &lt;/td&gt;
                              
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;span class=&quot;text-muted&quot;&gt;01/10/2020&lt;/span&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;col-md-4 d-flex align-items-center avatar-group m-0&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/003-man-1.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/004-bald.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/006-woman-1.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;dropdown d-inline&quot;&gt;
                                  &lt;button class=&quot;btn btn-light btn-icon btn-sm rounded-circle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    i.material-icons more_horiz
                                  &lt;/button&gt;
                                  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;assignment&lt;/i&gt;Open file&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person&lt;/i&gt;View members&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person_add&lt;/i&gt;Add member&lt;/a&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;img class=&quot;avatar-sm rounded ml-md&quot; src=&quot;{{  asset('images/file-types/005-documents.svg')}}&quot; /&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle font-weight-semi border-0&quot;&gt;
                                a.text-body(href=&quot;&quot;) Project_alpha_report.pdf
                              &lt;/td&gt;
                              
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;span class=&quot;text-muted&quot;&gt;01/10/2020&lt;/span&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;col-md-4 d-flex align-items-center avatar-group m-0&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/006-woman-1.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;John M&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/002-woman.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alison W&quot;&gt;
                                  &lt;img class=&quot;avatar-sm rounded-circle&quot; src=&quot;{{  asset('images/avatars/007-woman-2.svg')}}&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Alisa J&quot;&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                              &lt;td class=&quot;align-middle border-0&quot;&gt;
                                &lt;div class=&quot;dropdown d-inline&quot;&gt;
                                  &lt;button class=&quot;btn btn-light btn-icon btn-sm rounded-circle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                    i.material-icons more_horiz
                                  &lt;/button&gt;
                                  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;assignment&lt;/i&gt;Open file&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person&lt;/i&gt;View members&lt;/a&gt;
                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;material-icons icon icon-sm&quot;&gt;person_add&lt;/i&gt;Add member&lt;/a&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/td&gt;
                            &lt;/tr&gt;
                          &lt;/tbody&gt;
                        &lt;/table&gt;
                      &lt;/div&gt;"></code>
<h2 class="doc-section-title" id="examples">Enrolled courses </h2>
<div class="doc-example">
    <div class="card table-responsive">
        <table class="table borderless table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-muted"></th>
                    <th scope="col" class="text-muted">Started</th>
                    <th scope="col" class="text-muted">Course</th>
                    <th scope="col" class="text-muted">Progress</th>
                    <th scope="col" class="text-muted">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/angular.png')}}" />
                    </td>
                    <td class="align-middle text-muted">20 May, 20200</td>
                    <th scope="row" class="align-middle">
                        <span class="font-weight-semi">Angular Beyond The Basics</span>
                    </th>
                    <td class="align-middle">
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning rounded-circle btn-icon">
                            <i class="material-icons text-25">play_circle_filled</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/react.png')}}">
                    </td>
                    <td class="align-middle text-muted">20 May, 20200</td>
                    <th scope="row" class="align-middle">
                        <span class="font-weight-semi">React Development Course</span>
                    </th>
                    <td class="align-middle">
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning rounded-circle btn-icon">
                            <i class="material-icons text-25">play_circle_filled</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/webpack.png')}}">
                    </td>
                    <td class="align-middle text-muted">20 May, 20200</td>
                    <th scope="row" class="align-middle">
                        <span class="font-weight-semi">Webpack For Busy Developer</span>
                    </th>
                    <td class="align-middle">
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning rounded-circle btn-icon">
                            <i class="material-icons text-25">play_circle_filled</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/sass.png')}}">
                    </td>
                    <td class="align-middle text-muted">20 May, 20200</td>
                    <th scope="row" class="align-middle">
                        <span class="font-weight-semi">Complete SASS Course</span>
                    </th>
                    <td class="align-middle">
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning rounded-circle btn-icon">
                            <i class="material-icons text-25">play_circle_filled</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        <img class="avatar-xs rounded ml-md" src="{{  asset('images/logos/bootstrap.png')}}">
                    </td>
                    <td class="align-middle text-muted">20 May, 2020</td>
                    <th scope="row" class="align-middle">
                        <span class="font-weight-semi">Bootstrap For Everyone</span>
                    </th>
                    <td class="align-middle">
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 10%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning rounded-circle btn-icon">
                            <i class="material-icons text-25">play_circle_filled</i>
                            <div class="ripple-container"></div>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;div class=&quot;card table-responsive&quot;&gt;
                  &lt;table class=&quot;table borderless table-hover&quot;&gt;
                    &lt;thead&gt;
                      &lt;tr&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted&quot;&gt;&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted&quot;&gt;Started&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted&quot;&gt;Course&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted&quot;&gt;Progress&lt;/th&gt;
                        &lt;th scope=&quot;col&quot; class=&quot;text-muted&quot;&gt;Action&lt;/th&gt;
                      &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/angular.png')}}&quot; /&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;20 May, 20200&lt;/td&gt;
                        &lt;th scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Angular Beyond The Basics&lt;/span&gt;
                        &lt;/th&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;div class=&quot;progress-wrapper&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                              &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 80%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;button class=&quot;btn btn-warning rounded-circle btn-icon&quot;&gt;
                            &lt;i class=&quot;material-icons text-25&quot;&gt;play_circle_filled&lt;/i&gt;&lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;
                          &lt;/button&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/react.png')}}&quot;&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;20 May, 20200&lt;/td&gt;
                        &lt;th scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;React Development Course&lt;/span&gt;
                        &lt;/th&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;div class=&quot;progress-wrapper&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                              &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;button class=&quot;btn btn-warning rounded-circle btn-icon&quot;&gt;
                            &lt;i class=&quot;material-icons text-25&quot;&gt;play_circle_filled&lt;/i&gt;&lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;
                          &lt;/button&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/webpack.png')}}&quot;&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;20 May, 20200&lt;/td&gt;
                        &lt;th scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Webpack For Busy Developer&lt;/span&gt;
                        &lt;/th&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;div class=&quot;progress-wrapper&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                              &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 60%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;button class=&quot;btn btn-warning rounded-circle btn-icon&quot;&gt;
                            &lt;i class=&quot;material-icons text-25&quot;&gt;play_circle_filled&lt;/i&gt;&lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;
                          &lt;/button&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/sass.png')}}&quot;&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;20 May, 20200&lt;/td&gt;
                        &lt;th scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Complete SASS Course&lt;/span&gt;
                        &lt;/th&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;div class=&quot;progress-wrapper&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                              &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;button class=&quot;btn btn-warning rounded-circle btn-icon&quot;&gt;
                            &lt;i class=&quot;material-icons text-25&quot;&gt;play_circle_filled&lt;/i&gt;&lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;
                          &lt;/button&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                      &lt;tr&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;img class=&quot;avatar-xs rounded ml-md&quot; src=&quot;{{  asset('images/logos/bootstrap.png')}}&quot;&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle text-muted&quot;&gt;20 May, 2020&lt;/td&gt;
                        &lt;th scope=&quot;row&quot; class=&quot;align-middle&quot;&gt;
                          &lt;span class=&quot;font-weight-semi&quot;&gt;Bootstrap For Everyone&lt;/span&gt;
                        &lt;/th&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;div class=&quot;progress-wrapper&quot;&gt;
                            &lt;div class=&quot;progress&quot;&gt;
                              &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td class=&quot;align-middle&quot;&gt;
                          &lt;button class=&quot;btn btn-warning rounded-circle btn-icon&quot;&gt;
                            &lt;i class=&quot;material-icons text-25&quot;&gt;play_circle_filled&lt;/i&gt;&lt;div class=&quot;ripple-container&quot;&gt;&lt;/div&gt;
                          &lt;/button&gt;
                        &lt;/td&gt;
                      &lt;/tr&gt;
                    &lt;/tbody&gt;
                  &lt;/table&gt;
                &lt;/div&gt;"></code>



@endsection