<html>
<body>
<form name="person" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Number:<input type="text" name="number[]" id="number[]" /><br >
number2:<input type="text" name="number[]" id="number[]" ><br><br>
Rich<input name="rich" type="radio" value="0"> yes
<input name="rich" type="radio" value="1">no<br><br>
Friends:<select multiple id="friends[]" name="friends[]" size="3">
<option value="john">john</option>
<option value="james">james</option>
<option value="rocky">rocky</option>
<option value="bill">bill</option>
</select>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	$numbers=$_POST['number'];
	$total=$numbers[0]+$numbers[1];
	$friends=$_POST['friends'];
	echo 'total: '.$total.'<br>';
	if($_POST['rich']==FALSE)
		echo 'you are rich<br>';
	else 
		echo 'you are not rich';
	
	echo 'you have '.count($friends).'friends:<br>';
	foreach($friends as $value)
	{
		echo $value.'<br>';
	}
}
	
?>
</body>
</html>