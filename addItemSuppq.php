<?php 
	

	require 'db.php';
	$id = 'IS'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$itemSupp = $_POST['itemSupp'];
	$w3w = $_POST['supplierinfo'];
	$aw = $_POST['suppadd'];
	$ew = $_POST['gulapa'];


	$sql = "INSERT INTO tbl_supplier (supplier_id, supplier_name, supplier_info, supplier_add, supplier_con, archive_id)
		VALUES('$id', '$itemSupp', '$w3w','$aw','$ew','AC001')";

	if(mysqli_query($con,$sql)){
	echo "<script>alert('Successfully Added!');window.location='supplier.php';</script>";
}else{

}


 ?>