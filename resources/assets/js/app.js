window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$(function () {
    // load the laravel csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('button.delBot').on('click', function(){
        var itemId = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
        }).then(function(isConfirm) {
            if (isConfirm === true) {
                $('#submit'+itemId).submit();
            };
        });
    });
});