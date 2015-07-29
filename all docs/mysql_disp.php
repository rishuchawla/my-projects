<?php
$username="root";
$password="";
$database="negi";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM contacts";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
//$phone=mysql_result($result,$i,"phone");
$mobile=mysql_result($result,$i,"mobile");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");

echo "<b>Name : $first $last</b><br><br><b>Mobile : </b>$mobile<br><b>Fax : </b>$fax<br><b>E-mail : </b>$email<br><b>Web : </b>$web<br><hr><br>";

$i++;
}

?>