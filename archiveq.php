<?php 
	require 'db.php';
	if($_GET['id']);
	$id = $_GET['id'];

	$sql = "UPDATE tbl_opcontent SET archive_id = 'AC002' WHERE opid = '$id' ";
	if(mysqli_query($con,$sql)){
		header("location:operationalCost.php");
	}

 ?>