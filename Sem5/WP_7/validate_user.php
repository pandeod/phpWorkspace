<html>
<head>
<style>
 table,td{
padding:10px;
}
form{
  border:1px solid black;
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
  float:center;
  width:100%;
  height:20%;
  border:1px solid black;
  }
 </style>
</head>

<body>
<center>
    <img src="rotary.jpg">

    <form method="get">
    <h2 style="float:left;">
      
      <?php
         
         session_start();
         echo "Welcome  ".$_SESSION["user"];

      ?>

    </h2>
    <button style="float: right;padding:5px;font-size: 20px;" name="lg">Log Out</button>
    
    <?php
     if(isset($_GET['lg']))
    {   session_unset();
       session_destroy();
       header("location: login_exp7.php");
    }
    ?>
    </form>

<h3>
  <?php
$name=$dob=$gender=$email=$contact=$nation=$address=$permission="";
$nameErr=$genderErr=$emailErr=$contactErr=$nationErr=$addressErr=$permissionErr = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $flag=0;
   
  if (empty($_POST["name"])) 
  {
    $flag=1;
    $nameErr = "Name is required";
  } else
  {

    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $flag=1;
      $nameErr="Only letters are allowed";
    }
  }
  
  if (empty($_POST["contact"])) 
  {
    $flag=1;
    $contactErr = "Contact No. is required";
  } else
  {
    $contact=test_input($_POST["contact"]);
  
    if(!preg_match("/^(?=.{10,})(?=.*[0-9]).*$/",$contact))
    {
      $flag=1;
      $contactErr="Only numbers are allowed & that too 10 only.";
    }
  }

  
  if (empty($_POST["gender"])) 
  {
     $flag=1;
    $genderErr = "Gender is requied";
  } else 
  {
    $gender = test_input($_POST["gender"]);
  }

  
  if (empty($_POST["email"])) 
  {
     $flag=1;
    $emailErr = "Email Id is required";
  } else 
  {
    $email = test_input($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
      $flag=1;
      $emailErr = "Invalid email format"; 
    }
  }

  
  if (empty($_POST["nation"])) 
  {
     $flag=1;
    $nationErr = "nation is required";
  } else 
  {
  $nation=test_input($_POST["nation"]);
  }
  
  
  if (empty($_POST["address"])) 
  {
    $flag=1;
    $addressErr = "address is required";
  } else 
  {
  $address=test_input($_POST["address"]);
  }
  
  
  if (empty($_POST["permission"])) 
  {
     $flag=1;
     $permissionErr = "Accept all conditions.";
  } else 
  {
  $permission=test_input($_POST["permission"]);
  }
  
  
}

if(isset($_POST["validateForm"]))
{
$dob= $_POST["dob"];

if($flag==0)
{
$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$order="Insert into student(name,dob,gender,email,contact,nation,address,permission) 
values('$name','$dob','$gender','$email','$contact','$nation','$address','$permission')";
$result=mysqli_query($db,$order);

if($result)
{
   echo "Data added successfully !!!!";
   $name=$dob=$gender=$email=$contact=$nation=$address=$permission="";
}
else
{
   echo "ERROR !!!";
}

}

}
?>
</h3>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<h2>---Rotary Club MemberShip Form---</h2>
<table>

  <tr>
    <td>Full Name <span style = "color: red;">*</span>:</td>
    <td><input id="a" type="text" name="name" 
      value="<?php if(isset($_POST['validateForm'])){ echo $name; } ?>"> 
      <br>     
	&nbsp;<span style = "color: red;"><?php echo $nameErr;?></span>
	</td>
  </tr>

  <tr>
    <td>DOB:</td>
    <td><input id="a" type="date" name="dob" value="<?php if(isset($_POST['validateForm'])){ echo $dob; } ?>"></td>
  </tr>

  <tr>
    <td>Gender<span style = "color: red;">*</span>:</td>
    <td><input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female <br>
	&nbsp;<span style = "color: red;"><?php echo $genderErr;?></span>	
	</td>
  </tr>

  <tr>
    <td>Email<span style = "color: red;">*</span>:</td>
    <td><input id="a" type="email"  name="email"
    value="<?php if(isset($_POST['validateForm'])){ echo $email; } ?>" > <br>
	&nbsp;<span style = "color: red;"><?php echo $emailErr;?></span>
	</td>
  </tr>

  <tr>
    <td>contact no<span style = "color: red;">*</span>:</td>
    <td><input id="a" type="telephone" name="contact" 
     value="<?php if(isset($_POST['validateForm'])){ echo $contact; } ?>" > <br>
	&nbsp;<span style = "color: red;"><?php echo $contactErr;?></span>
	</td>
  </tr>

  <tr>
    <td>Nationality<span style = "color: red;">*</span></td>
<td><select id="a" name="nation" 
  value="<?php if(isset($_POST['validateForm'])){ echo $nation; } ?>">
<option>India</option>
<option> USA</option>
<option> UK</option>
<option> Canada</option>
</select> <br>
&nbsp;<span style = "color: red;"><?php echo $nationErr;?></span>
</td>
  </tr>

  <tr>
    <td>Address<span style = "color: red;">*</span>:</td>
    <td><textarea name="address"></textarea> <br>
	&nbsp;<span style = "color: red;"><?php echo $addressErr;?></span>
	</td>
  </tr>
</table>
<input type="checkbox" name="permission" value="Allowed" >I want to get newsletters.
<br><br>
<button type="submit" name="validateForm">SUBMIT</button>
<button type="reset">RESET</button> <br><br>
</form>

<a href="insert_exp7.php" style="text-decoration:none;">
<div style="background-image: url(manage.png);float:center;margin-bottom:50px;
   width:20%;height:20%;border:none;">
 <h2 style="text-align:center;position:relative;top:70%;">Manage Memebers</h2> 
</div>
</a>

</center>
</body>
</html>