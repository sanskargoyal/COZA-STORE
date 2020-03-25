<?php 
session_start();
define('TITLE', 'Coupans');
include ('../dbconnection.php');
include ('../include/header.php');
if($_SESSION['is_login']){
	$lEmail = $_SESSION['lEmail'];
}
else {
	echo '<script>location.href="../login.php"</script>';
}
?>

<div class="col-sm-8">
	<div class="container">
		<h3 class="mt-5">Expired Coupans</h3>
		<div class="card mt-3">
			<div class="row">
				<div class="card-body ml-3">
					<div class="row">
						<div class="col-sm-6"><h5>Get Extra 10% Off</h5>
						<p class="mt-3">Get Extra 10% Off</p>
					</div>
					<div class="col-sm-6"><p>Valid till 20 Jan,2020</p>
						<div class="mt-3"><a href="">View t&c</a></div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-3">
			<div class="row">
				<div class="card-body ml-3">
					<div class="row">
						<div class="col-sm-6"><h5>Biggest Price drop Flash Sale</h5>
						<p class="mt-3">Biggest Price drop Flash Sale - Only for You!</p>
					</div>
					<div class="col-sm-6"><p>Valid till 26 Jan,2020</p>
						<div class="mt-3"><a href="">View t&c</a></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include('../include/footer.php')
?>