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
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
                <a href="#" class="simple-text">
            Oema
                </a>
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
               <li class="active">
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
                        <p>Op. Category</p>
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
                    <a class="navbar-brand" href="addItemSupp.php">Add Supplier</a>
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


        <div class="content">
            <div class="container-fluid">
             <div class="tables">
				<form method="POST" action="addItemSuppq.php">
					<table align="center">

						<style>
							td {
								padding: 7px;
							}
						</style>	

						<br>
						<br>
						<br>
						<br>
						<tr>
							<td align="left">
								Item Supplier Name:
									<td>
										<input type="text" name="itemSupp" value="" placeholder="Enter Supplier" autocomplete="off">
									</td>
							</td>
							

							<tr>
								<td align="">	
									<input type="submit" name="Add" value="ADD"/>	
								</td>
						</tr>
					</table>
					
				</form>
				
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