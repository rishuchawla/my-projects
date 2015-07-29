<html>
<body>
<?php
$listfile="junk2.txt";
if(!($fp=fopen($listfile,"r")))
exit("unable to open file");
while(!feof($fp))
{
	
	$buffer=fscanf($fp,"%s%d%s%d%s");
	list($name,$age,$email,$marks,$comments)=$buffer;
	echo 'Name='.$name.'Age='.$age.'Email'.$email.'Marks='.$marks.'comments='.$comments;
	
}

fclose($fp);
?>
</body>
</html>