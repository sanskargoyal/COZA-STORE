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
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

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
		<nav class="navbar navbar-dark fixed-top bg-dark text-white p-0"><a href="../index.php" class="navbar-brand text-white col-sm-3 col-md-2">COZA STORE</a></nav>
		<div class="container-fluid" style="margin-top: 40px;">
			<div class="row mx-2">
				<div class="col-sm-3 bg-light py-2 pt-2 d-print-none">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a href="dashboard.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
							</li><hr>
							<li class="nav-item">
								<a href="customer.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-users mr-2"></i>Customer</a>
							</li><hr>
							<li class="nav-item">
								<button class="collapsible ml-3" style="font-size: 20px"><i class="fas fa-align-center mr-2"></i>Orders<i class="fas fa-chevron-down" style=";margin-left: 150px"></i>	</button>
								<div class="collapse">
									<ul class="mt-3">
										<li class="nav-item ml-3">
											<a href="complete.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-clipboard-check mr-2	"></i>Complete Orders</a>
										</li>
										<li class="nav-item ml-3">
											<a href="pending.php" class="nav-link text-dark" style="font-size: 20px"><i class="fab fa-stack-exchange mr-2"></i>Pending Orders</a>
										</li>
									</ul>
								</div>
							</li><hr>
							
							<li class="nav-item">
								<a href="newsletter.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-newspaper mr-2"></i>Newsletter</a>
							</li><hr>
							<li class="nav-item">
								<a href="sellreport.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-chart-line mr-2"></i>Sell Report</a>
							</li><hr>	
							
							<li class="nav-item">
								<button class="collapsible ml-3" style="font-size: 20px"><i class="fas fa-shopping-cart mr-2"></i>Product<i class="fas fa-chevron-down" style="margin-left: 100px"></i>	</button>
								<div class="collapse">
									<ul class="mt-3">
										<li class="nav-item ml-3">
											<a href="productlist.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-list-ul mr-2"></i> Product List</a>
										</li>
										<li class="nav-item ml-3">
											<a href="productedit.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-bolt mr-3"></i>Add Product</a>
										</li>
										<li class="nav-item ml-3">
											<a href="productdetails.php" class="nav-link text-dark" style="font-size: 20px"><i class="far fa-heart mr-2"></i>Product Details</a>
										</li>
										<li class="nav-item ml-3">
											<a href="productcategories.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-box mr-2"></i>Product Categories</a>
										</li>
										<li class="nav-item ml-3">
											<a href="productcolor.php" class="nav-link text-dark" style="font-size: 20px"><i class="fab fa-product-hunt mr-2"></i>Product Color</a>
										</li>
										<li class="nav-item ml-3">
											<a href="productsize.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-project-diagram mr-2"></i>Product Size</a>
										</li>
									</ul>	
								</div>
							</li><hr>
							<li class="nav-item">
								<a href="mailbox.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-envelope mr-2"></i>Mailbox</a>
							</li><hr>
							<li class="nav-item">
								<a href="payment.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-credit-card mr-2"></i>Payment</a>
							</li><hr>
							<li class="nav-item">
								<a href="changepassword.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-key mr-2"></i>Change Password</a>
							</li><hr>
							<li class="nav-item">
								<a href="../customer/logout.php" class="nav-link text-dark" style="font-size: 20px"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
							</li><hr>
						</ul>
					</div>
				</div>