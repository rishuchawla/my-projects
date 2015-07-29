<html>
<body>
<?php
$a=array('NAME'=>array('bill','jane','bob','jill'),
'AGE'=>array('18','25','48','98'),
'HEIGHT'=>array('178','154','165','123'));
print_r($a);
echo'<br><br>';
$b=array('bob','ahish','rav','mo');
print_r($b[1]);
echo'<br><br>';
$c=array('NAME'=>array('bob','lal','mal'),
'AGE'=>array('14','34','18'));
echo$a['NAME'][1].'is'.$a['AGE'][1].'yer old!';


?>
</body>
</html>