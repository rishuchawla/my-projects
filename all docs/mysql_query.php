<?php
$user="root";
$password="";
$database="negi";
mysql_connect(localhost,$user,$password);
mysql_select_db($database) or die( "Unable to select database");
$query = INSERT INTO contacts VALUES ('','John','Smith','987895656','00112 334455','01234567891','johnsmith@gowansnet.com','http://www.gowansnet.com');
mysql_query($query);
mysql_close();
?>

