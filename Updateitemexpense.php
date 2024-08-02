<?php 
	

	if(isset($_POST['btnup1'])){
		require 'db.php';
		if($_GET['id']);
		$id = $_GET['id'];
		$itemname = $_POST['itemname'];
		$itemcategory = $_POST['cat'];
		$supp = $_POST['itemSupp'];
		$quantity = $_POST['quantity'];
		$buyer = $_POST['buyer'];
		$requested = $_POST['requested'];

		$update = "UPDATE tbl_itemcontent SET item_name = '$itemname', item_category_id = '$itemcategory', supplier_id = '$supp', quantity_id = '$quantity',buyer = '$buyer',requested = '$requested' WHERE itemid = '$id' ";
		if(mysqli_query($con,$update)){
			echo "<script>alert('Done');window.location='itemExpenses.php';</script>";
		}
		

	}

 ?>