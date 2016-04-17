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
        './resources/assets/css/select2.min.css',
        './vendor/datatables.net-bs/css/dataTables.bootstrap.min.css',
        './vendor/datatables.net-buttons-bs/css/buttons.bootstrap.css',
        './vendor/datatables.net-select-bs/css/select.bootstrap.css',
        './resources/vendor/Editor-PHP-1.5.5/css/editor.dataTables.css',
        './resources/vendor/Editor-PHP-1.5.5/css/editor.bootstrap.css',
    ], 'public/assets/css');

    mix.copy([
      './resources/assets/images',
      './vendor/datatables/media/images',
      './resources/vendor/Editor-PHP-1.5.5/images'
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

        './vendor/datatables.net/js/jquery.dataTables.js',
        './vendor/datatables.net-bs/js/dataTables.bootstrap.js',

        './vendor/datatables.net-buttons/js/dataTables.buttons.js',
        './vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js',

        './vendor/datatables.net-select/js/dataTables.select.js',

        './resources/vendor/Editor-PHP-1.5.5/js/dataTables.editor.js',
        './resources/vendor/Editor-PHP-1.5.5/js/editor.bootstrap.js',

        './resources/assets/js/jszip.min.js',
        './resources/assets/js/pdfmake.min.js',
        './resources/assets/js/vfs_fonts.js',
        './resources/assets/js/buttons.html5.min.js',
        './resources/assets/js/buttons.print.min.js',
        './resources/assets/js/select2.min.js',
        './resources/assets/js/editor.select2.js',

        './resources/assets/js/tinymce.min.js',
        './resources/assets/js/tinymce.js',

    ], 'public/assets/js');

});
