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
        $(".sizeTable a").click(function () {
             $(this).addClass("selected").siblings().removeClass("selected");
             $(this).removeClass('grey lighten-4').addClass("teal white-text").siblings().removeClass("teal white-text").addClass('grey lighten-4');
            $('.shopBtn a').html('<i class="shoppingCart left material-icons">shopping_cart</i>Add to cart</a>');

        });
    })

    $(function() {
        $(".shopBtn a").hover(function(){
            if(!$(".sizeTable a").hasClass("selected"))
            {
                $('.shopBtn a').html('<i class="material-icons left">arrow_upward</i> Choose size first');
                $('.shopBtn').addClass('nothingToCart');
            }
        })
    })

    $(function() {
        $(".shopBtn a").click(function(){
            if(!$(".sizeTable a").hasClass("selected"))
            {
                $('.shopBtn a').html('<i class="material-icons left">arrow_upward</i> Choose size first');
                $('.shopBtn').addClass('nothingToCart');
            }
        })
    })


