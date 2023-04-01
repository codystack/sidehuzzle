/**/

$(document).ready(function(){

  
    // listen for login form submission
    $('#signup-button').on("click", function(e){
        
   $('.alert').hide();
  if (!document.getElementById("signup-form").checkValidity()) 
  {
   return;
   
  }
 //starts spinner for the  form
$('.app-loader').css("display", "block");
$('.app-loader .app-loader-message').html("<div>Creating your account ...</div><div>Please wait</div>");

  var dataString = $('form').serialize();
  
  var x=$.ajax({
      url: 'php/signup.php',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      data: dataString,
      dataType: "text",
      cache: false
     });
     
     x.done(function(serverResponse)
     {
         var response=serverResponse.trim();
         if(response=='success')
         {
             $('#successdiv').show();
         }else{
            $('#errormsg').html(response);
            $('#errordiv').show();
         }
 
               
     });
     
      x.fail(function(){
        
     
     });
     
     x.always(function(){
         $('.app-loader').css("display", "none");
                 
});
     e.preventDefault();  
    });//
    
    
   
});

