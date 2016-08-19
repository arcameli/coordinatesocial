<?php
date_default_timezone_set('America/New_York');
if(!isset($db))
	{
		include_once("data.php");
			$db = new DataSource();
			$db->connect();
		
	}
	
	if(!isset($_SESSION))
	{
		session_start();	
	}
?>
