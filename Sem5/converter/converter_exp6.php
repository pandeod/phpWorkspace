<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>exp6</title>
<style>
form{
 border:1px solid black;
 width:394px;
 border-color: white black black black;
 padding:20px;
 padding-top: 10px;
 background-color: white;
 float: left;
position: absolute;
 left:500px;
 top:150px;
}
table,td,tr{
margin:20px;
}
textarea{
	height:300%;
	width:100%;
}
body{
	background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);
	font-style:30px; 
	font-family: "Segoe UI",Arial,sans-serif;
}
input{
	outline: none;
	border:0px 0px 1px 0px solid black;
	margin:10px;
}
select{
margin:10px;
}
input#a{
	width: 100%
}
input#from{
  width: 40%
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
.tab{
  width:145px;
  height:35px;
  float: left;
  margin:0px;
  text-align: center;
  padding-bottom: 5px;
  padding-top: 10px;
  
  background-color: lightgrey;

}
.tab1{
  width:145px;
  height:35px;
  float: left;
  margin:0px;
  text-align: center;
  padding-bottom: 5px;
  padding-top: 10px;
  background-color: white;
}
a:hover{
   color: black;
}
a{
  color:black;
}
nav{
 position: absolute;
 left:500px;
 top:100px;
 background-color: white;
 height: 50px;
 border-color: black black white black;
 border:1px solid black;
 width:435px;
 margin: 0px;
 padding: 0px;
}
</style>
</head>
<body>
  <nav>
    <a href="converter_exp6.php"><div class="tab1">LENGTH</div></a>
    <a href="converter_weight.php"><div class="tab">WEIGHT</div></a>
    <a href="converter_temp.php"><div class="tab">TEMP</div></a>
  </nav>  <br>
   <form action="converter_exp6.php" method="GET">
      <h2>Unit Converter Express conversion </h2>
      <tr><td>From <select name="lengthFr"> 
      <option value="1">Meter</option>
      <option value="2">Kilometer</option>
      <option value="3">Centimeter</option>
      <option value="4">Mile</option>
      <option value="5">Yard</option>
      <option value="6">Foot</option>
      </select >  </td>
      <td>To <select name="lengthTo">
      <option value="1">Meter</option>
      <option value="2">Kilometer</option>
      <option value="3">Centimeter</option>
      <option value="4">Mile</option>
      <option value="5">Yard</option>
      <option value="6">Foot</option>
      </select> </td> </tr>
      <tr><td><input id="from" type="text" name="fr"></td><td> &nbsp;&nbsp;
      
   <?php 

if(isset($_GET["submit"]))
{
$from= $_GET["lengthFr"]; 
$to = $_GET["lengthTo"]; 

$con=$_GET["fr"];

//echo "$from";
//echo "$to";

$mul=1.0;


switch ($from) {
      case 1:
               switch ($to) {
                case 1:
                         $mul=1.0;
                        break;
                case 2:
                         $mul=0.001;
                        break;
                case 3:
                         $mul=1000;
                        break;
                case 4:
                         $mul=1.60935;
                        break;
                case 5:
                         $mul=0.0009144;
                        break;
                case 6:
                         $mul=0.0003048;
                        break;
                  }
            break;


      case 2:
                switch ($to) {
      case 1:
              $mul=1000;
            break;
      case 2:
              $mul=1;
            break;
      case 3:
              $mul=100000;
            break;
      case 4:
            $mul=0.6213688756;
            break;
      case 5:
            $mul=1093.6132983;
            break;
      case 6:
            $mul=3280.839895;
            break;
                  }
            break;


      case 3:
               switch ($to) {
      case 1:
              $mul=0.01;
            break;
      case 2:
              $mul=0.00001;
            break;
      case 3:
              $mul=1;
            break;
      case 4:
              $mul=0.0000062137;
            break;
      case 5:
             $mul=0.010936133;
            break;
      case 6:
             $mul=0.032808399;
            break;
                  }
            break;


      case 4:
                switch ($to) {
      case 1:
             $mul=1609.35;
            break;
      case 2:
            $mul=1.60935;
            break;
      case 3:
            $mul=160935;
            break;
      case 4:
            $mul=1;
            break;
      case 5:
            $mul=1760.0065617;
            break;
      case 6:
            $mul=5280.019685;
            break;
                     }
            break;


      case 5:
               switch ($to) {
      case 1:
              $mul=0.9144;
            break;
      case 2:
             $mul= 0.0009144;
            break;
      case 3:
             $mul=91.44;
            break;
      case 4:
             $mul=0.0005681797;
            break;
      case 5:
            $mul=1;
            break;
      case 6:
            $mul=3;
            break;
                     }
            break;


      case 6:
               switch ($to) {
      case 1:
              $mul=0.3048;
            break;
      case 2:
              $mul=0.0003048;
            break;
      case 3:
              $mul=30.48;
            break;
      case 4:
              $mul=0.0001893932;
            break;
      case 5:
              $mul=0.3333333333;
            break;
      case 6:
              $mul=1;
            break;
                    }
            break;
}

echo "    ";
echo $con * $mul;

}
?> 
</td></tr>
<br><br>
      <button type="submit" name="submit">Convert</button>
   </form>
</body>
</html>