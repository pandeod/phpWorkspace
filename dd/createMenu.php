<html>
<body>
<center>
<h3> Create Menu </h3> <br>
<form action="uploadMenu.php" enctype="multipart/form-data" method="post">

	<input type="text" placeholder="Enter name " name="menuName"> <br><br>
	Choose Menu Pic: <br><br>
	<input type="file" name="file"> <br><br>
	<input type="text" placeholder="menu Type" name="menuType"> <br><br>
	<input type="text" placeholder="menu Price" name="price"> <br><br>
<input name="submit" type="submit" value="Upload Menu">
</form>
</center>
</body>
</html>