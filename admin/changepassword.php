<?php 
session_start();
define('TITLE', 'Change Password');
include('include/header.php');
include('../dbconnection.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>
<div class="col-sm-9">
	<div class="container mt-5 ml-3">
		<div class="row">
			<div class="col-sm-4">
				<form action="" method="POST">
					<div class="form-group">
						<b><label for="email">Email</label></b>
						<input type="email" name="email" id="email" class="form-control" style="border-radius: 0%; height: 50px">
					</div>
					<div class="form-group">
						<b><label for="password">New Password</label></b>
						<input type="password" name="password" id="password" class="form-control" placeholder="New Password" style="border-radius: 0%; height: 50px">
					</div>
					<div class="form-group">
						<b><label for="cnfpassword">Confirm New Password</label></b>
						<input type="password" name="cnfpassword" id="cnfpassword" class="form-control" placeholder="Confirm New Password" style="border-radius: 0%; height: 50px">
					</div>
					<button type="submit" name="update" id="update" class="btn btn-info">Update</button>
					<button type="reset" name="reset" id="reset" class="btn btn-secondary ml-5">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
include('include/footer.php');
?>