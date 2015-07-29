<html>
<body>
<form action="<?php $_SERVER['php_SELF'] ?> "  method="post">
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>First Name : </td>
<td><input type="text" name="first"><br></td>
</tr>
<tr>
<td>
Last Name : </td><td><input type="text" name="last"><br>
</td>
</tr>
<tr>
<td>
Mobile No. : </td><td><input type="text" name="mobile"><br>
</td>
</tr><tr><td>Fax : </td><td><input type="text" name="fax"><br></td></tr>
<tr><td>
E-mail : </td><td><input type="text" name="email"><br></td>
</tr>
<tr>
<td>
Web : </td><td><input type="text" name="web"><br>
</td></tr><tr>
<td>&nbsp;  </td><td><input type="Submit"></td></tr></table>
</form>

<?php
$username="root";
$password="";
$database="negi";

$first=$_POST['first'];
$last=$_POST['last'];
//$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO contacts VALUES ('','$first','$last','$mobile','$fax','$email','$web')";
mysql_query($query);

mysql_close();
?>


</body>
</html>