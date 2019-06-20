<?php
	if(!defined('INCLUDE_CHECK')) die('Warning: You are not authorized to access this page.');

	$db_host		= 'localhost';
	$db_user		= 'anasjafry';
	$db_pass		= 'Jafry@123';
	$db_database		= 'accelerate-anasjafry'; 

	$link = mysql_connect($db_host, $db_user, $db_pass) or die('Connection to Database Failed.');
	mysql_select_db($db_database, $link);
?>