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
/**
mix.js([
   'node_modules/jquery/dist/jquery.min.js',
   'resources/js/pnotify.custom.min.js',
   'resources/js/app.js'
], 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
*/
mix.scripts([
   'node_modules/jquery/dist/jquery.min.js',
   'node_modules/bootstrap/dist/js/bootstrap.min.js',
   'resources/js/vue.min.js',
   'resources/js/axios.min.js',
   //'resources/js/bootstrap.js',
   'resources/js/app.js',   
], 'public/js/app.js');