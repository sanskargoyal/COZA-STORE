<?php 
session_start();
define("TITLE", 'Product List');
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
	<div class="container mt-2">
		<!-- <h1 class="mt-5">Products List</h1> -->
		<div class="card mt-3">
			<div class="card text-white text-center bg-dark">
				<div class="card-body">Products List</div>
			</div>
		</div>
		<?php 
		$sql = "SELECT * FROM products";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			
			echo '<table class="table" id="myTable">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Product Category</th>';
			echo '<th scope="col">Category</th>';
			echo '<th scope="col" scope="col">Product Title</th>';
			echo '<th scope="col">Product Price</th>';
			echo '<th scope="col">Product Description</th>';
			echo '<th scope="col">Product keywords</th>';
			echo '<th scope="col">Product Images</th>';
			echo '<th scope="col">Product Size</th>';
			echo '<th scope="col">Product Color</th>';
			echo '<th scope="col">Action</th>';
			echo '<tbody>';
			while($row=$result->fetch_assoc()){
				echo '<tr>';
				echo '<td>'.$row['p_cat_id'].'</td>';
				echo '<td>'.$row['cat_id'].'</td>';
				echo '<td>'.$row['product_title'].'</td>';
				echo '<td>'.$row['product_price'].'</td>';
				echo '<td>'.$row['product_desc'].'</td>';
				echo '<td>'.$row['product_keywords'].'</td>';
				echo '<td>'.$row['product_size'].'</td>';
				echo '<td>'.$row['product_color'].'</td>';
				echo '<td><img class="img-fluid" style="height:60px; width:200px;" src="product_images/'. $row['product_img1'].'" ></td>';
				echo '<td>';
				echo '<form action="" method= "POST" class="d-inline">';
				echo '<input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" class="btn btn-success mr-3" name="delete" value="delete"><i class="far fa-trash-alt"></i></button>';
				echo '</form>';
				echo '<form action="productdetails.php" method="POST" class="d-inline">';
				echo '<input type="hidden" name="id" value='.$row["product_id"].'><button type="submit" class="btn btn-info mr-3 mt-1" name="details" value="details"><i class="fas fa-sign-in-alt"></i></button>';
				echo '</form>';
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
<?php 
include('include/footer.php');
?>
