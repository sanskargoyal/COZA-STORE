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
<?php

if(isset($_REQUEST['confirmcod'])){
	$cust_id = $_GET['cust_id'];
	$status = "pending";
	$invoice_no = mt_rand();
	$select_cart = "SELECT * FROM cart WHERE user_email = '$lEmail'";
	$run_cart = mysqli_query($conn, $select_cart);
	while($row=mysqli_fetch_array($run_cart)){
		$product_id = $row['product_id'];
		$product_quantity = $row['product_quantity'];
		$product_size = $row['product_size'];
		$product_color = $row['product_color'];
		$get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
		$run_product = mysqli_query($conn, $get_product);
		$rows=mysqli_fetch_array($run_product);
		{
			$sub_total = $rows['product_price']*$product_quantity;
			
			$product_title = $rows['product_title'];
			$insert_customer_order = "INSERT INTO customer_order(cust_id, due_amount, invoice_no, quantity, size, order_date, order_status) VALUES('$cust_id', '$sub_total', '$invoice_no', '$product_quantity', '$product_size', NOW(), '$status')";
			$run_customer_order = mysqli_query($conn, $insert_customer_order);
			$insert_pending_order = "INSERT INTO pending_orders(cust_id, invoice_no, product_id, quantity, product_size, order_status) VALUES('$cust_id', '$invoice_no', '$product_id', '$product_quantity', '$product_size', '$status')";
			$run_pending_order = mysqli_query($conn, $insert_pending_order);
			$deletecart = "DELETE FROM cart WHERE user_email = '$lEmail'";
			$run=mysqli_query($conn, $deletecart);
			
		}
		
	}

	echo '<script>alert("Your Order Sucessfully Placed.")</script>';
	echo '<script>location.href="customer/myorders.php"</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payments</title>
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
	<nav class="navbar navbar-dark fixed-top bg-dark text-white p-0 py-3"><a href="../index.php" class="navbar-brand text-white col-sm-3 col-md-2">COZA STORE</a></nav>
	<div class="container-fluid" style="margin-top: 100px;">
		<div class="row">
			<div class="col-sm-8">
				<div class="card bg-dark text-white">
					<div class="card-body">
						<h2>Payment Options</h2>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<form action="" method="POST">
							<div class="form-group font-weight-bold ml-5" style="font-size: 20px">
								<button type="button" class="collapsible" name="cod">
									Cash on Delivery
								</button>
								
								<div class="collapse">
									<button class="btn btn-dark mt-3 ml-5" style="border-radius: 0%" name="confirmcod">CONFIRM ORDER</button>
								</div><br>
								<small>Tip: Pay online form safe and contactless delivery.</small>
							</div><hr>
							<div class="form-group font-weight-bold ml-5" style="font-size: 20px">
								<button type="button" class="collapsible ml-3">
									<img src="images/paytm.png" height="50px" width="80px" class="mr-3">Paytm
								</button>
								
								<div class="collapse">

									<button class="btn btn-dark mt-3 ml-5" style="border-radius: 0%">Continue</button>
								</div><br>
								<small>Tip: You'll br redirected to PAYTM page, where you can pay using UPI, credit/debit card or wallet.</small>
							</div><hr>
							<div class="form-group ml-5" style="font-size: 20px">
								<button type="button" class="collapsible">
									Net Banking
								</button>
								
								<div class="collapse">
									<form action="" method="POST">
										<div class="form-group">
											<div class="row mt-3">
												<div class="col-sm-4">
													<input type="radio" name="hdfc" class="d-inline"><label for="hdfc" class="d-inline"><img src="images/hdfc.png" height="20px" width="40px" class="mr-2 ml-1">HDFC Bank</label>
												</div>
												<div class="col-sm-4">
													<input type="radio" name="icici" class="d-inline"><label for="icici" class="d-inline"><img src="images/icici.png" height="20px" width="40px" class="mr-2 ml-1">ICICI Bank</label>
												</div>
												<div class="col-sm-4">
													<input type="radio" name="sbi" class="d-inline"><label for="icici" class="d-inline"><img src="images/sbi.png" height="20px" width="40px" class="mr-2 ml-1">State Bank of India</label>
												</div>
												<div class="col-sm-4 mt-3">
													<input type="radio" name="icici" class="d-inline"><label for="axix" class="d-inline"><img src="images/axis.png" height="20px" width="40px" class="mr-2 ml-1">Axis Bank</label>
												</div>												 
											</div>
										</div>
									</form>
									<button class="btn btn-dark mt-3 ml-5" style="border-radius: 0%">PAY NOW</button>
								</div><br>
								<small>Tip: Pay online form safe and contactless delivery.</small>
							</div><hr>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div class="size-208 w-full-ssm">
							<span class="stext-110 cl2">
								Shipping Address:
							</span><hr>
						</div>
						<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
							<p class="stext-111 cl6 p-t-2">
								<?php
								if(isset($_GET['cust_id'])){
									$cust_id = $_GET['cust_id'];
									$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$lEmail'";
									$res = mysqli_query($conn, $sql);
									$row=mysqli_fetch_array($res);
									echo '<b><p>'.$row["cust_name"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["cust_mobile"].'</p></b>
									<p class="mt-3">'.$row['cust_address'].'<br>,&nbsp;'.$row['cust_locality'].',&nbsp;'.$row['cust_city'].',&nbsp;'.$row['cust_state'].'<br>,&nbsp;'.$row['cust_locality'].',&nbsp;<b>'.$row['cust_pincode'].'</b></p>
									<b><p class="mt-3">'.$row['cust_email'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cust_alt_mobile'].'</p></b>';

								}
								?>
							</p>
						</div>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<div class="size-208 w-full-ssm">
							<span class="stext-110 cl2">
								Price Details:
							</span>
						</div><hr>
						<?php 
						$total = 0;
						$sub_total =0;
						$total_quantity = 0;
						$select_cart = "SELECT * FROM cart WHERE user_email = '$lEmail'";
						$run_cart = mysqli_query($conn, $select_cart);
						$count = mysqli_num_rows($run_cart);
						while($row = mysqli_fetch_array($run_cart)){
							$product_id = $row['product_id'];
							$product_size = $row['product_size'];
							$product_color = $row['product_color'];
							$product_quantity = $row['product_quantity'];
							$total_quantity += $product_quantity;
							$get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
							$run_product = mysqli_query($conn, $get_product);
							while($row=mysqli_fetch_array($run_product)){
								$product_title = $row['product_title'];
								$product_img1 = $row['product_img1'];
								$product_price = $row['product_price'];
								$sub_total = $row['product_price']*$product_quantity;
								$total += $sub_total; 

								
							}
						}
						echo '<div class="container-fluid">
								<div class="row mt-3">
								<div class="col-sm-6">
								<p>Price('. $total_quantity.'&nbsp;items)&nbsp;:</p>
								</div>
								<div class="col-sm-6">
								<p>Rs.&nbsp;'. $total.'</p>
								</div><hr>
								<div class="col-sm-6 mt-4">
								<p style="font-size:20px">Total Payable&nbsp;:</p>
								</div>
								<div class="col-sm-6 mt-4">
								<p style="font-size:20px">Rs.&nbsp;'. $total.'</p>
								</div><hr>
								</div>
								</div>';
						?>
					</div>	
				</div>
			</div>
		</div>
	</div>
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
	<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>


	<script src="../js/all.min.js"></script>

	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>
</body>
</html>