<html>
<body>
<form name="person" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Number1:<input name="number[]" type="text" id="number[]" ><br>
Number2:<input name="number[]" type="text" id="number[]"><br>
Number3:<input name="number[]" type="text" id="number[]" ><br>
Number4:<input name="number[]" type="text" id="number[]"><br>
Number5:<input name="number[]" type="text" id="number[]"><br>
Number6:<input name="number[]" type="text" id="number[]"><br>
Number7:<input name="number[]" type="text" id="number[]"><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	$numbers=$_POST['number'];
	$count=count($numbers);  
	$total=0;
	for($i=0;$i<$count;$i++)
	{
		$total=$total+$numbers[$i];
	}
	echo 'total numbers is = '.$total.'<br>';
	$average=$total/$count;
	echo 'average is = '.$average.'<br>';
	for($i=0;$i<$count;$i++)
	{
		for($j=$i+1;$j<$count;$j++)
		{
			if($numbers[$i]>$numbers[$j])
			{
				$high=$numbers[$i];
			}
		}
	}
	echo 'highest number is = '.$high.'<br>';
	
		for($i=0;$i<$count;$i++)
	{
		for($j=$i+1;$j<$count;$j++)
		{
			if($numbers[$i]>$numbers[$j])
			{
				$sort=$numbers[$i];
				$numbers[$i]=$numbers[$j];
				$numbers[$j]=$sort;
			}
		}
	}
	echo 'sorted array is = ';
	print_r($numbers);
}
?>

</body>
</html>