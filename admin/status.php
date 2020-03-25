<?php 
session_start();
define("TITLE", 'Status');
include('../dbconnection.php');
include('include/header.php');
if(isset($_SESSION['is_login'])){
	$aEmail = $_SESSION['aEmail'];
}
else{
	echo '<script>location.href="login.php"</script>';
}
?>
<div class="col-sm-6 mt-5  mx-3">
 <h3 class="text-center">Assigned Work Details</h3>
 <?php
 if(isset($_REQUEST['details'])){
 	$id = $_GET['order_id'];
  $sql = "SELECT * FROM customer_order WHERE order_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $size = $row['size'];
 $sqla = "SELECT * FROM product_size WHERE size_id = '$size'";
  $resulta = $conn->query($sqla);
 $rowa = $resulta->fetch_assoc();
 }
 ?>
 <table class="table table-bordered mt-2">
  <tbody>
   <tr>
    <td>Order ID</td>
    <td>
     <?php if(isset($row['order_id'])) {echo $row['order_id']; }?>
    </td>
   </tr>
   <tr>
    <td>Customer ID</td>
    <td>
     <?php if(isset($row['cust_id'])) {echo $row['cust_id']; }?>
    </td>
   </tr>
   <tr>
    <td>Invoice Number</td>
    <td>
     <?php if(isset($row['invoice_no'])) {echo $row['invoice_no']; }?>
    </td>
   </tr>
   <tr>
    <td>Amount Due</td>
    <td>
     <?php if(isset($row['due_amount'])) {echo $row['due_amount']; }?>
    </td>
   </tr>
   <tr>
    <td>Quantity</td>
    <td>
     <?php if(isset($row['quantity'])) {echo $row['quantity']; }?>
    </td>
   </tr>
   <tr>
    <td>Size</td>
    <td>
     <?php if(isset($rowa['product_size'])) {echo $rowa['product_size']; }?>
    </td>
   </tr>
   <tr>
    <td>Order Status</td>
    <td>
     <?php if(isset($row['order_status'])) {echo $row['order_status']; }?>
    </td>
   </tr>
  	<tr>
    <td>Order Date / Time</td>
    <td>
     <?php if(isset($row['order_date'])) {echo $row['order_date']; }?>
    </td>
   </tr>
   <tr>
    <td>Customer Sign</td>
    <td></td>
   </tr>
   <tr>
    <td>Delivery Boy Sign</td>
    <td></td>
   </tr>
  </tbody>
 </table>
 <div class="text-center">
  <form class='d-print-none d-inline mr-3'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form>
  <form class='d-print-none d-inline' action="work.php"><input class='btn btn-secondary' type='submit' value='Close'></form>
 </div>
</div>
<?php
include('include/footer.php');
?>