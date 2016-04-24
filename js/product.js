$(document)
    .ready(function()
    {
        // init du slider
        $(".owl-carousel").owlCarousel({
            items:1,
            animateOut:'fadeOut',
            URLhashListener:true,
            autoplayHoverPause:true,
            startPosition: 'URLHash',
            autoHeight:true,
        });

        // interaction au clic sur le tableau des tailles
        $(function clickSize(){
            $(".sizeTable a").click(function () {
                if(!$(this).hasClass('disabled')){
                    $(this).addClass("selected").siblings().removeClass("selected");
                    // $(this).removeClass('grey lighten-4').addClass("teal white-text").siblings().removeClass("teal white-text");
                    $('.shopBtn a').html('<i class="shoppingCart left material-icons">shopping_cart</i>Add to cart</a>');
            }

            });
        });

        // Disable size choice by quantity
        $('a[data-qty]').each(function(){
            if ($(this).attr('data-qty') == 0){
                $(this).addClass('disableText disabled').removeClass('available');
            }
            else{
                $(this).addClass('available')
            }
        });

        // Interaction au hover sur bouton Add to cart Desktop
        $(function() {
            $(".shopBtn a").hover(function(){
                if(!$(".sizeTable a").hasClass("selected"))
                {
                    $('.shopBtn a').html('<i class="material-icons left">arrow_upward</i> Choose size first');
                    $('.shopBtn').addClass('nothingToCart');
                }
            })
        });

        // Interaction au click sur bouton Add to cart Mobile
        $(function() {
            $(".shopBtn a").click(function(){
                if(!$(".sizeTable a").hasClass("selected"))
                {
                    $('.shopBtn a').html('<i class="material-icons left">arrow_upward</i> Choose size first');
                    $('.shopBtn').addClass('nothingToCart');
                }
            });
        });

    });

