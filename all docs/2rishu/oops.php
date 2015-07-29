<html>
<body>
<?php
class cart
{	
var $items;
function additems($item2,$num)
{
	$this->items[$item2] += $num;
}
function removeitem($item2,$num)
{
	 if($this->items[$item2]>$num)
	 {
		 $this->items[$item2] -= $num;
		 return TRUE;
	 }else
	 {
		 return FALSE;
	 }
}
function showitem()
{
	foreach($this->items as $key=>$val)
	{
		echo $key.'='.$val.'<br>';
	}
}
}
?>
<?php
$c1=new cart;
$c1->additems("chair",4);
$c1->additems("table",4);
$c1->showitem();
$c1->removeitem("chair",2);
$c1->showitem();

?>
</body>
</html>