
<?php
session_start();
 include_once 'connection.php';
error_reporting(E_ALL) ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selected_products'])) {
      echo"inside here";
        $selectedProducts = $_POST['selected_products'];
        $count = count($selectedProducts);
        $connid=$_SESSION['connid'];
        $product_id=5;
        $sql="insert into connpro(connid,proid) values('$connid','$product_id')";
        $result=mysqli_query($conn,$sql);
        $product_id=7;
        $sql="insert into connpro(connid,proid) values('$connid','$product_id')";
        $result=mysqli_query($conn,$sql);
        foreach ($selectedProducts as $product_id) {
            // Process the selected products (e.g., add to a cart, store in a database, etc.)
            
            echo "Product with ID $product_id is selected.<br>";  
            $sql="insert into connpro(connid,proid) values('$connid','$product_id')";
            
            $result=mysqli_query($conn,$sql);
          

            
        }
      
     
    } else {
      $connid=$_SESSION['connid'];
      $product_id=5;
      $sql="insert into connpro(connid,proid) values('$connid','$product_id')";
      $result=mysqli_query($conn,$sql);
      $product_id=7;
      $sql="insert into connpro(connid,proid) values('$connid','$product_id')";
      $result=mysqli_query($conn,$sql);
    }
    header("location:bill.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display with Modal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        
        .card {
            height: 30rem; /* Adjust the height as needed */
        }

        .card-img-top {
            height: 12rem; /* Set a fixed height for the product images */
            object-fit: cover; /* Ensure images maintain aspect ratio and cover the space */
        }

        .modal-dialog {
            max-width: 70%; /* Adjust the width of the modal */
        }

        .modal-body {
            max-height: calc(100vh - 200px); /* Adjust the max height of the modal body */
            overflow-y: auto; /* Add scroll if content exceeds max height */
        }
        body {
    font-family: 'Arial', sans-serif;
    background-image: url('images/stock.jpg'); /* Update the path to your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed while scrolling */
}


    </style>
</head>
<body>
    <div class="container">
       

        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Product Display</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="connproductminu.php">

                        <div class="row">

                            <?php 
                            $sql = "select * from tbl_product";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="./uploads/<?php echo $row['pro_img']; ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h2><?php echo $row['pro_name'];?></h2>
                                            <p><?php echo $row['pro_description'];?></p>
                                            <p>Price: $<?php echo $row['pro_price'];?></p>
                                            <?php if ($row['pro_id'] == '5' or $row['pro_id'] == '7') { ?>
                                                <input type="checkbox" name="selected_products[]" value="<?php echo $row['pro_id'];?>" checked disabled>
                                            <?php } else { ?>
                                                <input type="checkbox" name="selected_products[]" value="<?php echo $row['pro_id'];?>" >
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-success"name ="sumbit" value="submit">Submit</button></f
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#productModal').modal('show');
        });
    </script>
</body>
</html>
