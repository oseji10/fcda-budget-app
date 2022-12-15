const mix = require("laravel-mix");
const glob = require("glob");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//  Default
mix.js("resources/js/app.js", "public/js");

// Egret media
mix.copyDirectory("resources/egret/images", "public/images");

// Egret fonts
mix.copyDirectory("resources/egret/fonts", "public/fonts");

// Egret js data copy
mix.copyDirectory("resources/egret/js/data", "public/js/data");

// egret css pages (single page use)
(glob.sync("resources/egret/scss/pages/**/!(_)*.scss") || []).forEach(
    (file) => {
        file = file.replace(/[\\\/]+/g, "/");
        mix.sass(
            file,
            file
                .replace("resources/egret/scss", "public/css")
                .replace(/\.scss$/, ".css")
        );
    }
);

// egret  main css
mix.sass(
    "resources/egret/scss/egret-design-system.scss",
    "public/css/main.bundle.css"
).sass(
    "resources/egret/scss/egret-design-system-dark.scss",
    "public/css/main-dark.bundle.css"
);

// egret vendor js
mix.scripts(
    [
        "node_modules/jquery/dist/jquery.min.js",
        "node_modules/popper.js/dist/umd/popper.js",
        "node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.js",
        "node_modules/metismenu/dist/metisMenu.js",
        "node_modules/perfect-scrollbar/dist/perfect-scrollbar.js",
        "node_modules/moment/min/moment.min.js",
        "node_modules/daterangepicker/daterangepicker.js",
        "node_modules/@tarekraafat/autocomplete.js/dist/js/autoComplete.js",
        "node_modules/apexcharts/dist/apexcharts.js",
        "node_modules/chart.js/dist/Chart.js",
        "node_modules/clipboard/dist/clipboard.js",
        "node_modules/dragula/dist/dragula.js",
    ],
    "public/js/vendors.bundle.min.js"
);

// egret vendor css
mix.styles(
    [
        "node_modules/metismenu/dist/metisMenu.css",
        "node_modules/perfect-scrollbar/css/perfect-scrollbar.css",
        "node_modules/daterangepicker/daterangepicker.css",
        "node_modules/chart.js/dist/Chart.css",
        "node_modules/dragula/dist/dragula.css",
    ],
    "public/css/vendors.bundle.min.css"
);

// copy vendors from node_modules
(
    [
        "node_modules/gijgo",
        "node_modules/echarts/dist",
        "node_modules/quill/dist",
        "node_modules/hopscotch/dist",
        "node_modules/sweetalert2/dist",
        "node_modules/snackbarjs/dist",
        "node_modules/filepond/dist",
        "node_modules/dropzone/dist",
        "node_modules/bootstrap-maxlength/dist",
        "node_modules/bootstrap-select/dist",
        "node_modules/@yaireo/tagify/dist",
        "node_modules/jquery.repeater",
        "node_modules/inputmask/dist",
        "node_modules/nouislider",
        "node_modules/wnumb",
        "node_modules/select2/dist",
        "node_modules/bootstrap-timepicker",
        "node_modules/bootstrap-touchspin/dist",
        "node_modules/typeahead.js/dist",
        "node_modules/bloodhound-js/dist",
        "node_modules/feather-icons/dist",
        "node_modules/uppy/dist",
        "node_modules/jqBootstrapValidation/dist",
        "node_modules/cropperjs/dist",

        "node_modules/datatables.net",
        "node_modules/datatables.net-dt",
        "node_modules/datatables.net-bs4",
        "node_modules/datatables.net-responsive-bs4",
        "node_modules/datatables.net-buttons",
        "node_modules/datatables.net-buttons-bs4",
    ] || []
).forEach((file) => {
    mix.copyDirectory(
        file,
        `public/vendors/${file.replace("node_modules/", "")}/`
    );
});

// egret js pages (single page use) ** error for tui.calendar.js **
(glob.sync("resources/egret/js/pages/**/*.js") || []).forEach((file) => {
    mix.js(file, `public/${file.replace("resources/egret/", "")}`);
});

// egret layouts js  (single page use)
(glob.sync("resources/egret/js/layouts/**/*.js") || []).forEach((file) => {
    file = file.replace(/[\\\/]+/g, "/");
    mix.js(
        ["resources/egret/js/components/init.js", file],
        file
            .replace("resources/egret/js/layouts", "public/js")
            .replace(/\.js$/, "-main-bundle.js")
    );
});

// main js  bundle
