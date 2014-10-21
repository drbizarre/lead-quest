$(document).ready(function() {
		       
"use strict";
		       
    $('#submit_btn').click(function(){ 
        //get input field values
        var user_name       = $('#name').val(); 
        var user_email      = $('#email').val();
        var user_message    = $('#message').val();
        var emailcontact    = $('#emailcontact').val();
        var output;

        var notice     = $("#notice");
        var $req_fields    = "Please fill in all the fields.";

        //simple validation at client's end
        var proceed = true;
        
        if ( notice.is(":visible") ) notice.hide();

        if ( "" == user_name || "" == user_email || "" == user_message ){

               notice.removeClass().html($req_fields).addClass("alert alert-warning alert-dismissable").fadeIn(400);
               proceed = false;

          }
        
        if(user_name==""){ 
            $('#name').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('#email').css('border-color','red'); 
            proceed = false;
        }
        
        if(user_message=="") {  
            $('#message').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            var post_data = {'name':user_name, 'email':user_email, 'userMessage':user_message,'emailcontact':emailcontact};
            
            //Ajax post data to server
            $.post('http://localhost/lead-quest/mailer/sender.php', post_data, function(response){  
                notice.removeClass().html("Mensaje Enviado").addClass("alert alert-warning alert-dismissable").fadeIn(400);
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = response.text;
		notice.removeClass().html("Mensaje Enviado").addClass("alert alert-warning alert-dismissable").fadeIn(400);
                }else{
                
                    output = response.text;
                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
		notice.removeClass().html(output).addClass("alert alert-success alert-dismissable").fadeIn(400);
                }
                
            }, 'json');
            notice.removeClass().html("Mensaje Enviado").addClass("alert alert-success alert-dismissable").fadeIn(400);
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
    });
        $('#name').val(""); 
        $('#email').val("");
        $('#message').val("");
        $('#notice').hide("slow");

   
});
