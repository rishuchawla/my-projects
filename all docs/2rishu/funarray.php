<html>
<body>
<?php
function array1($i)
{
	$count=count($i);
	for($j=0;$j<$count;$j++)
	{
		for($k=$j+1;$k<$count;$k++)
		{
			if($i[$j]>$i[$k])
			$l=$i[$j];
		}
	}
	return $l;
}
function array2($i)
{
	$count=count($i);
	for($j=0;$j<$count;$j++)
	{
		for($k=$j+1;$k<$count;$k++)
		{
			if($i[$j]>$i[$k])
			{
				$l=$i[$j];
				$i[$j]=$i[$k];
				$i[$k]=$l;
			}
		}
	}
	return $i;
}
$a=array(34,23,56,54,98,67);
$array3=array1($a);

echo'largest number is = '.$array3.'<br>'.'sorted array is = ';
print_r(array2);

?>
	
</body>
</html>