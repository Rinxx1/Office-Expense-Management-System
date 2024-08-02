
           <?php 

                 require 'db.php';
                
                if (isset($_POST['save'])) {
                
                  if(isset($_GET));
                 $vg = $_GET['id'];
                                    # code...
                 $fname = $_POST['fname'];
                 $lname = $_POST['lname'];
                 $age = $_POST['age'];
                 $email = $_POST['email'];
                 $cpnum = $_POST['cpnum'];
                 $address = $_POST['address'];

                 $update = "UPDATE tbl_users SET first_name = '$fname', last_name = '$lname', age = '$age', email = '$email', cpnum = '$cpnum',
                 address = '$address' WHERE id = '$vg'";
                 if (mysqli_query($con,$update)) {

                  echo "<script>alert('Successfully Update!');window.location='manageAccount.php';</script>";

               }else{
               }
               }

                 ?>