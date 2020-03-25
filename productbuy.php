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
	<title>Product</title>
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
<body>
	<nav class="navbar navbar-dark fixed-top bg-dark text-white p-0 py-3"><a href="index.php" class="navbar-brand text-white col-sm-3 col-md-2">COZA STORE</a></nav>
	
	<form class="bg0 p-t-75 p-b-85">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<?php 
					if(isset($_GET['pro_id'])){
						$product_id = $_GET['pro_id'];
						$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$lEmail'";
						$res = mysqli_query($conn, $sql);
						if(mysqli_num_rows($res)>0){
							while($row=mysqli_fetch_array($res)){
								echo '<div class="card mt-2">
								<div class="card-body">
								<b><p>'.$row["cust_name"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["cust_mobile"].'</p></b>
								<p class="mt-3">'.$row['cust_address'].',&nbsp;'.$row['cust_locality'].',&nbsp;'.$row['cust_city'].',&nbsp;'.$row['cust_state'].',&nbsp;'.$row['cust_locality'].',&nbsp;<b>'.$row['cust_pincode'].'</b></p>
								<b><p class="mt-3">'.$row['cust_email'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cust_alt_mobile'].'</p></b>
								<div class="mt-2 float-right">
								<form action="" method="POST">
								<input type="hidden" name="id" value='.$row["cust_id"].'><button class="btn btn-light d-inline mr-2" name="add" id="delete">Add</button>
								<input type="hidden" name="id" value='.$row["cust_id"].'><button class="btn btn-light d-inline" name="delete" id="delete">Delete</button>

								</form>

								</div>
								</div>
								</div>';
							}
						}
					}
					?>
				</div>
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
										echo '<td class="column-6 text-center"><input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" class="btn btn-dark mr-3" name="delete" value="delete"><i class="fas fa-trash-alt"></i></button></td>';
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
								<p class="stext-111 cl6 p-t-2">
									<?php
									if(isset($_GET['pro_id'])){
										$product_id = $_GET['pro_id'];
										$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$lEmail'";
										$res = mysqli_query($conn, $sql);
											$row=mysqli_fetch_array($res);
											echo '<b><p>'.$row["cust_name"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["cust_mobile"].'</p></b>
											<p class="mt-3">'.$row['cust_address'].',&nbsp;'.$row['cust_locality'].',<br>&nbsp;'.$row['cust_city'].',&nbsp;'.$row['cust_state'].',&nbsp;'.$row['cust_locality'].',&nbsp;<br><b>'.$row['cust_pincode'].'</b></p>
											<b><p class="mt-3">'.$row['cust_email'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cust_alt_mobile'].'</p></b>';
										
									}
									?>
								</p>
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
						$sql = 'SELECT * FROM cust_details_tb';
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_array($result);
						$cust_id = $row['cust_id'];
						echo '<a href="payment.php?cust_id='.$cust_id.'" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Proceed to Payment Options
						</a>';
						?>
						
					</div>
				</div>
			</div>
		</div>
	</form>

	<?php
	if(isset($_REQUEST['delete'])){
		$sql = "DELETE FROM cust_details_tb where cust_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		if($result == TRUE){
			$dmsg = '<div class="alert alert-success mt-2 ml-3" role="alert">Deleted Successfully</div>';
		}else{
			$dmsg = '<div class="alert alert-danger mt-2 ml-3" role="alert">Unable To Delete</div>';
		}

	}
	?>
	<?php
	if(isset($_REQUEST['add'])){
		echo '<script>location.href="customer/manageaddress.php"</script>';

	}
	?>
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


	<script src="../js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->

	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>


	<script src="../js/all.min.js"></script>

	<!-- <script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script> -->
</body>
</html>