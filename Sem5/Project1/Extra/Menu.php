<html>
<head>
<title>Create Menu</title>
</head>
<body>
  <center>
<h1> Add menu </h1>
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
    <input type="text" placeholder="menuID" name="mID"> <br><br>
	<input type="text" placeholder="menu" name="menu"> <br><br>
	Choose Menu Pic:<input type="file" name="menuPic"> <br><br>
	<input type="text" placeholder="menu Type" name="mType"> <br><br>
	<input type="text" placeholder="menu Price" name="mPrice"> <br><br>
	<button type="submit" name="submit">SUBMIT</button>
  </form>

<?php
     if(isset($_POST['submit']))
	 {
	  
	  $bID=$_POST['bID'];
	  $mID=$_POST['mID'];
	  $menu=$_POST['menu'];
	  $mType=$_POST['mType'];
	  $mPrice=$_POST['mPrice'];
	
	  $imagename=$_FILES["menuPic"]["name"]; 

      //Get the content of the image and then add slashes to it 
      $imagetmp=addslashes (file_get_contents($_FILES['menuPic']['tmp_name']));

       //Insert the image name and image content in image_table
       $insert_image="INSERT INTO image VALUES('$imagetmp','$imagename')";

       mysql_query($insert_image);
	  
	  
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $sql="Insert into menulist(branchID,menuID,menu,menuPic,type,price,availability) 
	         values('$bID','$mID','$menu','$imagetmp','$mType','$mPrice','')";
     $result=mysqli_query($db,$sql);
	 
	 if($result)
     {
        echo "Menu added successfully !!!!";
               $bID=$mID=$menu=$imagetmp=$mType=$mPrice="";
      }
      else
      {
        echo "ERROR in adding menu!!!";
	  }
	 } 
   ?>
   
   </center>  
</body>
</html>