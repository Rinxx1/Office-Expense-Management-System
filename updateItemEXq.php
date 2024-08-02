<?php 
	

	
		require 'db.php';
		if($_GET['id']);
		$id = $_GET['id'];
	

		$itemname = $_POST['itemname'];
		$cat= $_POST['cat'];
		$itemSupp = $_POST['itemSupp'];
		$buyer = $_POST['buyer'];
		$req = $_POST['req'];

		$update = "UPDATE tbl_itemcontent SET item_name = '$itemname', item_category_id = '$cat', supplier_id = '$itemSupp', buyer = '$buyer', requested = '$req' WHERE itemid = '$id' ";
		if(mysqli_query($con,$update)){
			echo "<script>alert('Done');window.location='itemExpenses.php';</script>";
		}
	

		
 ?>