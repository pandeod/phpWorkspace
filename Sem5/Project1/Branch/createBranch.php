<html>
<head>
<title>Create branch</title>
</head>
<body>
  <center>
<h1> Create branch </h1>
  <form method="post">
    <input type="text" placeholder="branch ID" name="bID"> <br><br>
	<input type="text" placeholder="location" name="location"> <br><br>
	<button type="submit" name="submit">SUBMIT</button>
  </form>
<br><br>  
<?php
     if(isset($_POST['submit']))
	 {
	  $bID=$_POST['bID']; 
	  $location=$_POST['location'];
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $order="Insert into branch(branchID,location) values('$bID','$location')";
     $result=mysqli_query($db,$order);
	 
	 if($result)
     {
        echo "Branch is added successfully !!!!";
               $bID=$uID=$pwd="";
      }
      else
      {
        echo "ERROR in adding branch!!!";
	  }
	 } 
   ?>
 </center>
</body>
</html>