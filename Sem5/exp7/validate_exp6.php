<html>
<head>
<style>
 td{
	  padding:20px;border:1px solid black;font-style:30px; font-family: "Segoe UI",Arial,sans-serif;
 }
 h2{
	 padding:20px;border:1px solid black;font-style:40px; font-family: "Segoe UI",Arial,sans-serif;
 }
 </style>
</head>
<body style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);">
<center>

<h2>Your Database  </h2>  <br><br>

<?php

$fname= $_POST["first_name"];
$lname= $_POST["last_name"];
$dob= $_POST["dob"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$nation=$_POST["nation"];
$address=$_POST["address"];
$permission=$_POST["permission"];

$email = input($_POST["email"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid format and please re-enter valid email"; 
}

if($allow==1)
{
$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$order="Insert into student(fname,lname,dob,gender,email,contact,nation,address,permission) 
values('$fname','$lname','$dob','$gender','$email','$contact','$nation','$address','$permission')";
$result=mysqli_query($db,$order);

if($result)
{
	 echo "";
}
else
{
	echo "ERROR !!!";
}

$sql = "select * from student";
$result= mysqli_query($db,$sql);
?>
<table>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr style="padding:20px;border:1px solid black; color:white;">
<td> <?php
	echo "Name :" .$row['fname']; ?> </td> 
<td>
<?php 	
    echo "Address :".$row['address']; ?> </td> </tr> 
<?php	
}
}
?>
</table>
</center>
</body>
</html>