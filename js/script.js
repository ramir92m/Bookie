//Bookie Script 
$(document).ready(function(){
    
    //Cancel out the textfields data
    $("input[type='text'], input[type='password']").val(null);
    
    
    //Send POST data from script registration
    $("#register").click(function(){
        
        $.post("lib/registration.php",$("#register-form").serialize(),
            function(data)
            {
                alert(data);
            }
        );
    });
   
        
    
    
    
});