$(document).ready(function() {
    $img = $('<img />').attr('src', 'cat_angry.jpg');

    $('#cat').hover(function() {
        $(this).css('background-image', 'url(cat_angry.jpg)');
    }, function() {
        $(this).css('background-image', 'url(cat.jpg)');
    });

    $('#nav a').click(function() {
        var hash = $(this).attr('href').split('#')[1];

        $('.page').hide();
        $('#page' + hash).show();
        $('#nav a').removeClass('high');
        $('#nav a[href=#' + hash + ']').addClass('high');
    });

    initial();
});

function initial() {
    var hash = window.location.hash.split('#')[1];

    if(hash) {
        $('#page' + hash).show();
        $('#nav a[href=#' + hash + ']').addClass('high');
    } else {
        $('#band').show();
        $('#nav a[href=#band]').addClass('high');
    }
}

//window.location.hash