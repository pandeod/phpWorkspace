<html>
<head>
<style>
 td,form{
	  padding:20px;border:1px solid black;font-style:30px; font-family: "Segoe UI",Arial,sans-serif;
 }
 h2{
	 padding:20px;border:1px solid black;font-style:40px; font-family: "Segoe UI",Arial,sans-serif;
 }
 </style>
</head>
<body style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);">
<center>

<h2>Search Your Database  </h2>  <br><br>

<form method="GET">
  <input type="text" name="user" placeholder="First Name">  &nbsp;
  <input type="text" name="sr" placeholder="Last Name"> <br><br>
  <button type="submit" name="submit"> SUBMIT</button>
</form>

<?php
if(isset($_GET["submit"]))
{
$user=$_GET["user"];
$srch= $_GET["sr"];

$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$sql ="select * from student where fname='$user'";

$result= mysqli_query($db,$sql);

$row=mysqli_fetch_array($result);

if($row!=NULL)
{
	if($row['lname']==$srch)
	{
		echo "Log in Successfull";
	}
	else
	{
		echo "Invalid Login";
	}

}
else
{
  echo "Invalid Login";	
}

}
?>
</center>
</body>
</html>