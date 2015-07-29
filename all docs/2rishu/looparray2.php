<html>
<body>
<?php

$d=array(array('NAME'=>'john','age'=>22),
array('NAME'=>'paul','AGE'=>23),
array('NAME'=>'nama','AGE'=>32));

foreach($d as $nan)
{
	foreach($nan as $key=>$data)
	{
		echo $key.':'.$data.'<br>';
	}
	echo'<br>';
}

?>
</body>
</html>