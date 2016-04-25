$(document)
    .ready(function()
    {
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('input#input_text, textarea#textarea1').characterCounter();
        $('select').material_select();
        $('.slider').slider({full_width: false});
        $('.materialboxed').materialbox();
    });
function submitForm(){
            dataInfo = [];
            dataInfo['first_name'] = document.getElementById('first_name').value;
             dataInfo['last_name']= document.getElementById('last_name').value;
             dataInfo['email'] = document.getElementById('email').value;
             dataInfo['reasons'] = document.getElementById('reasons').value;
             dataInfo['textarea1'] = document.getElementById('textarea1').value;

            var ele = document.getElementById('optinNewsletter');
            if(ele.checked){
                dataInfo['optinNewsletter'] = 1;
            }
            else{
                dataInfo['optinNewsletter'] = 0;
            }

            // dataInfo['optinNewsletter'] = document.getElementById('optinNewsletter').value;
            
            $.ajax({
                type:"post",
                url:"moduls/_getForm.php",
                data:{dataInfo:dataInfo},
                cache:false,
                success: function(html){
                    console.log(html);
                    console.log(dataInfo);
                    $('#successMsg').html(html);
                }

            });
            return false;
        }

