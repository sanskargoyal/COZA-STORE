<?php 
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>COZA STORE</title>
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
	<header>
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

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
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
	



	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">

								<span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<?php 
								$sql = 'SELECT * FROM categories WHERE cat_title = "Women"';
								$run = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($run);
								$cat_id = $row['cat_id'];
								//echo '<script>alert('.$cat_id.')</script>';
								echo '<a href="product.php?id=cat'.$cat_id.'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Shop Now
								</a>';
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
							

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<?php 
								$sql = 'SELECT * FROM categories WHERE cat_title = "Men"';
								$run = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($run);
								$cat_id = $row['cat_id'];
								echo '<a href="product.php?id=cat'.$cat_id.'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
																	Shop Now
																</a>';
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2018
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<?php 
								$sql = 'SELECT * FROM categories WHERE cat_title = "Men"';
								$run = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($run);
								$cat_id = $row['cat_id'];
								echo '<a href="product.php?id=cat'.$cat_id.'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
																	Shop Now
																</a>';
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner-01.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<?php 
								$sql = 'SELECT * FROM categories WHERE cat_title = "Women"';
								$run = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($run);
								$cat_id = $row['cat_id'];
								echo '<a href="product.php?id=cat'.$cat_id.'" class="block1-link stext-101 cl0 trans-09">
																	Shop Now
																</a>';
								?>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner-02.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<?php 
								$sql = 'SELECT * FROM categories WHERE cat_title = "Men"';
								$run = mysqli_query($conn, $sql);
								$row = mysqli_fetch_array($run);
								$cat_id = $row['cat_id'];
								echo '<a href="product.php?id=cat'.$cat_id.'" class="block1-link stext-101 cl0 trans-09">
																	Shop Now
																</a>';
								?>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner-03.jpg" alt="IMG-BANNER">

						<a href="product.php" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<a href="product.php" class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</a>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>
			<?php
			$get_cats = 'SELECT * FROM categories';
			$run_cats = mysqli_query($conn, $get_cats);
			while($row_cats=mysqli_fetch_array($run_cats))
			{

			}
			?> 

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<a href="product.php" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>
					<?php
					$get_cats = 'SELECT * FROM categories';
					$run_cats = mysqli_query($conn, $get_cats);
					while($row_cats=mysqli_fetch_array($run_cats))
					{
						$cat_id = $row_cats['cat_id'];
						$cat_title = $row_cats['cat_title'];
						echo '<a href="product.php?id=cat'.$cat_id.'" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">'.$cat_title.'
						</a>';
					}
					?>

					

				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">


						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<?php 
								$sql = 'SELECT * FROM product_color';
								$res = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_array($res)){
									$color_id = $row['color_id'];
									$product_color = $row['product_color'];
									echo '<li class="p-b-6">
									<a href="product.php?id=col'.$color_id.'"  class="filter-link stext-106 trans-04">
									'.$product_color.'
									</a>
									</li>';
								}

								?>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<?php 
								$sql = 'SELECT * FROM product_categories';
								$res = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_array($res)){
									$p_cat_id = $row['p_cat_id'];
									$p_cat_title = $row['p_cat_title'];
									echo '<a href="product.php?p_cat_id='.$p_cat_id.'" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									'.$p_cat_title.'
									</a>';

								}

								?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<?php

					$id =@$_GET['id'];
					
					$pref = substr(@$_GET['id'], 0, 3);
					$sql="";
					
					// echo "<script>alert('".$pref."')</script>";
					if($pref=='cat')
					{		//echo "<script>alert('".$pref."')</script>";
				$ids = substr($id, 3);


				$sql = "SELECT * FROM products WHERE cat_id='$ids' ";
			}
			else if($pref=='sub')
			{

				$ids = substr($id, 3);

				$sql = "SELECT * FROM products WHERE p_cat_id='$ids' ";
			}
			else if($pref=='col')
			{
						//echo "<script>alert('".$pref."')</script>";
				$ids = substr($id, 3);
						//echo $ids;
				$sql = "SELECT * FROM products WHERE product_color='$ids' ";
			}
			else
			{

				$sql = 'SELECT * FROM products';
			}


			$res = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_array($res)){


				echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">';
				echo '<div class="block2">';
				echo '<div class="block2-pic border hov-img0">';
				echo '<img src="admin/product_images/'. $row['product_img1'].'" alt="IMG-PRODUCT" height="500" width="1500">';
				// echo '<form action="" method="POST">';
				// echo '<input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" id="quickview" value="quickview" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</button>';

				// echo '</form>';
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

	<!-- Load more -->
	<div class="flex-c-m flex-w w-full p-t-45">
		<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
			Load More
		</a>
	</div>
</div>
</section>


<!-- Footer -->
<?php 
include('footer.php');
?>