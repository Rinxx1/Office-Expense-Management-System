<?php 
	if(isset($_GET['id']));
	$id = $_GET['id'];

	require 'db.php';
	$sql = "DELETE FROM tbl_operational_category WHERE operational_category_id = '$id';";
	if(mysqli_query($con,$sql)){
		header("location:operationalCat.php");
	}

 ?>

 