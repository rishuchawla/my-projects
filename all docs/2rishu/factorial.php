<html>
<body>
<?php

function fact($i)
{
	$k=1;
	while($i>0)
	{
	$k=$k*$i;
	$i=$i-1;
	
	
	}
	return $k;
}

$factorial=fact(4);
echo 'factorial is = '.$factorial;

echo '<br><br>';

function sum($a,$b)
{
	$c=$a+$b;
	return $c;
}
$sum2=sum(6,34);
echo'sum of two digit = '.$sum2;

echo'<br><br>';
 
function prime($j)
{
	for($l=2;$l<$j;$l++)
	{
		if($j%$l==0)
		{
			$m=0;
			break;}
		else
		$m=1;
	}
return $m;
}

$prime2=prime(59);
if($prime2==1)
echo'this is prime no.';
else
echo'this is not a prime number';

echo'<br><br>';


?>
</body>
</html>