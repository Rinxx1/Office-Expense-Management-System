<?php 
	require 'db.php';
	if($_GET['id']);
	$id = $_GET['id'];

	if(isset($_POST['btnupdate'])){
		$opname = $_POST['opname'];
		$opcat = $_POST['opcat'];
		$empname = $_POST['empname'];
		$datepaid = $_POST['datepaid'];

		$update = "UPDATE tbl_opcontent SET costname = '$opname', operational_category_id = '$opcat', employee = '$empname', date_paid = '$datepaid' WHERE opid = '$id' ";
		if(mysqli_query($con,$update)){


			echo "<script>alert('Done');window.location='operationalCost.php';</script>";
		}

	}

 ?>