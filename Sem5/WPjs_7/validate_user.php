<html>
<head>


  <?php $flag=0; ?>     

<script type="text/javascript">
  
  function val()
{
  
 var p1=document.form.name.value;
 if(p1=="" || p1=="NULL")
 {
  alert("Name can not be blank!");
  <?php $flag=1; ?>
  return false;
 }
 if(!isNaN(p1))
 {
  alert("Name should contain characters only!");
  <?php $flag=1; ?>
  return false; 
 }
 if(p1.length>12 ) 
 {
  <?php $flag=1;  ?> 

   alert("Name should not be more than 12 letters !!");
  
  return false;
 }

var k1=document.form.gender[0].checked; 
var k2=document.form.gender[1].checked; 
if(!(k1||k2))
{
  alert("select gender");
   <?php $flag=1; ?>
  return false;
}


var p3=document.form.email.value;

  if(p3=="" || p3=="NULL")
 {
  alert("Email can not be blank!");
  <?php $flag=1; ?>
  return false;
 }
var at_pos=p3.indexOf("@");  
var dot_pos=p3.lastIndexOf(".");
var i;

for(i=at_pos;i<p3.length;i++)
{
  if(!(isNaN(p3.charAt(i))))
 {
  alert("Enter valid Email id!");
   <?php $flag=1; ?>
  return false;  
 }
}
 if (at_pos<1 || dot_pos<at_pos+2 || dot_pos+2>=p3.length)
  {
  alert("Enter valid email-id with '@' & '.'");
   <?php $flag=1; ?>
  return false;
  } 
 
 var p6=document.form.contact.value;
 if(isNaN(p6))
 {
   alert("Enter numeric value for contact no.")  ;
    <?php $flag=1; ?>
   return false;
 }
 if(p6=="" || p6=="NULL")
 {
   confirm("Adding your contact no. will be helpful for further communication");
    <?php $flag=1; ?>  
  return false;
 }
 if(p6.length !=10)
  {
   alert("contact should be 10 digit ");
    <?php $flag=1; ?>
   return false;
  }
  

var p8=document.form.permission.checked;
if(!p8)
{
  alert("Accept terms & conditions ");
   <?php $flag=1; ?>
 return false;
} 
}

 </script> 
 
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
<h3>
  <?php

$name=$dob=$gender=$email=$contact=$nation=$address=$permission="";

/*
function test_input($data)
{

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name = test_input($_POST["name"]);
$dob=test_input($_POST["dob"]);
$contact=test_input($_POST["contact"]);
$gender = test_input($_POST["gender"]);
$email = test_input($_POST["email"]);
$nation=test_input($_POST["nation"]);
$address=test_input($_POST["address"]);
$permission=test_input($_POST["permission"]);



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
*/

if(isset($_POST["validateForm"]))
{
$name=$_POST["name"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$nation=$_POST["nation"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$permission=$_POST["permission"];

if($flag==0)
{
$db=mysqli_connect('localhost','root','','1514098') or die("Error connecting to database");

$order="Insert into student(name,dob,gender,email,contact,nation,address,permission) 
values('$name','$dob','$gender','$email','$contact','$nation','$address','$permission')";
$result=mysqli_query($db,$order);

if($result)
{
   echo "Data added successfully !!!!";

  // $name=$dob=$gender=$email=$contact=$nation=$address=$permission="";
}
else
{
  echo "ERROR !!!";
}

}

}
?>
</h3>

   <form action="validate_user.php" method="POST" name="form">
<h2>---Rotary Club MemberShip Form---</h2>
<table>

  <tr>
    <td>Full Name <span style = "color: red;">*</span>:</td>
    <td><input id="a" type="text" name="name"> 
      <br>     
	&nbsp;<span style = "color: red;"></span>
	</td>
  </tr>

  <tr>
    <td>DOB:</td>
    <td><input id="a" type="date" name="dob"></td>
  </tr>

  <tr>
    <td>Gender<span style = "color: red;">*</span>:</td>
    <td><input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female <br>
	&nbsp;<span style = "color: red;"></span>	
	</td>
  </tr>

  <tr>
    <td>Email<span style = "color: red;">*</span>:</td>
    <td><input id="a" type="email"  name="email" > <br>
	&nbsp;<span style = "color: red;"></span>
	</td>
  </tr>

  <tr>
    <td>contact no<span style = "color: red;">*</span>:</td>
    <td><input id="a" type="telephone" name="contact"> <br>
	&nbsp;<span style = "color: red;"></span>
	</td>
  </tr>

  <tr>
    <td>Nationality<span style = "color: red;">*</span></td>
<td><select id="a" name="nation">
<option>India</option>
<option> USA</option>
<option> UK</option>
<option> Canada</option>
</select> <br>
&nbsp;<span style = "color: red;"></span>
</td>
  </tr>

  <tr>
    <td>Address<span style = "color: red;">*</span>:</td>
    <td><textarea name="address"></textarea> <br>
	&nbsp;<span style = "color: red;"></span>
	</td>
  </tr>
</table>
<input type="checkbox" name="permission" value="Allowed" >I want to get newsletters.
<br><br>
<button type="submit" name="validateForm" onclick="val()">SUBMIT</button>
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