$(document)
    .ready(function()
    {
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('input#input_text, textarea#textarea1').characterCounter();
        $('select').material_select();
        $('.slider').slider({full_width: false});
        $('.materialboxed').materialbox();

        function submitForm(){
            var first_name = document.getElementById('first_name').value;
            var last_name = document.getElementById('last_name').value;
            var email = document.getElementById('email').value;
            var reasons = document.getElementById('reasons').value;
            var textarea1 = document.getElementById('textarea1').value;
            var optinNewsletter = document.getElementById('optinNewsletter').value;
            var dataString = 'name='+ first_name + '&last_name='+ last_name + '&email='+ email + '&email='+ email + '&reasons='+ reasons + '&textarea1='+ textarea1 + '&optinNewsletter='+ optinNewsletter;
        }
    });


