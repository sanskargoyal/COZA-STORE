<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE ?></title>
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
	

	<nav class="navbar navbar-dark fixed-top bg-dark p-0 shadow-lg"><a class="navbar-brand col-sm-3 col-md-2" href="../index.php">COZA STORE</a></nav>

	<!-- Start Container -->
	<div class="container-fluid" style="margin-top: 40px;">
		<div class="row mx-2">
			<!-- Sidebar -->
			<div class="col-sm-3 bg-light py-2">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<span><a href="../customer/myorders.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-wallet mr-3"></i>MY ORDERS<i class="fas fa-chevron-right" style="margin-left: 80"></i></a></span>
						</li><hr>
					</ul>
					<span style="font-size: 20px"><i class="fas fa-user d-inline mr-3"></i><p class="d-inline">ACCOUNT SETTING</p></span>
					<li class="nav-item mt-2">
						<a href="../customer/profileinformation.php"  class="nav-link text-dark <?php if(PAGE == 'profileinformation'){echo 'active';} ?>" style="font-size: 15px">Profile Information</a>
					</li>
					<li class="nav-item">
						<a href="../customer/manageaddress.php" class="nav-link text-dark <?php if(PAGE == 'manageaddress'){echo 'active';}?>" style="font-size: 15px">Manage Address</a>
					</li><hr>
					<a href="" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-comments mr-3"></i>MY CHATS<i class="fas fa-chevron-right" style="margin-left: 80"></i></a><hr>
					<span style="font-size: 20px"><i class="fas fa-clipboard d-inline mr-3"></i><p class="d-inline">MY STUFF</p></span>
					<li class="nav-item mt-2">
						<a href="../customer/mycoupan.php" class="nav-link text-dark <?php if(PAGE == 'mycoupan'){echo 'active';}?>" style="font-size: 15px">My Coupans</a>
					</li>
					<li class="nav-item">
						<a href="../customer/myreviews.php" class="nav-link text-dark <?php if(PAGE == 'myreviews'){echo 'active';}?>" style="font-size: 15px">My Reviews & Ratings</a>
					</li>
					<li class="nav-item">
						<a href="../customer/notifiaction.php" class="nav-link text-dark <?php if(PAGE == 'notifiaction'){echo 'active';}?>" style="font-size: 15px">All Notifications</a>
					</li>
					<li class="nav-item">
						<a href="../customer/wishlists.php" class="nav-link text-dark <?php if(PAGE == 'wishlists'){echo 'active';}?>" style="font-size: 15px">My Wishlists</a>
					</li><hr>
					<a href="../customer/logout.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
				</ul>
			</div>
		</div>