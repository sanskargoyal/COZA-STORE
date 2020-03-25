<?php 
session_start();
define('TITLE', 'Manage Address');
define('PAGE', 'manageaddress');
include('../dbconnection.php');
include('../include/header.php');
if($_SESSION['is_login']){
	$lEmail = $_SESSION['lEmail'];
}
else {
	echo '<script>location.href="../login.php"</script>';
}

?>
<?php 
if(isset($_REQUEST['savea'])){
	if(($_REQUEST['name'] == "") || ($_REQUEST['mobile'] == "") || ($_REQUEST['pincode'] == "") ||($_REQUEST['lemail'] == "") || ($_REQUEST['locality'] == "") || ($_REQUEST['address'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['atype'] == "")){
		$msg = '<div class="alert alert-danger mt-2 ml-3" role="alert">Please Fill All Fields.</div>';
	}
	else{
		$name = $_REQUEST['name'];
		$mobile = $_REQUEST['mobile'];
		$pincode = $_REQUEST['pincode'];
		$email = $_REQUEST['lemail'];
		$locality = $_REQUEST['locality'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$landmark = $_REQUEST['landmark'];
		$altmobile = $_REQUEST['altmobile'];
		$atype = $_REQUEST['atype'];
		$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$email' And cust_name = '$name' And cust_mobile = '$mobile' And cust_pincode = '$pincode' And cust_locality = '$locality' And cust_address = '$address' And cust_city = '$city' And cust_state = '$state' And cust_landmark = '$landmark' And cust_alt_mobile = '$altmobile' And cust_address_type = '$atype'";
		$result = $conn->query($sql);
		if($result->num_rows>1)
		{
			echo 'done';
		}
		else{
			$name = $_REQUEST['name'];
		$mobile = $_REQUEST['mobile'];
		$pincode = $_REQUEST['pincode'];
		$email = $_REQUEST['lemail'];
		$locality = $_REQUEST['locality'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$landmark = $_REQUEST['landmark'];
		$altmobile = $_REQUEST['altmobile'];
		$atype = $_REQUEST['atype'];

		$sql = "INSERT INTO cust_details_tb(cust_name, cust_mobile, cust_pincode,cust_email,  cust_locality, cust_address, cust_city, cust_state, cust_landmark, cust_alt_mobile, cust_address_type) VALUES('$name', '$mobile', '$pincode','$email', '$locality', '$address', '$city', '$state', '$landmark', '$altmobile', '$atype')";
		$result = $conn->query($sql);
		if($result==TRUE){
			$msg = '<div class="alert alert-success mt-2" role="alert">Address Save Successfully.</div>';
			echo '<script>location.href="manageaddress.php"</script>';
		}
		else{
			$msg = '<div class="alert alert-danger mt-2" role="alert">Address Not Saved.</div>';
		}
		}
	}
}
?>

<div class="col-sm-8 mt-5 ml-3">
	<h3>Manage Address</h3>
	<div class="card mt-4 ml-4">
		<div class="card-body">
			<button type="button" class="collapsible text-info font-weight-bold">+ &nbsp;&nbsp;&nbsp;ADD A NEW ADDRESS</button>
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
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="email" name="lemail" id="lemail" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<textarea class="form-control" name="address" id="address" placeholder="Address(Area and Street)" style="height: 150px"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="city" id="city" class="form-control" placeholder="City/District?town">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="state" id="state" class="form-control" placeholder="State">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="landmark" id="landmark" class="form-control" placeholder="Landmark(optional)">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="altmobile" id="altmobile" class="form-control" placeholder="Alternate Phone(Optional)">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="atype" id="atype" class="form-control" placeholder="Address Type(Home/Work)">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" name="locality" id="locality" class="form-control" placeholder="Locality">
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<button class="btn btn-dark" style="width: 30%; border-radius: 0%" name="savea" id="save">Save</button>&nbsp;
						<a href="" class="ml-5">Cancel</a>
					</div>

				</form>
				
				<?php if(isset($msg)){echo $msg;}?>
			</div>
		</div>
	</div>	
			<?php
			$email = $_SESSION['lEmail'];
			$sql = "SELECT * FROM cust_details_tb WHERE cust_email = '$email'";
			$res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res)>0){
				while($row = mysqli_fetch_array($res)){ 
					echo '<div class="card mt-5 ml-4">';
					echo '<div class="card-body">';
					echo '<b><p>'.$row["cust_name"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["cust_mobile"].'</p></b>';
					echo '<p class="mt-3">'.$row['cust_address'].',&nbsp;'.$row['cust_locality'].',&nbsp;'.$row['cust_city'].',&nbsp;'.$row['cust_state'].',&nbsp;'.$row['cust_locality'].',&nbsp;<b>'.$row['cust_pincode'].'</b></p>';
					echo '<b><p class="mt-3">'.$row['cust_email'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cust_alt_mobile'].'</p></b>';

					echo '<div class="mt-2 float-right">';
					echo '<form action="" method="POST">';
					echo '<input type="hidden" name="id" value='.$row["cust_id"].'><button class="btn btn-light" name="delete" id="delete">Delete</button>';
					
					echo '</form>';
					echo '</div>';
					if(isset($dmsg)){
						echo $dmsg;
					}
					echo '</div>';
					echo '</div>';
				}
			}


			?>

</div>


</div>
</div>
<?php

if(isset($_REQUEST['delete'])){
	$sql = "DELETE FROM cust_details_tb where cust_id = {$_REQUEST['id']}";
	$result = $conn->query($sql);
	if($result == TRUE){
		$dmsg = '<div class="alert alert-success mt-2 ml-3" role="alert">Deleted Successfully</div>';
	}else{
		$dmsg = '<div class="alert alert-danger mt-2 ml-3" role="alert">Unable To Delete</div>';
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
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>