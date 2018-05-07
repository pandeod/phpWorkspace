<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find College</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<script type="text/javascript">
	$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});
</script>
</head>
<?php
session_start();

$conn=mysqli_connect('localhost:3306','root','','infomania');
if(!isset($_SESSION['name']))
{
  $query= "SELECT * from college ";
  $return1 = mysqli_query($conn,$query);
  $return2="";
  mysqli_close($conn);
}
else
{
  $city = $_SESSION['city'];
  $branch = $_SESSION['branch'];
  $query= "SELECT * from college GROUP BY collegeID HAVING collegeCity='$city' ORDER BY $branch DESC";
  $return1 = mysqli_query($conn,$query);
  $query = "SELECT * from college where collegeCity!='$city'";
  $return2 =mysqli_query($conn,$query);
  mysqli_close($conn);
  //$query =" SELECT * FROM (SELECT * FROM college where collegeCity='MUMBAI') ORDER BY it DESC as a";
  //$return = mysqli_query($conn,$query);
  //$query =" SELECT * FROM college ORDER BY it DESC having ";
  //$query = "SELECT * FROM college where collegeCity= '$city' and collegeID in (SELECT collegeID FROM college ORDER BY $branch DESC)";
}
 
?>

<body style="background-color: lightgreen;">

<div class="p5head" >

<nav class="navbar shadow navbar-inverse navbar-fixed-top" 
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
      font-family:'samarkannormal';">INFOMENIA
        <i style="font-size: 15px;">Guide to your Career</i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" class="col-md-7">
      <ul class="nav navbar-nav"> 
        <li ><a href="../index.html" style="color:white;">Home</a></li>
        <li><a href="../COLLEGES/colleges.php" style="color:white; background-color: #009999; border-radius:10px;">Find College</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="hide">
       
      </ul>
    </div>
  </div>
  </div>
</nav>
 </div> 

<!-- Begin Content in the page -->



<div class="row" style="margin:0px;">		
 

<!-- Search Result here -->
         
 

</div>


<!--Begin Layout college search -->
          


<?php
if($return1)
      {
        $row = $return1->num_rows;

        if($row != 0) 
        {
          while($college=mysqli_fetch_assoc($return1))
          {
            echo "<center>";
            echo "<a href='template.php?collegeID=".$college['collegeID']."'> ";
            echo "<div style='background-color: white;height:300px;width:80%;'>";
            echo "<div class='shadow' style='margin:0px;float: left;width:25%;height:100%; background-color:lightblue; border:2px solid black;'>";
            echo "<img id='coolegeProfile' src='".$college['collegeProfile']."' STYLE='max-width:100%; height:100%;' alt='College PRofile pic'>";
            echo "</div>";
            echo "<div class='shadow row' style='float: left; width:75%;height:100%;margin:0px; background-color:lightyellow;border:2px solid black;'>";
            echo "<div class='col-md-2' style='float: middle;height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<br>";
            echo "<div  class='col-md-8 shadow' style='z-index: 1; height:30%;margin:0px; background-color:pink;border:2px solid black;'>";
            echo "<h1 id='collegeName' STYLE='color:black;'>".$college['collegeName']."</h1>";
            echo "</div>";
            echo "<div class='col-md-2' style='float: middle; height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>BRANCH</h6>";
            $max = 0;
            $cBranch = array($college['comps'], $college['it'],$college['extc'],$college['etrx'],$college['mech']);  
            
            for($i=0; $i<5; $i++)
            {
               if($cBranch[$i]>$max)
               {
                $max = $i;
               } 
            }

            if($max==0)
            {
              $max="COMPS";
            }
            if($max==1)
            {
              $max="IT";
            }
            if($max==2)
            {
              $max="EXTC";
            }
            if($max==3)
            {
              $max="ETRX";
            }
            if($max==4)
            {
              $max="MECH";
            }
            
            
            
            echo "<h2 id='collegeBranch' STYLE='color:black;'>".$max."</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1; height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CITY</h6>";
            echo "<h2 id='collegeCity' STYLE='color:black;'>".$college['collegeCity']."</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px;background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CONTACT</h6>";
            echo "<h6 id='collegeFees' STYLE='color:black;'>".$college['contact']."</h6>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "<center>";
            echo "<br>";

          }
        } 
        else 
        {
             echo "<center>";
            echo "<a href='''> ";
            echo "<div style='background-color: white;height:300px;width:80%;'>";
            echo "<div class='shadow' style='margin:0px;float: left;width:25%;height:100%; background-color:lightblue; border:2px solid black;'>";
            echo "<img id='coolegeProfile' src='' STYLE='max-width:100%; height:100%;' alt='College PRofile pic'>";
            echo "</div>";
            echo "<div class='shadow row' style='float: left; width:75%;height:100%;margin:0px; background-color:lightyellow;border:2px solid black;'>";
            echo "<div class='col-md-2' style='float: middle;height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<br>";
            echo "<div  class='col-md-8 shadow' style='z-index: 1; height:30%;margin:0px; background-color:pink;border:2px solid black;'>";
            echo "<h1 id='collegeName' STYLE='color:black;'>Not Loaded</h1>";
            echo "</div>";
            echo "<div class='col-md-2' style='float: middle; height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>BRANCH</h6>";
            $max = 0;
            $cBranch = array($college['comps'], $college['it'],$college['extc'],$college['etrx'],$college['mech']);  
            
            for($i=0; $i<5; $i++)
            {
               if($cBranch[$i]>$max)
               {
                $max = $i;
               } 
            }

            if($max==0)
            {
              $max="COMPS";
            }
            if($max==1)
            {
              $max="IT";
            }
            if($max==2)
            {
              $max="EXTC";
            }
            if($max==3)
            {
              $max="ETRX";
            }
            if($max==4)
            {
              $max="MECH";
            }
            
            
            
            echo "<h2 id='collegeBranch' STYLE='color:black;'>Not Loaded</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1; height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CITY</h6>";
            echo "<h2 id='collegeCity' STYLE='color:black;'>Not Loaded</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px;background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CONTACT</h6>";
            echo "<h6 id='collegeFees' STYLE='color:black;'>Not Loaded</h6>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "<center>";
            echo "<br>";
   
        }
       } 
     

     if($return2)
      {
        $row = $return2->num_rows;

        if($row != 0) 
        {
          while($college=mysqli_fetch_assoc($return2))
          {
            echo "<center>";
            echo "<a href='template.php?collegeID=".$college['collegeID']."'> ";
            echo "<div style='background-color: white;height:300px;width:80%;'>";
            echo "<div class='shadow' style='margin:0px;float: left;width:25%;height:100%; background-color:lightblue; border:2px solid black;'>";
            echo "<img id='coolegeProfile' src='".$college['collegeProfile']."' STYLE='max-width:100%; height:100%;' alt='College PRofile pic'>";
            echo "</div>";
            echo "<div class='shadow row' style='float: left; width:75%;height:100%;margin:0px; background-color:lightyellow;border:2px solid black;'>";
            echo "<div class='col-md-2' style='float: middle;height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<br>";
            echo "<div  class='col-md-8 shadow' style='z-index: 1; height:30%;margin:0px; background-color:pink;border:2px solid black;'>";
            echo "<h1 id='collegeName' STYLE='color:black;'>".$college['collegeName']."</h1>";
            echo "</div>";
            echo "<div class='col-md-2' style='float: middle; height:30%;margin:0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>BRANCH</h6>";
            $max = 0;
            $cBranch = array($college['comps'], $college['it'],$college['extc'],$college['etrx'],$college['mech']);  
            
            for($i=0; $i<5; $i++)
            {
               if($cBranch[$i]>$max)
               {
                $max = $i;
               } 
            }

            if($max==0)
            {
              $max="COMPS";
            }
            if($max==1)
            {
              $max="IT";
            }
            if($max==2)
            {
              $max="EXTC";
            }
            if($max==3)
            {
              $max="ETRX";
            }
            if($max==4)
            {
              $max="MECH";
            }
            
            
            
            echo "<h2 id='collegeBranch' STYLE='color:black;'>".$max."</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1; height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CITY</h6>";
            echo "<h2 id='collegeCity' STYLE='color:black;'>".$college['collegeCity']."</h2>";
            echo "</div>";
            echo "<div class='col-md-1' style='height:30%;margin:50px 0px 0px 0px;background-color:lightyellow;'>";
            echo "</div>";
            echo "<div class='col-md-2 shadow' style=' z-index: 1;height:30%;margin:50px 0px 0px 0px; background-color:pink;border:2px solid black;'>";
            echo "<h6 STYLE='color:black;'>CONTACT</h6>";
            echo "<h6 id='collegeFees' STYLE='color:black;'>".$college['contact']."</h6>";
            echo "</div>";
            echo "<div class='col-md-2' style='height:30%;margin:50px 0px 0px 0px; background-color:lightyellow;'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            echo "<center>";
            echo "<br>";

          }
       }
     }       

?>
             


<!--End Layout college search -->  

<!-- End Content in the page -->
</body>
<footer id="f" style="background-color: #dd99ff">
  <div class="row">

      <div class="col-md-4" id="cmtb">

        <a href="https://twitter.com/_CareerGuide?lang=en" id="fn1"><div style="display:block; background-color:grey; font-weight: bold;"><img src="../CACHE/twitter.jpg" 
          style="margin-left: 1px;" height="60" width="59">&nbsp; &nbsp;  @infomenia
        </div></a>

        <a href="https://www.facebook.com/GameCareerGuide/" id="fn1"><div style="display:block; background-color: grey;font-weight: bold;"><img src="../CACHE/facebook.jpg" 
         style="margin-left: 1px;" height="60" width="60">&nbsp; &nbsp; &nbsp; infomenia
       </div></a>

        <a href="https://plus.google.com/+prospects" id="fn1"><div style="display:block; background-color: grey;font-weight: bold;"><img src="../CACHE/g+.jpg" 
        style="margin-left: 1px;"  height="60" width="60">&nbsp; &nbsp; +infomenia</div></a>
      </div>

      <div class="col-md-4" id="cmtb" >
              <br>
             <ul style="text-align: center; text-decoration:none; ">
              <li><a href="../index.html" id="fn2">Home</a></li><br>
              <li><a href="../COLLEGES/colleges.html" id="fn2">Find College</a></li><br>
              <li><a href="p3.html" id="fn2">Write Review</a></li><br>
              <li><a href="p4.html" id="fn2">Support</a></li><br>
             </ul>
            
      </div>

      <div class="col-md-4" id="cmtb">
        <h3 style="margin-top: 0px;">INFOMENIA&nbsp;<small>Guide to your career</small> 
        </h3>
        <h4>Infomenia Inc.</h4>
        <address>
          Vidyavihar 77 , Mumbai <br>
          Maharashtra
        </address>
        <button type="button" class="btn btn-info"><a href="mailto:support@infomenia.com" style="text-decoration: none; color:white;">Email us</a></button>
      </div>
    </div>
    
</footer>
</html>
