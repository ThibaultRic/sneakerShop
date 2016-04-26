$(document)
    .ready(function()
    {
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('input#input_text, textarea#textarea1').characterCounter();
        $('select').material_select();
        $('.slider').slider({full_width: false});
        $('.materialboxed').materialbox();
        $('.collapsible').collapsible({accordion:true});
    });

    // fonction qui vient faire fonctionner le formulaire de contact en homepage
$("#submit").click(function(){
            var first_name = document.getElementById('first_name').value;
            var last_name = document.getElementById('last_name').value;
            var email = document.getElementById('email').value;
            var reasons = document.getElementById('reasons').value;
            var textarea1 = document.getElementById('textarea1').value;

            var ele = document.getElementById('optinNewsletter');
            if(ele.checked){
                var optinNewsletter = "1";
            }
            else{
                var optinNewsletter = "0";
            }

            dataInfo = [first_name,last_name,email,reasons,textarea1, optinNewsletter];

            $.ajax({
                type:'post',
                url:"moduls/_getForm.php",
                data:{data:dataInfo},
                success: function(data){
                    $('#successMsg').html(data);
                    $('#submit').addClass('disabled').html("<i class='material-icons left'>done</i>C'est parti !");
                }
            });
});

