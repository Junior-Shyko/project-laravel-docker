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
mix.scripts([
   'resources/js/pnotify.custom.min.js'   
], 'public/js/plugins.js');


//mix.stylus('node_modules/pnotify/dist/pnotify.css', 'public/css/custom.css');
// mix.scripts([
//    'node_modules/jquery/dist/jquery.min.js',
//    'node_modules/bootstrap/dist/js/bootstrap.min.js',
//    'resources/js/vue.min.js',
//    'resources/js/axios.min.js',
//    //'resources/js/bootstrap.js',
//    'resources/js/app.js',   
// ], 'public/js/app.js');