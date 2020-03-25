<?php 
session_start();
define('TITLE', 'Add Product');
include ('../dbconnection.php');
include('include/header.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>

<div class="col-sm-9">
	<div class="container-fluid" style="margin-top: 50px">
		<div class="card mt-3">
			<div class="card text-white text-center bg-dark">
				<div class="card-body">Product Color</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-7">
				<form action="" method="POST" class="mt-5" enctype="multipart/form-data">
					<div class="form-group">
						<label for="producttitle" class="d-inline"><b>Product Title</b></label>
						<input type="text" name="producttitle" id="producttitle" class="form-control d-inline mt-2" placeholder="Product Title">
					</div>
					<div class="form-group">
						<label for="productcategory"><b>Product Category</b></label>
						<select name="productcategory" id="productcategory" class="form-control">
							
							<option>Select a Category Product</option>
							<?php 
							$sql = 'SELECT * FROM product_categories';
							$result = mysqli_query($conn, $sql);
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									echo '<option value='.$row['p_cat_id'].'>'.$row['p_cat_title'].'</option>';
								}
							}


							?>
						</select>
					</div>
					<div class="form-group">
						<label for="category"><b>Category</b></label>
						<select name="category" id="category" class="form-control">
							
							<option>Select Category</option>
							<?php 
							$sql = 'SELECT * FROM categories';
							$result = mysqli_query($conn, $sql);
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									echo '<option value='.$row['cat_id'].'>'.$row['cat_title'].'</option>';
								}
							}


							?>
						</select>
					</div>
					<div class="form-group">
						<label for="pcolor"><b>Product Color</b></label>
						<select name="pcolor" id="pcolor" class="form-control">
							
							<option>Select Color</option>
							<?php 
							$sql = 'SELECT * FROM product_color';
							$result = mysqli_query($conn, $sql);
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									echo '<option value='.$row['color_id'].'>'.$row['product_color'].'</option>';
								}
							}


							?>
						</select>
					</div>
					<div class="form-group">
						<label for="psize"><b>Product Size</b></label>
						<select name="psize" id="psize" class="form-control">
							
							<option>Select Size</option>
							<?php 
							$sql = 'SELECT * FROM product_size';
							$result = mysqli_query($conn, $sql);
							if($result->num_rows>0){
								while($row=$result->fetch_assoc()){
									echo '<option value='.$row['size_id'].'>'.$row['product_size'].'</option>';
								}
							}


							?>
						</select>
					</div>
					<div class="form-group">
						<label for=""><b>Product Image 1</b></label>
						<input type="file" name="img1" class="form-control">
					</div>
					<div class="form-group">
						<label for="img2"><b>Product Image 2</b></label>
						<input type="file" name="img2" class="form-control">
					</div>
					<div class="form-group">
						<label for="img3"><b>Product Image 3</b></label>
						<input type="file" name="img3" class="form-control">
					</div>
					<div class="form-group">
						<label for="productprice"><b>Product Price</b></label>
						<input type="text" name="productprice" class="form-control">
					</div>
					<div class="form-group">
						<label for="productkeywords"><b>Product Keywords</b></label>
						<input type="text" name="productkeywords" class="form-control">
					</div>
					<div class="form-group">
						<label for="productdescription"><b>Product Description</b></label>
						<textarea type="text" name="productdescription" class="form-control" style="height: 150px;"></textarea>
					</div>
					<div class="container">
						<button type="submit" name="insertproduct" value="Insert Product" class="btn btn-dark mt-3" style="width: 100%">Insert Product<button>
						</div>
					</form>

					<?php if(isset($msg)){echo $msg;}?>
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
<script src="../js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea	'});</script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>

</html>
<?php


if(isset($_POST['insertproduct'])){
	 if(($_POST['producttitle']  == "") || ($_POST['productcategory']  == "") || ($_POST['category']  == "") || ($_POST['pcolor']  == "") || ($_POST['psize']  == "") || (@$_FILES['img1']['name']  == "") || (@$_FILES['img2']['name']  == "") || (@$_FILES['img3']['name']  == "") || ($_POST['productprice']  == "") || ($_POST['productkeywords']  == "") || ($_POST['productdescription']  == "")){
		$msg = '<div class="alert alert-danger mt-2" role="alert">Please Fill All Fields</div>';
	}
	else{
		$producttitle = $_POST['producttitle'];
		$productcategory = $_POST['productcategory'];
		$category = $_POST['category'];
		$pcolor  = $_POST['pcolor'];
		$psize = $_POST['psize'];
		$image1 = @$_FILES['img1']['name'];
		$image1_tmp = @$_FILES['img1']['tmp_name'];
		$image2 = @$_FILES['img2']['name'];
		$image2_tmp = @$_FILES['img2']['tmp_name'];
		$image3 = @$_FILES['img3']['name'];
		$image3_tmp = @$_FILES['img3']['tmp_name'];
		
		$productprice = $_POST['productprice'];
		$productkeywords = $_POST['productkeywords'];
		$productdescription = $_POST['productdescription'];

		move_uploaded_file($image1_tmp, "product_images/".basename($image1));
		move_uploaded_file($image2_tmp, "product_images/".basename($image2));
		move_uploaded_file($image3_tmp, "product_images/".basename($image3));
		

		$sql = "INSERT INTO products(p_cat_id, cat_id, product_title, product_img1, product_img2, product_img3, product_price, product_desc, product_keywords, product_size, product_color) VALUES('$productcategory', '$category', '$producttitle', '$image1', '$image2', '$image3', '$productprice', '$productdescription', '$productkeywords', '$psize', '$pcolor')";
		$result = $conn->query($sql);
		if($result == TRUE){
			$msg = '<div class="alert alert-success mt-2" role="alert">Product Add Successfully</div>';
		}
		else{
			$msg = '<div class="alert alert-danger mt-2" role="alert">Unable to Add Product</div>';
		}
	}
}
?>