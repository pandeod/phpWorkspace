<?php
    
    include 'include/calculate.inc.php';

    if(isset($_POST['sub']))
    {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['op'];

        if($num1!=0 && $num2!=0)
        {
            $obj=new Calculate($num1,$num2,$op);
            $result=$obj->calc();
            echo $result;
        }
        else
        {
            $result="Zero input not allowed";
            echo $result;
        }
    }
?>