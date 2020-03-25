<?php 
session_start();
define("TITLE", 'Product Size');
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
if(isset($_REQUEST['insert'])){
	if(($_REQUEST['size'] == "")){
		echo '<script>alert("Please Fill All Fields.")</script>';
	}
	else{
		$size = $_REQUEST['size'];
		$sql = "INSERT INTO product_size(product_size) VALUES('$size')";
		$run = mysqli_query($conn, $sql);
		if($run==TRUE){
			echo '<script>alert("Submit Successfully")</script>';
			echo '<script>location.href="productsize.php"</script>';
		}
		else{
			echo '<script>alert("Unable to Submit")</script>';
			echo '<script>location.href="productcolor.php"</script>';
		}
	}
}
?>

<div class="col-sm-12 col-md-10 col-lg-9">
	<div class="container">
		<div class="card mt-3">
			<div class="card text-white text-center bg-dark">
				<div class="card-body">Product Color</div>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-sm-7">
			<form action="" method="POST">
				<div class="form-group">
					<label for="size"><b>Product Size</b></label>
					<input type="text" name="size" id="size" class="form-control" placeholder="Product Color">
				</div>
				<div class="container">
						<button type="submit" name="insert" value="Submit" class="btn btn-dark mt-3" style="width: 100%">Submit<button>
						</div>
			</form>
			<?php
			if(isset($msg)){
				echo $msg;
			}
			?>
		</div>
		</div>
	</div>
</div>

<?php 
include('include/footer.php');
?>