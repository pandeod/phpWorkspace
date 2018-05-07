<?php
 
 $u="onkar";
 $p="12345";

if(isset($_POST['submit']))
{
   
   $user=$_POST['user'];
   $password=$_POST['password'];
    
    if($user==$u && $password==$p)
    {
         
         if(isset($_POST['check']))
         {
            setcookie("user",time()+60*5);
            setcookie("password",time()+60*5);
         }

           session_start();
            $_SESSION['user']= $user;
            $_SESSION['password']= $password;
            

            header("location : w1.php");

    }
    else
   {
    	echo "Enter valid credentials <br><br> To try again &nbsp;<a href='d1.php'>
    	       Click Here </a>";
   }
    
}
else
{
	header("location:d1.php");
}

?>
