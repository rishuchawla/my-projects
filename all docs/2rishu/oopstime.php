<html>
<body>
<?php
class times
{	
var $sec,$mint,$hour;

function times()
{
	echo 'i am constructor of time ';
}

function time1($a,$b,$c)
{
	$this->sec=$c;
	$this->mint=$b;
	$this->hour=$a;
	
}
function sum($x,$y)
{
	$this->sec=$x->sec+$y->sec;
	$this->mint=$x->mint+$y->mint;
	$this->hour=$x->hour+$y->hour;
}
function show()
{
	while($this->sec>=60&& $this->mint>=60 && $this->hour>=24)
	{
	if($this->sec>=60)
	{
		$this->mint=$this->mint+1;
		$this->sec=$this->sec-60;
	}
	if($this->mint>=60)
	{
		$this->hour=$this->hour+1;
		$this->mint=$this->mint-60;
	}
	if($this->hour>=24)
	{
		
		$this->hour=$this->hour-24;
	}
	}
	
	echo $this->hour.' : '.$this->mint.' : '.$this->sec;
	
}
}
?>
<?php
$t1=new times;
$t2=new times;
$t3=new times;
$t1->time1(6,7,23);
$t2->time1(6,8,28);
$t3->sum($t1,$t2);
$t3->show();
?>
</body>
</html>