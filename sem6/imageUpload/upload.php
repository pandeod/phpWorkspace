<?php
if(isset($_POST['upload']))
{
	mysql_connect('localhost','root','');
	mysql_select_db('1514098');
	
    $imageName=mysqli_real_escape_string($_FILES['image']['name']);
	$imageData=mysqli_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
	$imageType=mysqli_real_escape_string($_FILES['image']['type']);
	
	if(substr($imageType,0,5)=="image")
	{
		mysql_query("insert into `blobupload`(`name`,`image`) values('$imageName','$imageData')");
	}
	else
	{
			echo "Error while adding to database";		
	}
}
?>