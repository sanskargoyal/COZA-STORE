<?php 
session_start();
define("TITLE", 'Sell Report');
include('../dbconnection.php');
include('include/header.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>

<div class="col-sm-12 col-md-10 col-lg-9">
	<div class="container">
		<div class="row">
			<form action="sellreport.php" method="POST" class="mt-5 ml-3">
				<input type="date" name="startingdate" placeholder="dd-mm-yyyy" class="d-inline border text-center" style="height: 40px; border-radius: 5%"><p class="d-inline mx-2" style="font-size: 18px"> to</p>
				<input type="date" name="enddate" placeholder="dd-mm-yyyy" class="d-inline border text-center" style="height: 40px; border-radius: 5%">
				<button type="submit" class="btn btn-dark ml-3" style="height: 40px" name="search" id="search"> Search</button>
			</form>
		</div>
		<?php
		if(isset($_REQUEST['search'])){

			$sdate = $_REQUEST['startingdate'];
			$enddate = $_REQUEST['enddate'];
			$sql = "SELECT * FROM customer_order WHERE order_date BETWEEN '$sdate' AND '$enddate' AND order_status ='Complete'";
			$result = mysqli_query($conn, $sql);
			if($result->num_rows>0){

				echo '<table class="table" id="myTable">';
				echo '<thead>';
				echo '<tr>';
				echo '<th scope="col">Order ID</th>';
				echo '<th scope="col">Customer ID</th>';
				echo '<th scope="col">Amount Due</th>';
				echo '<th scope="col">Invoice Number</th>';
				echo '<th scope="col">Product Quantity</th>';
				//echo '<th scope="col">Product Size</th>';
				echo '<th scope="col">Order Date / Time</th>';
				echo '<th scope="col">Order Status</th>';
				echo '<th scope="col">Action</th>';
				echo '<tbody>';
				while($row=$result->fetch_assoc()){
					echo '<tr>';
					echo '<td>'.$row['order_id'].'</td>';
					echo '<td>'.$row['cust_id'].'</td>';
					echo '<td>'.$row['due_amount'].'</td>';
					echo '<td>'.$row['invoice_no'].'</td>';
					echo '<td>'.$row['quantity'].'</td>';
					//echo '<td>'.$row['size'].'</td>';
					echo '<td>'.$row['order_date'].'</td>';
					echo '<td>'.$row['order_status'].'</td>';
					echo '<td>';
					echo '<form action="" method= "POST" class="d-inline">';
					echo '<input type="hidden" name="id" value='.$row["order_id"].'><button type="submit" class="btn btn-success mr-3 d-inline" name="delete" value="delete"><i class="far fa-trash-alt"></i></button>';
					echo '</form>';
					echo '<form action="status.php?order_id='.$row['order_id'].'" method="POST" class="d-inline">';
					echo '<input type="hidden" name="id" value='.$row["order_id"].'><button type="submit" class="btn btn-info mr-3 mt-1 d-inline" name="details" value="details"><i class="far fa-eye"></i></button>';
					echo '</form>';
					echo '</td>';
					echo '</tr>';
				}
				echo '</tbody>';
				echo '</tr>';
				echo '</thead>';
				echo '</table>';
				}
			else{
			echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found ! </div>";
			
		}
		}
		
		?>
	</div>
</div>

<?php 
include('include/footer.php');
?>