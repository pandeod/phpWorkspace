<html>
<head>
<title>Exp3</title>
<style>
table{
padding:20px;
border:1px solid black;
}
td{
  padding: 10px;
}
textarea{
	height:300%;
	width:100%;
}
body{
	font-style:30px; 
	font-family: "Segoe UI",Arial,sans-serif;
}
input{
	outline: none;
	border:0px 0px 1px 0px;
}
input#a{
	width: 100%;
}
h2{
	font-style:40px; 
	font-family: "Segoe UI",Arial,sans-serif;
}
button{
	background-color: #ccffcc;
	border-radius: 5px;
	padding: 10px;
	margin-left: 20px;
	outline: none;
}
img{
	width:100%;
	height:30%;
}
</style>
</head>
<body> 
<center>
<form  method="POST" action="">

<img src="admin.jpg">
<table>
  <tr>
    <td>UserName:</td>
    <td><input id="a" type="text" name="name" ></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input id="a" type="password" name="pwd" ></td>
  </tr>
<tr> <td>
<button type="submit" name="submit">LogIn</button> </td> <td>
<button type="reset">RESET</button> </td>
</tr>
 <br><br>
</table>
</form>
<br><br>
</center>
<?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$pwd= $_POST["pwd"];

$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$sql ="select * from login where name='$name'";

$result= mysqli_query($db,$sql);

$row=mysqli_fetch_array($result);

if($row!=NULL)
{
	if($row['pwd']==$pwd)
	{   
		echo "<script>alert('Log In Successfull')</script>";
		sleep(1);
		 header("Location: validate_user.php"); 
		 exit();	 
	}
	else
	{   
		sleep(1);
		echo "<script>alert('Enter valid details')</script>";
	}

}
else
{  
  sleep(1);
  echo "<script>alert('Enter valid details')</script>";
}
}

 ?>
</body>
</html>