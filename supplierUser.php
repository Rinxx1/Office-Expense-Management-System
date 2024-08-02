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
  <style>
  img {
  border-radius: 50%;
  width:32px;
  height:32px;
}
</style>
<?php 
require_once('rens.php');
?>
</head>
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
      <li><center><img src="1.png" alt="Avatar"><?php echo $_SESSION['email'];?><br><p>User</p></center>
      </li>
      <br>
               <li>
                    <a href="dashBoardUser.php">
                     <i class="fas fa-chart-pie"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
        <br>
          <li >
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
                <li  class="active">
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

              <!--   <li>
                    <a href="archive.php">
                        <i class="fa fa-archive"></i>
                        <p>Archive History</p>
                    </a>
                </li> -->

                <br>
                <!--  <li>
                    <a href="manageAccountUser.php">
                        <i class="fas fa-users"></i>
                        <p>Manage Account</p>
                    </a>
                </li> -->
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
                    <a class="navbar-brand" href="supplier.php">Item Supplier</a>
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
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
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
.modal1 {
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
.modal-content1 {
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
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

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
<style>

</style>
        
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
                Item Supplier Name
              </td>

              <td align="center">
                Contact Person
              </td>

              <td align="center">
                Address
              </td>

              <td align="center">
                Contact Number
              </td>
             <!--  <td align="center">
                Status
              </td>

              
              <td align="center">
                <h3>Settings</h3>
                
                <input type="submit" name="Add" value=" Add Item Supplier " id="myBtnadd" class="btn btn-primary" />
              </td> -->
            </tr>



            <?php 
              require'db.php';

              $sql = "SELECT * from tbl_supplier WHERE archive_id = 'AC001' ";
              $result = mysqli_query($con,$sql);

              while($row = mysqli_fetch_array($result)){
                $vince = $row['supplier_id'];
            ?>


            <tr align="center">
              <td><?php echo $row['supplier_name']; ?>
            </td>

            <td>
                <?php echo $row['supplier_info']; ?>
            </td>

            <td>
                <?php echo $row['supplier_add']; ?>
            </td>

            <td>
              <?php echo $row['supplier_con']; ?>
            </td>
           <!--  <td>
              <?php echo $row['status']; ?>
            </td> -->

          <!--   <td>
             <a href="deleteSuppq.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete ?');">
                  Delete
              </a>
               <a href="editsupplier.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to update ?');">
                  Update
              </a>
              <a href="archiveq.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to archive ?');">
                  Archive
              </a>
              <a href="supplierinactive.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to inactive ?');">
                  Inactive
              </a>
              <a href="supplieractive.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to active ?');">
                  active
              </a>
               <a href=info.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="return confirm('Information of the Supplier ');">
                  Info
              </a> -->
              </td>
 
            </tr>
               

            <?php }?>

  
          </table>

          <script type="text/javascript">
            function delete4()
{              var txt;
              var r = confirm("Are you sure you want to delete ?");
              if(r == true){
                txt = "";
              }else{
                txt = "";
              }
              document.getElementById('deleteSuppq.php').innerHTML = txt;
            }
            function update4(){
              var txt;
              var r = confirm("Are you sure you want to update ?");
              if(r == true){
                txt = "";
              }else{
                txt = "";
              }
              document.getElementById('updateEX.php').innerHTML = txt;
            }
            function archive4(){
              var txt;
              var r = confirm("Are you sure you want to archive ?");
              if(r == true){
                txt = "";
              }else{
                txt = "";
              }
              document.getElementById('archive.php').innerHTML = txt;
            }
          </script>

              </a> 
            </td>

            </tr>

 <!--  -->

<?php ?>
  
        </table>
        </Center>
      </div>
       <div id="myModaladd33" class="modaladd33">
         <div class="modal-contentadd33"> 
             <span class="close133">&times;</span>
              <div class="main-contentadd33"  style="overflow: hidden;">
             <form action="" method="post">
            <center><h4><i class="icon-edit icon-large"></i>Supplier info.</h4></center>
<div>
<center>
  
<td align="left">Name of Supplier: </td>

<input type="text" style="width:265px; height:30px;" name="supplier_info"  value="<?php echo $_SESSION['supplier_info'];?>" disabled/>
<input type="Hidden" name="supplier_id" value="<?php echo $_SESSION['supplier_info'];?>">
<br>
<span align="left">Contact num: </span>

<input type="number" style="width:265px; height:30px" align="center;" name="supplier_con"  value="<?php echo $_SESSION['supplier_con'];?>" disabled/>
<input type="Hidden" name="supplier_id" value="<?php echo $_SESSION['supplier_con'];?>">
<br>
<span align="left">Address: </span>

<input type="text" style="width:265px; height:50px;" name="supplier_add"  value="<?php echo $_SESSION['supplier_add'];?>" disabled/>
<input type="Hidden" name="supplier_id" value="<?php echo $_SESSION['supplier_add'];?>">


</center>
</form>
</div>
</div>
</div></div>


<script>
// Get the modal
var modal133 = document.getElementById('myModaladd33');

// Get the button that opens the modal
var btn133 = document.getElementById("myBtnadd33");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close133")[0];

// When the user clicks the button, open the modal 
btn133.onclick = function() {
  modal133.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal133.style.display = "none";
}

</script>




<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd33 {
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
.modal-contentadd33 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close133 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close133:hover,
.close133:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>















 <!-- div id="myModaladd3" class="modaladd3">
         <div class="modal-contentadd3">
             <span class="close13">&times;</span>
              <div class="main-contentadd3"  style="overflow: hidden;">
             <form action="updateSUPPq.php" method="post">
            <center><h4><i class="icon-edit icon-large"></i> Update Supplier Name</h4></center>
<div>
<center>
  
<span align="left">Supplier Name: </span>

<input type="text" style="width:265px; height:30px;" name="supplier_name"  value="<?php echo $_SESSION['supplier_name'];?>"/>
<input type="Hidden" name="supplier_id" value="<?php echo $_SESSION['supplier_id'];?>">

<button type="submit" name="update1" class="btn btn-primary btn-block" style="width:267px;"><i class="icon icon-save icon-large">
  </i> Save Changes</button>

</center>
</form>
</div>
      </div>
    </div>
  </div>
 -->

<script>
// Get the modal
var modal13 = document.getElementById('myModaladd3');

// Get the button that opens the modal
var btn13 = document.getElementById("myBtnadd3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close13")[0];

// When the user clicks the button, open the modal 
btn13.onclick = function() {
  modal13.style.display = "unblock";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal13.style.display = "none";
}

</script>




<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd3 {
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
.modal-contentadd3 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close13 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close13:hover,
.close13:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

                         <!-- MODAL FOR ADD EXPENSE -->


      <div id="myModaladd" class="modaladd">
         <div class="modal-contentadd">
             <span class="close1">&times;</span>
              <div class="main-contentadd"  style="overflow: hidden;">
             <form method="POST" action="addItemSuppq.php">
             <table class="add" style="border: 1px solid transparent;" align="center">

             <style>

              td {
              
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
                  padding: 10px 10px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                

                
              }

             </style> 


                <tr>
                  <td style="border: 1px solid transparent; width: 40%;" align="left">
                  Item Supplier Name:
                  </td>
                  <td style="border: 1px solid transparent;">
                  <input type="text" name="itemSupp" value="" placeholder="Enter Supplier" autocomplete="off" required>
                  </td>
                </tr>
              

              <tr>
               <td style="border: 1px solid transparent; width: 40%;" align="left">
                Contact Person:
                </td>
                <td>
                <input type="text" name="supplierinfo" value="" placeholder="Enter Supplier info" autocomplete="off" required>
                </td>
             </tr>

              <tr>
                <td style="border: 1px solid transparent; width: 40%;" align="left">
                Address:
                </td>
                <td align="center">
                <input type="text" name="suppadd" value="" placeholder="Enter Supplier Address" autocomplete="off" required>
                </td>
             </tr>

              <tr>
                <td style="border: 1px solid transparent; width: 40%;" align="left">
                Contact Number:
                </td>
                <td align="center">
                <input type="number" name="gulapa" style="width: 101%;" " height: 90%;"value="" placeholder="Enter Contact number" autocomplete="off" required>
              </td>
            </tr>     

              <tr>
                <td align="center" style="border: 1px solid transparent;">  
                  <input type="submit" name="Add"  value="ADD" class="btn btn-primary btn-block"/>  
                </td>
              </tr>
          </table>  
        </form>
      </div>  
      </div>
  </div>


<!--        

      <li class="rad-notification-item">
                <a class="rad-notification-content lg-text" href="logout.php"><i class="fa fa-power-off"></i> Sign out</a>
              </li>s
            </ul>
          </li>
        -->


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
  left: 8.5%;
  top: 0;
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
          <div id="myModaladd9" class="modaladd9">

        <!-- Modal content -->
         <div class="modal-contentadd9">
             <span class="close19">&times;</span>
              <div class="main-contentadd9"  style="overflow: hidden;">
          
             <style>
              td {
                padding: 1px;
              }
             </style> 
            <tr>
              <p style="font-family:courier;" align="center">Are you sure you want delete this Item Supplier?</p>
                  <br>
                <center>
                  <a class="btn btn-primary" href="deleteSuppq.php<?php echo'?id='.$vince; ?>">Delete</a>  
                  <a class="btn btn-primary" href="supplier.php">Close</a> 
                </center>
              
          </table>





          
<script>
// Get the modal
var modal9 = document.getElementById('myModaladd9');

// Get the button that opens the modal
var btn9 = document.getElementById("myBtnadd9");

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








                                          <!-- STYLE FOR ADD ITEM SUPPLIER  -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 8.5%;
  top: 0;
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








            <!-- MODAL FOR DELETE  -->

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




                                                             <!-- STYLE FOR DELETE MODAL -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modaladd9 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 8.5%;
  top: 5%;
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
