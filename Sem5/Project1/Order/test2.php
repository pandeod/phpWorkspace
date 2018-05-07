<html>
<body>
<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user = postgres password=admin";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from books;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
?>
<table>
<tr>
  <th>ID</th>
  <th>NAME</th>
  <th>AUTHOR</th>
  <th>Edition</th>
</tr>
<?php
   while($row = pg_fetch_row($ret)) {
?> <tr>
     <td><?php echo $row[0]; ?></td>
	 <td><?php echo $row[1]; ?></td>
	 <td><?php echo $row[2]; ?></td>
	 <td><?php echo $row[3]; ?></td>
   </tr>  
<?php   
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>
</table>
</body>
</html>