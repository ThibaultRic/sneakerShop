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

    $(function(){
        $(".sizeTable li").click(function () {
             $(this).addClass("selected").siblings().removeClass("selected");
             $(this).addClass("teal").siblings().removeClass("teal");
        });
    })

