<?php
$ud_id=$_POST['ud_id'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
//$ud_phone=$_POST['ud_phone'];
$ud_mobile=$_POST['ud_mobile'];
$ud_fax=$_POST['ud_fax'];
$ud_email=$_POST['ud_email'];
$ud_web=$_POST['ud_web'];

$username="root";
$password="";
$database="negi";
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

$query="UPDATE contacts SET First='$ud_first', Last='$ud_last', Mobile='$ud_mobile', Fax='$ud_fax', Email='$ud_email', Web='$ud_web' WHERE Id='$ud_id'";
mysql_query($query);
echo "Record Updated";
mysql_close();
?>