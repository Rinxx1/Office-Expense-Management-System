<?php 

require 'db.php';

if(isset($_GET['id']));
$id = $_GET['id'];

$itemcat = $_POST['itemcat'];


$update = "UPDATE tbl_item_category SET item_category_name = '$itemcat' WHERE item_category_id = '$id'";

if(mysqli_query($con,$update)){

	echo "<script>alert('Successfully Updated!');window.location='itemCat.php';</script>";
}else{

}



?>