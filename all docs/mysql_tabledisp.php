
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Mobile</font></th>
<th><font face="Arial, Helvetica, sans-serif">Fax</font></th>
<th><font face="Arial, Helvetica, sans-serif">E-mail</font></th>
<th><font face="Arial, Helvetica, sans-serif">Website</font></th>
</tr>
<?php
$username="root";
$password="";
$database="negi";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM contacts";
$result=mysql_query($query);

$num=mysql_numrows($result);
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

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $first." ".$last; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $mobile; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $fax; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $email; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $web; ?></font></td>
</tr>

<?php
$i++;
}

?>
</table>
