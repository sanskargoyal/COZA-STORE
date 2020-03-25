<?php 
define('TITLE', 'Product Detail');
session_start();
include ('include/header.php');
include ('../dbconnection.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>
<div class="col-sm-9">
	<p class="text-center bg-dark text-white py-2 mt-2">Product Details</p>
	<div class="container justify-content-center">
		<div class="row">
			<div class="col-sm-5">
				<?php 
				if(isset($_REQUEST['details'])){
					$id = $_REQUEST["id"];
					$sql = "SELECT * FROM products WHERE product_id = '$id'";
					$res = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($res);

				}

				?>
				<table class="table table-bordered mt-5 text-center">
					<tbody>
						<tr>
							<td>Product ID</td>
							<td>
								<?php if(isset($row['product_id'])) {echo $row['product_id']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Category</td>
							<td>
								<?php if(isset($row['p_cat_id'])) {echo $row['p_cat_id']; } ?>
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td>
								<?php if(isset($row['cat_id'])) {echo $row['cat_id']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Title</td>
							<td>
								<?php if(isset($row['product_title'])) {echo $row['product_title']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>
								<?php if(isset($row['product_price'])) {echo 'Rs.' .$row['product_price']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Description</td>
							<td>
								<?php if(isset($row['product_desc'])) {echo $row['product_desc']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Keywords</td>
							<td>
								<?php if(isset($row['product_keywords'])) {echo $row['product_keywords']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Size</td>
							<td>
								<?php if(isset($row['product_size'])) {echo $row['product_size']; } ?>
							</td>
						</tr>
						<tr>
							<td>Product Color</td>
							<td>
								<?php if(isset($row['product_color'])) {echo $row['product_color']; } ?>
							</td>
						</tr>
						<tr>
							<td>Date & Time</td>
							<td>
								<?php if(isset($row['date'])) {echo $row['date']; } ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="text-center">
    <form class="d-print-none d-inline mr-3"><input class="btn btn-info" type="submit" value="Print" onClick="window.print()"></form>
    <a href="productlist.php" class="btn btn-dark d-print-none">Close</a>
  </div> 
			</div>
		</div>
	</div>
</div>

<?php 
include('include/footer.php');
?>