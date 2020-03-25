<?php

include('dbconnection.php');

if(isset($_REQUEST['signup'])){
	if(($_REQUEST['sname'] == "") || ($_REQUEST['semail'] == "") || ($_REQUEST['smobile'] == "") || ($_REQUEST['spassword'] == "")){
		$msg = '<div class="alert alert-danger mt-2" role="alert">Please Fill All Fields</div>';
	}
	else{
		$semail = $_REQUEST['semail'];
		$sql = "SELECT * FROM userregistration_db WHERE cust_email = '$semail'";
		$res = $conn->query($sql);
		
		if( $res->num_rows>0)
		{
			$msg = '<div class="alert alert-success mt-2" 
			role="alert">Email already Registered</div>';
		}
		else{
			$sname = $_REQUEST['sname'];
			$semail = $_REQUEST['semail'];
			$smobile = $_REQUEST['smobile'];
			$spassword = $_REQUEST['spassword'];

			$sql = "INSERT INTO userregistration_db(cust_name, cust_email, cust_mobile, cust_password) VALUES('$sname', '$semail', '$smobile', '$spassword')";
			$result = $conn->query($sql);
			if($result == TRUE){
				$msg = '<div class="alert alert-success mt-2" role="alert">Email registered successfully</div>';
			}
			else{
				$msg = '<div class="alert alert-danger mt-2" role="alert">Unable to registered</div>';
			}
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<h1 class="text-center mt-5">Coza Store</h1>
	<p class="text-center mt-2" style="font-size: 20px"><i class="fas fa-user-secret fa-2x mr-2"></i>User Registration Area</p>
	<div class="container-fluid">
		<div class="row justify-content-center mt-5">
			<div class="col-sm-6 col-md-4">
				<form action="" method="POST">
					<div class="form-group">
						<label for="sname" style="font-weight: bold">Name</label>
						<input type="text" name="sname" id="sname" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						</i>&nbsp;<label for="semail" style="font-weight: bold">Email</label>
						<input type="email" name="semail" id="semail" class="form-control" placeholder="Email">
						<small>We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="smobile" style="font-weight: bold">Mobile</label>
						<input type="text" name="smobile" id="smobile" class="form-control" placeholder="Mobile">
						
					</div>
					<div class="form-group">
						<label for="spassword" style="font-weight: bold">Password</label>
						<input type="password" name="spassword" id="spassword" class="form-control" placeholder="Password">
						
					</div>
					<button class="btn btn-outline-dark mt-4 btn-block" name="signup">Signup</button>
					<p class="mt-2">Already Customer?<a href="login.php">Login Here</a></p>
					<?php 
					if(isset($msg)){
						echo $msg;
					}
					?>
					<div class=" text-center"><a href="index.php" class="btn btn-danger mt-4">Back to Home</a></div>
				</form>
			</div>
		</div>
	</div>



	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
</body>

</html>\