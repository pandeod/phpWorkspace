<html>
<body>
<?php
$_SESSION["rID"]=$rID;
				  $_SESSION["restoName"]=$rw['restoName'];
				  $_SESSION["location"]=$rw['location'];
				  $_SESSION["user"]=$uName;	
				  $_SESSION['menuList']=array();
				  $_SESSION['menuQuantity']=array();
				  $_SESSION['TotalBill']=0;
?>
<a href="p1.php"><input type="button" value="Click"></a>
</body>
</html>