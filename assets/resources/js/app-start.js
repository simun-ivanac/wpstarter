(function($) {

    // if link goes nowhere, stop execution
    $('body').on('click', 'a', function(event) {
        var href = $(this).attr('href');

        if ( href == '#' || href == '' || !href ) {
            event.preventDefault();
        }
    });
