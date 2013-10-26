var catTriggered = false;

$(window).hashchange(hashChange);

$(document).ready(function() {
    $img = $('<img />').attr('src', 'cat_angry.jpg');

    hashChange();

    $(".fancybox").fancybox();

    $('#cat').hover(function() {
        _gaq.push(['_trackEvent', 'cat', 'mouseOver', null, null, true]);

        triggerCat(true);
    }, triggerCat.bind(null, false));

    setTimeout(function() {
        if(catTriggered) return;

        _gaq.push(['_trackEvent', 'cat', 'timeout', null, null, true]);
        triggerCat(true);

        setTimeout(triggerCat.bind(null, false), 500);
    }, 300000 + parseInt(30000 * Math.random(), 10));
});

function triggerCat(frightened) {
    catTriggered = true;

    if(frightened) {
        $('#cat').css('background-image', 'url(cat_angry.jpg)');
    } else {
        $('#cat').css('background-image', 'url(cat.jpg)');
    }
}

function hashChange(hash111) {
    var hash = getHash();

    if(!hash) {
        hash = 'band';
    }

    $('.page').hide();
    $('#page' + hash).show();
    $('#nav a').removeClass('high');
    $('#nav a[href=#' + hash + ']').addClass('high');

    _gaq.push(['_trackPageview', '/' + hash]);
}

function getHash() {
    //some firefox quirks handling here
    return location.href.replace( /^[^#]*#?(.*)$/, '$1' );
}