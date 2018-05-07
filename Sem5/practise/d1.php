<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body{
		background: linear-gradient(to right, #ffff80, #cccc00);
	}
    .p2{
    font-family: Comic Sans MS;
    font-size: 40px;
    }
    .i1{
    	width: 200px;
    	height:40px;
    	outline: none;
    	border-radius: 5px;
    	border:1px solid lightgrey;
    	margin-top:10px;
    	padding:5px;
    	font-size: 25px;
    }
    .i2,.i3{
    	margin-top: 20px;
    	margin-right: 20px;
    	border-radius: 5px;
    	color:white;
    	background-color: lightblue;
    	padding:10px;
    	font-size: 20px;
    }
</style>
</head>
<body>
	<center>
    <p class="p2"> HELLO WELCOME </p><br><br>
     
     <form method="post" action="vd1.php">
     	<input class="i1" type="text" name="user" placeholder="UserId"> <br>
        <input class="i1" type="text" name="password" placeholder="Password"> <br>

        <br><br>
        <input class="i3" type="checkbox" name="check"><span> Remember Me </span><br>

        <button class="i2" type="submit" name="submit">Submit</button>
        <button class="i2" type="reset">Reset</button>
        
     </form>

   </center>
</body>
</html>