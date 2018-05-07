<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find College</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  	
  </script>
<style>
 td,th,form{
	  padding:20px;
	  border:1px solid black;font-size:15px; 
	  font-family: "Segoe UI",Arial,sans-serif; 
	  text-align: center;
 }
 input,select,button,option{
 	padding:5px;border:1px solid black;font-size:15px; font-family: "Segoe UI",Arial,sans-serif; border-radius: 5px;
 }
 table{
 	width:100%;
 	border-collapse: collapse;
 	color: black;
 }
 h2{
	 padding:20px;font-size:35px; font-family: "Segoe UI",Arial,sans-serif;
 }
 body{
 	color: black;
 }
 </style>
</head>
<body style="background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
<center>
<form method="GET">
	<h2>Search Your Database  </h2><br>
 	<select name="ch">
		<option value="1">Student id</option>
		<option value="2">Name</option>
		<option value="3">class</option>
		<option value="4">branch</option>
	</select> 
 <input type="text" name="sr"/> 
  <button type="submit" name="submit"> SEARCH</button>  <br><br>
</form>


<?php
if(isset($_GET["submit"]))
{
  $choice=$_GET["ch"];
$srch= $_GET["sr"];

$db=mysqli_connect('localhost','root','','payment') or die("Error connecting to database");


switch ($choice) {
	case 1:
		$sql = "select * from student where sid like '%$srch%' ";
		break;
	case 2:
		$sql = "select * from student where name like '%$srch%' ";
		break;
	case 3:
		$sql = "select * from student where class like '%$srch%' ";
		break;
	case 4:
		$sql = "select * from student where branch like '%$srch%' ";
		break;

} 

$result= mysqli_query($db,$sql);


?>

<table>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr style="height:100px;">
	<td rowspan="3" style="background-color:lightgrey; width:300px;"></td>
	<td colspan="4" style="background-color:lightblue;"> <?php echo $row['name']; ?> </td> 
</tr>
<tr style="height:100px;">
<td style="background-color:lightgreen;"> <?php echo $row['sid'];  ?> </td> 
<td style="background-color:lightgreen;"> <?php echo $row['class']; ?> </td> 
<td style="background-color:lightgreen;"> <?php echo $row['rno']; ?> </td> 
<td style="background-color:lightgreen;"><a href="#"> <?php echo $row['branch']; ?> </a></td> 
</tr> 
<tr style="height:100px;">
	<td colspan="4" style="background-color:lightyellow;">K J Somaiya College Of Engineering ,Vidyavihar,Mumbai-77</td>
</tr>
<?php	
  }
}
?>
</table>

<!--Begin Layout college search 
<table>
<tr>
	<th>Student ID</th>
	<th>Name</th>
	<th>Class</th>
	<th>Reciept No.</th>
	<th>Branch</th>
</tr>

<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr style="padding:20px;border:1px solid black; color:white;">
<td> <?php echo $row['sid'];  ?> </td> 
<td> <?php echo $row['name']; ?> </td> 
<td> <?php echo $row['class']; ?> </td> 
<td> <?php echo $row['rno']; ?> </td> 
<td> <?php echo $row['branch']; ?> </td> 
</tr> 
<?php	
  }
?>
</table>


<table>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr>
           <div style="background-color: white;height:200px;width:800px;">

           	  <div style="margin:0px;float: left;width:300px;height:200px;
           	  background-color:lightblue; "></div>

           	 <div style="float: left;width:500px;height:200px;margin:0px;">

           	  <p style="margin:0px;width:500px;height:60px;background-color:pink;">
           	  	<?php echo $row['name']; ?>
           	  </p>

              <div style="margin:0px;width:500px;height:80px;">
                  <div style="margin:0px;float:left;width:150px;height:80px;
                  background-color:lightyellow;">
                  	<?php echo $row['sid'];  ?>
                  </div>
                  <div style="margin:0px;float:left;width:150px;height:80px;
                  background-color:lightblue;">
                  	<?php echo $row['rno']; ?>
                  </div>
                  <div style="margin:0px;float:left;width:100px;height:80px;
                  background-color:lightyellow;">
                  	<?php echo $row['class']; ?>
                  </div>
                  <div style="margin:0px;float:left; width:100px;height:80px;
                  background-color:lightblue;">
                  	<?php echo $row['branch']; ?>
                  </div>

               </div>
           	  	 <p style="margin:0px;width:500px;height:60px;background-color:pink;">
           	  	 	K J Somaiya College Of Engineering ,Vidyavihar,Mumbai-77 
           	  	 </p>
           	  </div>

           </div>
 </tr>
<?php	
  }
?>
</table>
End Layout college search -->  

</center>
</body>
</html>