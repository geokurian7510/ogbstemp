<?php
session_start();
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_description = $_POST['pro_description']; 
    $stock = $_POST['stock'];
   
   /*  if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['product_image']['name'];
        $image_temp = $_FILES['product_image']['tmp_name'];
        move_uploaded_file($image_temp, 'uploadimage/' . $image_name);
    } else {
        $image_name = ''; // If no new image is uploaded, keep the old one
    } */


    $sql = "UPDATE tbl_product SET pro_name='$pro_name', pro_price='$pro_price', stock='$stock', pro_description=$pro_description  WHERE pro_id='$pro_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Product updated successfully!";
        header("location:viewconnproduct.php");
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Glassmorphism login Form Tutorial in html css</title>
  


  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>

    <!--Stylesheet-->
    <style media="screen">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('images/about5.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            text-align: center;
        }

        .form-container h2 {
            font-size: 32px;
            font-weight: 500;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .form-row {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            display: block;
            text-align: left;
        }

        select,
        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            height: 40px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            font-size: 14px;
            font-weight: 300;
            border: none;
        }

        input[type="file"] {
            height: auto;
        }

        button {
            width: 100%;
            padding: 15px 0;
            background-color: #ffffff60;
            color: #080710;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

    
    <main class="main">
    <div class="form-container">
        <h2>Edit Product</h2><br>
        <form method="POST" action="test.php">
    <!-- Other input fields for product information -->
    <input type="hidden" name="pro_id" value="<?php echo $pro_id; ?>">
    <input type="submit" value="Update Product">
</form>

            
    <!--<h2>Add Product</h2><br>
         <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <label for="firstname" >select sub category:</label> &nbsp;
            <select name="subcategory" id="subcategory" value="choose sub category"> <option value="">-select subcategory-</option>
                            <div class="dropdown"> 
                                        
                               php code for dropdown   
    
                                </select> 
                            </div>
                    -->          
                        <div class="form-row">
                            <br> <label for="pro_name">Product Name:</label>
            <input type="text" name="pro_name" required>
                         </div>
                         
                         <div class="form-row">
            <label for="pro_price">Price:</label>
            <input type="number" name="pro_price" required>
                        </div>
                        
                        <div class="form-row">
            <label for="pro_description">Product Description</label>
            <input type="text" name="pro_description" required>
                        </div>
                        
                         
                          <div class="form-row">
            <label for="stock">stock:</label>
            <input type="text" name="stock" required>
                          </div>
            
                          <input type="submit" name="submit" value="Add Product">
            <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                
            </ul>
        </div>
    <?php endif; ?>
                    
        </form>
    </div>
</main>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    
        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"  src="jquery.main.js"></script> 
</body>
</html>