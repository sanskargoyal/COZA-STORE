<?php 
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Help & FAQs</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over Rs. 500
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="faq.php" class="flex-c-m trans-04 p-lr-25">
							<i class="fab fa-hire-a-helper mr-1"></i>Help & FAQs
						</a>

						<a href="login.php" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="admin/login.php" class="flex-c-m trans-04 p-lr-25">
							<i class="fab fa-adn mr-1"></i>Admin
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.php">My Cart</a>
							</li>

							<li class="active-menu">
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div style="font-size: 20px;"><a href="shoping-cart.php" style=" color: black;">
							<i class="fas fa-shopping-cart"></i></a>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over Rs. 500
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="faq.php" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="login.php" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="admin/login.php" class="flex-c-m p-lr-10 trans-04">
							Admin
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<ul class="sub-menu-m">
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">My Cart</a>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/faq.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Shpping Policy
		</h2>
	</section>	
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="text-center">
				<a href="login.php" class="btn btn-dark txt-center" style="font-size: 30px">LOGIN</a>
				<p class="mt-3" style="font-size: 20px">Login to see your order details, cancel orders etc.</p>
			</div>
			<div class="container mt-3">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<h4 class="font-size-bold">Top FAQs</h4>
							<li class="mt-3"><a href="" class="text-dark collapsible">How can i check My Orders ?</a></li>
								<div >
									<h1></h1>
								</div>
							<li class="mt-1"><a href="" class="text-dark">What is Questions & Answer ?</li>
							<li class="mt-1"><a href="" class="text-dark">What is different mode of payment available ?</li>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<li class="mt-5"><a href="" class="text-dark">What are digital products ?</li>
							<li class="mt-1"><a href="" class="text-dark">When can i expect refund for my returned items ?</li>
							<li class="mt-1"><a href="" class="text-dark">I don't remember my password. Help! ?</li>
					</div>
				</div>
			</div><hr class="mt-3">
		</div>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-12 col-md-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-fingerprint" style="font-size: 60px"></i>
							<p class="mt-3" style="font-size:20px; ">100% Secure Payments</p><hr>
							<p>Moving your card details to a much more secured palace.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-user-check" style="font-size: 60px"></i>
							<p class="mt-3" style="font-size:20px; ">Trust Pay</p><hr>
							<p>100% Payment Protection. Easy Return Policy.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-handshake" style="font-size: 60px"></i>
							<p class="mt-3" style="font-size:20px; ">Help Center</p><hr>
							<p>Got a question? Look no further. Browse your FAQ's.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-mobile-alt" style="font-size: 60px"></i>
							<p class="mt-3" style="font-size:20px; ">Help Center</p><hr>
							<p>Browse the site and get exciting offers at oneclick.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		


	<?php
	include('footer.php');
	?>	