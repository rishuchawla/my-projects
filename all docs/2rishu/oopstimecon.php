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
$t1=
$t3->sum($t1,$t2);
$t3->show();
?>
</body>
</html>