<?php 
	if(isset($_GET['id']));
	$id = $_GET['id'];

	require 'db.php';
	$sql = "DELETE FROM tbl_itemcontent WHERE itemid = '$id';";
	if(mysqli_query($con,$sql)){
		header("location:itemExpenses.php");
	}

 ?>