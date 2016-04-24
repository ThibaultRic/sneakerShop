$(document)
    .ready(function()
    {
        $(".owl-carousel").owlCarousel({
            items:1,
            animateOut:'fadeOut',
            URLhashListener:true,
            autoplayHoverPause:true,
            startPosition: 'URLHash',
            autoHeight:true,
        });
    });


