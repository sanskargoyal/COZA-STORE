<?php
session_start(); 
include('dbconnection.php');
if(isset($_SESSION['is_login']))
{
	$lEmail = $_SESSION['lEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
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

							<li>
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


		<!-- breadcrumb -->
		<div class="container">
			<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
				<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
					Home
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>

				<span class="stext-109 cl4">
					Shoping Cart

				</span>
			</div>
		</div>


		<!-- Shoping Cart -->
		<form class="bg0 p-t-75 p-b-85">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Product</th>
										<th class="column-2"></th>
										<th class="column-3">Price</th>
										<th class="column-4">Quantity</th>
										<th class="column-5">Total</th>
										<th class="column-5">Action</th>
									</tr>
									<?php 
									$total = 0;
									$sub_total =0;
									$select_cart = "SELECT * FROM cart WHERE user_email = '$lEmail'";
									$run_cart = mysqli_query($conn, $select_cart);
									$count = mysqli_num_rows($run_cart);
									while($row = mysqli_fetch_array($run_cart)){
										$product_id = $row['product_id'];
										$product_size = $row['product_size'];
										$product_color = $row['product_color'];
										$product_quantity = $row['product_quantity'];
										$get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
										$run_product = mysqli_query($conn, $get_product);
										while($row=mysqli_fetch_array($run_product)){
											$product_title = $row['product_title'];
											$product_img1 = $row['product_img1'];
											$product_price = $row['product_price'];
											$sub_total = $row['product_price']*$product_quantity;
											$total += $sub_total; 

											echo '<tr class="table_row">';
											echo '<td class="column-1">';
											echo '<div class="how-itemcart1">';
											echo '<img src="admin/product_images/'. $product_img1.'" alt="IMG">';
											echo '</div>';
											echo '</td>';
											echo '<td class="column-2">'. $product_title.'</td>';
											echo '<td class="column-3">Rs.&nbsp;'. $product_price .'</td>';
											echo '<td class="column-4">'.$product_quantity.'</td>';
											echo '<td class="column-5">Rs.&nbsp;'.$sub_total .'</td>';
											echo '<form action="" method= "POST" class="d-inline">';
											echo '<td class="column-6 text-center"><input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" class="btn btn-dark mr-3" name="delete" value="delete"><i class="far fa-trash-alt"></i></button></td>';
											echo '</form>';
											echo '</tr>';
										}
									}
									?>

								</table>
							</div>
							<?php 
							if(isset($_REQUEST['delete']))
							{
								$sql = "DELETE FROM cart WHERE product_id = {$_REQUEST['id']}";
								if($conn->query($sql) == TRUE){
									echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
								} else {
									echo "Unable to Delete Data";
								}
							}

							?>

							<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
								<div class="flex-w flex-m m-r-20 m-tb-5">
									<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

									<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
										Apply coupon
									</div>
								</div>

								<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
									Update Cart
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
						<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
							<h4 class="mtext-109 cl2 p-b-30">
								Cart Totals
							</h4>

							<div class="flex-w flex-t bor12 p-b-13">
								<div class="size-208">
									<span class="stext-110 cl2">
										Subtotal:
									</span>
								</div>

								<div class="size-209">
									<span class="mtext-110 cl2">
										<?php echo 'Rs.&nbsp;'. $total; ?>
									</span>
								</div>
							</div>

							<div class="flex-w flex-t bor12 p-t-15 p-b-30">
								<div class="size-208 w-full-ssm">
									<span class="stext-110 cl2">
										Shipping:
									</span>
								</div>

								<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
									<?php
									$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$lEmail'";
									$res = mysqli_query($conn, $sql);
									$row=mysqli_fetch_array($res);
									echo '<b><p>'.$row["cust_name"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["cust_mobile"].'</p></b>
									<p class="mt-3">'.$row['cust_address'].',&nbsp;<br>'.$row['cust_locality'].',<br>&nbsp;'.$row['cust_city'].',&nbsp;'.$row['cust_state'].',&nbsp;'.$row['cust_locality'].',&nbsp;<br><b>'.$row['cust_pincode'].'</b></p>
									<b><p class="mt-3">'.$row['cust_email'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cust_alt_mobile'].'</p></b>';
									?>
								</div>
							</div>

							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl2">
										Total:
									</span>
								</div>

								<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										<?php echo 'Rs.&nbsp;'.$total; ?>
									</span>
								</div>
							</div>
							<?php 
							$sql = 'SELECT * FROM products';
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_array($result);
							$product_id = $row['product_id'];
							echo '<a href="productbuy.php?pro_id='.$product_id.'" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
							</a>';
							?>

						</div>
					</div>
				</div>
			</div>
		</form>




		<!-- Footer -->
		<?php 
		include('footer.php');
		?>