<?php 

	require 'db.php';
	$id = 'VG'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$opadd = $_POST['opadd'];	

	$sql = "INSERT INTO tbl_operational_dateadded(operational_dateadded_id
)VALUES('$id')";
 ?>