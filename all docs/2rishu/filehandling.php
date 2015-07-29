<html>
<body>
<?php
$listfile="junk.txt";
if(!($fp=fopen($listfile,"r")))
echo 'cannot open the file'; 

if(!$list2=fread($fp,filesize($fp)))
{
	echo 'canot retrive file conents';
}
else
{
	echo $list2;
}
fclose($fp);
?>
</body>
</html>