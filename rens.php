<?php
	
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) {
		header("location: ../index.php");
		exit();
               } 
?>