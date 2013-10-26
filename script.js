var catTriggered = false;

$(document).ready(function() {
    $img = $('<img />').attr('src', 'cat_angry.jpg');

    $('#nav a').click(function() {
        var hash = $(this).attr('href').split('#')[1];

        $('.page').hide();
        $('#page' + hash).show();
        $('#nav a').removeClass('high');
        $('#nav a[href=#' + hash + ']').addClass('high');

        _gaq.push(['_trackPageview', '/' + hash]);
    });

    initial();

    $(".fancybox").fancybox();

    $('#cat').hover(triggerCat.bind(null, true), triggerCat.bind(null, false));

    setTimeout(function() {
        if(catTriggered) return;

        triggerCat(true);

        setTimeout(triggerCat.bind(null, false), 500);
    }, 300000 + parseInt(30000 * Math.random(), 10));
});

function initial() {
    var hash = window.location.hash.split('#')[1];

    if(hash) {
        $('#page' + hash).show();
        $('#nav a[href=#' + hash + ']').addClass('high');
    } else {
        $('#pageband').show();
        $('#nav a[href=#band]').addClass('high');
    }
}

function triggerCat(frightened) {
    catTriggered = true;

    if(frightened) {
        $('#cat').css('background-image', 'url(cat_angry.jpg)');
    } else {
        $('#cat').css('background-image', 'url(cat.jpg)');
    }
}