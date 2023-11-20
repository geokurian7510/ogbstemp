<?php
include('connection.php');
session_start();

error_reporting(E_ALL) ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$quantity=$_POST['quantityID'];
$pro_id=$_SESSION['pro_id'];
$quantity=intval($quantity);
$pro_id=intval($pro_id);
$sql="select * from tbl_product where pro_id='".$pro_id."'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$price=$row['pro_price'];
$total=$price*$quantity;
$_SESSION['quantity']=$quantity;
$_SESSION['totalamount']=$total;
}else{
    $total=0;
}
?>

<div id="total"> <strong> Product Price: <?php echo  $total;?></strong></div>