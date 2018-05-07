//i = 0;
$(document).ready(function(){
 
 /*Val variables
 ------------------------------------------------------------------------------------------------------------------------------   
 */    
    var name = "";
    var pwd = "";
    var email = "";
    var cpwd = "";

 
 /*Error variables
 ------------------------------------------------------------------------------------------------------------------------------   
 */  
    var ErrName = "12";
    var ErrPwd = "12";
    var ErrEmail = "12";
    var ErrCpwd = "12";
 
 /*Match variables
 ------------------------------------------------------------------------------------------------------------------------------   
 */ 
 var matchName = /[a-zA-z]+\s{1,1}[a-zA-Z]+\s{1,1}[a-zA-Z]+/;
 var matchPwd =  /[a-zA-Z]+[a-zA-Z0-9]{7,}/;
 var matchEmail = /[a-zA-Z0-9\.\_]+@{1,1}[a-zA-Z0-9]+\.{1,1}[\w]{1,3}/;

 /*ONFOCUS FUNCTIONS
 ------------------------------------------------------------------------------------------------------------------------------   
 */  
    $("#name").focus(function()
    {
		$(this).keyup(function(){
        	name = $(this).val();
        	//$("#sInput").text(name);
        	validateName();
    	});

   });

       $("#email").focus(function()
    {
		$(this).keyup(function(){
        	email = $(this).val();
        	validateEmail();
        	//$("#sInput").text(email);
    	});

   });
   
    $("#pwd").focus(function()
    {
		$(this).keyup(function(){
        	pwd = $(this).val();
        	$("#sInput").text(pwd);
        	validatePwd();
    	});

   });

    $("#cpwd").focus(function()
    {
		$(this).keyup(function(){
        	cpwd = $(this).val();
        	validateCpwd();
        	//$("#sInput").text(cpwd);
    	});

   });

    $("#branch").focus(function()
    {
		$(this).keyup(function(){
        	a = $(this).val();
        	//$("#sInput").text(a);
    	});

   });

 /*ONFOCUSOUT FUNCTIONS
 ------------------------------------------------------------------------------------------------------------------------------   
 */
   $("#name").focusout(function(){
        	
        	name = $(this).val();
        	//$("#sInput").text(name);
        	validateName();
        	//alert("validating");
    	});
    
	


   $("#email").focusout(function(){
        	
        	email = $(this).val();
        	validateEmail();
        	
        	//alert($(this).val());
    	});



   $("#pwd").focusout(function(){
        	
        	pwd = $(this).val();
        	validatePwd();
        	
        	//alert($(this).val());
    	});



   $("#cpwd").focusout(function(){
        	
        	cpwd = $(this).val();
        	validateCpwd();
        	
        	//alert($(this).val());
    	});


   $("#branch").focusout(function(){
        	
        	validateName();
        	
        	//alert($(this).val());
    	});


 /*VALIDATION FUNCTIONS
 ------------------------------------------------------------------------------------------------------------------------------   
 */
   function validateName()
    {
    	
    	if(name.length==0)
  			{
  				ErrName = "Enter Name"; 
  				$("#sValidateName").text(ErrName);
  			}
    	else if(!name.match(matchName))
 			 {
  				ErrName = "Provide Complete Name";
  				$("#sValidateName").text(ErrName);
  			 }
  		else
  			{
  				ErrName ="";
  				$("#sValidateName").text(ErrName);	
  			}
    
    }

       function validateEmail()
    {
    	if(email.length==0)
  			{
  				ErrEmail = "Enter You Email ID"; 
  				$("#sValidateEmail").text(ErrEmail);
  			}
    	else if(!email.match(matchEmail))
 			 {
  				ErrEmail = "Invalid Email ID";
  				$("#sValidateEmail").text(ErrEmail);
  			 }
  		else
  			{
  				ErrEmail ="";
  				$("#sValidateEmail").text(ErrEmail);	
  			}
    }

       function validatePwd()
    {
    	if(pwd.length==0)
  			{
  				ErrPwd = "Provide Password"; 
  				$("#sValidatePwd").text(ErrPwd);
  			}
    	else if(!pwd.match(matchPwd))
 			 {
  				ErrPwd = "Min 8 char, Start with alphabet, No special chars";
  			    $("#sValidatePwd").text(ErrPwd);
  			 }
  		else
  			{
  				ErrPwd ="";
  				$("#sValidatePwd").text(ErrPwd);	
  			}
    	
    }

       function validateCpwd()
    {
	if(cpwd.length==0)
  			{
  				ErrCpwd = "Confirm Password"; 
  				$("#sValidateCpwd").text(ErrCpwd);
  			}
    	else if(cpwd!=pwd)
 			 {
  				ErrCpwd = "Password Doesn't match";
  			    $("#sValidateCpwd").text(ErrCpwd);
  			 }
  		else
  			{
  				ErrCpwd ="";
  				$("#sValidateCpwd").text(ErrCpwd);	
  			}
    }
/*ONSUBMIT
-------------------------------------------------------------------------------------------------------------------------
*/

   $('#submit').click(function()
 {
  if(ErrCpwd==="" && ErrPwd==="" && ErrEmail==="" && ErrName==="" )
  {
    if($("#check").is(":checked"))
    return true;
    
    else
    {
    alert("Please Accept our Terms and Condition");
    return false;   
    }  
  }
  else
  {
    alert("Please fill the details correctly");
    return false;
  }
 });

});