<?php
 if(isset($_POST['submit']))
 {
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
       $sql="insert into img(name,path) values ('$fileTempName','$fileDestination')";
       $result=mysqli_query($db,$sql);		
	   
	   if($result!=null)
	   {
		   move_uploaded_file($fileTempName,$fileDestination);
		   
		   $order="select * from img";
		   $result=mysqli_query($db,$order);
		   
		   while($row=mysqli_fetch_array($result))
		   {
			   $s=$row['path'];
			   echo "<img src='$s'>";
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