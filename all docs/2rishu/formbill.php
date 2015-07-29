<html>
<body>
<form name="item" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table border>
<th>
Item Name
<th>Price</th>
<th>Quantity</th>
</th>
<tr>
<td><input type="text" name="item1[]" id="item1[]"></td>
<td><input type="text" name="item1[]" id="item1[]" ></td>
<td><input type="text" name="item1[]" id="item1[]"></td><br>
</tr>
<tr>
<td><input type="text" name="item2[]" id="item2[]"></td>
<td><input type="text" name="item2[]" id="item2[]"></td>
<td><input type="text" name="item2[]" id="item2[]"></td><br>
</tr>
<tr>
<td><input type="text" name="item3[]" id="item3[]"></td>
<td><input type="text" name="item3[]" id="item3[]"></td>
<td><input type="text" name="item3[]" id="item3[]"></td><br>
</tr>
<tr>
<td>discount:<input type="text" name="dis" id="dis"></td></tr>
<tr><td>VAT:<input type="text" name="vat" id="vat"></td></tr>
</table>
<input type="submit" name="submit" value="bill">
</form>
<?php
if(isset($_POST['submit']))
{
	$items1=$_POST['item1'];
	$items2=$_POST['item2'];
	$items3=$_POST['item3'];
	$dis=$_POST['dis'];
	$vat=$_POST['vat'];
	$a=$items1[1]*$items1[2];
	$b=$items2[1]*$items2[2];
	$c=$items3[1]*$items3[2];
	$total=$a+$b+$c;
	$final=$total-($total*$dis)/100;
	$final=$final+($final*$vat)/100;
	echo "total price for ".$items1[0].' is = '.$a.'<br>';
	echo 'total price for '.$items2[0].' is = '.$b.'<br>';
	echo 'total price for '.$items3[0].' is = '.$c.'<br>';
	echo 'total price for all item is = '.$total.'<br>';
	echo 'final price after discount and vat is = '.$final;

}
	?>
</body>
</html>