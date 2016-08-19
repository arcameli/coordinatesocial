<?php
include_once("dataconfig.php");
$sql = "SELECT * FROM urler";
$sqlresult = $db->fetch_all_array($sql);
foreach($sqlresult as $row){
	echo $row['message'];	
}
echo "hello world be again free v2!";
?>
