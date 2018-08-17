<?php
    include 'include/newclass.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Object Oriented Programing PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

        $f="Argument First passed in constructor";
        $object=new NewClass($f);

        // unset($object);  to destroy object

        echo $object;  //echo on object calls __toString() method which returns String  

        echo "<br>";

        echo $object->any_var."<br>";   // print object variable
        echo $object->getPrivate()."<br>";  //call object method

        echo "Static variable is";

        echo NewClass::$static_var; //print static variable use :: and $

        echo "<br><br>";

        echo "Static Method called , static variable is";

        echo NewClass::getStaticVariable(); // static method call... see static variable accessed in method

        echo "<br><br>";
    ?>
</body>
</html>