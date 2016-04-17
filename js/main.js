$(document)
    .ready(function()
        {
            $(".button-collapse").sideNav();
            $('.parallax').parallax();
            $('input#input_text, textarea#textarea1').characterCounter();
            $('select').material_select();
        }
    ) 