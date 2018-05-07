<?php
    session_start();
    $_SESSION["currPage"] = 3;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Virtual Labs </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" class="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="../../src/Styles.css" rel="stylesheet" />
        
        <script>
            $(document).ready(function(){
                $("#view").click(function(){
                    var count=0;
                    ////alert("clicked");
                    $("#optradio1Ans").fadeIn();
                    $('html, body').animate(
                    { scrollTop: $("#optradio1Ans").offset().top-300 }, 1000);
                    $('.optradio1').attr('disabled','disabled');
                    
                    var q1 = $('input[name=optradio1]:checked').val(); 
                    
                    if(q1==null)
                    {
                        q1="";
                    }

                    $('#ansQ1').append(q1);

                    if(q1=="B")
                    {
                       count=count+1;
                    }
                    
                
                    //alert("clicked");
                    $("#optradio2Ans").fadeIn();
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
                    $("#optradio3Ans").fadeIn();
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

                    if(q3=="D")
                    {
                       count=count+1;
                    }

                    $("#scoreDiv").fadeIn();
					//$("#prtn").fadeIn();
					
                    $('#score').text(count);
                   // alert(count);
                    
                });
            });
			
</script> 
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
                            <li class="active">Pre Test</li>
                        </ol>
                    </section>
                </nav>
            </header>
            <?php include 'pane.php'; ?>
            <!-- Content Wrapper. Contains page content -->
			
            <div class="content-wrapper" id="printable">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 align="center">
                        <?php echo $exp_name?>
                        <!-- Write your experiment name -->
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content" style="padding-bottom:5%; ">
                    <h3 style="margin-top:5%">Pre Test</h3>
                    <p class="MsoNormal" style="text-align:justify">
                        <!-- Pre Test content goes here -->
                        <div>
                            <h3>1. Which of the following is the truth table of NOT Gate?</h3>
                            <div class="radio">
                                <label><input type="radio" class="optradio1" name="optradio1" value="A" id="Q11">A<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td></tr>
                                            <tr><td>1</td><td>1</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio1" name="optradio1" value="B" id="Q12">B<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>1</td></tr>
                                            <tr><td>1</td><td>0</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio1" name="optradio1" value="C" id="Q13">C<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td></tr>
                                            <tr><td>1</td><td>0</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio1" name="optradio1" value="D" id="Q14">D<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>1</td></tr>
                                            <tr><td>1</td><td>1</td></tr>
                                            </table></label>
                            </div>
                            <p id="optradio1Ans" class="testAns" style="display:none;">
                            <span id="ansQ1">Your ans: &nbsp;</span>
                             <span style="color:#00b8e6;">
                             &nbsp; &nbsp; Correct ans: B <br>Explanation :
                             o/p is reverse of i/p </span></p>
                             
                        </div>
                        
                        <div>
                            <h3>2. Two inputs to AND Gate are 0 and 1 respectively. Which of the following will be the output of the AND Gate?</h3>
                            <div class="radio">
                                <label><input type="radio" class="optradio2" name="optradio2" value="A" id="Q21">A. 0</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio2" name="optradio2" value="B" id="Q22">B. 1</label>
                            </div>
                            <p id="optradio2Ans" class="testAns" style="display:none;">
                            <span id="ansQ2">Your ans: &nbsp;</span><span 
                            style="color:#00b8e6;">
                             &nbsp; &nbsp; Correct ans: A <br> Explanation :
                             o/p is reverse of i/p </span> </p>
                        </div>

                        <div>
                            <h3>3. Which of the following is the truth table of OR Gate?</h3>
                            <div class="radio">
                                <label><input type="radio" class="optradio3" name="optradio3" value="A" id="Q31">A<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P #1</th><th>I/P #2</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td><td>0</td></tr>
                                            <tr><td>0</td><td>1</td><td>1</td></tr>
                                            <tr><td>1</td><td>0</td><td>1</td></tr>
                                            <tr><td>1</td><td>1</td><td>0</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio3" name="optradio3" value="B" id="Q32">B<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P #1</th><th>I/P #2</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td><td>1</td></tr>
                                            <tr><td>0</td><td>1</td><td>0</td></tr>
                                            <tr><td>1</td><td>0</td><td>0</td></tr>
                                            <tr><td>1</td><td>1</td><td>0</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio3" name="optradio3" value="C" id="Q33">C<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P #1</th><th>I/P #2</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td><td>1</td></tr>
                                            <tr><td>0</td><td>1</td><td>1</td></tr>
                                            <tr><td>1</td><td>0</td><td>1</td></tr>
                                            <tr><td>1</td><td>1</td><td>0</td></tr>
                                            </table></label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" class="optradio3" name="optradio3" value="D" value="D" id="Q34">D<table class="table-condensed truthTable" style="text-align: center;">
                                            <tr><th>I/P #1</th><th>I/P #2</th><th>O/P</th></tr>
                                            <tr><td>0</td><td>0</td><td>0</td></tr>
                                            <tr><td>0</td><td>1</td><td>1</td></tr>
                                            <tr><td>1</td><td>0</td><td>1</td></tr>
                                            <tr><td>1</td><td>1</td><td>1</td></tr>
                                            </table></label>
                            </div>
                            <p id="optradio3Ans" class="testAns" style="margin-bottom:20px;display:none;">
                             <span id="ansQ3">Your ans: &nbsp; </span>
                             &nbsp; &nbsp;<span style="color:#00b8e6;"> Correct ans: D
                             </span><br><span style="color:#00b8e6;"> Explanation :
                             o/p is reverse of i/p </span></p>
                        </div>
                     
                      <div>
                        <button style="float:right;" type="button" name="submit" id="view" class="btn btn-primary"> view Answers </button> 
                         <button class="btn btn-success" style="float:right;margin-right:10px;" id="prtn" onclick="window.print()"> Print this </button>
                        <div disabled id="scoreDiv" class="label label-success label-medium" style="padding:1%;display: none; float:left;" >
                         <span style="color:white">
                           Your score is : &nbsp;<span id="score" style="font:20px;
                            color:white;"> 
                          </span>&nbsp; out of &nbsp; <span style="color:white"> 3
                          </span>
                          </span>
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
<script src="../jQuery.print.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

