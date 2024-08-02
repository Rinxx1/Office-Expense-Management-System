<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Office Expense Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
</head>
<?php 
require_once('mwe.php');
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
            <a class="simple-text"  id="myBtn" href="#">Oema</a>
            </div>

            <ul class="nav">
			 <li><center><img src="1.png" alt="Avatar"> <?php echo $_SESSION['user'];?></center><br>
					
			</li>
                <li>
                    <a href="dashBoard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<br>
           <li>
                    <a href="itemExpenses.php">
                        <i class="fas fa-battery-empty"></i>
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
                        <i class="fas fa-battery-half"></i>
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
                    <a class="navbar-brand" href="additem.php">Add Item</a>
                </div>
                <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashBoard.php">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
							<br class="hidden-lg hidden-md">
                        <li>
                              <a href="itemCat.php">
                                    <i class="fa fa-globe"></i>
									<p class="hidden-lg hidden-md">Item Category</p>
                              </a>
            
                        </li>	
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
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
               <div>
				<form method="POST" action="additemq.php">
					<table align="center">
						<br>
						<br>
						<br>
						<br>
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
				<br>
				<br>
				<!-- <table>
					<tr>
							<td>
								Add Category
							</td>
						</tr>
						<tr>
							<td>
								<form method="POST" action="addimongmama2.php">
									<input type="text" name="catw">
									<button name="btncat">ADD</button>
								</form>
							</td>
						</tr>
					<tr>
							<td>
								Date Purchased
							</td>
						</tr>
						<tr>
							<td>
								<form method="POST" action="addimongmama2.php">
									<input type="date" name="dtadd2">
									<button name="btndt2">ADD</button>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								Date Added
							</td>
						</tr>
						<tr>
							<td>
								<form method="POST" action="addimongmama2.php">
									<input type="date" name="dtadd">
									<button name="btndt">ADD</button>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								Add Quantity
							</td>
						</tr>
						<tr>
							<td>
								<form method="POST" action="addimongmama2.php">
									<input type="number" name="quantity">
									<button name="btn3">ADD</button>
								</form>
							</td>
						</tr>
				</table>
			</div> -->
				

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
