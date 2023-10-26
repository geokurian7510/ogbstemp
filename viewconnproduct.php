

<?php include_once 'connection.php';
error_reporting(E_ALL) ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/panelstyles.css" type="text/css"/>
  <link rel="stylesheet" href="css/product.css">
  
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
     
    <section class="shop-section">

<div class ="row">

<?php
    $sql="SELECT * FROM tbl_product";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
?>

     
     <div class="col-md-4">
          <div class=".card .col-lg-6 mb-4">
          <div class="card" style="width: 18rem;">

          <h1><?php ?></h1>
           <img  src="./uploads/<?php echo $row['pro_img'];?>">
     
                <div class="card-body">
                 <?php ?>
                  <h5 class="card-title"><?php echo $row['pro_name'];?></h5>
                  <div class="card-amount"><?php echo $row['pro_price'];?></div>
                  <p class="card-text"><?php echo $row['stock'];?></p>
                
             
                  
                </div>
            </div>
    </div>
    </div>
      </main>
<?php 
     } 
?>
</div>
    </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>