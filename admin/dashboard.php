<?php 
session_start();
define("TITLE", 'Dashboard');
include('../dbconnection.php');
include('include/header.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>
<?php
$i=0;
$j=0;
$k=0;
$l=0;
$sql = "SELECT * FROM products";
$run = mysqli_query($conn, $sql);
if($row=mysqli_num_rows($run)>0)
{
	while($rows=mysqli_fetch_array($run)){
		$i++;
	}
}?>
<?php
$sqla = "SELECT * FROM cust_details_tb";
$runa = mysqli_query($conn, $sqla);
if($rowa=mysqli_num_rows($runa)>0)
{
	while($rowsa=mysqli_fetch_array($runa)){
		$j++;
	}
}
?>
<?php
$sqlb = "SELECT * FROM product_categories";
$runb = mysqli_query($conn, $sqlb);
if($rowb=mysqli_num_rows($runb)>0)
{
	while($rowsb=mysqli_fetch_array($runb)){
		$k++;
	}
}
$sqlc = "SELECT * FROM customer_order";
$runc = mysqli_query($conn, $sqlc);
if($rowc=mysqli_num_rows($runc)>0)
{
	while($rowsc=mysqli_fetch_array($runc)){
		$l++;
	}
}
?>

				<div class="col-sm-9">
					<div class="container-fluid mt-4">
						<h1 class="page-header">Dashboard</h1>
					</div>
					<div class="container-fluid mt-5">
						<div class="row">
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body bg-info" style="height: 127px">
										<div class="col-xs-3">
											<a href=""><i class="fas fa-tasks fa-3x text-white"></i></a>
										</div>
										<div class="col-xs-9 text-right">
											<p class="text-white">Products</p>
											<a href=""><div class="huge text-white"><?php
											echo $i;
											?></div></a>
										</div>
									</div>
									<div class="card-footer">
										<a href="productlist.php">View Details</a>
										<div class="pull-right"><a href=""><i class="fas fa-arrow-circle-right"></i></a></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body bg-danger">
										<div class="col-xs-3">
											<a href=""><i class="fas fa-comments fa-3x text-white"></i></a>
										</div>
										<div class="col-xs-9 text-right">
											<p class="text-white">Customers</p>
											<a href="customer.php"><div class="huge text-white"><?php echo $j; ?></div></a>
										</div>
									</div>
									<div class="card-footer">
										<a href="customer.php">View Details</a>
										<div class="pull-right"><a href=""><i class="fas fa-arrow-circle-right"></i></a></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body bg-secondary">
										<div class="col-xs-3">
											<a href="productcategories.php"><i class="fas fa-shopping-cart fa-3x text-white"></i></a>
										</div>
										<div class="col-xs-9 text-right">
											<p class="text-white">Product Categories</p>
											<a href="productcategories.php"><div class="huge text-white"><?php
											echo $k; ?></div></a>
										</div>
									</div>
									<div class="card-footer">
										<a href="productedit.php">View Details</a>
										<div class="pull-right"><a href=""><i class="fas fa-arrow-circle-right"></i></a></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body bg-warning">
										<div class="col-xs-3">
											<a href=""><i class="far fa-life-ring fa-3x text-white"></i></a>
										</div>
										<div class="col-xs-9 text-right">
											<p class="text-white">Orders</p>
											<a href="orders.php"><div class="huge text-white"><?php 
											echo $l;
											?></div></a>
										</div>
									</div>
									<div class="card-footer">
										<a href="orders.php">View Details</a>
										<div class="pull-right"><a href=""><i class="fas fa-arrow-circle-right"></i></a></div>
									</div>
								</div>
							</div>
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
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/all.min.js"></script>
	</body>

	</html>