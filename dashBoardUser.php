<?php 
require_once('rens.php');
?>
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

      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
      <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>


<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="assets/img/sidebar-5.jpg">

  
  <style>
  .fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear;
}

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
               <li><center><img src="1.png" alt="Avatar"><?php echo $_SESSION['email'];?><br><p>User</p></center> 
      </li>

      
      <br>
                <li class="active">
                    <a href="dashBoardUser.php">
                        <i class="fas fa-chart-pie"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
        <br>
          <li>
                    <a href="itemExpensesUser.php">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        <p>Item Expenses</p>
                    </a>
                </li>
        <br>
               <li>
                    <a href="itemCatUser.php">
                       <i class="fab fa-dropbox"></i>
                        <p>Item Category</p>
                    </a>
                </li>
        <br>
                <li>
                    <a href="supplierUser.php">
                      <i class="fas fa-people-carry"></i>
                        <p>Item Supplier</p>
                    </a>
                </li>
        <br>
                <li>
                    <a href="operationalCostUser.php">
                       <i class="fas fa-hand-holding-usd"></i>
                        <p>Operational Cost</p>
                    </a>
                </li>
        <br>
                <li>
                    <a href="operationalCatUser.php">
                        <i class="fas fa-boxes"></i>
                        <p>Operational Category</p>
                    </a>
                </li>
        <br>
                <li>
                    <a href="manageAccountUser.php">
                        <i class="fas fa-users"></i>
                        <p>Manage Account</p>
                    </a>
                </li>
                <br>
                 
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
                        <span class="icon-bar"></s
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
             <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashBoardUser.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
              <br class="hidden-lg hidden-md">
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
                                <i class="fas fa-power-off"> Log Out</i>
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

<button onclick="myFunction()" class="btn btn-primary" style="margin-left:20%;">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>

<style>b 
input[type=date], select {

                 width: 30%;
                  padding: 10px 10px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                

                
              }
  
</style>


          <h3 align="center">Item Expenses</h3>
        
        
        <div class="content">
          <div><center>
                <form method="POST" action="">
                
                  <input type="date" name="date1">
                  <input type="date" name="date2">
                  <button name="btn1" class="btn btn-primary">OK</button>
                </form>
              </center>
                <br>  
                <table>
                  <tr>
                    <td>Item Name</td>
                    <td>Category</td>
                    <td>Supplier</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                  </tr>
                  
        <?php 
              require 'db.php';
             ?>
              <div style="display: none;">
              
                  <?php 
              $date1 = $_POST['date1'];
              $date2 = $_POST['date2'];
              
              if(isset($_POST['btn1'])){
               ?>
              
             </div>
             <?php

              $ghray = "SELECT * FROM tbl_itemcontent INNER JOIN tbl_item_category ON tbl_itemcontent.item_category_id = tbl_item_category.item_category_id INNER JOIN tbl_supplier ON tbl_itemcontent.supplier_id = tbl_supplier.supplier_id INNER JOIN tbl_price ON tbl_itemcontent.price_id = tbl_price.price_id INNER JOIN tbl_quantity ON tbl_quantity.quantity_id = tbl_itemcontent.quantity_id WHERE date_purchased BETWEEN '$date1' AND '$date2'";
              $ghray2 = mysqli_query($con,$ghray);
              while ($ghray3 = mysqli_fetch_array($ghray2)) {
               ?>
               <tr>
                 <td><?php echo $ghray3['item_name']; ?></td>
                 <td><?php echo $ghray3['item_category_name']; ?></td>
                 <td><?php echo $ghray3['supplier_name']; ?></td>
                 <td><?php echo $ghray3['price']; ?></td>
                 <td><?php echo $ghray3['quantity']; ?></td>
                 <td><?php echo $ghray3['price'] *  $ghray3['quantity']; ?></td>


               </tr>
               
             <?php } ?>
             <?php

              $ghrays = "SELECT *,SUM(price * quantity) AS 'sum' FROM tbl_itemcontent INNER JOIN tbl_item_category ON tbl_itemcontent.item_category_id = tbl_item_category.item_category_id INNER JOIN tbl_supplier ON tbl_itemcontent.supplier_id = tbl_supplier.supplier_id INNER JOIN tbl_price ON tbl_itemcontent.price_id = tbl_price.price_id INNER JOIN tbl_quantity ON tbl_quantity.quantity_id = tbl_itemcontent.quantity_id WHERE date_purchased BETWEEN '$date1' AND '$date2'";
              $ghrays2 = mysqli_query($con,$ghrays);
              $ghrays3 = mysqli_fetch_array($ghrays2);
               ?>
             <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td style="text-align:right">Overall Total</td>
                     <td><?php echo "₱".$ghrays3['sum'] ?></td>
             </tr>
             
             <?php }?>
                </table>
              </div>
            <div class="container-fluid">


          <style>
            table, th, td {
             border: 1px solid black;
              font-family: century gothic;
             border-collapse: collapse;

            
            }
            </style>
    

            <style>
              
            </style>
          <br>
       <h3 align="center">Operational Cost</h3>
        <div class="content">
          <div><center>
                <form method="POST" action="">
                  <input type="date" name="date3">
                  <input type="date" name="date4">
                  <button name="btn2" class="btn btn-primary">OK</button>
                </form>
              </center>
                <br>  
                <table>
                  <tr>
                    <td>Operational Cost Name</td>
                    <td>Operational Category</td>
                    <td>Date Paid</td>
                    <td>Amount</td>
                  </tr>
                  <?php 
              require 'db.php';
              ?>
              <div style="display: none;">
              <?php 
              $date3 = $_POST['date3']; 
              $date4 = $_POST['date4'];

                 if(isset($_POST['btn2'])){

               ?>
             </div>
              <?php
              $khester = "SELECT * FROM tbl_opcontent INNER JOIN tbl_operational_category ON tbl_opcontent.op_category_id = tbl_operational_category.operational_category_id INNER JOIN tbl_operational_amount1 ON tbl_opcontent.operational_amount_id = tbl_operational_amount1.operational_amount_id WHERE date_paid BETWEEN '$date3' AND '$date4' ";
              $khester2 = mysqli_query($con,$khester);
              while ($khester3 = mysqli_fetch_array($khester2)) {
               ?>
               <tr>
                 <td><?php echo $khester3['costname']; ?></td>
                 <td><?php echo $khester3['operational_category_name']; ?></td>
                 <td><?php echo $khester3['date_paid']; ?></td>
                 <td><?php echo $khester3['Amount']; ?></td>
               </tr>

                

             <?php } }?>
                </table>
              </div>

        <!-- <h3 align="center">Operational Cost</h3> -->
        <style>
            table, th, td {
             border: 1px solid black;
              font-family: century gothic;
             border-collapse: collapse;
            }
            </style>
        
      
          <!-- <table class="container"> -->
            <style type="text/css">
              td {
                padding: 10px;
                font-size: 15
                border:solid 1px black;
              }
              table{
                border:solid 1px black;
                width:100%;
              }
              td:hover{
                background-color: #333;
                color: #ffffff;
                font-family: century gothic;
                transition: 0.5s;
              }
              tr:hover{
                background-color: 
                color: 

              }
            </style>
            
  
          </table>
     </Center>

      </div>

          </Center>
          </div>




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

  <script type="text/javascript">
      $(document).ready(function(){

          demo.initChartist();

          $.notify({
              icon: 'pe-7s-joy',
              message: "Welcome to <b>Office Expense Monitoring Application  <?php echo $_SESSION['email'];?>  "

            },{
                type: 'info',
                timer: 4000
            });
      
      });
  </script>

</html>
