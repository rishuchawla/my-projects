<?php
$id=$_GET['Id'];

$username="root";
$password="";
$database="negi";
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="DELETE * FROM contacts WHERE Id=$id";
echo $query;
mysql_query($query);

mysql_close();
?>