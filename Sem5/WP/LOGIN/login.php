<?php

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$conn=mysqli_connect('localhost:3306','root','','infomania');

$query= "SELECT * from userlogin WHERE email='$email' and pwd='$pwd' ";
$return = mysqli_query($conn,$query);

if($return)
      {
        if($return->num_rows != 0) 
        {
			while($row=mysqli_fetch_array($return))
          {
            if($row['email']==$email && $row['pwd']==$pwd ) 
			{
              session_start();
                $_SESSION['name'] = $row['name'];
  				$_SESSION['email'] = $row['email'];
 				$_SESSION['branch'] = $row['branch'];
  				$_SESSION['city'] = $row['city'];
  				$_SESSION['percent'] = $row['percent']; 
  				$_SESSION['id'] = $row['id'];
              	mysqli_close($conn);  
              	header("refresh:0,url= ../index.html");

              	exit();
            }
          }
         } 
        else 
       	{
                mysqli_close($conn);  
                header("refresh:1,url= login.html");
        }
       } 
    	
?>

