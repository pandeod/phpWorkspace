<html>
<head>
<title>Create user</title>
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
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $order="Insert into login(branchID,userID,pwd) values('$bID','$uID','$pwd')";
     $result=mysqli_query($db,$order);
	 
	 if($result)
     {
        echo "User created successfully !!!!";
               $bID=$uID=$pwd="";
      }
      else
      {
        echo "ERROR in creating user!!!";
	  }
	 } 
   ?>
   </center>  
</body>
</html>