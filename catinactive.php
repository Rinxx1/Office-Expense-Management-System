<?php 

require 'db.php';

if (isset($_GET['id']));
	$id = $_GET['id'];


$sql = "UPDATE tbl_operational_category SET status_id = '2' WHERE operational_category_id = '$id'";
$in = "SELECT * FROM tbl_operational_category WHERE status_id = '2' AND operational_category_id = '$id'";
$in1 = mysqli_query($con,$in);
$in2 = mysqli_fetch_array($in1);


if($in2 > 0){
	echo "<script>alert('Already Inactive');window.location='operationalCat.php';</script>";
}else{
if(mysqli_query($con,$sql)){
	echo "<script>alert('Success');window.location='operationalCat.php';</script>";
}else{
	echo "<script>alert('Failed');window.location='operationalCat.php';</script>";
}

}

?>