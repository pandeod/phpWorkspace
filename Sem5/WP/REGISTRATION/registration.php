<?php
echo $_POST["name"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["pwd"];
echo "<br>";
echo $_POST["branch"];
echo "<br>";
echo $_POST["city"];
echo "<br>";
if(!isset($_POST["checkpass"]))
{
  echo "haven't Passed 12th";
}
else
{
echo "passed";  
}

echo "<br>";
echo $_POST["percent"];
echo "<br>";

?>