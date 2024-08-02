<?php 
	if(isset($_GET['id']));
	$id = $_GET['id'];

	require 'db.php';
	$sql = "DELETE FROM tbl_supplier WHERE supplier_id = '$id';";
	if(mysqli_query($con,$sql)){
		header("location:supplier.php");
	}

 ?>

 