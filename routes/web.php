<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// set entry layout via session for demo purpose 
// Route::view('/', 'starter')->name('starter');
Route::get('compact-sidebar/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'compact-sidebar']);
    return redirect()->route($route_name);
})->name('compact');

Route::get('compact-sidebar-rtl/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'compact-sidebar-rtl']);
    return redirect()->route($route_name);
})->name('compact-rtl');

Route::get('large-sidebar/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'large-sidebar']);
    return redirect()->route($route_name);
})->name('large-sidebar');

Route::get('large-sidebar-rtl/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'large-sidebar-rtl']);
    return redirect()->route($route_name);
})->name('large-sidebar-rtl');

Route::get('horizontal/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'horizontal']);
    return redirect()->route($route_name);
})->name('horizontal');

Route::get('horizontal-rtl/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'horizontal-rtl']);
    return redirect()->route($route_name);
})->name('horizontal-rtl');

Route::get('saas/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'saas']);
    return redirect()->route($route_name);
})->name('saas');

Route::get('saas-rtl/dashboard/{route_name}', function ($route_name) {
    // set layout sesion(key)
    session(['layout' => 'saas-rtl']);
    return redirect()->route($route_name);
})->name('saas-rtl');


// Route::get('/', [AppController::class, 'blank']);
Route::get('/', [AppController::class, 'signinV2']);

/**
 * Dasboard Routes
 */
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/analytic', [AppController::class, 'analytic'])->name('analytic');
    Route::get('/sales', [AppController::class, 'sales'])->name('sales');
    Route::get('/job-management', [AppController::class, 'jobManagement'])->name('job-management');
    Route::get('/crypto-currency', [AppController::class, 'cryptoCurrency'])->name('crypto-currency');
    Route::get('/learning-management', [AppController::class, 'learningManagement'])->name('learning-management');
    Route::get('/subscription', [AppController::class, 'subscription'])->name('subscription');
});

/**
 * Apps Routes
 */
Route::group(['prefix' => 'apps'], function () {
    Route::get('/file-manager', [AppController::class, 'fileManager'])->name('file-manager');
    Route::get('/inbox', [AppController::class, 'inbox'])->name('inbox');
    Route::get('/scrumboard', [AppController::class, 'scrumboard'])->name('scrumboard');
    Route::get('/chat', [AppController::class, 'chat'])->name('chat');
    Route::get('/note', [AppController::class, 'note'])->name('note');
});


/**
 * Pages
 */
Route::group(['prefix' => 'pages'], function () {
    /**
     * Faq
     */
    Route::group(['prefix' => 'faq'], function () {

        Route::get('/faq.v1', [AppController::class, 'faqv1'])->name('faq-v1');
        Route::get('/faq.v2', [AppController::class, 'faqv2'])->name('faq-v2');
        Route::get('/faq.v3', [AppController::class, 'faqv3'])->name('faq-v3');
    });

    /**
     * list
     */
    Route::group(['prefix' => 'list'], function () {

        Route::get('/column-list', [AppController::class, 'columnList'])->name('column-list');
        Route::get('/column-list-two', [AppController::class, 'columnListTwo'])->name('column-list-two');
        Route::get('/column-list-three', [AppController::class, 'columnListThree'])->name('column-list-three');
        Route::get('/column-list-row', [AppController::class, 'columnListRow'])->name('column-list-row');
    });

    /**
     * pricng
     */
    Route::group(['prefix' => 'pricing'], function () {

        Route::get('/pricing.v1', [AppController::class, 'pricingV1'])->name('pricing-v1');
        Route::get('/pricing.v2', [AppController::class, 'pricingV2'])->name('pricing-v2');
        Route::get('/pricing.v3', [AppController::class, 'pricingV3'])->name('pricing-v3');
    });

    /**
     * Invoice
     */
    Route::group(['prefix' => 'invoice'], function () {

        Route::get('/invoice.v1', [AppController::class, 'invoiceV1'])->name('invoice-v1');
        Route::get('/invoice.v2', [AppController::class, 'invoiceV2'])->name('invoice-v2');
        Route::get('/invoice.edit', [AppController::class, 'invoiceEdit'])->name('invoice-edit');
    });
    /**
     * profile
     */
    Route::group(['prefix' => 'profile'], function () {

        Route::get('/profile.v1', [AppController::class, 'profileV1'])->name('profile-v1');
        Route::get('/profile.v2', [AppController::class, 'profileV2'])->name('profile-v2');
    });
    /**
     * sessions
     */
    Route::group(['prefix' => 'session'], function () {

        Route::get('/signin.v1', [AppController::class, 'signinV1'])->name('signin-v1');
        Route::get('/signin.v2', [AppController::class, 'signinV2'])->name('signin-v2');
        Route::get('/signin.v3', [AppController::class, 'signinV3'])->name('signin-v3');
        Route::get('/signin.v4', [AppController::class, 'signinV4'])->name('signin-v4');
        Route::get('/signup.v1', [AppController::class, 'signupV1'])->name('signup-v1');
        Route::get('/signup.v2', [AppController::class, 'signupV2'])->name('signup-v2');
        Route::get('/signup.v3', [AppController::class, 'signupV3'])->name('signup-v3');
        Route::get('/signup.v4', [AppController::class, 'signupV4'])->name('signup-v4');
        Route::get('/error-404', [AppController::class, 'error404'])->name('error-404');
        Route::get('/error-505', [AppController::class, 'error505'])->name('error-505');
        Route::get('/forgot-password', [AppController::class, 'forgotPassword'])->name('forgot-password');
        Route::get('/lock-screen', [AppController::class, 'lockScreen'])->name('lock-screen');
    });




    /**
     * DragAndDrop
     */

    Route::get('/drag&drop', [AppController::class, 'dragAndDrop'])->name('drag-and-drop');
    /**
     * photo grid
     */

    Route::get('/photo-grid', [AppController::class, 'photoGrid'])->name('photo-grid');
});

/**
 * blocks
 */
Route::group(['prefix' => 'blocks'], function () {

    Route::get('/sidebar', [AppController::class, 'sidebarBlock'])->name('sidebar-block');
    Route::get('/credit-card', [AppController::class, 'creditCardBlock'])->name('credit-card-block');
});

/**
 * components
 */
Route::group(['prefix' => 'components'], function () {

    Route::get('/accordion', [AppController::class, 'accordion'])->name('accordion');
    Route::get('/alert', [AppController::class, 'alert'])->name('alert');
    Route::get('/avatar', [AppController::class, 'avatar'])->name('avatar');
    Route::get('/badge', [AppController::class, 'badge'])->name('badge');
    Route::get('/breadcrumb', [AppController::class, 'breadcrumb'])->name('breadcrumb');
    Route::get('/buttons', [AppController::class, 'buttons'])->name('buttons');
    Route::get('/carousel', [AppController::class, 'carousel'])->name('carousel');
    Route::get('/dropdown', [AppController::class, 'dropdown'])->name('dropdown');
    Route::get('/forms', [AppController::class, 'forms'])->name('forms');
    Route::get('/forms-layout', [AppController::class, 'formsLayout'])->name('forms-layout');
    Route::get('/list', [AppController::class, 'list'])->name('list');
    Route::get('/pagination', [AppController::class, 'pagination'])->name('pagination');
    Route::get('/popovers', [AppController::class, 'popovers'])->name('popovers');
    Route::get('/progressbar', [AppController::class, 'progressbar'])->name('progressbar');
    Route::get('/snackbar', [AppController::class, 'snackbar'])->name('snackbar');
    Route::get('/tab', [AppController::class, 'tab'])->name('tab');
    Route::get('/tooltip', [AppController::class, 'tooltip'])->name('tooltip');
    Route::get('/tour', [AppController::class, 'tour'])->name('tour');
    Route::get('/sweet-alert', [AppController::class, 'sweetAlert'])->name('sweet-alert');
});

/**
 * form widgets
 * form widgets
 */
Route::group(['prefix' => 'form-widgets'], function () {

    Route::get('/editor', [AppController::class, 'editor'])->name('editor');
    Route::get('/filepond', [AppController::class, 'filepond'])->name('filepond');
    Route::get('/bootstrap-maxlength', [AppController::class, 'bootstrapMaxlength'])->name('bootstrap-maxlength');
    Route::get('/bootstrap-select', [AppController::class, 'bootstrapSelect'])->name('bootstrap-select');
    Route::get('/bootstrap-tagify', [AppController::class, 'bootstrapTagify'])->name('bootstrap-tagify');
    Route::get('/clipboard', [AppController::class, 'clipboard'])->name('clipboard');
    Route::get('/datepicker', [AppController::class, 'datepicker'])->name('datepicker');
    Route::get('/dropzone', [AppController::class, 'dropzone'])->name('dropzone');
    Route::get('/form-repeater', [AppController::class, 'formRepeater'])->name('form-repeater');
    Route::get('/inputmask', [AppController::class, 'inputmask'])->name('inputmask');
    Route::get('/nouislider', [AppController::class, 'nouislider'])->name('nouislider');
    Route::get('/select2', [AppController::class, 'select2'])->name('select2');
    Route::get('/timepicker', [AppController::class, 'timepicker'])->name('timepicker');
    Route::get('/touchspin', [AppController::class, 'touchspin'])->name('touchspin');
    Route::get('/typehead', [AppController::class, 'typehead'])->name('typehead');
    Route::get('/uppy', [AppController::class, 'uppy'])->name('uppy');
    Route::get('/validation', [AppController::class, 'validation'])->name('validation');
    Route::get('/imagecrop', [AppController::class, 'imagecrop'])->name('imagecrop');
    Route::group(['prefix' => 'wizard'], function () {
        Route::get('/wizard1', [AppController::class, 'wizard1'])->name('wizard1');
        Route::get('/wizard2', [AppController::class, 'wizard2'])->name('wizard2');
    });
});


/**
  system utilities
 */
Route::group(['prefix' => 'system-utilities'], function () {

    Route::get('/sass-variable', [AppController::class, 'sassVariable'])->name('sass-variable');
    Route::get('/background', [AppController::class, 'background'])->name('background');
    Route::get('/colors', [AppController::class, 'colors'])->name('colors');
    Route::get('/shadow', [AppController::class, 'shadow'])->name('shadow');
    Route::get('/spacing', [AppController::class, 'spacing'])->name('spacing');
    Route::get('/typography', [AppController::class, 'typography'])->name('typography');
});

/**
  Widgets
 */
Route::group(['prefix' => 'widgets'], function () {


    Route::get('/charts', [AppController::class, 'charts'])->name('charts');
    Route::get('/general', [AppController::class, 'general'])->name('general');
    Route::get('/table', [AppController::class, 'table'])->name('table');
});
