<?php 
	
		require 'db.php';
		if(ISSET($_POST['login'])){

			$id = 'AC'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
			$uname = $_POST['uname'];
			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$age = $_POST['age'];
			$cpnum = $_POST['cpnum'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];
			$status = "activated";
			$user ="UL02";
		


		$sql = "SELECT * FROM tbl_users where email = '$email'";
		$res = mysqli_query($con,$sql);
		$row = mysqli_num_rows($res);

		if($row>0){

			// echo "<script>alert('Email Already Exist!');window.location='index.php'</script>";
			exit();

		}elseif($pass<>$cpass){

			// echo "<script>alert('Password Does Not Match!');window.location='index.php'</script>";
			exit();
		}else{

			$sql = "INSERT INTO tbl_users(id,uname,email,pass,cpass,userlvl_id,first_name,last_name,age,cpnum,address,status)VALUES('$id','$uname','$email','$pass','$cpass','$user','$fname','$lname','$age','$cpnum','$address','$status')";
			if(mysqli_query($con,$sql)){
			
			echo "<script>alert('Successfully Registered!');window.location='manageAccount.php'</script>";
			exit();
			}
		
		}
	}
?>		