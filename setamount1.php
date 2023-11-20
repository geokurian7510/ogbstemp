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
$totalAmount=$price*$quantity;
}else{
    $totalAmount=0;
}


$_SESSION['totalamount']=$totalAmount;
?>



<div id="grandtot">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span><?php echo  $totalAmount;?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Free</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                
                  <strong>Total amount</strong>
                  <strong>
                  <p class="text-muted mb-0">GST(5%)</p>

                    <p class="mb-0">(including GST)</p>
                  </strong>
                </div>
                <?php
                            $gst = $totalAmount * 2 / 100;
                            $grandtotal = $totalAmount + $gst;
                            $_SESSION['totalbill']=$grandtotal;
                            ?>
                <span><strong><br><br><?php echo  $grandtotal;?></strong></span>
              </li>
            </ul>
            </div>