<?php 

require 'db.php';

if(isset($_GET['id']));
$id = $_GET['id'];

$suppname = $_POST['suppname'];
$suppinfo = $_POST['suppinfo'];
$suppadd = $_POST['suppadd'];
$suppcon = $_POST['suppcon'];

$update = "UPDATE tbl_supplier SET supplier_name = '$suppname',supplier_info = '$suppinfo',supplier_add = '$suppadd',supplier_con = '$suppcon' WHERE supplier_id = '$id'";

if(mysqli_query($con,$update)){

	echo "<script>alert('Successfully Updated!');window.location='supplier.php';</script>";
}else{

}



?>