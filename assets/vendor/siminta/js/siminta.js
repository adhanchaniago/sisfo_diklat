
$(function () {

    $('#side-menu').metisMenu();

    Pace.on('hide', function () {
        console.log('done');
    });
    paceOptions = {
        elements: true
    };

});

$(function() {
    $(window).bind("load resize", function() {
        console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})
