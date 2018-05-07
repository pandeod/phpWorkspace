<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin login </title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">ZENTRO</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#gallery" class="smoothScroll">FOOD GALLERY</a></li>
				<li><a href="#menu" class="smoothScroll">SPECIAL MENU</a></li>
				<li><a href="#team" class="smoothScroll">CHEFS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Admin LogIn</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="p3.php" method="post">
				<div class="col-md-6 col-sm-6">
				<input type="text" placeholder="Admin ID" name="aID" class="form-control"> 
				<br><br>
	<input type="password" placeholder="password" name="pwd" class="form-control"> <br><br>
	</div>
	<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
	<button type="submit" name="submit" class="form-control">SUBMIT</button>
	</div>
  </form>
				
				
			</div>
		</div>
	</div>		
</section>

<?php
if(isset($_POST['submit']))
{
	  $aID=$_POST['aID'];
	  $pwd=$_POST['pwd'];
	 
	 session_start();
	 
	 $db=mysqli_connect('localhost','root','','restaurant') or die("Error connecting to database");
     
	 $sql="select * from admin where adminID='$aID'";
     $result=mysqli_query($db,$sql);
	 $row=mysqli_fetch_array($result);

    if($row!=NULL)
    {
	    if($row['pwd']==$pwd)
	   {   
		  $_SESSION["adminID"]=$aID;
		echo "<script>alert('Log In Successfull')</script>";
		sleep(1);
		 header("Location: p3.php"); 
		exit();	 
	   }
	   else
	   {    
		sleep(1);
		echo "<script>alert('Enter valid details')</script>";
	   }
    }
    else
   {  
     echo "<br><br><br>Enter valid details..to try again click<a href='adminLogin.php'>here</a> ";
   }
} 
   ?>




<!-- footer section -->
<footer class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Contact Info.</h2>
				<div class="ph">
					<p><i class="fa fa-phone"></i> Phone</p>
					<h4>090-080-0760</h4>
				</div>
				<div class="address">
					<p><i class="fa fa-map-marker"></i> Our Location</p>
					<h4>120 Duis aute irure, California, USA</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Open Hours</h2>
					<p>Sunday <span>10:30 AM - 10:00 PM</span></p>
					<p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
					<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Follow Us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>Digi Dine</h3>
				<p>Copyright © Digidine Restaurant and Cafe 
                
                | Design: <a rel="nofollow" href="#" target="_parent">branding CATALYST</a></p>
			</div>
		</div>
	</div>
</section>



<!-- JAVASCRIPT JS FILES -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>