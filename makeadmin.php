<?php 
require 'db.php';

if(isset($_GET['id']));
$id = $_GET['id'];

$sql = "UPDATE tbl_users SET userlvl_id = 'UL01' WHERE id = '$id' ";
if(mysqli_query($con,$sql)){
	header("location:manageAccount.php");
}

 ?>