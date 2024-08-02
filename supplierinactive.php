<?php 

require 'db.php';

if (isset($_GET['id']));
	$id = $_GET['id'];


$sql = "UPDATE tbl_supplier SET status = 'inactive' WHERE supplier_id = '$id'";
$in = "SELECT * FROM tbl_supplier WHERE status = 'inactive' AND supplier_id = '$id'";
$in1 = mysqli_query($con,$in);
$in2 = mysqli_fetch_array($in1);


if($in2 > 0){
	echo "<script>alert('Already Inactive');window.location='supplier.php';</script>";
}else{
if(mysqli_query($con,$sql)){
	echo "<script>alert('Success');window.location='supplier.php';</script>";
}else{
	echo "<script>alert('Failed');window.location='supplier.php';</script>";
}

}

?>