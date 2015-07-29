<html>
<body>
//validation
<?php
require_once('functions.php');
$valid=TRUE;
if(isset($_POST['submit']))
{
	foreach($_POST as $key=>$value)
	{
		$$key=$value;
	}
	$valid=$fn=checklength($fname,1,30);
	$ln=checklength($lname,1,30);
	$valid=$valid && $ln;
	$em=checkemail($email);
	$valid=$valid && $em;
	$ps=checkpassword($password);
	$valid=$valid && $ps;
	$ps2=$password == $password2;
	$valid=$valid && $ps2;
	
	$zp=checkmail($zipcode,'US');
	$valid=$valid && $zp;
	if($valid)
	{
		echo "form filled successfully!";
		exit;
	}
}
else
{
	$fn= $ln=$em=$ps=$ps2=$hp=$zp=TRUE;
	$fname=$lname=$email=$zipcode=$omepage="";
}
?>
<?php
if(!$valid){
?>
<style type="text/css">
td.error
{
	color:#F00;
	font-weight:bold;
}
</style>
please correct the item in red and resubmit.<br /><br />
<?php
}
?>
<form method="POST" action="validation.php">
<table border>
<tr>
<td colspan="2">please fill out the form for registration.<br/><br/>
password should be a minimum of 8 character<br/>
they should be composed of numbers and with a number <br/>
somewhere in middle.you should also avoid using the same<br/> character repeatedly.<br/><br/>
your homepage should begin with <b> http://</b><br/>
<br/><br/></td></tr>
<tr>
<td align="right" <?php if(!$fn)echo 'class="error"';?>>
First Name:
</td>
<td>
<input type="text" name="fname" size="30" value="<?php echo $fname?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!$ln)echo 'class="error"'?>>
Last Name:
</td>
<td>
<input type="text" name="lname" size="30" value="<?php echo $lname?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!$em) echo 'class="error"';?>>
Email Adress:
</td>
<td>
<input type="text" name="email" size="30" value="<?php echo $email?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!($ps && $ps2)) echo 'class="error"';?>>
password:
</td>
<td>
<input type="password" name="password" size="10" >
</td>
</tr>
<tr>
<td align="right" <?php if(!$em) echo 'class="error"';?>
password again:
</td>
<td>
<input type="password" name="password2" size="10" >
</td>
</tr>
<tr>
  <td align="right" value="<?php if(!$zp) echo 'class="error"'; ?>">
  Zip Code:
  </td>
  <td>
  <input type="text" name="zipcode" size="10" value="<?php echo $zipcode ?>">
  </td>
</tr>


<tr>
  <td align="right">&nbsp;</td>
  <td>
  <input type="SUBMIT" name="submit" value="Submit">
  </td>
</tr>
</table>
</form> 

</body>
</html>
