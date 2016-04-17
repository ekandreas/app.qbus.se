var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.styles([
        './vendor/almasaeed2010/adminlte/bootstrap/css/bootstrap.min.css',
        './vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css',
        './vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css',
        './vendor/almasaeed2010/adminlte/plugins/iCheck/flat/blue.css',
        './vendor/almasaeed2010/adminlte/plugins/morris/morris.css',
        './vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        './vendor/almasaeed2010/adminlte/plugins/datepicker/datepicker3.css',
        './vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker-bs3.css',
        './vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        './vendor/datatables/media/css/jquery.dataTables.min.css',
    ], 'public/assets/css');

    mix.copy([
      './resources/assets/images'
    ], 'public/assets/images');

    mix.copy([
      './vendor/almasaeed2010/adminlte/bootstrap/fonts',
    ], 'public/assets/fonts');

    mix.copy([
      './resources/assets/pages'
    ], 'public/assets/pages');

    mix.scripts([
        './vendor/almasaeed2010/adminlte/plugins/jQuery/jQuery-2.2.0.min.js',
        './vendor/almasaeed2010/adminlte/bootstrap/js/bootstrap.min.js',
        './vendor/almasaeed2010/adminlte/plugins/morris/morris.min.js',
        './vendor/almasaeed2010/adminlte/plugins/sparkline/jquery.sparkline.min.js',
        './vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        './vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        './vendor/almasaeed2010/adminlte/plugins/knob/jquery.knob.js',
        './vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.js',
        './vendor/almasaeed2010/adminlte/plugins/datepicker/bootstrap-datepicker.js',
        './vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        './vendor/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
        './vendor/almasaeed2010/adminlte/plugins/fastclick/fastclick.js',
        './vendor/almasaeed2010/adminlte/dist/js/app.min.js',
        './vendor/almasaeed2010/adminlte/dist/js/demo.js',
        './vendor/datatables/media/js/jquery.dataTables.js',
    ], 'public/assets/js');

});
