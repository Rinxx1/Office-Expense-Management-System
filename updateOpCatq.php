<?php 
	require 'db.php';
	if($_GET['id']);
	$id = $_GET['id'];

	if(isset($_POST['btnupdate'])){

		$opcat = $_POST['opcat'];

		$update = "UPDATE tbl_operational_category SET operational_category_name = '$opcat' WHERE operational_category_id = '$id' ";
		if(mysqli_query($con,$update)){


			echo "<script>alert('Done');window.location='operationalCat.php';</script>";
		}

	}

 ?>