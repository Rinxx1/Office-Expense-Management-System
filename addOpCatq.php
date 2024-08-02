<?php 
	session_start();
		if(isset($_SESSION['user']));
		$user = $_SESSION['user'];

	require 'db.php';
	$id = 'CT'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$opCat = $_POST['opCat'];


	$sql = "INSERT INTO tbl_operational_category(operational_category_id, operational_category_name)
		VALUES('$id', '$opCat')";

	if(mysqli_query($con,$sql)){
	header("location:operationalCat.php");

}	
 ?>