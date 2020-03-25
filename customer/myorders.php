	<?php 
session_start();
include('../dbconnection.php');
if($_SESSION['is_login']){
	$lEmail = $_SESSION['lEmail'];
}
else {
	echo '<script>location.href="../login.php"</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>
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
	<nav class="navbar navbar-dark fixed-top bg-dark text-white p-0 py-3"><a href="../index.php" class="navbar-brand text-white col-sm-3 col-md-2">COZA STORE</a></nav>
		<div class="container" style="margin-top: 100px;">
			<h1 class="mt-5">My Orders</h1>
		</div>
	<div class="container" style="margin-top: 50px;">
		<?php 
		$lEmail = $_SESSION['lEmail'];
		$get_customer = "SELECT * FROM cust_details_tb WHERE cust_email = '$lEmail'";
		$run_customer = mysqli_query($conn, $get_customer);
		$row_customer = mysqli_fetch_array($run_customer);

		$cust_id = $row_customer['cust_id'];
		$get_order = "SELECT * FROM customer_order WHERE cust_id = '$cust_id'";
		$run_order = mysqli_query($conn, $get_order);
		$get_product = "SELECT * FROM pending_orders INNER JOIN products ON pending_orders.product_id=products.product_id WHERE cust_id='$cust_id'";
		$run_product = mysqli_query($conn, $get_product);
			while($row_product = mysqli_fetch_array($run_product)){
			$product_img1 = $row_product['product_img1'];
			$product_title = $row_product['product_title'];
		$i=0;
		$row_order = mysqli_fetch_array($run_order);
			
			// $get_product_id = "SELECT * FROM pending_orders WHERE cust_id = '$cust_id'";
			// $run_product_id = mysqli_query($conn, $get_product_id);
			// $row_product_id = mysqli_fetch_array($run_product_id);
			// $product_id = $row_product_id['product_id'];
			// $get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
			
			$order_id = $row_order['order_id'];
			$due_amount = $row_order['due_amount'];
			$invoice_no = $row_order['invoice_no'];
			$quantity = $row_order['quantity'];
			$size = $row_order['size'];
			$order_date = substr($row_order['order_date'],0,11);
			$order_status = $row_order['order_status'];
			$i++;
			if($order_status=='pending')
			{
				$order_status="Unpaid";
			}else{
				$order_status="Paid";
			}
		echo '<div class="card mt-2">
			  		<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-3">
								<img src="../admin/product_images/'.$product_img1.'" height="100px" width="100px">
								</div>
								<div class="col-sm-3">
									<p>'.$product_title.'</p>
									
								</div>
								<div class="col-sm-3">
									<p class="mt-2"><b>Order ID:&nbsp;</b>'.$order_id.'</p>
									<p class="mt-2"><b>Order Quantity:&nbsp;</b>'.$quantity.'</p>
									<p class="mt-2"><b>Order Size:&nbsp;</b>'.$size.'</p>
									<p class="mt-2"><b>Order Invoice:&nbsp;</b>'.$invoice_no.'</p>
									<p class="mt-2"><b>Order Date:&nbsp;</b>'.$order_date.'</p>

								</div>
								<div class="col-sm-3">
									<p class="mt-2"><b>Amount Due:&nbsp;</b>'.$due_amount.'</p>
									<p class="mt-2"><b>Order Status:&nbsp;</b>'.$order_status.'</p>
									<div class="container">
									<div class="row">
									<div class="col-sm-6 mt-5">
									<a href="confirm.php?order_id='.$order_id.'" class="btn btn-dark btn-sm mt-3 float-right" target="_blank" style="margin-top:150px">Confirm If Paid</a>
									
									</div>
									<div class="col-sm-6 mt-3">
									<form action="" method= "POST">
									<input type="hidden" name="id" value='.$order_id.'><button type="submit" class="btn btn-success mr-3 text-white float-right mt-5 ml-5" name="delete"  value="delete">Delete</button>
										</form>
									</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';

	
	}
		
	 
		?>

	</div>
	<?php 
if(isset($_REQUEST['delete']))
{
	$sql = "DELETE FROM customer_order WHERE order_id = {$_REQUEST['id']}";
	if($conn->query($sql) == TRUE){
		echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
	} else {
		echo "Unable to Delete Data";
	}
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