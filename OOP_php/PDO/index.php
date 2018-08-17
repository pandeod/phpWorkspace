<?php
    include 'includes/db.inc.php';
    include 'includes/user.inc.php';
    //include 'includes/viewuser.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database connection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $obj=new PDOConnection();
        $obj->connect();
        //$object=new ViewUser();
        //$object->showAllUsers();
        //print_r(PDO::getAvailableDrivers());                to get list of available drivers
    ?>
</body>
</html>