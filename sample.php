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
	    <link href="bootstrap.min.css" rel="stylesheet" />

	    <!-- Animation library for notifications   -->
	    <link href="animate.min.css" rel="stylesheet"/>

	    <!--  Light Bootstrap Table core CSS    -->
	    <link href="light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


	    <!--  CSS for Demo Purpose, don't include it in your project     -->
	    <link href="demo.css" rel="stylesheet" />


	    <!--     Fonts and icons     -->

	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	    <link href="pe-icon-7-stroke.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<?php 
require_once('rens.php');
?>
<body>	
<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
	<style>
	.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
</style>
<!--<div id="modal-show-page" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          <center>  <p style="font-family:courier;">Admins</p></center>
        <img src="rens.jpg" alt="Avatar">Rhence Paradela<br>
          <img src="vince.jpg" alt="Avatar">Vince Galido<br>
          <img src="alpe.jpg" alt="Avatar">John Alpe Olaer<br>
          <img src="jayson.jpg" alt="Avatar">Jayson Bajana<br>
          <img src="galang.jpg" alt="Avatar">Dexter Galang<br>
          <img src="rens.jpg" alt="Avatar">Clark Nacipo<br>
          <img src="nacipo.jpg" alt="Avatar">Dara Gonio<br>
          <img src="khester.jpg" alt="Avatar">Khester Odanggo<br>
        </div><!-- /.modal-content -->
    <!--</div><!-- /.modal-dialog -->
<!--</div><!-- /.modal -->
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
<body>





    	<div class="sidebar-wrapper">
            <div class="logo">
        <input type="image" src="O.png" class="simple-text"  id="myBtn" href="#" style="width: 100%" height="100%">
            </div>

            <ul class="nav">
			<li><center>
				<img src="1.png" alt="Avatar">  <?php echo $_SESSION['email'];?>  </center>
					
			</li>
			<br>
                <li>
                    <a href="dashBoard.php">
                     <i class="fas fa-chart-pie"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<br>
     			<li>
                    <a href="itemExpenses.php">
                       <i class="glyphicon glyphicon-credit-card"></i>
                        <p>Item Expenses</p>
                    </a>
                </li>
				<br>
               <li>
                    <a href="itemCat.php">
                       <i class="fab fa-dropbox"></i>
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
                <li  class="active">
                    <a href="operationalCost.php">
                       <i class="fas fa-hand-holding-usd"></i>
                        <p>Operational Cost</p>
                    </a>
                </li>
				<br>
                <li>
                    <a href="operationalCat.php">
                        <i class="fas fa-boxes"></i>
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
	<!-- The Modal -->

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="operationalCost.php">Operational Expenses</a>
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

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                            	<i class="fas fa-power-off"> </i>
                            	<p>Log Out</p>
                                
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
    
          <center><p style="font-family:courier;">Admins</p></center>
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
 
}

</style>
						<tr>

							<td align="center">
								Operational Cost Name
							</td>

							<td align="center">
								Category Name
							</td>
                                                        <td align="center">
                                                                Employee Name
                                                        </td>       

							<!-- <td>
								Amount
							</td> -->

							<td align="center">
								Date Added
							</td>

							<td align="center">
								Date Paid
							</td>

							<td align="center">
								Transaction Info
							</td>

							<td align="center">
								<h4>Settings</h4>
							
								<input type="submit" name="Add" value=" Add Expenses" id="myBtnadd9" class="btn btn-primary"/>
							</td>
						</tr>
							

						<?php 

							require'db.php';

							$sql = "SELECT * FROM tbl_opcontent INNER JOIN tbl_operational_category ON tbl_opcontent.op_category_id = tbl_operational_category.operational_category_id INNER JOIN tbl_users ON tbl_opcontent.email_id = tbl_users.id";
							$result = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($result)){
								$vince = $row['opid'];
							

						?>
						<tr>
						<td align="center">
							<?php echo $row['costname']?>
						</td>
						<td align="center">
							<?php echo $row['operational_category_name']?>	
						</td>
                                                <td align="center">
                                                        <?php echo $row['email']?>
                                                </td>       
						<!-- <td>
							<?php //echo $row['Amount']?>
						</td> -->
						<td align="center">
							<?php echo $row['date_add']?>
						</td>
						<td align="center">
							<?php echo $row['date_paid']?>
						</td>
						<td align="center">
							<?php echo $row['transaction_info']?>
						</td>
						<td align="center">
										<center>	<button type="button" class="btn btn-primary" id="myBtnadd">
 Delete
</button></center>
						</td>
						</tr>
						<?php }?>
	
					</table>
								


											<!-- MODAL CONTENT FOR ADD COST!-->

			<div id="myModaladd9" class="modaladd9">
  			
 				 <div class="modal-contentadd9">
  	 				 <span class="close19">&times;</span>
    					<div class="main-contentadd9"  style="overflow: hidden;">
						<form method="POST" action="addcostq.php">
						 <table class="add" style="" align="center">

						<style>

							td {


								padding: 7px;
								margin: 20px;
							}

							input[type=text], select {

								 width: 100%;
								  padding: 12px 20px;
								  margin: 20px 0;
								  display: inline-block;
								  border: 1px solid #ccc;
								  border-radius: 4px;
								  box-sizing: border-box;
								

								
							}
								input[type=number], select {

								 width: 100%;
								  padding: 12px 20px;
								  margin: 8px 0;
								  display: inline-block;
								  border: 1px solid #ccc;
								  border-radius: 4px;
								  box-sizing: border-box;
								

								
							}
								input[type=date], select {

								 width: 100%;
								  padding: 20px 20px;
								  margin: 8px 0;
								  display: inline-block;
								  border: 1px solid #ccc;
								  border-radius: 4px;
								  box-sizing: border-box;
								

								
							}

							

						</style>		


						<tr>
							<td align="left">
								Cost Name:
							</td>
							<td>
								<input type="text" name="costname"  placeholder="Enter Cost Name" style="text-align: center;" autocomplete="off"><br>
							</td>
						</tr>

						<tr>
							<td align="left">
								Category Name:
							</td>
							<td>
								<select name="category" style="width: 100%">
									<option value="">SELECT</option>
									<?php 
										require'db.php';
										$sql = "SELECT * FROM tbl_operational_category";
										$result = mysqli_query($con,$sql);
										while ($row = mysqli_fetch_array($result)) {
											
									 ?>
									<option value="<?php echo $row['operational_category_id']; ?>"><?php echo $row['operational_category_name']; ?></option>
								<?php } ?>
								</select>
							</td>
						</tr>
                                                        
                                                        	<tr>
							<td align="left">
								Employee Name:
							</td>
						<td>
							<select name="employee" style="width: 100%">
								<option value="">SELECT</option>
								<?php 
									require'db.php';
									$sql = "SELECT * from tbl_users";
									$resulta = mysqli_query($con,$sql);
									while ($row = mysqli_fetch_array($resulta)) {

								
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
								<?php } ?>
							</select>	
							</td>
						</tr>	
                                                        
                                                        
                                                        
						<tr>
							<td align="left">
								Amount:
							</td>

							<td>
							 <input type="text" name="amount" placeholder="Enter Amount" style="text-align: center;" autocomplete="off">
							</td>
							
						</tr>	
					



						<tr>
							<td align="left">
								Date Added:
							</td>


							<td>
							 <input type="date" name="dad" placeholder="mm/dd/yyyy" style="text-align: center; width: 100%;" autocomplete="off">
							</td>



						<!-- 	<td>
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



						<tr>
							<td align="left">
								Date Paid:
							</td>


							<td>
							 <input type="date" name="dap" placeholder="mm/dd/yyyy" style="text-align: center; width: 100%;" autocomplete="off">
							</td>




							<!-- <td>
								<select name="datepaid">
									<option value="">SELECT</option>
									<?php 
										//require'db.php';
										//$sql4 = "SELECT * FROM tbl_operational_datepaid";
										//$result4 = mysqli_query($con,$sql4);
										//while ($row4 = mysqli_fetch_array($result4)) {
											
									 ?>
									<option value="<?php //echo $row4['operational_datepaid_id']; ?>"><?php //echo $row4['operational_datepaid']; ?></option>
								<?php // } ?>
								</select>	
							</td> -->



							

							<tr>
								<td align="">
                                                                <br>
                                                                
									<input type="submit" name="Add" class="btn btn-primary btn-block" value="ADD"/>		
								</td>
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


        <!----STYLE FOR ADD OPERATIONAL EXPENSES ---->


<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd9 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0%;
  top: 2%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.0); /* Black w/ opacity */
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
	<!-- MODAL CONTENT FOR DELETE!  -->
				<div id="myModaladd" class="modaladd">

	 				 <div class="modal-contentadd">
  		 				 <span class="close1">&times;</span>
    						<div class="main-contentadd"  style="overflow: hidden;">
								
						 <style>

							td {
								padding: 1px;
							}

						 </style>

						<tr>
						 	<p style="font-family:courier;" align="center">Are you sure you want delete this Operational Cost</p>

									<br>
								<center>
									<a class="btn btn-primary" href="deleteq2.php<?php echo'?id='.$vince; ?>">Delete</a>	
									<a class="btn btn-primary" href="operationalCost.php">Close</a>	
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

 <!---STYLE FOR DELETE MODAL---->
 
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0%;
  top: 2%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.0); /* Black w/ opacity */
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
    <script src="jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="bootstrap.min1.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="demo.js"></script>


</html>