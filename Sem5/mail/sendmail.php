<?php
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>
<?php
  if($fname=="" || $lname=="" || $visitor_email=="" || $message=="" ){
   header("Location:contact.html");
   exit();
  }	  
  if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
   header("Location:contact.html");
   exit();
  }
  if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
   header("Location:contact.html");
   exit();
  }
  $email = test_input($visitor_email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   header("Location:contact.html");
   exit();
  }
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
	$email_from = "onkarpande70@gmail.com";

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user".$fname." ".$lname."\n Here is the message:\n ".$message;
?>
<?php

  $to = "onkarpande70@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>