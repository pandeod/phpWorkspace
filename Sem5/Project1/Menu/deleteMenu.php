<html>
<body>
<center>
<h3> Create Menu </h3> <br>
<form enctype="multipart/form-data" method="post">
     Select Menu To Delete :
	  <select name="mID">
	 <?php
	   $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
       $sql="select * from menulist";
       $result=mysqli_query($db,$sql);
	 
	 while($row=mysqli_fetch_array($result))
     {  
        $menuID=$row['menuID'];
		$menuName=$row['menuName'];
	 ?>
	   <option value="<?php echo $menuID ; ?>">
       <?php echo $menuName  ?> 
	   </option>
	 <?php  
	  } 	    
	 ?>
	</select> <br><br>
	 
<input name="submit" type="submit" value="Delete Menu">

   <?php
	   
	   if(isset($_POST['submit']))
	   {
		   $id=$_POST['mID'];
		   $sql="select * from menulist where menuID ='$id'";
           $result=mysqli_query($db,$sql);
		   $row=mysqli_fetch_array($result);
		   $file=$row['fileName'];
		   
		   $sql="delete from menulist where menuID ='$id'";
           $result=mysqli_query($db,$sql);
		   
		   if($result)
		   {
			   $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
               $sql="alter table orderdetails drop $menuName";
               $result=mysqli_query($db,$sql);
			    if($result)
				{
				  echo "Menu deleted";	
				}
		  }
		  else
		  {
			  echo "Error !!!";
		  }
		   
	   }
	  
	 ?>
</form>
</center>
</body>
</html>