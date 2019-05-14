const mix = require('laravel-mix');

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





mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');




   mix.styles([
    'resources/assets/css/libs/bootstrap.css',
    //'resources/assets/css/libs/icons.css',
    'resources/assets/css/libs/invoice.css',
    'resources/assets/css/libs/style4963.css',
    'resources/assets/css/libs/revolutionslider.css',
    'resources/assets/css/libs/main.css',
    'resources/assets/css/libs/font-awesome.css',
    //'resources/assets/css/libs/style.css',
    ], 'public/css/libs.css');


//    mix.js([
//     'resources/assets/js/libs/jquery-2.2.0.min.js',
//     'resources/assets/js/libs/jpanelmenu.min.js',
//     'resources/assets/js/libs/chosen.min.js',
//     'resources/assets/js/libs/slick.min.js',
//     'resources/assets/js/libs/rangeslider.min.js',
//     'resources/assets/js/libs/magnific-popup.min.js',
//     'resources/assets/js/libs/waypoints.min.js',
//     'resources/assets/js/libs/counterup.min.js',
//     'resources/assets/js/libs/jquery-ui.min.js',
//     'resources/assets/js/libs/tooltips.min.js',
//     'resources/assets/js/libs/custom.js',
//     ], 'public/js/libs.js');

