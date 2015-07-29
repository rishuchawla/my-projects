<html>
<body>
<?php
function digit($element)
{
	$i=!preg_match("/[^0-9]/",$element);
	if($i==1)
	{
	if($element>=18&&$element<=75)
	return TRUE;
	else
	return FALSE;
	}
}
function digits($element)
{
	return !preg_match("/[^0-9]/",$element);
}
function letter($element)
{
	return !preg_match("/[^A-z]/",$element);
}


function checklength($string,$min,$max)
{
	$length=strlen($string);
	if(($length<$min)||($length>$max))
	{
		return FALSE;
	}
	else{
		return TRUE;
	}
}


function checkmail($code,$country)
{
	$code=preg_replace("/[\s|-]/","",$code);
	$length=strlen($code);
	switch(strtoupper($country))
	{
		case'US';
		if(($length<>5)&&($length<>9))
		{
			return FALSE;
		}
		return digits($code);
		case'CA';
		if($length!=6)
		{
			return FALSE;
		}
		return !preg_match("/([A-z][0-9]){3}/",$code);
	}
}

function checkurl($url)
{
	return preg_match("/http\/\/(.)\.(.*)/i",$url);
}

function checkemail($email)
{
	$pattern="/^[A-z0-9\._-]+" ."@" ."[A-z0-9][A-z0-9]*" . "(\.[A-z0-9_-]+)*"
	."\.([A-z]{2,6})$/";
	return preg_match ($pattern, $email);
}

function checkpassword($password)
{
	$length=strlen($password);
	
	if($length<8)
	{
		return false;
	}
	else{
	$unique=strlen(count_chars($password,3));
	$difference=$unique/$length;
	echo $difference.'<br>';
	if($difference<.60)
	{
		return false;
	}
	else{
	return preg_match("/^[A-z]+[0-9]+[\._-]/",$password);
	}
}
}
?>
</body>
</html>