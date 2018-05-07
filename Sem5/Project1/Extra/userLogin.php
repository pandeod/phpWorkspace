<html>
<head>
<title>User LogIN</title>
</head>
<body>
  <center>
<h1> Client LogIn </h1>
  <form method="post">
   Branch :
    <select name="bID">
	 <?php
	   $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
       $sql="select * from branch";
       $result=mysqli_query($db,$sql);
	 
	 while($row=mysqli_fetch_array($result))
     {  
	 ?>
	   <option value="<?php echo $row['branchID']; ?>">
       <?php echo $row['location']; ?> 
	   </option>
	 <?php  
	  } 	    
	 ?>
	</select> <br><br>
    <input type="text" name="uID"> <br><br>
	<input type="password" name="pwd"> <br><br>
	<button type="submit" name="submit">SUBMIT</button>
  </form>

<?php
if(isset($_POST['submit']))
{
	  $bID=$_POST['bID']; 
	  $uID=$_POST['uID'];
	  $pwd=$_POST['pwd'];
	 
	 session_start();
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $sql="select * from login where branchID='$bID' and userID='$uID'";
     $result=mysqli_query($db,$sql);
	 
	 $row=mysqli_fetch_array($result);

    if($row!=NULL)
    {
	    if($row['pwd']==$pwd)
	   {   
		  $_SESSION["userID"]=$uID;
		echo "<script>alert('Log In Successfull')</script>";
		sleep(1);
		 header("Location: p2.php"); 
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
     sleep(1);
     echo "<script>alert('Enter valid details')</script>";
   }
} 
   ?>
   </center>  
</body>
</html>