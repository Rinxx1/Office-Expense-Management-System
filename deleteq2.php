<?php 
	if(isset($_GET['id']));
	$id = $_GET['id'];

	require 'db.php';
	$sql = "DELETE FROM tbl_opcontent WHERE opid = '$id';";
	if(mysqli_query($con,$sql)){
		header("location:operationalCost.php");
	}

 ?>

 