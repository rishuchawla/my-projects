<html>
<body>
<?php
$a=array(24.3,17,78,56,43,103.87,9);
$count=count($a);
$total=0;
for($i=0;$i<$count;$i++)
{
	$total=$total+$a[$i];
}
$mean=$total/$count;
echo'average is = '.$mean;
echo'<br><br>';
$b[]='howard';
$b[2]='jill';
$b['friend']='jane';
$b[5]='mill';
$value;
foreach($b as $value)
{
	echo'value: '.$value.'<br>';
}
foreach($b as $key=>$value)
{
	echo'Key: '.$key.'value: '.$value.'<br>';
}

echo'<br><br>';
$d=array(array('NAME'=>'john','age'=>22),
array('NAME'=>paul,'AGE'=>23),
array('NAME'=>nama,'AGE'=>32));
foreach($d as $nan)
{
	foreach($nan as $key=>$data)
	{
		echo$key.':'.$data.'<br>';
	}
	echo'<br>';
}

?>
</body>
</html>