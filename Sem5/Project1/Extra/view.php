<?php
 echo "Here is image";
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'codexworld';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image FROM images WHERE id ='4'");
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
		echo "Here is your image";
        
		echo $imageData;
?>