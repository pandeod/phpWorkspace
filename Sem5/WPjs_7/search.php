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
<center>
<?php

$name=$_POST["name"];

$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$sql = "select * from student where name='$name'";
$result= mysqli_query($db,$sql);
?>
<table>
	<tr>
	<th>UserNAme</th>
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