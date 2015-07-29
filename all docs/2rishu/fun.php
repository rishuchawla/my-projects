<html>
<body>
<?php
function findcube($x)
{
$cube=$x*$x*$x;
return $cube;
}
$name='john';
$number=3;
$newnumber=findcube($number);
echo $name.'<br>'.$newnumber;
echo'<br><br>';
function writeline($mystr)
{
	echo $mystr.'<br>';
}
$name='john';
$greeting='hello'.$name;
writeline($greeting);
writeline('How are you?');

echo'<br><br>';

function countarray($myarray)
{
	$i=0;
	foreach ($myarray as $value)
	{
		$i++;
	}
return $i;
}
$name=array('ram','sahm','john','ted');
$count=countarray($name);
echo $count;

echo'<br><br>';

function greeting2($nam='anonymous')
{
	echo 'hello'.$nam.'<br>';
}
greeting2('charles');
greeting2('');
greeting2();



for($i=0;$i<$length;$i++)
	{
		if($password[i]==)
		{
			$j=$password;
			$k=$j*10;
			$j=$j+$k;
		}
		else if($password[i]==)
		{
			
		}
		else
		{
			
		}


?>
</body>
</html>