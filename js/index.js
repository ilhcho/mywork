//Welcome message JS


var auto;
var auto_ree;
$(function(){
moves();
auto = setInterval(function(){moves()},10000);

});

function moves(){   // apply animation to words

$("#firt_line").animate({ opacity: "1",width: "470px" },1,function(){
$("#second_line").animate({ opacity: "1",width: "750px" },1,function(){
$("#windowLogo").animate({ opacity: "1",non: "200px" },10,function(){
auto_ree = setInterval(function(){ree()},3000);
});
});
});

}


// Window Logo Fade Toggle
$(document).ready(function(){
  $("#windowLogo").click(function(){
    $("#id_password").fadeToggle();
    
  });
});


//Login validation
(function ($, W, D) {
            var JQUERY4U = {};

            JQUERY4U.UTIL =
            {
                setupFormValidation: function () {
                    //form validation rules
                    $("#form1").validate({
                        rules: {
							clear:"keypress",
                            firstname: "required",
                            lastname: "required",
                            email: {
							
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                               // minlength: 5
                            },
                            
                        },
                        messages: {
                            email:"<br>Please enter a valid email address.",
                            password: {
                                required: "<br>Please provide a password.",
                                //minlength: "Your password must be at least 5 characters long"
                            },
                            
                           
                        },
                        submitHandler: function (form) {
						
                            form.submit();
                        }
                    });
                }
            }

            //when the dom has loaded setup form validation rules
            $(D).ready(function ($) {
                JQUERY4U.UTIL.setupFormValidation();
            });

        })(jQuery, window, document);


//Register validation
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register_form").validate({
                rules: {
					clear:"keypress",
                    firstName: "required",
                    lastName: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
					
					pass_confirm: {
                        required: true,
                        minlength: 5
                    },
					verify:"required",
					
                    agree: "required"
                },
                messages: {
                    firstName: "Please enter your firstname.",
                    lastName: "Please enter your lastname.",
                    password: {
                        required: "Please provide a password.",
                        minlength: "Password must be at least 5 characters long."
                    },
					pass_confirm: {
                        required: "Please re-enter the password.",
                        minlength: "Password must be at least 5 characters long."
                    },
					verify:"Please enter the verification.",                      
              
                    email: "Please enter a valid email address.",
					
					
                    //agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);




















