<html>
<body> 
<?php
define('MYNAME','my name is rishu chawla');
$greeting='Hello';
echo $greeting.'<br>'.MYNAME.'<br>';
$age=24;
$money=23.00;

if($age==$money)
echo 'Enter correct age <br>';
else
echo 'enter incorrect age<br>';
$t=true;
$s=true;
if(($age>=21) AND($t==true))
echo 'you can drink vodka right at this age<br>';
if(($s==true) OR ($t==true))
echo 'you can only drink light beer at this age<br>';
$a=23;
$b=0;
while($a>=$b)
{echo 'my name is bhoolooo and i am '.$b.'year old'.'<br>';
$b++;
}
echo'<br><br><br>';

for($b=2;$b<=$a;$b++)
{
echo 'my name is ahish kuta and i am '.$b.'year old'.'<br>';
}
?>
</body>
</html>