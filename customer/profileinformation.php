<?php 
define('TITLE', 'Profile');
session_start();
include('../include/header.php');
include('../dbconnection.php');
if($_SESSION['is_login']){
	$lEmail = $_SESSION['lEmail'];
}
else{
	echo '<script>location.href="../login.php"</script>';
}

?>
<?php
if(isset($_REQUEST['savea'])){
	$name = $_REQUEST['name'];
	$mobile = $_REQUEST['mobile'];
	$lemail = $_REQUEST['lemail'];

	$sql = "UPDATE cust_details_tb SET cust_name = {$_REQUEST['name']}, cust_mobile = {$_REQUEST['mobile']}, cust_email = {$_REQUEST['lemail']} WHERE cust_email = {$_SESSION['lEmail']}";
	$result = $conn->query($sql);
	if($result == TRUE){
		$msg = '<div class="alert alert-success mt-2" role="alert">Update Successfully</div>';
	}
	else{
		$msg = '<div class="alert alert-success mt-2" role="alert">Unable to Update</div>';
	}
}


 ?>

<div class="col-sm-9">
	<div class="container">
		<div class="row">
			<h3 class="mt-5 ml-4">Personel Information</h3>
			<div class="container ml-3" style="margin-top: 5%">
				<?php 
				$lEmail = $_SESSION['lEmail']; 
				echo $lEmail;
				$sql = "SELECT * FROM cust_details_tb WHERE cust_email='lEmail'";
				$result = mysqli_query($conn, $sql);
				if($row = mysqli_num_rows($result)>0){
					$row=$result->fetch_assoc();
					echo '<table>';
					echo '<tr>';
					echo '<th>Your Name: </th>';
					echo '<td>'.$row['cust_name'].'<td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th>Your Mobile: </th>';
					echo '<td>'.$row['cust_mobile'].'<td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th>Your Email: </th>';
					echo '<td>'.$row['cust_email'].'<td>';
					echo '</tr>';
					echo '</table>';
				}

				?>
				<div class="mt-3">
					<button type="button" class="collapsible" name="edit" id="edit">Edit</button>
					<div class="collapse">
						<form action="" method="POST">
							<div class="container mt-4">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" name="mobile" id="mobile" class="form-control" placeholder="10 digit mobile number">
										</div>
									</div>
									<div class="col-sm-8">
										<div class="form-group">
											<input type="email" name="lemail" id="lemail" class="form-control" placeholder="Email">
										</div>
										<button class="btn btn-dark" style="width: 30%; border-radius: 0%" name="savea" id="save">Save</button>&nbsp;
										<a href="" class="ml-5">Cancel</a>
										<?php 
										if(isset($msg)){
											echo $msg;}?>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-5 ml-3">
			<h3>FAQs</h3>
			<p class="mt-3 font-weight-bold">What happens when I update my email address (or mobile number)?</p>
			<p class="mt-2">Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</p>
			<p class="mt-3 font-weight-bold">When will my Flipkart account be updated with the new email address (or mobile number)?</p>
			<p class="mt-2">It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</p>
			<p class="mt-3 font-weight-bold">What happens to my existing Flipkart account when I update my email address (or mobile number)?</p>
			<p class="mt-2">Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.</p>
		</div>
		<div class="container ml-3" style="margin-top: 40px">
			<a href="">Deactivate Account</a>
		</div>
		<footer><img src="../images/profile.png" style="width: 100%"></footer>
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

	<?php include('../include/footer.php'); ?>