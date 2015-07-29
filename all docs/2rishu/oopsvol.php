<html>
<body>
<?php
class vol
{	
var $len,$wei,$hei,$volu;

function times($a,$b,$c)
{
	$this->len=$c;
	$this->wei=$b;
	$this->hei=$a;
}
function volume($x)
{
	$this->volu=$x->len*$x->wei*$x->hei;
}
function show2()
{
	echo 'volume is = '.$this->volu;
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
$t1=new vol;
$t3=new vol;
$t1->times(4,4,4);
$t3->volume($t1);
$t3->show2();
?>
</body>
</html>