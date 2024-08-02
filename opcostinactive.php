<?php 

require 'db.php';

if (isset($_GET['id']));
	$id = $_GET['id'];


$sql = "UPDATE tbl_opcontent SET status_id = '2' WHERE opid = '$id'";
$vin = "SELECT * FROM tbl_opcontent WHERE status_id = '2' AND opid = '$id'";
$bin = mysqli_query($con,$vin);
$cin = mysqli_fetch_array($bin);


if($cin > 0){
	echo "<script>alert('Already Inactive');window.location='operationalCost.php';</script>";
}else{
if(mysqli_query($con,$sql)){
	echo "<script>alert('Success');window.location='operationalCost.php';</script>";
}else{
	echo "<script>alert('Failed');window.location='operationalCost.php';</script>";
}

}

?>