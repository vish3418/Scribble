/* AJAX for sign up form
Collect the inputs and send to signup.php
and then return appropriate message on to screen */
$("#signupform").submit(function(event){
    //to prevent php processing
    event.preventDefault();
    
    //collecting inputs
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                
            $("#signupmessage").html(data);
            }
        },
        error: function(){
            
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
        
    });

});