<html>
<head>
 <title>Client Side</title>
</head>
<?php
  $u="onkar";
  $p="12345";
?>
<body>
<center>
<h1> Client LogIn </h1>
  <form method="post">
    <input type="text" name="user"> <br><br>
	<input type="password" name="pwd"> <br><br>
	<button type="submit" name="submit">SUBMIT</button>
  </form>
</center>  
  <?php
    if(isset($_POST['user']))
	{
		session_start();
		if($_POST['user']==$u && $_POST['pwd']==$p)
		{
		  $_SESSION['user']=$u;
		  header("Location:p2.php");
		  exit();
		}
		else
		{
			echo "Please try again...";
		}
	}
  ?>
</body>
</html>