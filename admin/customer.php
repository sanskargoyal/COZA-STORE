<?php 
session_start();
define("TITLE", 'Customers');
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
	<div class="container-fluid">
		<!-- <h1 class="mt-5">Customers</h1> -->
		<div class="card mt-3">
			<div class="card text-white text-center bg-dark">
				<div class="card-body">Customers Registered With CozaStore</div>
			</div>
		</div>
		<?php 
		$sql = "SELECT * FROM cust_details_tb";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			
			echo '<table class="table" id="myTable">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Customer ID</th>';
			echo '<th scope="col">Customer Email</th>';
			echo '<th scope="col" scope="col">Customer Name</th>';
			echo '<th scope="col">Customer Mobile</th>';
			echo '<th scope="col">Customer Pincode</th>';
			echo '<th scope="col">Customer Locality</th>';
			echo '<th scope="col">Customer Address</th>';
			echo '<th scope="col">Customer City</th>';
			echo '<th scope="col">Customer State</th>';
			echo '<th scope="col">Customer Landmark</th>';
			echo '<th scope="col">Customer Alternate Mob.</th>';
			echo '<th scope="col">Customer Address Type</th>';
			echo '<th scope="col">Action</th>';
			echo '<tbody>';
			while($row=$result->fetch_assoc()){
				echo '<tr>';
				echo '<td>'.$row['cust_id'].'</td>';
				echo '<td>'.$row['cust_email'].'</td>';
				echo '<td>'.$row['cust_name'].'</td>';
				echo '<td>'.$row['cust_mobile'].'</td>';
				echo '<td>'.$row['cust_pincode'].'</td>';
				echo '<td>'.$row['cust_locality'].'</td>';
				echo '<td>'.$row['cust_address'].'</td>';
				echo '<td>'.$row['cust_city'].'</td>';
				echo '<td>'.$row['cust_state'].'</td>';
				echo '<td>'.$row['cust_landmark'].'</td>';
				echo '<td>'.$row['cust_alt_mobile'].'</td>';
				echo '<td>'.$row['cust_address_type'].'</td>';
				echo '<td>';
				echo '<form action="" method= "POST" class="d-inline">';
				echo '<input type="hidden" name="id" value='.$row["cust_id"].'><button type="submit" class="btn btn-success mr-3" name="delete" value="delete"><i class="far fa-trash-alt"></i></button>';
				echo '</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</tr>';
			echo '</thead>';
			echo '</table>';
		}
		?>
	</div>

</div>	
	</div>
</div>

<?php 
if(isset($_REQUEST['delete']))
{
	$sql = "DELETE FROM products WHERE product_id = {$_REQUEST['id']}";
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
