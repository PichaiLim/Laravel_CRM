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
    .sass('resources/assets/sass/app.scss', 'public/css')
    .browserSync('http://localhost:8000');

// image
// mix.copy('resources/assets/image/*', 'public/image/');


// font-awesome
mix.copy('node_modules/font-awesome/fonts/*', 'public/fonts/')
    .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css');

// owl.carousel
mix.copy('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/css')
    .copy('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js');


// Admin
var path_admin_template = 'node_modules/gentelella';
mix.copy([
    path_admin_template+'/vendors/nprogress/nprogress.css',
    path_admin_template+'/vendors/google-code-prettify/bin/prettify.min.css',
    path_admin_template+'/build/css/custom.min.css',
    path_admin_template+'/vendors/iCheck/skins/flat/green.css',
    path_admin_template+'/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
    path_admin_template+'/vendors/jqvmap/dist/jqvmap.min.css',
    path_admin_template+'/vendors/bootstrap-daterangepicker/daterangepicker.css'
], 'public/css')
    .copy([
        path_admin_template+'/vendors/bootstrap/dist/js/bootstrap.min.js',
        path_admin_template+'/vendors/fastclick/lib/fastclick.js',
        path_admin_template+'/vendors/nprogress/nprogress.js',
        path_admin_template+'/vendors/Chart.js/dist/Chart.min.js',
        path_admin_template+'/vendors/gauge.js/dist/gauge.min.js',
        path_admin_template+'/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        path_admin_template+'/vendors/iCheck/icheck.min.js',
        path_admin_template+'/vendors/skycons/skycons.js',
        path_admin_template+'/vendors/Flot/jquery.flot.js',
        path_admin_template+'/vendors/Flot/jquery.flot.pie.js',
        path_admin_template+'/vendors/Flot/jquery.flot.time.js',
        path_admin_template+'/vendors/Flot/jquery.flot.stack.js',
        path_admin_template+'/vendors/Flot/jquery.flot.resize.js',
        path_admin_template+'/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        path_admin_template+'/vendors/flot-spline/js/jquery.flot.spline.min.js',
        path_admin_template+'/vendors/flot.curvedlines/curvedLines.js',
        path_admin_template+'/vendors/DateJS/build/date.js',
        path_admin_template+'/vendors/jqvmap/dist/jquery.vmap.js',
        path_admin_template+'/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        path_admin_template+'/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        path_admin_template+'/vendors/moment/min/moment.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        path_admin_template+'/vendors/bootstrap-daterangepicker/daterangepicker.js',
        path_admin_template+'/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js',
        path_admin_template+'/vendors/jquery.hotkeys/jquery.hotkeys.js',
        path_admin_template+'/vendors/google-code-prettify/src/prettify.js',
        path_admin_template+'/build/js/custom.min.js'
    ], 'public/js');