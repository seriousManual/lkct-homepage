$(document).ready(function() {
    $img = $('<img />').attr('src', 'cat_angry.jpg');

    $('#cat').hover(function() {
        $(this).css('background-image', 'url(cat_angry.jpg)');
    }, function() {
        $(this).css('background-image', 'url(cat.jpg)');
    });

    $('#nav a').click(function() {
        var hash = $(this).attr('href');

        $('.page').hide();
        $(hash).show();
    });

});

//window.location.hash