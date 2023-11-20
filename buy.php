<?php
include('connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['pro_id'])) {
        $pro_id = $_POST['pro_id'];
$_SESSION['pro_id']=$pro_id;
        // Fetch product details
        $sql = "SELECT * FROM tbl_product WHERE pro_id = '$pro_id'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $productPrice = $row['pro_price'];
            $totalAmount = 1 * $productPrice;
        } else {
            // Handle any database query errors here
            $totalAmount = 0; // or any other default value
        }

        // Set session values
        $_SESSION['totamount'] = $totalAmount;
        $_SESSION['qty'] = 1;
        $_SESSION['pro_id'] = $pro_id; // Set pro_id in session for later use if needed
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="CSS/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        /* Add your styles here */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #3f0d0d;
/* Choose your background color */
            padding: 20px; /* Adjust the padding to increase height */
            color: #ffffff; /* Choose your text color */
            text-align: left;
            line-height: 32px;
            font-weight: bold;
            font-size: 25px; /* Adjust line-height for vertical centering */
        }
    </style>
</head>
<body>
<header>
      <b>  OGBS</b>
    </header>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
          <form action="buy.php" method="post">

            <h5 class="mb-0"><b>BUY NOW</b></h5></form>
          </div>
          <div class="card-body">
          <?php
//set value from session
						$custid = $_SESSION['customerid'];
						
				$pro_id=$_SESSION['pro_id'];

					
						$result=mysqli_query($conn,$sql);					
						 $count=mysqli_num_rows($result);
						 $grandtotoal=0;
						$row =mysqli_fetch_array($result);
					
							
						?>
  
            <!-- Single item 1 -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image 1 -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                <img src="./uploads/<?php echo $row['pro_img']; ?>" 
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                            
      </div>
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data 1 -->
                <h6 class="text-black mb-0"><b>Name: </b><span class="value"><?php echo $row['pro_name'];?></span></h6><br>
							<h6 class="text-black mb-0"><b>About:</b> <span class="value"><?php echo $row['pro_description'];?></span></h6><br><br>
                <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data 1 -->
              </div>
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity 1 -->
                <div class="d-flex mb-4" style="max-width: 300px">
                 

                  <div class="form-outline">
                    <input min="0" name="quantity" id="quantity" value="1" type="text" style ="width:60px"; class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  
                </div>
                <!-- Quantity 1 -->

                <!-- Price 1 -->
                <p class="text-start text-md-center">
                 <?php 
						  $totalAmount=$_SESSION['totamount'];
						  ?>  <div id="total"> <strong> Product Price: <?php echo  $totalAmount;?></strong></div>
                </p>
                <!-- Price 1 -->
              </div>
            </div>
            <!-- Single item 1 -->

            <hr class="my-4" />

          
          </div>
        </div>
        <div class="card mb-4">

        
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
           
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0"><b>Shipping Address</b></h5><br>
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
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
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
                <?php 
						  $totalAmount=$_SESSION['totamount'];
						  ?>
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
	                    <form action="oderinsert.php" method="post">
							
						<button type="submit" value="add ordermaster" class="btn btn-dark btn-block btn-lg"
						  data-mdb-ripple-color="dark">Buy now</button>
						  </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"  src="jquery.main.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  
$(document).on('keyup', '#quantity', function(e){
    var quantity = $(this).val();

    $.ajax({
        url: "setamount.php",
        method: "POST",
        data: {quantityID: quantity},
        success: function(data) {
    console.log(data);  // Check the data in the console
    $("#total").html(data);
}
    });
    $.ajax({
        url: "setamount1.php",
        method: "POST",
        data: {quantityID: quantity},
        success: function(data){
            $("#grandtot").html(data);
        }
    });
});});
</script>

</body>
</html>
