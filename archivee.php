	
  </style>
			<div class="main-contentadd3"  style="overflow: hidden;">
      	<h2>Archive Data</h2>
        <table border="solid">
          <tr>
            <td>Costname</td>
            <td>Category Name</td>
            <td>Employee Name</td>
            <td>Or Number</td>
            <td>Control Number</td>
            <td>Date Paid</td>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <div style="display: none;">
            <?php 
              require 'db.php';

              if($_GET['id']);
              $id = $_GET['id'];
             ?>
          </div>

            <?php 
          
              $sql = "SELECT * FROM tbl_opcontent INNER JOIN tbl_operational_category ON tbl_opcontent.op_category_id = tbl_operational_category.operational_category_id WHERE archive_id = 'AC002' ";
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
                <?php echo $row['employee']?> 
              </td>

              <td align="center">
                <?php echo $row['ornumber']?> 
              </td>

              <td align="center">
                <?php echo $row['connumber']?> 
              </td>

              <td align="center">
                <?php echo $row['date_paid']?>
              </td>

              <td align="center">
                <?php echo $row['transaction_info']?>
              </td>

              <td align="center">
              <a href="archiveq2.php<?php echo '?id='.$vince ?>" class="btn btn-primary" onclick="archive()">
                  Retrieve
              </a>
              </td>

            </tr>
          <?php } ?>


             <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>


</html>