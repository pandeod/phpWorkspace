<?php
/* TAKING ALL VALUE FROM HTML FORM
---------------------------------------------------------------------------------------
*/

$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$branch = $_POST["branch"];
$city= $_POST["city"];
$percent;

if(!isset($_POST["checkpass"]))
{
 $percent = "-1";
}
else
{
$percent = $_POST["percent"];   
}
$percent = $_POST["percent"];

/* MYSQL CONNECTION AND INSERTING
--------------------------------------------------------------------------------------
*/

$conn=mysqli_connect('localhost:3306','root','','infomania');
$query= "INSERT into userlogin (name,email,pwd,branch,city,percent)VALUES('$name','$email','$pwd','$branch','$city','$percent')";
mysqli_query($conn,$query);
$id = mysqli_insert_id($conn);


/* SESSION START
--------------------------------------------------------------------------------------
*/

session_start();
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['branch'] = $branch;
  $_SESSION['city'] = $city;
  $_SESSION['percent'] = $percent; 
  $_SESSION['id'] = $id;
mysqli_close($conn);

header("refresh:1,url= ../index.html");

?>