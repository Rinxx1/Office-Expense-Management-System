<?php 
	session_start();
		if(isset($_SESSION['user']));
		$user = $_SESSION['user'];

	require 'db.php';
	$id = 'ICT'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$itemCat = $_POST['itemCat'];


	$sql = "INSERT INTO tbl_item_category(item_category_id, item_category_name)
		VALUES('$id', '$itemCat')";

	if(mysqli_query($con,$sql)){
	header("location:itemCat.php");

}	
 ?>