<?php 

	session_start();
		if(isset($_SESSION['user']));
		$user = $_SESSION['email'];

	require 'db.php';
	$id = 'OP'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$costname = $_POST['costname'];
	$category = $_POST['category'];
	$employee = $_POST['employee'];
	$ornum = $_POST['ornum'];
	$connum = $_POST['connum'];
	$amount = $_POST['amount'];
	$dap = $_POST['dap'];

	$id2 = 'AM'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);



	$sql = "INSERT INTO tbl_opcontent(opid,costname,operational_category_id,employee,ornumber,connumber,operational_amount_id,date_paid,transaction_info,archive_id)VALUES('$id','$costname','$category','$employee','$ornum','$connum','$id2','$dap','$user','AC001')";

		
		if(mysqli_query($con,$sql)){
			$a2 = "INSERT INTO tbl_operational_amount1(operational_amount_id,Amount)VALUES('$id2','$amount')";
			mysqli_query($con,$a2);

				header("location:operationalCost.php");
			
	
	
}
	
 ?>