<html>
<body>

<?php
$id=$_GET['Id'];

$username="root";
$password="";
$database="negi";
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM contacts WHERE Id=$id";
//echo $query;
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();
//echo $num;
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
//$phone=mysql_result($result,$i,"phone");
$mobile=mysql_result($result,$i,"mobile");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");
?>

<table >
<tr>
<td>
<form action="mysql_updated.php" method="post">
<input type="hidden" name="ud_id" value="<?php echo $id; ?>">
<table >
<tr>
<td>
First Name: </td><td><input type="text" name="ud_first" value="<?php echo $first; ?>"><br></td>
</tr>
<tr>
<td>
Last Name: </td><td><input type="text" name="ud_last" value="<?php echo $last; ?>"><br>
</td>
</tr>
<tr>
<td>
Mobile Number: </td><td><input type="text" name="ud_mobile" value="<?php echo $mobile; ?>"><br>
</td></tr><tr><td>Fax Number: </td><td><input type="text" name="ud_fax" value="<?php echo $fax; ?>"><br></td>
</tr>
<tr>
<td>
E-mail Address: </td><td><input type="text" name="ud_email" value="<?php echo $email; ?>"><br>
</td></tr>
<tr><td>
Web Address: </td><td><input type="text" name="ud_web" value="<?php echo $web; ?>"><br>
</td></tr><tr><td>&nbsp;</td><td><input type="Submit" value="Update"></td>
</tr>
</tr>
</form>

<?php
++$i;
}
?>
</body>
</html>