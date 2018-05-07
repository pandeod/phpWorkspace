<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="sessionCheck.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../STYLE/d.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../STYLE/AdminLTE.css">
</head>
<?php
session_start();
$id = $_GET['collegeID'];
$conn=mysqli_connect('localhost:3306','root','','infomania');

  $query= "SELECT * from college where collegeID='$id' ";
  $return = mysqli_query($conn,$query);
  $college=mysqli_fetch_assoc($return);
  
  $query= "SELECT * from reviews where collegeID='$id' ";
  $return = mysqli_query($conn,$query);
  
  mysqli_close($conn);


 if(isset($_GET['review']))
 {
  
  if(isset($_SESSION['name']))
  {
  $txt = $_GET['review'];
  $name = $_SESSION['name'];
  $conn=mysqli_connect('localhost:3306','root','','infomania');
  $query= "INSERT into reviews(collegeID,review,reviewerName) Values('$id','$txt','$name')";
  mysqli_query($conn,$query);
  header("refresh:0,url= template.php?collegeID=$id");
  }
  else
  {
  header("refresh:0,url= ../LOGIN/login.html");
  }
}


 if(isset($_GET['branch']))
 {
  
  if(isset($_SESSION['name']))
  {
  $txt = $_GET['branch'];
  //$name = $_SESSION['name'];
  $conn=mysqli_connect('localhost:3306','root','','infomania');
  $query = "SELECT $txt from college where collegeID= $id";
  $res = mysqli_query($conn,$query);
  $branchV=mysqli_fetch_assoc($res);
  $value = $branchV[$txt] + 1;
  
  $query= "UPDATE college SET $txt = $value where collegeID=$id";
  mysqli_query($conn,$query);
  //header("refresh:0,url= template.php?collegeID=$id");
  }
  else
  {
  header("refresh:0,url= ../LOGIN/login.html");
  }
}

?>
<body>


<div class="p1head" >
<nav class="navbar navbar-inverse navbar-fixed-top" 
style=" background-color: #c44dff; border:none; padding:10px;font-size: 20px; ">
<div class="container-fluid">
  <div class="row">
    <div class="navbar-header" class="col-md-5">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:white;font-size:40px; 
      font-family:'Samarkan Normal';">INFOMENIA
        <i style="font-size: 15px;">Guide to your Career</i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" class="col-md-7">
      <ul class="nav navbar-nav"> 
        <li ><a href="../index.html" style="color:white; background-color: #009999; 
        border-radius:10px;" >Home</a></li>
        <li><a href="colleges.php" style="color:white;">Find College</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="hide">
       
       
      </ul>
    </div>
  </div>
  </div>
</nav>




  <div id="myCarousel" class="carousel slide" data-ride="carousel" class="col-md-12">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" >
      <div style="background-image : url(<?php echo $college['collegeCover']?>);  background-size: cover; background-attachment: fixed; width:100% ; height:400px;">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
 </div> 



   <div class="container" style="text-align: center; margin-bottom: 30px;">
    <div class="row">

       <div class="col-md-4"  id="cmtb">
      </div>
      <div class="col-md-4" id="cmtb"><img id="cmt" src="<?php echo $college['collegeProfile']?>" STYLE=' max-width:100%; height:200px;' >
      </div>
      <div class="col-md-4" id="cmtb">
      </div>

    </div>

  </div>
 
 <center><h1 id="collegeName"><?php echo $college['collegeName'] ?></h1></center>
 <div class='' style="background-color: lightyellow; padding:40px;text-align: center;">
 <h1 style="text-align: center; font-size:30px;">Reviews </h1>
<div class="row" style="margin-top:40px;margin-bottom: 10px;">
<?php
if($return->num_rows!=0)
{
  while($review=mysqli_fetch_assoc($return))
  {
  echo  "<div class='col-md-12' id='review' Style='border:0px solid black;box-shadow: 0px 20px 40px #888888;   margin : 0px 10px 0px 0px;'>"; 
  echo  "<center><h3 Style='border-bottom:1px solid black;box-shadow: 0px 2px 10px #888888; ' id='collegeName'>".$review['reviewerName']."</h3></center>";
  echo  "<p id='collegeName'>".$review['review']."</p>";
  echo   "</div>";
  echo   "<br>";
  }
}
else
{
 
  echo  "<div class='col-md-12' id='review' Style='border:0px solid black;box-shadow: 0px 20px 40px #888888;   margin : 0px 10px 0px 0px;'>"; 
  echo  "<p id='collegeName'>No reviews yet!</p>";
  echo   "</div>";
  echo   "<br>";
} 
?>
</div> 
  </div>
  
  <div class="col-md-12 " STYLE='margin : 20px;'>
      <form id="review" name ="FReview" method="get" action="template.php" style="margin-bottom: 30px; margin-left : 15%">             
        <input type="text" id="srchIn" style='text-align: center;' name ="review" placeholder='Enter your views' >
        <input type="hidden" name="collegeID" value="<?php echo $id ?>">
        <input class="btn btn-lg btn-primary" type="submit" name="submit1">
      </form>
  </div> 

  
  <div style="padding:40px;text-align: center;margin-bottom: 60px;"  >
   <p style="text-align: center; font-size:30px;"> </p>
    <div class="row " style="margin-top:40px;margin-bottom: 10px;">
      
      <div  class="col-md-5 shadow" id="user"> 
       <h1 Style="border-bottom:1px solid black;box-shadow: 0px 20px 40px #888888;  ">Vote a Branch</h1> 
       <div class="col-md-12" style="margin-top : 20px;">
      <form method"Get" action = "template.php">
        <input type="hidden" name="collegeID" value="<?php echo $id ?>" >
      <select class="form-control" id="city" name="branch">
        <option>comps</option>
        <option>it</option>
        <option>extc</option>
        <option>etrx</option>
        <option>mech</option>
      </select>
      <input class="btn btn-lg btn-primary" type="submit" name="submit2">
    </form> 
    </div>
      </div>
      
      <div class="col-md-2 " id="user"></div>

      <div  class="col-md-5 shadow" id="user"> 
       <h1 Style="border-bottom:1px solid black;box-shadow: 0px 20px 40px #888888;"> Address</h1>
       <h3 style="margin-top : 20px;"> <?php echo $college['collegeAddress'] ?></h3>
     </div>
  </div>
</div>
  
  

</body>

</html>
