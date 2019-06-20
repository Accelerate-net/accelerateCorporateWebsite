<?php
define('INCLUDE_CHECK', true);
require 'connect.php';
session_start();

require 'sms.php';

if(isset($_SESSION['kill'])){
die('Already received your request.');
}



$phoneNumber = $_POST['mobile'];

    if(preg_match('/^\d{10}$/',$phoneNumber)) // phone number is valid
    {

		date_default_timezone_set('Asia/Calcutta');
		$time = date('H:i:s d M Y');

$msg = "Call ".$phoneNumber.", who has requested for a Call Back on accelerate.net.in at ".$time;

	      	sender("9043960876", $msg);	
                $_SESSION['kill'] = "PROCESSED";      

	    	$query = "INSERT INTO queryList (mobileNumber, timeStamp) VALUES ('{$phoneNumber}', '{$time}')";
		mysql_query($query);	

    	$_SESSION['success'] ="Thank You! We will call you back soon.";
    }
    else // phone number is not valid
    {
      	$_SESSION['mobileErr'] = "Enter a valid mobile number." ;
    }

	echo'<script>window.location="index.php";</script>';
?>