<?php 
	
	session_start();	
		if(isset($_SESSION['user']));
		$user = $_SESSION['email'];

	require'db.php';

	if(isset($_POST['Submit'])){

		$id = 'IE'.rand(0,9).rand(0,9).rand(0,9);
	$id2 = 'PR'.rand(0,9).rand(0,9).rand(0,9);
	$id3 = 'QU'.rand(0,9).rand(0,9).rand(0,9);

	$itemname = $_POST['itemname'];
	$cat = $_POST['cat'];
	$itemSupp = $_POST['itemSupp'];
	$price = $_POST['pricey'];
	$controlnumber = $_POST['controlnumber'];
	$ornumber = $_POST['ornumber'];
	$quantity = $_POST['quantity'];
	$dap = $_POST['dap'];
	$buy = $_POST['buy'];
	$req = $_POST['req'];
	




	$sql = "INSERT INTO tbl_itemcontent(itemid,item_name,item_category_id,supplier_id,c_number,or_number,date_purchased,Transaction_info,quantity_id,price_id,archive_id,buyer,requested)VALUES('$id','$itemname','$cat','$itemSupp','$controlnumber','$ornumber','$dap','$user','$id3','$id2','AC001','$buy','$req')";

	$quantityq = "INSERT INTO tbl_quantity(quantity_id,quantity)VALUES('$id3','$quantity')";
	$pricey = "INSERT INTO tbl_price(price_id,price)VALUES('$id2','$price')";
		if(mysqli_query($con,$sql));
		 if(mysqli_query($con,$quantityq)){
			if(mysqli_query($con,$pricey)){
				header("location:itemExpenses.php");		


				}
		 	}

	}
	
 ?>