<html>
<body>
<?php
class page
{
function addheader($page,$title)
{
$page.="<html><head><title>".$title."</title></head><body><h1 align=\"center\">";
$page.=$title.'</h1>';
return $page;
}
function addfooter($page,$year,$copyright)
{
$page.="<div align=\"center\">&copy;".$year." ".$copyright."</div></body></html>";
return $page;
}
}

?>
<?php
$page="";
$page=page::addheader($page,'a script using static methods');
echo $page;
$page.="<p align=\"center\">this page with generated with procedural script</p>";
$page =page::addfooter($page,date('Y'),'procedural dsigns Inc');
echo $page;

?>
</body>
</html>