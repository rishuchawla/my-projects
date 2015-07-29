<html>
<body>
<?php 

$log_folder="logs2.txt";
$logs_name1="logs.txt";
$logs_name2="logs.txt.old";
$logs_name3="logs.txt.archive";
if(!(unlink($logs_name3))){echo "error in deleting $log_name3<br>";}
else {echo '$log_name3 deleted successfully<br>';}
if(!(rename($logs_name2,$logs_name3))){echo 'error renameing $logs_name2 to logs_name3';}
else{echo '$logs_name2 successfully renamed<br>';}
if(!(rename($logs_name1,$logs_name2))){echo 'error in renaming $logs_name1 to logs_name3';}
else{echo '$logs_name1successfully renamed<br>';}
if(!(copy($log_folder,$logs_name1))){echo 'error in copy $log_folder t $log_name1';}
else {echo '$logs_name1copied to $log_folder successfully<br>';}
?>
</body>
</html>