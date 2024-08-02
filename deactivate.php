<?php 
require 'db.php';

if (isset($_GET['id']));
	$id = $_GET['id'];
	
$sql1 = "SELECT * FROM tbl_users WHERE status = 'deactivated' AND id = '$id'";
$sqlres = mysqli_query($con,$sql1);
$sqlrow = mysqli_num_rows($sqlres);

$sql = "UPDATE tbl_users SET status = 'deactivated' WHERE id = '$id'";

if($sqlrow > 0){
	echo "<script>;window.location='manageAccount.php';</script>";
}else{

if (mysqli_query($con,$sql)) {

echo "<script>;window.location='manageAccount.php';</script>";
}
else{
	echo "<script>;window.location='manageAccount.php';</script>";
}

}


?>