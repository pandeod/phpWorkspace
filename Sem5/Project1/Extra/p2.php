
<html>
 <head>
   <title> Order MENU </title>
 </head> 
 <body>
 <center>
 <h2>
 <?php
  session_start();
  echo "Welcome  Mr. ".$_SESSION['userID'];
  ?>
  </h2>
  
  <h1> MENU ITEMS </h1>
   <form method="get">
      Menu 1 :
      <select name="m1">
	    <option selected value="0">0</option>
	    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	  </select>  <br><br>
	  
	  Menu 2 :
      <select name="m2">
	    <option selected value="0">0</option>
	    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	  </select>  <br><br>
	  
	  Menu 3 :
      <select name="m3">
	    <option selected value="0">0</option>
	    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	  </select>  <br><br>
	  
	  <button type="submit" name="bill">Total Bill</button> 
   </form>
   <?php
     
	 $db=mysqli_connect('localhost','root','','menuorder') or die("Error connecting to database");
     $sql="select * from menuprice";
     $result=mysqli_query($db,$sql);
	 
	 while($row=mysqli_fetch_array($result))
     {  
	    
		
	 if(isset($_GET['bill']))
	 {
		 $total=$_GET['m1']*$p1+$_GET['m2']*$p2+$_GET['m3']*$p3;
		 if($total==0)
		 {
			 echo "Add atleast one item";
		 }
		 else
		 {
			 echo "Your bill is : $".$total;
			 echo "<form method='post'><input type='submit' name='order' value='Order Now'></form>";
             if(isset($_POST['order']))
			 {
			    $_SESSION['orderConfirm']="Confirmed";
				// header("Location:p3.php");
				
				$table=$_SESSION['user'];
				$q1=$_GET['m1'];
				$q2=$_GET['m2'];
				$q3=$_GET['m3'];
				
              $db=mysqli_connect('localhost','root','','menuorder') or die("Error connecting to database");

              $order="Insert into orderDetails(tableNo,menu1,menu2,menu3,bill) 
               values('$table','$q1','$q2','$q3','$total')";
               $result=mysqli_query($db,$order);

              if($result)
              {
               echo "Data added successfully !!!!";
               $table=$q1=$q2=$q3=$total="";
               }
             else
               {
                 echo "ERROR !!!";
               }

				 
			 }	
             else
		     {
				 $_SESSION['orderConfirm']="NOT Confirmed";
			 } 
		 }
	 }
  }
	 
   ?>
   
   </center>
</html>