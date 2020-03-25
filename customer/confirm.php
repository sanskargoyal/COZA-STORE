<?php 
session_start();
$order_id = $_GET['order_id'];
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
	<title>Order Confirmation</title>
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
	<nav class="navbar navbar-dark fixed-top bg-dark text-white p-0 py-3"><a href="../index.php" 		class="navbar-brand text-white col-sm-3 col-md-2">COZA STORE</a></nav>
		<div class="container" style="margin-top: 100px;">
			<h1 class="mt-5">My Orders</h1>
		</div>
		<div class="container mt-5">
			<div class="card">
				<div class="card-body">
					<h3 class="text-center">Please Confirm Your Payment</h3>
					<div class="container">
						<form action="confirm.php?update_id=<?php echo $order_id ?>" method="POST" class="mt-3">
						<div class="form-group">
							<label for="invoiceno"><b>Invoice Number</b></label>
							<input type="text" name="invoiceno" placeholder="Invoice Number" class="form-control">
						</div>
						<div class="form-group">
							<label for="amount"><b>Amount</b></label>
							<input type="text" name="amount" placeholder="Amount" class="form-control">
						</div>
						<div class="form-group">
							<label for="amount"><b>Select Payment Mode</b></label>
							<select class="form-control" name="paymentmode">
								<option>Net Banking</option>
								<option>Paytm</option>
								<option>Cash on Delivery</option>
							</select>
						</div>
						<div class="form-group">
							<label for="reference_no"><b>Transaction Number</b></label>
							<input type="text" name="reference_no" placeholder="Transaction Number" class="form-control">
						</div>
						<div class="form-group">
							<label for="paymentdate"><b>Payment Date</b></label>
							<input type="date" name="paymentdate" placeholder="Payment Date" class="form-control">
						</div>
						<div class="text-center mt-3">
							<button type="submit" name="confirmpayment" class="btn btn-dark btn-lg">Confirm Payment</button>
						</div>
					</form>
					<?php 
					if(isset($_REQUEST['confirmpayment'])){
						$update_id = $_GET['update_id'];
						$invoice_id = $_REQUEST['invoiceno'];
						$amount = $_REQUEST['amount'];
						$paymentmode = $_REQUEST['paymentmode'];
						$reference_no = $_REQUEST['reference_no'];
						$paymentdate = $_REQUEST['paymentdate'];
						$complete = "Complete";
						$insert = "INSERT INTO payments(invoice_id, amount, payment_mode, reference_no, payment_date) VALUES('$invoice_id', '$amount', '$paymentmode', '$reference_no', '$paymentdate')";
						$run_insert = mysqli_query($conn, $insert);

						$update_q = "UPDATE customer_order SET order_status = '$complete' WHERE order_id = '$update_id'";
						$run_insert = mysqli_query($conn, $update_q);
						$update_q = "UPDATE pending_orders SET order_status = '$complete' WHERE order_id = '$update_id'";
						$run_insert = mysqli_query($conn, $update_q);

						echo '<script>alert("Your Order has been Recieved.")</script>';
						echo '<script>window.open("myorder.php"."_self" )</script>';

					}
					?>

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
