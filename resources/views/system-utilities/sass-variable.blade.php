@extends('layouts.entry')

@section('content')


<div class="card mb-md">
    <div class="card-body">
        <p class="text-lead">
            Sass variables are useful for extending existing design without
            losing design consistancy.
        </p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Gray Colors</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>$gray-100</code></td>
                        <td>
                            <div class="gray-100 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-200</code></td>
                        <td>
                            <div class="gray-200 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-300</code></td>
                        <td>
                            <div class="gray-300 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-400</code></td>
                        <td>
                            <div class="gray-400 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-500</code></td>
                        <td>
                            <div class="gray-500 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-600</code></td>
                        <td>
                            <div class="gray-600 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-700</code></td>
                        <td>
                            <div class="gray-700 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-800</code></td>
                        <td>
                            <div class="gray-800 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$gray-900</code></td>
                        <td>
                            <div class="gray-900 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$black</code></td>
                        <td>
                            <div class="gray-900 rounded" style="height: 20px; width: 60px"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><code>$body-bg</code></td>
                        <td><code>#fafafa</code></td>
                    </tr>
                    <tr>
                        <td><code>$body-color</code></td>
                        <td><code>darken(desaturate($purple, 60), 30); // ~ #4e4a74</code></td>
                    </tr>
                    <tr>
                        <td><code>$heading-color</code></td>
                        <td><code>$black</code></td>
                    </tr>
                    <tr>
                        <td><code>$text-muted-color</code></td>
                        <td><code>$gray-600</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Theme colors</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$primary</code></td>
                    <td>
                        <div class="bg-primary rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$primary-active</code></td>
                    <td><code>darken($primary, 10)</code></td>
                </tr>
                <tr>
                    <td><code>$primary-dark</code></td>
                    <td><code>darken($primary, 15)</code></td>
                </tr>
                <tr>
                    <td><code>$secondary</code></td>
                    <td>
                        <div class="bg-secondary rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$success</code></td>
                    <td>
                        <div class="bg-success rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$info</code></td>
                    <td>
                        <div class="bg-info rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$warning</code></td>
                    <td>
                        <div class="bg-warning rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$danger</code></td>
                    <td>
                        <div class="bg-danger rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$light</code></td>
                    <td>
                        <div class="bg-light rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$dark</code></td>
                    <td>
                        <div class="bg-dark rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$background</code></td>
                    <td><code>$white</code></td>
                </tr>
                <tr>
                    <td><code>$body-color</code></td>
                    <td><code>$black</code></td>
                </tr>
                <tr>
                    <td><code>$facebook</code></td>
                    <td><code>rgb(55, 101, 201)</code></td>
                </tr>
                <tr>
                    <td><code>$google</code></td>
                    <td><code>rgb(236, 65, 44)</code></td>
                </tr>
                <tr>
                    <td><code>$twitter</code></td>
                    <td><code>rgb(3, 159, 245)</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Border colors</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$border-color</code></td>
                    <td>
                        <div class="gray-300 rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$border-color-light</code></td>
                    <td>
                        <div class="gray-200 rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$border-color-dark</code></td>
                    <td>
                        <div class="gray-400 rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>$border-color-black</code></td>
                    <td>
                        <div class="gray-600 rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Typography</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$font-family-base</code></td>
                    <td><code>&apos;Roboto&apos;, sans-serif;</code></td>
                </tr>
                <tr>
                    <td><code>$font-weight-base</code></td>
                    <td><code>400</code></td>
                </tr>
                <tr>
                    <td><code>$line-height-base</code></td>
                    <td><code>1.5</code></td>
                </tr>
                <tr>
                    <td><code>$letter-spacing-base</code></td>
                    <td><code>.3px</code></td>
                </tr>
                <tr>
                    <td><code>$font-weight-light</code></td>
                    <td><code>300</code></td>
                </tr>
                <tr>
                    <td><code>$font-weight-normal</code></td>
                    <td><code>400</code></td>
                </tr>
                <tr>
                    <td><code>$font-weight-semi</code></td>
                    <td><code>500</code></td>
                </tr>
                <tr>
                    <td><code>$font-weight-bold</code></td>
                    <td><code>700</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Typography <small>( Font size )</small></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$font-size-base</code></td>
                    <td><code>.9375rem (15px)</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-xs</code></td>
                    <td><code>0.7142em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-sm</code></td>
                    <td><code>0.8571em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-lg</code></td>
                    <td><code>1em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-paragraph</code></td>
                    <td><code>1em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h1</code></td>
                    <td><code>2.125em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h2</code></td>
                    <td><code>1.8125em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h3</code></td>
                    <td><code>1.5em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h4</code></td>
                    <td><code>1.25em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h5</code></td>
                    <td><code>1.0625em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-h6</code></td>
                    <td><code>.8125em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-display-1</code></td>
                    <td><code>4.6875em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-display-2</code></td>
                    <td><code>3.75em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-display-3</code></td>
                    <td><code>2.8125em</code></td>
                </tr>
                <tr>
                    <td><code>$font-size-display-4</code></td>
                    <td><code>2.1875em</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Border</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$border-width</code></td>
                    <td><code>1px</code></td>
                </tr>
                <tr>
                    <td><code>$border-width-md</code></td>
                    <td><code>2px</code></td>
                </tr>
                <tr>
                    <td><code>$border-width-lg</code></td>
                    <td><code>3px</code></td>
                </tr>
                <tr>
                    <td><code>$border-width-xl</code></td>
                    <td><code>4px</code></td>
                </tr>
                <tr>
                    <td><code>$border-radius</code></td>
                    <td><code>.25rem</code></td>
                </tr>
                <tr>
                    <td><code>$border-radius-sm</code></td>
                    <td><code>.2rem</code></td>
                </tr>
                <tr>
                    <td><code>$border-radius-lg</code></td>
                    <td><code>.3rem</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Spacing</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$spacing-xxxs</code></td>
                    <td><code>.0625rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-xxs</code></td>
                    <td><code>.125rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-xs</code></td>
                    <td><code>.25rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-sm</code></td>
                    <td><code>.5rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-md</code></td>
                    <td><code>1rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-lg</code></td>
                    <td><code>1.5rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-xl</code></td>
                    <td><code>2rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-xxl</code></td>
                    <td><code>2.5rem</code></td>
                </tr>
                <tr>
                    <td><code>$spacing-xxxl</code></td>
                    <td><code>3rem</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mb-md">
    <div class="card-body">
        <p>Shadows are defined as <code>@function</code>, <code>@mixin </code>& <code>$variable</code></p>
        <p class="m-0">Using <code>@mixin</code></p>
        <div class="copy-code">
            <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
                title="Copy to clipboard">Copy</button>
        </div><code class="code" data-code=".custom-card {
  @ include shadow-4dp(); }"></code>
        <p class="m-0">Using <code>$variable</code></p>
        <div class="copy-code">
            <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
                title="Copy to clipboard">Copy</button>
        </div><code class="code" data-code=".custom-card {
  box-shadow: $shadow-4dp;
}"> </code>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Shadow Mixins</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>shadow-1dp()</code></td>
                    <td>
                        <div class="shadow-1dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-2dp()</code></td>
                    <td>
                        <div class="shadow-2dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-3dp()</code></td>
                    <td>
                        <div class="shadow-3dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-4dp()</code></td>
                    <td>
                        <div class="shadow-4dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-6dp()</code></td>
                    <td>
                        <div class="shadow-6dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-8dp()</code></td>
                    <td>
                        <div class="shadow-8dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-16dp()</code></td>
                    <td>
                        <div class="shadow-16dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-24dp()</code></td>
                    <td>
                        <div class="shadow-24dp rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-button()</code></td>
                    <td>
                        <div class="shadow-button rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-button-hover()</code></td>
                    <td>
                        <div class="shadow-button-hover rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="m-0">Using colored shadow <code>@mixin</code></p>
        <div class="copy-code">
            <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
                title="Copy to clipboard">Copy</button>
        </div><code class="code" data-code=".custom-card {
  @ include shadow-1dp-color($primary);
}"> </code>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Colored shadows</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>shadow-1dp-color($primary)</code></td>
                    <td>
                        <div class="shadow-1dp-primary rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-2dp-color($success)</code></td>
                    <td>
                        <div class="shadow-2dp-success rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-3dp-color($warning)</code></td>
                    <td>
                        <div class="shadow-3dp-warning rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-4dp-color($danger)</code></td>
                    <td>
                        <div class="shadow-4dp-danger rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-6dp-color($info)</code></td>
                    <td>
                        <div class="shadow-6dp-info rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-8dp-color($primary)</code></td>
                    <td>
                        <div class="shadow-8dp-primary rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-16dp-color($success)</code></td>
                    <td>
                        <div class="shadow-16dp-success rounded" style="height: 20px; width: 60px"></div>
                    </td>
                </tr>
                <tr>
                    <td><code>shadow-24dp-color($info)</code></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Z Index</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>$z-index-deepdive</code></td>
                    <td><code>-99999</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-dive</code></td>
                    <td><code>-1</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-default</code></td>
                    <td><code>1</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-anchor</code></td>
                    <td><code>3</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-docked</code></td>
                    <td><code>4</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-sticky</code></td>
                    <td><code>100</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-popup</code></td>
                    <td><code>5000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-dialog</code></td>
                    <td><code>6000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-dropdown</code></td>
                    <td><code>7000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-overlay</code></td>
                    <td><code>8000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-reminder</code></td>
                    <td><code>8500</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-modal</code></td>
                    <td><code>9000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-spinner</code></td>
                    <td><code>9050</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-toast</code></td>
                    <td><code>10000</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-sidebar</code></td>
                    <td><code>99999</code></td>
                </tr>
                <tr>
                    <td><code>$z-index-aside</code></td>
                    <td><code>999999</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection