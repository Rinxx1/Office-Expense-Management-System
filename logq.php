<?php

$con = mysqli_connect("localhost","root","","2954436_oema");	
			$email = $_POST['email'];
			$pass = $_POST['password'];
					

			

			$sql = "SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass' AND userlvl_id = 'UL01' AND status = 'activated'";
			$res = mysqli_query($con,$sql);
			$row = mysqli_num_rows($res);

			$sql1 = "SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass' AND userlvl_id = 'UL01' AND status = 'deactivated'";
			$res1 = mysqli_query($con,$sql1);
			$row1 = mysqli_num_rows($res1);

			$sql2 = "SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass' AND userlvl_id = 'UL02' AND status = 'activated'";
			$res2 = mysqli_query($con,$sql2);
			$row2 = mysqli_num_rows($res2);

			$sql3 = "SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass' AND userlvl_id = 'UL02' AND status = 'deactivated'";
			$res3 = mysqli_query($con,$sql3);
			$row3 = mysqli_num_rows($res3);

			$vince = "SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass'";
			$dan = mysqli_query($con,$vince);
			$rhence = mysqli_fetch_array($dan);


			if($row>0){
			session_start();

			$_SESSION['logged'] = true;
			$_SESSION['email'] = ucfirst($rhence['first_name'])." ".ucfirst($rhence['last_name']);

			 echo "<script>alert('Admin Successfully Login!');window.location='dashBoard.php'</script>";
			 exit();


			}elseif($row1>0){
			

			 echo "<script>alert('Account Deactivated!');window.location='index.php'</script>";
			 exit();

			}
			elseif($row2>0){
			session_start();

			$_SESSION['logged'] = true;
			$_SESSION['email'] = ucfirst($rhence['first_name'])." ".ucfirst($rhence['last_name']);

			 echo "<script>alert('User Successfully Login!');window.location='dashBoardUser.php'</script>";
			 exit();

			}elseif($row3>0){
			

			 echo "<script>alert('Account Deactivated!');window.location='index.php'</script>";
			 exit();

			}

			else{	
			 // echo "<script>alert('Invalid Username or Password');window.location='index.php'</script>";
			 exit();

		}
	?>	