<html>
<head>
<title>Create user</title>
</head>
<body>
  <center>
<h1> Client LogIn </h1>
  <form method="post">
   Select Menu :
    <select multiple name="oID">
	 <?php
	   $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
       $sql="select menuID,menuName from menulist";
       $result=mysqli_query($db,$sql);
	 
	 while($row=mysqli_fetch_array($result))
     {  
	 ?>
	   <option value="<?php echo $row['menuID']; ?>">
       <?php echo $row['menuName']; ?> 
	   </option>
	 <?php  
	  } 	    
	 ?>
	</select> <br><br>
   	<button type="submit" name="submit">proceed..</button>
  </form>

<?php
     if(isset($_POST['submit']))
	 {
	  if ( isset( $_POST["oID"])) 
	  { 
        foreach ( $_POST["oID"] as $menuID ) 
	    { 
           $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
           $sql="select * from menulist";
           $result=mysqli_query($db,$sql);
		   
		    while($row=mysqli_fetch_array($result))
           {  
	         
	       } 
		 
         } 
      }
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $order="Insert into login(branchID,userID,pwd) values('$bID','$uID','$pwd')";
   //  $result=mysqli_query($db,$order);
	 
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