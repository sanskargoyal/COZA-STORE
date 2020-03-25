<?php 
include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
	if (isset($_REQUEST['aEmail'])) {
		$aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
		$aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));
		$sql = "SELECT * FROM admin_tb WHERE admin_email = '".$aEmail."' AND admin_password = '".$aPassword."' limit 1";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$_SESSION['is_login'] = true;
			$_SESSION['aEmail'] = $aEmail;
			echo "<script>location.href='dashboard.php';</script>";
			exit;
		}
		else{
			$msg = '<div class="alert alert-warning mt-2" role="alert">login failed</div>';
		}
	}
}
else{
	echo "<script>location.href='dashboard.php';</script>";  
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<h1 class="text-center mt-5">Coza Store</h1>
	<p class="text-center mt-2" style="font-size: 20px"><i class="fas fa-user-secret fa-2x mr-2"></i>Admin Login</p>

	<div class="container-fluid">
		<div class="row justify-content-center mt-5">
			<div class="col-sm-6 col-md-4">
				<form action="" class="shadow-lg pd-4" method="POST">
					<div class="form-group">
						<label for="aEmail" class="font-weight-bold pl-2">Email</label><input type="email" name="aEmail" class="form-control" placeholder="Email">
						<small class="form-text">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="aPassword" class="font-weight-bold pl-2">Password</label><input type="password" name="aPassword" class="form-control" placeholder="Password">
						<p class="mt-2"> <a href="signup.php">Forgot Password</a> </p>
					</div>
					<button type="submit" name="login" class="btn btn-outline-dark mt-4 btn-block shadow-sm login">Login</button>
					<?php if(isset($msg)){echo "$msg";}?>
					<p class="mt-2">New Customer? <a href="signup.php">Start Here</a> </p>
				</form>
				<div class="text-center"><a href="../index.php" class="btn btn-danger mt-3 shadow-sm">Back to home</a></div>
			</div>
		</div>
	</div>
	
	<!-- Boostrap JavaScript -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>
</body>

</html>