<html>
<body>
<?php
if(isset($_POST['submit']))
{
	if(!$file=fopen('junk2.txt','ab'))
	{
	echo'error while opening the file';
}
else
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$marks=$_POST['marks']
	
	;
	$comments=$_POST['comments'];
	
	$total=$name.' '.$age.' '.$email.' '.$marks.' '.$comments.'\r\n';
	if(fwrite($file,$total))
	{
		echo'saying added to file ';
	}else
	{
		echo'an error while adding ';
	}
	fclose($file);
}
}
?>
<br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

Name:<input type="text" name="name"><br>
Age:<input type="text" name="age"><br>
Email:<input type="text" name="email"><br>
Marks:<input type="text" name="marks"><br>
Comments:<br>
<textarea name="comments"></textarea><br>
<input type="submit" name="submit" value="insert">
</form>
</body>
</html>