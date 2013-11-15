<?php
	$to="info@inexgengames.com";
	$name=$_REQUEST["txt_name"];
	$from=$_REQUEST["txt_email"];
	$subject = "info $name";
	$message = $_REQUEST["txt_message"]; 
	include('smtpwork.php');
?>
