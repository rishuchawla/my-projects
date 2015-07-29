<html>
<body>
<?php
class dist
{	
var $a,$b,$c,$d,$m,$n;
function dis1($feet,$inch)
{
	$this->a=$feet;
	$this->b=$inch;
}
function dis2($feet,$inch)
{
	$this->c=$feet;
	 $this->d=$inch;
}
function showitem()
{
	$this->m=$this->a+$this->c;
	$this->n=$this->d+$this->b;
	while($this->n>=12)
	{
	if($this->n>=12)
	{
		$this->m=$this->m+1;
		$this->n=$this->n-12;
	}
	}
	
	echo 'feet is = '.$this->m.'Inch is = '.$this->n;
	
}
}
?>
<?php
$c1=new dist();
$c1->dis1(12,4);
$c1->dis2(12,8);
$c1->showitem();

?>
</body>
</html>