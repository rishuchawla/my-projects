<html>
<body>
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
	$a=digit($age);
	$valid=$valid && $a;
	$em=checkemail($email);
	$valid=$valid && $em;
	$com=checklength($comment,1,250);
	$valid=$valid && $com;
	if($valid==1)
	{
		echo "form filled successfully!";
		exit;
	}
}
else
{
	$fn=$ln=$a=$com=$em=TRUE;
	$fname=$lname=$age=$comment=$email="";
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
<form method="POST" action="validation2.php">
<table border>
<tr>
<td colspan="2">please fill out the form for registration.<br/><br/></td></tr>
<tr>
<td align="right" <?php if(!$fn)echo 'class="error"';?>>
First Name:
</td>
<td>
<input type="text" name="fname" size="30" value="<?php echo $fname?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!$ln)echo 'class="error"';?>>
Last Name:
</td>
<td>
<input type="text" name="lname" size="30" value="<?php echo $lname?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!$a)echo 'class="error"';?>>
Age:
</td>
<td>
<input type="text" name="age" size="30" value="<?php echo $age?>">
</td>
</tr>
<tr>
<td align="right" <?php if(!$com) echo 'class="error"';?>>
Comments:
</td>
<td>
<textarea name="comment" value="<?php echo $comment ?>">
</textarea>
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
  <td align="right">&nbsp;</td>
  <td>
  <input type="SUBMIT" name="submit" value="Submit">
  
    <input type="reset" name="reset" value="reset">
  </td>
</tr>
</table>
</form> 
</body>
</html>