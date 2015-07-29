<html>
<body>
<?php
$listfile="junk2.txt";
if(!($fp=fopen($listfile,"r")))
exit("unable to open file");
while(!feof($fp))
{
$buffer=fgets($fp,1024);
echo $buffer.'<br><br>';	
}

fclose($fp);
?>
</body>
</html>