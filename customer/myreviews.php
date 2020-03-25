<?php 
session_start();
define('TITLE', 'Reviews');
include('../dbconnection.php');
include('../include/header.php');
if($_SESSION['is_login']){
	$lEmail = $_SESSION['lEmail'];
}
else {
	echo '<script>location.href="../login.php"</script>';
}

?>

<div class="col-sm-9">
	<div class="text-center" style="margin-top: 20%">
		<img src="../images/profile1.png">
		<h3 class="mt-4">No Reviews & Ratings</h3>
		<p class="mt-2">You have not rated or reviewed any product yet!</p>
	</div>
</div>

<?php 
include('../include/footer.php');
?>