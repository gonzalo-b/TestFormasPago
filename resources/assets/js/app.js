window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$(function () {
    // load the laravel csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});