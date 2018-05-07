<?php
    session_start();
    $_SESSION["currPage"] = 7;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Virtual Labs </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        
        
        <!-- jQuery 2.2.3 -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="../../src/Styles.css" rel="stylesheet" />
        
        <script>
            $(document).ready(function(){
                $("#view").click(function(){
                    var count=0;
                    ////alert("clicked");
					
					
										document.onmousewheel = function(){ stopWheel(); } /* IE7, IE8 */
					if(document.addEventListener){ /* Chrome, Safari, Firefox */
                     document.addEventListener('DOMMouseScroll', stopWheel, false);
                     }
					 
					 function stopWheel(e){
                    if(!e){ e = window.event; } /* IE7, IE8, Chrome, Safari */
                     if(e.preventDefault) { e.preventDefault(); } /* Chrome, Safari, Firefox */
                      e.returnValue = false; /* IE7, IE8 */
                     }  
					
					
                    $("#optradio1Ans").slideDown();
                    $('html, body').animate(
                    { scrollTop: $("#optradio1Ans").offset().top-300 }, 1000);
                    $('.optradio1').attr('disabled','disabled');
                    
                    var q1 = $('input[name=optradio1]:checked').val(); 
                    
                    if(q1==null)
                    {
                        q1="";
                    }

                    $('#ansQ1').append(q1);

                    if(q1=="D")
                    {
                       count=count+1;
                    }
                    
                
                    //alert("clicked");
                    $("#optradio2Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio2Ans").offset().top-300
                    }, 1000);
                    $('.optradio2').attr('disabled','disabled');

                    var q2 = $('input[name=optradio2]:checked').val(); 

                    if(q2==null)
                    {
                        q2="";
                    }

                    $('#ansQ2').append(q2);

                    if(q2=="A")
                    {
                       count=count+1;
                    }
                
                    //alert("clicked");
                    $("#optradio3Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio3Ans").offset().top-300
                    }, 1000);
                    $('.optradio3').attr('disabled','disabled');

                    var q3 = $('input[name=optradio3]:checked').val();

                    if(q3==null)
                    {
                        q3="";
                    } 

                    $('#ansQ3').append(q3);

                    if(q3=="C")
                    {
                       count=count+1;
                    }
					
					//alert("clicked");
                    $("#optradio4Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio4Ans").offset().top-300
                    }, 1000);
                    $('.optradio4').attr('disabled','disabled');

                    var q4 = $('input[name=optradio4]:checked').val();

                    if(q4==null)
                    {
                        q4="";
                    } 

                    $('#ansQ4').append(q4);

                    if(q4=="D")
                    {
                       count=count+1;
                    }
					
					

                    $("#scoreDiv").slideDown();

                    $('#score').text(count);
                   // alert(count); 
				   
				   
				    document.onmousewheel = null;  /* IE7, IE8 */
if(document.addEventListener){ /* Chrome, Safari, Firefox */
    document.removeEventListener('DOMMouseScroll', stopWheel, false);
}				

                });    
                 
                 
            });
        </script>
    <style type="text/css">
        .label-medium {
         vertical-align: super;
          font-size: large;
       }
    </style>
		
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        
        
        <?php
            include '../../common/header.html';
            include 'lab_name.php';
            $lab_name = $_SESSION['lab_name'];
            $exp_name = $_SESSION['exp_name'];
            ?>
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../explist.php" class="logo">
                    <p align="center" style="font-size:1em;">
                        <b>
                            <?php echo $lab_name?><!-- Write your lab name -->
                        </b>
                    </p>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <section class="content-header">
                        <ol class="breadcrumb">
                            <li>
                                <a href="../explist.php">
                                    <i class="fa fa-dashboard"></i><?php echo $lab_name?><!-- Write your lab name -->
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo $exp_name?><!-- Write your experiment name -->
                                </a>
                            </li>
                            <li class="active">Post Test</li>
                        </ol>
                    </section>
                </nav>
            </header>
            <?php include 'pane.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 align="center">
                        <?php echo $exp_name?>
                        <!-- Write your experiment name -->
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content" style="padding-bottom:5%;>
                    <h3 style="margin-top:5%">Post Test</h3>
                    <p class="MsoNormal" style="text-align:justify">
					  
                        <!-- Post Test content goes here -->
                        <h3>1. Why is the XOR problem exceptionally interesting to neural network researchers?</h3>

                        <input type="radio" class="optradio1" name="optradio1" value="A">A. Because it can be expressed in a way that allows you to use a neural network<br>
                        <input type="radio" class="optradio1" name="optradio1" value="B">B. Because it is complex binary operation that cannot be solved using neural networks<br>
                        <input type="radio" class="optradio1" name="optradio1" value="C">C. Because it can be solved by a single layer perceptron<br>
                        <input type="radio" class="optradio1" name="optradio1" value="D">D. Because it is the simplest linearly inseparable problem that exists<br>
                        <br />
						<p id="optradio1Ans" class="testAns" style="display:none;">
                        <span id="ansQ1">Your ans: &nbsp;</span>
                        <span style="color:#00b8e6;"> &nbsp; &nbsp; Correct ans: D <br>Explanation :
                         o/p is reverse of i/p </span></p>
                        
                        <h3>2. What is back propagation?</h3>
                    
                        <input type="radio" class="optradio2" name="optradio2" value="A"> A. It is another name given to the curvy function in the perceptron<br>
                        <input type="radio" class="optradio2" name="optradio2" value="B"> B. It is the transmission of error back through the network to adjust the inputs<br>
                        <input type="radio" class="optradio2" name="optradio2" value="C"> C. It is the transmission of error back through the network to allow weights to be adjusted so that the network can learn<br>
                        <input type="radio" class="optradio2" name="optradio2" value="D"> D. None of the mentioned<br>

                        <br />
						<p id="optradio2Ans" class="testAns" style="display:none;">
                        <span id="ansQ2">Your ans: &nbsp;</span>
                        <span style="color:#00b8e6;"> &nbsp; &nbsp; Correct ans: A <br>Explanation :
                        o/p is reverse of i/p </span></p>
                        

                        <h3>3. What type of learning algorithm is used in EBPMLP?</h3>
                    
                        <input type="radio" class="optradio3" name="optradio3" value="A"> A. Supervised learning<br>
                        <input type="radio" class="optradio3" name="optradio3" value="B"> B. Reinforcement learning<br>
                        <input type="radio" class="optradio3" name="optradio3" value="C"> C. Active learning<br>
                        <input type="radio" class="optradio3" name="optradio3" value="D"> D. Unsupervised learning<br>      

                        <br />
						<p id="optradio3Ans" class="testAns" style="display:none;">
                        <span id="ansQ3">Your ans: &nbsp;</span>
                        <span style="color:#00b8e6;"> &nbsp; &nbsp; Correct ans: C <br>Explanation :
                        o/p is reverse of i/p </span></p>
                            
                        <h3>4. What effect does the learning rate have?</h3>

                        <input type="radio" class="optradio4" name="optradio4" value="A"> A. Always increases the rate of change of weights<br>
                        <input type="radio" class="optradio4" name="optradio4" value="B"> B. Always decreases the rate of change of weights<br>
                        <input type="radio" class="optradio4" name="optradio4" value="C"> C. Increases the rate if value too high and decreases the rate if value too low<br>
                        <input type="radio" class="optradio4" name="optradio4" value="D"> D. No effect<br>

                        <br />
						<p id="optradio4Ans" class="testAns" style="display:none;">
                        <span id="ansQ4">Your ans: &nbsp;</span>
                        <span style="color:#00b8e6;"> &nbsp; &nbsp; Correct ans: D <br>Explanation :
                        o/p is reverse of i/p </span></p>

                        <br><br>
                        <b>Hints:- Try these values and verify that you get the correct output.</b>
                        <br><br><b>1. MLP: </b><br>W11 = W12 = W21 = W22 = 1,<br> b1 = 1.5, b2 = 0.5 and b3 = 0.5,<br> V1 = -2 and V2 = 1.
                        <br><br><b>2. EBP: </b><br>W11 = 1, W12 = -1, W21 = 2 and W22 = 3,<br>b1  = b2 = b3 = -1, <br> V1 = -1 and V2 = -2,<br>Learning rate = 0.75 and No. of iterations = 10,00,000.
                        <br><br>
						
					 <div>
                        <button style="float:right;" type="button" name="submit" id="view" class="btn btn-primary"> view Answers </button>     
                        <div disabled id="scoreDiv" class="label label-success label-medium" style="padding:1%;display: none; float:left;" >
                          &nbsp; Your score is : <span id="score"> </span> out of 4
                        </div>  
                      </div>
					
					</p>
                </section>
                <!-- /.content -->
        
        </div>
            
            <?php include 'footer.html'; ?>
            <!-- /.content-wrapper -->
            </div>
    </body>
</html>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>