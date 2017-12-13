let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

// image
mix.copyDirectory('resources/assets/image/*','public/image/');


// font-awesome
mix.copyDirectory('node_modules/font-awesome/fonts/*', 'public/fonts/vendor/font-awesome/')
    .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css');

// owl.carousel
mix.copy('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/css')
    .copy('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js');
