<?php
session_start();
if(isset($_SESSION['name']))
{
 $user = array($_SESSION['name'], $_SESSION['branch'], $_SESSION['id'] );
}
else
{
 $user = array("9999", "9999","9999");
}


$myJSON = json_encode($user);

echo $myJSON;
?>