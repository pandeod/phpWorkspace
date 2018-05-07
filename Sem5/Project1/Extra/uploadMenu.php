<?php
 if(isset($_POST['submit']))
 {   
     $menuName=$_POST['menuName'];
	 $menuType=$_POST['menuType'];
     $price=$_POST['price'];
	 
	 $file=$_FILES['file'];
	 $fileName=$_FILES['file']['name'];
	 $fileTempName=$_FILES['file']['tmp_name'];
	 $fileSize=$_FILES['file']['size'];
	 $fileError=$_FILES['file']['error'];
	 $fileType=$_FILES['file']['type'];
	 
	 $fileExt=explode('.',$fileName);
	 $fileActualExt=strtolower(end($fileExt));
	 
	 $allowed=array('jpg','jpeg','png','pdf');
	 
	 if(in_array($fileActualExt,$allowed))
	 {
		if($fileError === 0)
		{
			if($fileSize < 1000000)
			{
				$fileNameNew = uniqid('',true).'.'.$fileActualExt;
				$fileDestination='uploads/'.$fileNameNew;
				
	   $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
       $sql="insert into menulist(menuName,menuType,path,price) values
	   ('$menuName','$menuType','$fileDestination','$price')";
       $result=mysqli_query($db,$sql);		
	   
	   if($result!=null)
	   {
		   move_uploaded_file($fileTempName,$fileDestination);
		   
		   $order="select * from menulist where menuName='$menuName'";
		   $result=mysqli_query($db,$order);
		   
		   while($row=mysqli_fetch_array($result))
		   {
			   $s=$row['path'];
			   echo "<img src='$s'>";
		   }
		   
	     $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
         $s="alter table orderdetails add  $menuName text";
         $r=mysqli_query($db,$s);
		 
		 if($r!=null)
		 {
			 echo "Menu added successfully !!!";
		 }
				
	   }
				
			}
			else
			{
				echo "Your file size is too big !!!";
			}
		}	
        else
        {
			echo "There is error in uploading file !!!";
		}			
	 }
	 else
	 {
		 echo "File type is not allowed";
	 }
 }

?>