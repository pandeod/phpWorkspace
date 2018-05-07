<html>
<head>
<style>
 td{
	  padding:20px;font-size:25px; font-family: "Segoe UI",Arial,sans-serif;
 }
 h2{
	 padding:20px;font-family: "Segoe UI",Arial,sans-serif;
 }
 input,body{
 	padding-left: 10px; font-size:20px; font-family: "Segoe UI",Arial,sans-serif;
 }
 form{
 	padding:10px;
 	float:left;
 	border:1px solid black;
 	height:40%;
 	width:30%;
 }
 button{
 	padding:5px;font-size:20px; font-family: "Segoe UI",Arial,sans-serif;
 }
 input{
 	border:1px solid black;
 	border-color: white white black white;
 	outline: none;
 }

 </style>
</head>
<body>
<center>
<br><br>
<form action="showdata.php" method="POST">
<h2> Show all data </h2>

<button type="submit" name="submit">Show Data</button> 
<br>
</form>
<form action="search.php" method="POST">
<h2> Search data </h2>

Enter Name &nbsp;<input id="a" type="text" name="name" > <br><br>
<button type="submit" name="submit">Search Data</button> 
<br>
</form>
<form action="delete.php" method="POST">
<h2> Delete data </h2>
Enter Name &nbsp;<input id="a" type="text" name="name" > <br><br>
<button type="submit" name="submit">Delete Data</button> 
<br>
</form>
<br><br>
<a href="validate_user.php"><img src="new.png"></a>
</center>
</body>
</html>