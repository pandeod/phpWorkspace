<html>
<head>
<style>
table,td,th{
	  padding:20px;
	  border:1px solid black;
	  font-style:30px; 
	  border-collapse: collapse;
	  font-family: "Segoe UI",Arial,sans-serif;
 }
 h2{
	 padding:20px;border:1px solid black;font-style:40px; font-family: "Segoe UI",Arial,sans-serif;
 }
 img{
 	width:10%;
 }
 html{
 	color:black
 }

 </style>
</head>
<body>
<!--	<a href="insert_exp7.php"><img src="back.png"></a>  -->
<center>
<?php

$name=$_POST["name"];

$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

 $sql = "DELETE FROM student WHERE name='$name' ";

$result= mysqli_query($db,$sql);
if($result)
{
	 echo "Data deleted !!!!";
}
else
{
	echo "ERROR !!!";
}

$sql = "select * from student";
$result= mysqli_query($db,$sql);
?>
<br> <h2> Updated Database </h2> <br>
<table>
	<tr>
	<th>UserName</th>
	<th>dob</th>
	<th>gender</th>
	<th>contact</th>
	<th>nation</th>
	<th>address</th>
	<th>permission</th>
	</tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr style="padding:20px;border:1px solid black;">
<td> <?php echo $row['name']; ?> </td> 
<td> <?php echo $row['dob']; ?> </td> 
<td> <?php echo $row['gender']; ?> </td>
<td> <?php echo $row['contact']; ?> </td> 
<td> <?php echo $row['nation']; ?> </td>
<td> <?php echo $row['address']; ?> </td>
<td> <?php echo $row['permission']; ?> </td>
</tr> 
<?php	
}
?>
</table>
</center>
</body>
</html>