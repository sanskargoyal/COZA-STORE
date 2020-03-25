<?php 
$id = $_GET['id'];
session_start();
include('dbconnection.php');
if(isset($_SESSION['is_login'])){
	$lEmail = $_SESSION['lEmail'];
}
?>

<!DOCTYPE>
<php lang="en">
	<head>
		<title>Product Detail</title>
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

		<!-- Cart -->
		
		<?php 
		$sql = "SELECT * FROM products WHERE product_id = '$id'";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
	 	$cat_id = $row['cat_id'];
	 	
	 	$p_cat_id = $row['p_cat_id'];
		$sql1 = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
		$res1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_array($res1);
		$cat_t = $row1['cat_title'];
		$sql2 = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
	$res2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($res2);

		
		echo '<div class="container">
					<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
						<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
							Home
							<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
						</a>
		
						<a href="product.php" class="stext-109 cl8 hov-cl1 trans-04">
							'.$cat_t.'
							<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
						</a>
		
						<span class="stext-109 cl4">'.$row['product_title'].'
					</span>
				</div>';
		?>
	</div>



	<!-- breadcrumb -->
	


	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-lg-5 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="admin/product_images/<?php echo $row['product_img1'];?>">
									<div class="wrap-pic-w pos-relative">

										<img src="admin/product_images/<?php echo $row['product_img1'];?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="admin/product_images/<?php echo $row['product_img1'];?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="admin/product_images/<?php echo $row['product_img2'];?>">
									<div class="wrap-pic-w pos-relative">
										<img src="admin/product_images/<?php echo $row['product_img2'];?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="admin/product_images/<?php echo $row['product_img2'];?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="admin/product_images/<?php echo $row['product_img3'];?>">
									<div class="wrap-pic-w pos-relative">
										<img src="admin/product_images/<?php echo $row['product_img3'];?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="admin/product_images/<?php echo $row['product_img3'];?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-7 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php if(isset($row['product_title'])){echo $row['product_title']; }?>
						</h4>

						<span class="mtext-106 cl2">
							<?php if(isset($row['product_price'])){echo 'Rs.'. $row['product_price']; }?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php if(isset($row['product_keywords'])){echo $row['product_keywords']; }?>
						</p>
						<?php
						$sql = 'SELECT * FROM products';
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);
						?>
						<?php 
						if(isset($_REQUEST['addtocart'])){
							if(isset($_SESSION['is_login'])){
								$lEmail = $_SESSION['lEmail'];
							}
							else{
								echo '<script>location.href="login.php"</script>';
							}
						}
						?>
						<?php 
						if (isset($_REQUEST['addtocart'])) {

	// if(($_REQUEST['size'] == "")){
	// 	echo '<script>alert("Please Enter Size")</script>';
	// }
	// elseif (($_REQUEST['color'] == "")) {
	// 	$msg = '<div class="alert alert-danger" role="alert">Please Enter Color</div>';
	// }
	// elseif (($_REQUEST['quantity'] == "")) {
	// 	$msg = '<div class="alert alert-danger" role="alert">Please Enter Quantity</div>';
	// }
	// else{
							$size = $_REQUEST['size'];
							$color = $_REQUEST['color'];
							$quantity = $_REQUEST['quantity'];
							$lEmail = $_SESSION['lEmail'];
							$sql = "INSERT INTO cart(user_email, product_id, product_quantity, product_size, product_color) VALUES('$lEmail', '$id', '$quantity', '$size', '$color')";
							$result = mysqli_query($conn, $sql);
							if($result==TRUE){
								echo "<script>window.open('product-detail.php?id=$id','_self')</script>";
							}
							else{
								echo '<script>alert("Unable to Add Cart")</script>';
							}
	// }
						}
						?>
						
						<form action="" method="POST">
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2 form-control" name="size">
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2 form-control" name="color">
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product form-control" type="number" name="quantity" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button type="submit" name="addtocart" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
										<?php
										if(isset($msg))
										{
											echo $msg;
										}
										?>
									</div>
								</div>	
							</div>

						</form><!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fab fa-facebook-square"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fab fa-twitter-square"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fab fa-instagram"></i>
							</a>
						</div>


						<div class="flex-w flex-r-m p-b-10 mt-5">
							<div class="container mt-5">
								<div class="row">
									<div class="col-sm-6 col-md-9 col-lg-8">
										<h3>Have doubts regarding this product ?</h3>
									</div>
									<div class="col-sm-6 col-md-3 col-lg-4">
										<button class="btn btn-dark pull-right" type="submit">Post Your Questions</button>

									</div>
								</div><hr class="mt-5">

								<!-- <div class="row mt-5">
									<div class="col-sm-6 col-md-9 col-lg-8">
										<h3>Ratings & Reviews</h3>
									</div>
									<div class="col-sm-6 col-md-3 col-lg-4">
										<but href="" class="btn btn-dark pull-right text-white" type="submit">Rate Product</a>

									</div>
								</div> -->
							</div>
						</div>

						<!--  -->

					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active collapse" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>
						<?php 
											$i=0;
											$product_id = $_GET['id'];
											$sql="SELECT * FROM product_review WHERE product_id = '$product_id'";
											$run = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_array($run)){ $i++;}?>
						<li class="nav-item p-b-10">
													<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews&nbsp;(<?php echo $i ?>) </a>
												</li>
						
					</ul>
					<?php 
					$sql = "SELECT * FROM products WHERE product_id = '$id'";
					$res = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($res);
					$product_size = $row['product_size'];
					$product_color = $row['product_color'];
					$get_size = "SELECT * FROM product_size";
					$run_size = mysqli_query($conn, $get_size);

					$get_color = "SELECT * FROM product_color";
					$run_color = mysqli_query($conn, $get_color);

					?>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active collapsible" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md collapsible">
								<p class="stext-102 cl6">
									<?php if(isset($row['product_desc'])){echo $row['product_desc']; }?>
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												<?php
												while($row_color = mysqli_fetch_array($run_color)){
													echo $row_color['product_color'].",&nbsp;";
												} 
												?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>

											<span class="stext-102 cl6 size-206">
												<?php 
												while($row_size = mysqli_fetch_array($run_size)){
													echo $row_size['product_size'].",&nbsp;";
												}
												?>
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- - -->
						<?php
						if(isset($_REQUEST['submitn'])){
							$product_id = $_GET['id'];
							$name = $_REQUEST['name'];
							$email = $_REQUEST['email'];
							$review = $_REQUEST['review'];
							$rating = $_REQUEST['rating'];
							$sql = "INSERT INTO product_review(product_id, rating, review, user_email, 	user_name) VALUES('$product_id', '$rating', '$review', '$email', '$name')";
							$run = mysqli_query($conn, $sql);
							if($run==TRUE){
								echo "done";
							}
							else{
								echo "not";
							}
						}
						?>
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											
											<?php 
											$i=0;
											$product_id = $_GET['id'];
											$sql="SELECT * FROM product_review WHERE product_id = '$product_id'";
											$run = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_array($run)){


												echo 
												"<div class='wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6'>
												<img src='images/review.jpg' alt='AVATAR'>
												</div>
												<div class='size-207 mt-4'>
												<div class='flex-w flex-sb-m p-b-17'>
												<span class='mtext-107 cl2 p-r-20'>
												".$row['user_name']."
												</span>

												<span class='fs-18 cl11'>
												<i class='zmdi zmdi-star'></i>
												".$row['rating']."
												</span>
												</div>

												<p class='stext-102 cl6'>
												".$row['review']."
												</p>
												</div>";
												$i++;
											}
											?>
										</div>

										<!-- Add review -->
										<form class="w-full" action="" method="POST">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="email" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="submit" name="submitn">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
		</div>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container mt-5">
			<div class="row">
				<?php
				$sql = 'SELECT * FROM products ORDER BY 1 LIMIT 0,4';
				$res = mysqli_query($conn, $sql);
				While($row = mysqli_fetch_array($res)){

					?>
					<?php 
					echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">';
					echo '<div class="block2">';
					echo '<div class="block2-pic border hov-img0">';
					echo '<img src="admin/product_images/'. $row['product_img1'].'" alt="IMG-PRODUCT" height="300" width="1486">';
					echo '<form action="" method="POST">';
					echo '<input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" id="quickview" value="quickview" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</button>';

					echo '</form>';
					echo '</div>';

					echo '<div class="block2-txt flex-w flex-t p-t-14">';
					echo '<div class="block2-txt-child1 flex-col-l ">';
					echo '<a href="product-detail.php?id='.$row['product_id'].'" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">'
					.$row['product_title'].
					'</a>';

					echo '<span class="stext-105 cl3">Rs.'
					.$row['product_price'].'</span>';
					echo '</div>';

					echo '<div class="block2-txt-child2 flex-r p-t-3">';
					echo '<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">';
					echo '<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">';
					echo '<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">';
					echo '</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '</div>';


				}
				?>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
		})
	</script>
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var content = this.nextElementSibling;
				if (content.style.display === "block") {
					content.style.display = "none";
				} else {
					content.style.display = "block";
				}
			});
		}
	</script>


	<!-- Footer -->
	<?php 
	include('footer.php');
	?>