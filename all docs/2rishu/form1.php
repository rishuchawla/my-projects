<html>
<body>
<form name="person" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="name" /><br>
Age:<input type="text" name="age" /><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))

echo 'your name is  '.$_POST['name'].' and u r '.$_POST['age'].' year old';
?>
</body>
</html>