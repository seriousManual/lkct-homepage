$(document).ready(function() {
    $img = $('<img />').attr('src', 'cat_angry.jpg');

    $('#cat').hover(function() {
        $(this).css('background-image', 'url(cat_angry.jpg)');
    }, function() {
        $(this).css('background-image', 'url(cat.jpg)');
    });
});