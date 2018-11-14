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

mix.styles([
    'resources/res/css/bootstrap.min.css',
    'resources/res/css/bootstrap-datepicker.css'
],'public/css/all.css');

mix.scripts([
    'resources/res/js/jquery.js',
    'resources/res/js/bootstrap.min.js',
    'resources/res/js/bootstrap-datepicker.js',
],'public/js/all.js');

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
