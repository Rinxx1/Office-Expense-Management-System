<?php 


require 'db.php';


	if(isset($_GET['id']));
	$id = $_GET['id'];

	
	$sql = "DELETE FROM tbl_users WHERE id = '$id';";
	if(mysqli_query($con,$sql)){
		 echo "<script>window.location='manageAccount.php'</script>";
	}

 ?>