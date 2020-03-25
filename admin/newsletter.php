<?php 
session_start();
define("TITLE", 'Newsletter');
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
	<div class="container">
		<!-- <h1 class="mt-5">Newsletter Subscriber</h1> -->
		<div class="card mt-3">
			<div class="card text-white text-center bg-dark">
				<div class="card-body">Newsletter Subscriber</div>
			</div>
		</div>
		<?php 
		$sql = "SELECT * FROM newsletter";
		$run = mysqli_query($conn,$sql);
		if($res=mysqli_num_rows($run)>0){
			echo '<table class="table" id="myTable">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Newsletter ID</th>';
			echo '<th scope="col">User Email</th>';
			echo '<th scope="col">Action</th>';
			echo '<tbody>';
			while($row=mysqli_fetch_array($run)){
				echo '<tr>';
				echo '<td>'.$row['newsletter_id'].'</td>';
				echo '<td>'.$row['newsletter_email'].'</td>';
				echo '<td>';
				echo '<form action="" method= "POST" class="d-inline">';
				echo '<input type="hidden" name="id" value='.$row["newsletter_id"].'><button type="submit" class="btn btn-success mr-3" name="delete" value="delete"><i class="far fa-trash-alt"></i></button>';
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
	$sql = "DELETE FROM newsletter WHERE newsletter_id = {$_REQUEST['id']}";
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