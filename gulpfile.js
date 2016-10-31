var elixir = require('laravel-elixir');

var bowerDir = './bower_components/';

elixir(function(mix) {

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');

    mix.browserify('app.js');

    mix.styles([
        'font-awesome/css/font-awesome.min.css',
        'sweetalert2/dist/sweetalert2.min.css',
        'select2-bootstrap-theme/dist/select2-bootstrap.css',
        'sb-admin-2/dist/css/sb-admin-2.css',
    ], 'public/css/packages.css', bowerDir);

    mix.scripts([
        'es6-promise/promise.min.js',
        'sweetalert2/dist/sweetalert2.min.js',
        'es6-promise-polyfill/promise.min.js',
        'sb-admin-2/metisMenu/metisMenu.min.js',
        'select2/dist/js/select2.min.js',
        'sb-admin-2/dist/js/sb-admin-2.min.js',
        'sb-admin-2/vendor/metisMenu/metisMenu.min.js',
    ], 'public/js/all.js', bowerDir);

    mix.copy('bower-components/font-awesome/fonts', 'public/fonts');

});

