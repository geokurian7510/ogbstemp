<?php
include_once('connection.php');
$tot_pro_price = 0;
$today = date("Y-m-d");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
.gradient-custom {
/* fallback for old browsers */

  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.card {
  
    background-color: rgba(255, 255, 255, 0.8); /* Background color with opacity */
    backdrop-filter: blur(1px); /* Blur effect */
    width: 100%; /* Adjust the width as needed */
    border-radius: 10px; /* Border radius for rounded corners */
  }
  .text-center {
    text-align: center;
  }
  .btn-primary1{
    background-color: #4CAF50; 
    position: relative;
    left: 500px;
  }
  .btn-danger{
    position: relative;
    bottom: 40px;
  }

  </style>
</head>

<body>
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5">
                            <h5 class="text-muted mb-0">Thanks for your Request, <span style="color: #e18a3d;"><?php echo $_SESSION['customername']; ?></span>!</h5>
                            <?php
// Check if the user is logged in and has a customer ID in the session.
if (isset($_SESSION["customerid"])) {
    $custid = $_SESSION["customerid"];

    // Select the address data for the logged-in customer.
    $sql = "SELECT * FROM tbl_address WHERE c_id = '$custid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if any addresses were found.
        if (mysqli_num_rows($result) > 0) {
            echo "";
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo"<b>Delivery Address</b>";
                echo "<li>";
                echo "Full Name: " . $row['address_fullname'] . "<br>";
                echo "Address Line: " . $row['address_line'] . "<br>";
                echo "City: " . $row['address_city'] . "<br>";
                echo "State: " . $row['address_state'] . "<br>";
                echo "Postal Code: " . $row['address_postalcode'] . "<br>";
                echo "Country: " . $row['address_country'] . "<br>";
                echo "Phone: " . $row['address_phone'] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "No addresses found for this customer.";?>
            </div>
            </div>
            <h5 class="card-title text-center">
               
            </h5>
       <?php }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "You must be logged in to view addresses.";
}
?>
                            <div class="text-center">
                                <h5 class="text-muted mb-0"><span style="color: #e18a3d;">YOUR ORDER</span></h5>
                            </div>
                        </div>
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                    <p class="text-muted mb-0"><strong>Product Name</strong></p>
                                </div>
                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                    <p class="text-muted mb-0"><strong>Quantity</strong></p>
                                </div>
                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                    <p class="text-muted mb-0"><strong>Amount</strong></p>
                                </div>
                            </div>

                            <?php
                            $connID = $_SESSION['connid'];
                            $sql = "select pro.* from tbl_product pro where pro.pro_id in(select proid from connpro where connid='" . $connID . "')";
                            $result = mysqli_query($conn, $sql);
                            ?>

                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $tot_pro_price += $row['pro_price'];
                            ?>
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class=" col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class=" mb-0"><?php echo $row['pro_name']; ?></p>
                                            </div>
                                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class=" mb-0 small">Qty: 1</p>
                                            </div>
                                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class=" mb-0 small"><?php echo $row['pro_price']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            $sqlconnprice = "select * from cylinder";
                            $rsltconnprice = mysqli_query($conn, $sqlconnprice);
                            $row1 = mysqli_fetch_array($rsltconnprice);
                            $connprice = $row1['conn_amount'];
                            $totalamount = $tot_pro_price + $connprice;
                          
                            ?>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5>Connection Processing Fee: <?php echo $row1['conn_amount']; ?></h5>
                            </div>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Order Details</p>
                                <p class=" mb-0"><span class="fw-bold me-4">Total :</span> <?php echo $totalamount ?></p>
                              </div>

                            <?php
                            $gst = $totalamount * 5 / 100;
                            $grandtotal = $totalamount + $gst;
                            $_SESSION['totalbill']=$grandtotal;
                            ?>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="text-muted mb-0">Invoice Number: 12121212</p>
                                <p class="text-muted mb-0">GST(5%): <?php echo $gst; ?></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0">Invoice Date: <?php echo $today; ?></p>
                            </div>

                            <div class="d-flex justify-content-between mb-5">
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                                <p class=" mb-0"><strong>Grand Total: <?php echo $grandtotal; ?>/-</strong></p>
                            </div>

                            <div class="card-footer border-0 px-4 py-5"
                                style="background-color: #144379; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <div class="container py-5">
                                    <a href="payment.php">
                                        <button type="button" class="btn btn-primary1" data-toggle="modal" data-target="#paymentModal">
                                            Make Payment
                                        </button>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <form action="bill1.php" method="post">
                                        <input type="hidden" name="master_id" value="<?php echo $master_id; ?>">
                                        <button type="submit" class="btn btn-danger">
                                            Cancel Order
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>