<?php 

require 'db.php';

if (isset($_GET['id']));
	$id = $_GET['id'];


$sql = "UPDATE tbl_item_category SET status = 'active' WHERE item_category_id = '$id'";
$in = "SELECT * FROM tbl_item_category WHERE status = 'active' AND item_category_id = '$id'";
$in1 = mysqli_query($con,$in);
$in2 = mysqli_fetch_array($in1);


if($in2 > 0){
	echo "<script>alert('Already Inactive');window.location='itemCat.php';</script>";
}else{
if(mysqli_query($con,$sql)){
	echo "<script>alert('Success');window.location='itemCat.php';</script>";
}else{
	echo "<script>alert('Failed');window.location='itemCat.php';</script>";
}

}

?>