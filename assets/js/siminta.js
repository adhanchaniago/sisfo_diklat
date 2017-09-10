$(function () {

    $('#side-menu').metisMenu();

    function load(time) {
        var x = new XMLHttpRequest()
        x.open('GET', "" + time, true);
        x.send();
    };

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
