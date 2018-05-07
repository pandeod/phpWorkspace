<html>
<head>
<title>Admin LogIN</title>
</head>
<body>
  <center>
<h1>Admin LogIn </h1>
  <form method="post">
    <input type="text" placeholder="Admin ID" name="aID"> <br><br>
	<input type="password" placeholder="password" name="pwd"> <br><br>
	<button type="submit" name="submit">SUBMIT</button>
  </form>

<?php
if(isset($_POST['submit']))
{
	  $aID=$_POST['aID'];
	  $pwd=$_POST['pwd'];
	 
	 session_start();
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $sql="select * from admin where adminID='$aID'";
     $result=mysqli_query($db,$sql);
	 $row=mysqli_fetch_array($result);

    if($row!=NULL)
    {
	    if($row['pwd']==$pwd)
	   {   
		  $_SESSION["adminID"]=$aID;
		echo "<script>alert('Log In Successfull')</script>";
		sleep(1);
		 header("Location: p3.php"); 
		exit();	 
	   }
	   else
	   {    
		sleep(1);
		echo "<script>alert('Enter valid details')</script>";
	   }
    }
    else
   {  
     echo "<br><br><br>Enter valid details..to try again click<a href='adminLogin.php'>here</a> ";
   }
} 
   ?>
   </center>  
</body>
</html>