<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	 <link rel="icon" type="image/png" href="office.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Office Expense Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="bootstrap.min1.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
  img {
  border-radius: 50%;
  width:32px;
  height:32px;
}
</style>

</head>
<?php 
require_once('rens.php');
?>
<body>

<div class="wrapper">
      <div class="sidebar" data-color="black" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
             <div class="logo">
        <input type="image" src="O.png" class="simple-text"  id="myBtn" href="#" style="width: 100%" height="100%">
            </div>

        <ul class="nav">
			<li><center><img src="1.png" alt="Avatar"> <?php echo $_SESSION['email'];?></center>
					
			</li>
			<br>
                <li>
                     <a href="dashBoard.php">
                        <i class="fas fa-chart-pie"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<br>
           <li class="active">
                    <a href="itemExpenses.php">
                       <i class="glyphicon glyphicon-credit-card"></i>
                        <p>Item Expenses</p>
                    </a>
                </li>
				<br>
               <li>
                    <a href="itemCat.php">
                        <i class="fas fa-battery-quarter"></i>
                        <p>Item Category</p>
                    </a>
                </li>
				<br>
                <li>
                   <a href="supplier.php">
                         <i class="fas fa-people-carry"></i>
                        <p>Item Supplier</p>
                    </a>
                </li>
				<br>
                <li>
                     <a href="operationalCost.php">
                        <i class="fas fa-battery-three-quarters"></i>
                        <p>Operational Cost</p>
                    </a>
                </li>
		<br>
                <li>
                    <a href="operationalCat.php">
                        <i class="fas fa-battery-full"></i>
                        <p>Operational Category</p>
                    </a>
                </li>
        <br>        
                <li>
                    <a href="manageAccount.php">
                        <i class="fas fa-users"></i>
                        <p>Manage Account</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
                        <li>
                              <a href="aboutUs.php">
                                    <i class="fab fa-accusoft"></i>

									<p class="hidden-lg hidden-md">About Us</p>
                              </a>
            
                        </li>	
                    </ul>
<a class="navbar-brand" href="itemExpenses.php">Item Expenses</a>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                            	<i class="fas fa-power-off"> </i>
                            	<p>Log Out</p>
                                
                            </a>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
          <center>  <p style="font-family:courier;">Admins</p></center>
        <img src="rens.jpg" alt="Avatar">   Rhence Paradela<br><br>
          <img src="vince.jpg" alt="Avatar"> Vince Galido<br><br>
          <img src="alpe.jpg" alt="Avatar">    John Alpe Olaer<br><br>
          <img src="jayson.jpg" alt="Avatar">   Jayson Bajana<br><br>
          <img src="dexter.jpg" alt="Avatar">   Dexter Galang<br><br>
          <img src="clark.jpg" alt="Avatar">    Clark Nacipo<br><br>
          <img src="gonio.jpg" alt="Avatar">    Dara Gonio<br><br>
          <img src="khester.jpg" alt="Avatar">   Khester Odango<br>
  </div>

</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;	
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

        <div class="content">
            <div class="container-fluid">
             <table class="container">
						<style type="text/css">
						/*	
	Side Navigation Menu V2, RWD
	===================
	License:
	https://goo.gl/EaUPrt
	===================
	Author: @PableraShow

 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
						</style>
						<style>
table, th, td {
  border: 1px solid black;
}

</style>
						<tr>
							
							<td align="center">
								Item Name
							</td>
							
							<td align="center">
								Category Name
							</td>
							
							<td align="center">
								Supplier Name
							</td>
							
							<!-- <td align="center">
								Unit Price
							</td>
							
							<td align="center">
								Quantity 
							</td> -->
							
							<td align="center">
								Control Number
							</td>
							
							<td align="center">
								Or Number
							</td>
							
							<td align="center">
								Date Purchased
							</td>
							
							<td align="center">
								Date Added
							</td>
							
							<td align="center">
								Transaction info
							</td>

						<!-- 	<td align="center">
								Total 
							</td> -->

							<td align="center">
								<h4>Settings</h4>
								<input type="Submit" name="Add" value="+ Add Expenses" id="myBtnadd9"/>
							</td>

						</tr>
						
					<?php 

							require'db.php';
                       $sql = "SELECT DISTINCT a.itemid, a.item_name, b.item_category_name, c.supplier_name, d.price, a.c_number, a.or_number, e.quantity, a.date_purchased, a.date_added, a.Transaction_info FROM tbl_itemcontent a INNER JOIN tbl_item_category b on a.item_category_id = b.item_category_id INNER JOIN tbl_supplier c on a.supplier_id = c.supplier_id INNER JOIN tbl_price d on a.price_id = d.price_id INNER JOIN tbl_quantity e on a.quantity_id = e.quantity_id
";
							


							 $result = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($result)){ 
								$ides = $row['itemid'];

								// SELECT item_name, tbl_item_category.item_category_id, tbl_supplier.supplier_id, tbl_price.price_id, tbl_quantity.quantity_id, tbl_date_purchased.date_purchased_id, tbl_date_added.date_added_id from tbl_item_expense INNER JOIN tbl_item_category ON tbl_item_expense.item_category_id = tbl_item_category.item_category_id INNER JOIN tbl_supplier ON tbl_item_expense.supplier_id = tbl_supplier.supplier_id INNER JOIN tbl_price ON tbl_item_expense.price_id = tbl_price.price_id INNER JOIN tbl_quantity ON tbl_item_expense.quantity_id = tbl_quantity.quantity_id INNER JOIN tbl_date_purchased ON tbl_item_expense.date_purchased_id = tbl_date_purchased.date_purchased_id INNER JOIN tbl_date_added ON tbl_item_expense.date_added_id = tbl_date_added.date_added_id 
								
								// $catid = $row['item_category_id'];
								// $suppid = $row['supplier_id'];
								// $quantityid = $row['quantity_id'];
								// $date_added1 = $row['date_added'];
							 //    $date_purchase = $row['date_purchased_added'];

								// $prid = $row['price_id'];
								// $prdname = $row['product_name'];
								// $or_number = $row['or_number'];
								// $dp = $row['date_purchased_id'];
								// $da = $row['date_added_id'];

						// $sql = "SELECT *  FROM tbl_item_category WHERE item_category_id = '$catid'";
						// 		$result = mysqli_query($con,$sql);
						// 	    $row = mysqli_fetch_array($result);
						// $sql = "SELECT *  FROM tbl_supplier WHERE supplier_id = '$suppid'";
						// 		$result = mysqli_query($con,$sql);
						// 	    $row_supp = mysqli_fetch_array($result); 
						// 	    $supp = $row_supp['supplier_name'];

						// $sql = "SELECT *  FROM tbl_price WHERE price_id = '$prid'";
						// 		$result = mysqli_query($con,$sql);
						// 	    $row_price = mysqli_fetch_array($result);
						// 	    $price2 = $row_price['price']; 

                         
						?>
						<tr>
						<td>
							<?php echo $row['item_name'] ?>
						</td>
						<td>
							<?php echo $row['item_category_name'] ?>
						</td> 
						<td>
							<?php echo $row['supplier_name'] ?>
						</td>
						<td>
							<?php echo $row['c_number'] ?>
						</td>
						<td>
							<?php echo $row['or_number'] ?>
						</td>
						<!-- <td>
							<?php //echo $row['quantity']?>
						</td> -->
						<td>
							<?php echo $row['date_purchased']?>
						</td>
						<td>
							<?php echo $row['date_added']?>
						</td>
						<td>
							<?php echo $row['Transaction_info']?>
						</td>
						 <!-- <td>
							<?phpecho //	'₱'.$row['price'] * $row['quantity'];?>
						</td>  -->
						<td>
						<button type="button" class="btn btn-primary" id="myBtnadd">
						Delete
						</button>
						</td>
						</tr>
						<?php }?>

	
					</table>
			<div id="myModaladd9" class="modaladd9">
 				 <div class="modal-contentadd9">
  	 				 <span class="close19">&times;</span>
    					<div class="main-contentadd9"  style="overflow: hidden;">
						<form method="POST" action="additemq.php">
						 <table class="add" style="border: 1px solid transparent;" align="center">
						<style>
							td {
								padding: 7px;
							}
						</style>
						<tr>
							<td>
								Item Name:
							</td>
							<td>
								<input type="text" name="itemname" placeholder="Enter Item Name" autocomplete="off"><br>
							</td>
						</tr>

						<tr>
							<td>
								Category Name:
							</td>
								<td>
								<select name="cat" style="width: 100%">
									<option value="">SELECT</option>
									<?php 
										require'db.php';
										$sql = "SELECT * FROM tbl_item_category";
										$result = mysqli_query($con,$sql);
										while ($row = mysqli_fetch_array($result)) {
										
									 ?>
									<option  value="<?php echo $row['item_category_id']; ?>"><?php echo $row['item_category_name']; ?></option>
								
								<?php } ?>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								Supplier Name:
							</td>
							<td>
								<select name="itemSupp" style="width: 100%">
									<option value="">SELECT</option>
									<?php 
										require'db.php';
										$sql = "SELECT * FROM tbl_supplier";
										$result = mysqli_query($con,$sql);
										while ($row = mysqli_fetch_array($result)) {
										
									 ?>
									<option  value="<?php echo $row['supplier_id']; ?>"><?php echo $row['supplier_name']; ?></option>
								
								<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Unit Price:
							</td>
							<td>
								<input type="number" name="pricey"	value="" placeholder="Enter Price" autocomplete="off">
							</td>
							<!-- <td>
								<select name="price">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$sql2 = "SELECT * FROM tbl_operational_amount";
										//$result2 = mysqli_query($con,$sql2);
										//while ($row2 = mysqli_fetch_array($result2)) {
											
									 ?>
									<option value="<?php //echo $row2['operational_amount_id']; ?>"><?php //echo $row2['Amount']; ?></option>
								<?php //} ?>
								</select>
							</td> -->
						</tr>
						<tr>
							<td>
								Control Number:
							</td>
							<td>
								<input type="number" name="controlnumber" placeholder="Enter Control Number" autocomplete="off"><br>
							</td>
						</tr>

						<tr>
							<td>
								OR Number:
							</td>
							<td>
								<input type="text" name="ornumber" placeholder="Enter Or Number" autocomplete="off"><br>
							</td>
							<tr>
							<td>
								Quantity:
							</td>
							<td>
								<input type="number" name="quantity" value="" placeholder="Enter Quantity" autocomplete="off">
							</td>
							<!-- <td>
								<select name="quantitys">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$dateaddq = "SELECT * FROM tbl_quantity";
										//$dateaddqresult = mysqli_query($con,$dateaddq);
										//while ($adds = mysqli_fetch_array($dateaddqresult)) {
											
									 ?>
									<option value="<?php //echo $adds['quantity_id']; ?>"><?php //echo $adds['quantity']; ?></option>
								<?php //} ?>
								</select>	 -->
							</td> 
						</tr>
							<tr>
							<td>
								Date Purchased:
							</td>
							 <td>
							 	<input type="date" name="dap" value="" placeholder="mm/dd/yyyy" style="width: 100%" autocomplete="off">
							 </td>
							<!-- <td>
								<select name="datepur">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$dateaddq = "SELECT * FROM tbl_date_purchased";
										//$dateaddqresult = mysqli_query($con,$dateaddq);
										//while ($add = mysqli_fetch_array($dateaddqresult)) {
											
									 ?>
									<option value="<?php //echo $add['date_purchased_id']; ?>"><?php //echo $add['date_purchased']; ?></option>
								<?php //} ?>
								</select>	
							</td> -->
						</tr>
						<tr>
							<td>
								Date Added:
							</td>
							<td>
								<input type="date" name="dad" value="" placeholder="mm/dd/yyyy" style="width: 100%" autocomplete="off">
							</td>
							<!-- <td>
								<select name="dateadd">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$dateaddq = "SELECT * FROM tbl_operational_dateadded";
										//$dateaddqresult = mysqli_query($con,$dateaddq);
										//while ($add = mysqli_fetch_array($dateaddqresult)) {
											
									 ?>
									<option value="<?php //echo $add['operational_dateadded_id']; ?>"><?php //echo $add['operational_dateadded']; ?></option>
								<?php //} ?>
								</select>	
							</td> -->
						</tr>

						</tr><!-- 
						<tr>
							<td>
								Date Purchased:
							</td>
							<td>
								<select name="dp">
									<option  value="">SELECT</option>
									<?php 
										//require'db.php';
									    //$sql3 = "SELECT * FROM tbl_date_purchased";
										//$result3 = mysqli_query($con,$sql3);
										//while ($row3 = mysqli_fetch_array($result3)) {
											
									 ?>
									<option value="<?php //echo $row2['date_purchased_id']; ?>"><?php //echo $row3['date_purchased']; ?></option>
								<?php //} ?>
								</select>	
							</td>
						</tr>
						<tr>
							<td>
								Date Added:
							</td>
							<td>
								<select name="da">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$sql3 = "SELECT * FROM tbl_date_added";
										//$result3 = mysqli_query($con,$sql3);
										//while ($row3 = mysqli_fetch_array($result3)) {
											
									 ?>
									<option value="<?php  //$row2['date_added_id']; ?>"><?php //echo $row3['date_added']; ?></option>
								<?php// } ?>
								</select>	
							</td> -->
							<tr> 
 							<td><input type="Submit" name="Submit" value="ADD"/></td>
						</tr>
						</tr>
					</table>
				</form>
									</div>	
  		</div>
	</div>
				
<script>
// Get the modal
var modal19 = document.getElementById('myModaladd9');

// Get the button that opens the modal
var btn19 = document.getElementById("myBtnadd9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close19")[0];

// When the user clicks the button, open the modal 
btn19.onclick = function() {
  modal19.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal19.style.display = "none";
}

</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd9 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contentadd9 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close19 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close19:hover,
.close19:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
				<div id="myModaladd" class="modaladd">
 				 <div class="modal-contentadd">
  	 				 <span class="close1">&times;</span>
    					<div class="main-contentadd"  style="overflow: hidden;">
					<table>
						 <style>
							td {
								padding: 1px;
							}
						 </style>	
						<tr>
						 	<p style="font-family:courier;" align="left">Are you sure you want delete this Item ?</p>
<br>
							
			<center>
									<a class="btn btn-primary" href="deleteq.php <?php echo '?id='.$ides ?>">Delete</a>	
									<a class="btn btn-primary" href="itemExpenses.php">Close</a>	
								</center>
							
					</table>	
<script>
// Get the modal
var modal1 = document.getElementById('myModaladd');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtnadd");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contentadd {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
				
					
				

					</Center>
			</div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>



</html>
	