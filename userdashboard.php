<?php
session_start();
include("connection.php");



// Check if the "New Connection" button is clicked
if (isset($_GET['newgasconn'])) {
    // Check the address table for entries related to the current customer
    $custid = $_SESSION["customerid"];
   
    $sql = "SELECT * FROM tbl_address WHERE c_id = '".$custid."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        // Redirect to one page if entries are found
        echo "<script>alert('Complete kyc');</script>";
        header("Location: addAddress.php");
        exit();
    } else {
        // Redirect to another page if no entries are found
        header("Location: newgasconn.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ogbs</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="CSS/userdasboard.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <style>
        .box {
            display: inline-block;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-family: Arial, sans-serif;
            width: 600px; /* Adjust the width as needed */
            height: 200px;
        }

        .kyc-box {
            background-color: #3498db;
            color: #fff;
        }

        .connection-box {
            background-color: #2ecc71;
            color: #fff;
        }

        .symbol {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
            background-color: #fff;
            color: #3498db; /* You can adjust the color as needed */
            font-size: 24px;
        }</style>
   </head>
   <body>
   <div class="call_text_main">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
               </div>
               <div class="col-md-4">
                  <div class="header_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+91) 9400430254</span></a></div>
               </div>               
            </div>
         </div>
      </div>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"href="indexhome.php"> <li class="nav-item">
<h1><b>OGBS</b></h1>
               </li></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="userdashboard.php"><b>Home</b></a>
                     </li>
                     
                     <li class="nav-item">
                     <a class="nav-link" href="?newgasconn"><b>New Connection</b></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#section-one"><b>Feedback</b></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#section-two"><b>Our Products</b></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Booking</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                           
                            <a class="dropdown-item" href="#section-three">Cylinder Booking</a>
                            <a class="dropdown-item" href="checkout.html">product checkout</a>
                            <a class="dropdown-item" href="cart.html">shopping cart</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <button class="btn btn-danger">
            <i class="fas fa-user-circle"></i> <?php echo $_SESSION["customername"]; ?>
        </button>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
        <a class="dropdown-item" href="youraccount.php">Your Account</a>
        <a class="dropdown-item" href="youraccount.php">Your orders</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
        <a class="dropdown-item" href="confirmation.html"></a>
        <a class="dropdown-item" href="elements.html"></a>
    </div>
</li>

                          </ul> 
                        
                        
                     </div>

                        
                     </div>
                     
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
     
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Lpg gas<br> for your home</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracteof a page when looking at its layout. The point of </p>
                              <div class="btn_main">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">LPG:<br> The fuel that lights up your life</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracteof a page when looking at its layout. The point of </p>
                              <div class="btn_main">
                                
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Embrance <br>the future of clean energy with LPG</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracteof a page when looking at its layout. The point of </p>
                              <div class="btn_main">
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="images/LOGIN.jpeg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
     
      <!-- about section start -->
      <?php
    $sql = "SELECT * FROM cylinder";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
   ?>
      <div class="about_section layout_padding">
   <div class="container-fluid">
      <div class="row">
      <section id="section-three"></section>

         <div class="col-md-7">
            <div class="about_taital_main">
               <h1 class="about_taital">Gas cylinder</h1>
               <p class="about_text">Experience the reliability and safety of our gas cylinders, meticulously crafted to seamlessly store and deliver the fuel that powers your home through the trusted services of OGBS.</p>
            </div>
         </div>
         <div class="col-md-4 padding_right0" style="height: 400px; width: 300px;"> <!-- Adjust height and width as needed -->
         <div class="card" style="height: 100%; width: 100%;">
   <img src="uploads/cylinder.jpeg" class="card-img-top" alt="Product Image" style="max-width: 100%; max-height: 70%; object-fit: contain; border-bottom: 1px solid #ccc;">
      <p class="card-price"><b>Price:</b>  ₹<?php echo $row['c_price']; ?></p>
      <form method='POST' action='cylinderbuy.php'><input type='hidden' name='cylinderid' value="<?php echo $row['cylinderid']; ?>">
              <input type='submit' class ="btn btn-danger" name="<?php echo $row['cylinderid']; ?>" value='Buy Now'></form>&nbsp;
        </div>
</div>
<?php
    }
   ?>

         </div>
      </div>
   </div>
</div>




      <!-- about section end -->
      <!-- projects section start -->
      <div class="projects_section layout_padding">
         <div class="container">
         <section id="section2"></section>

            <div class="projects_section_2">
            <h1 class="about_taital">Services</h1><br><br>

               <div class="row">
                  <div class="col-md-4">
                     <h1 class="number_text">01</h1>
                     <h3 class="project_taital">Gas Bookings</h3>
                  </div>
                  <div class="col-md-4">
                     <h1 class="number_text">02</h1>
                     <h3 class="project_taital">Products Buying</h3>
                  </div>
                  <div class="col-md-4">
                     <h1 class="number_text">03</h1>
                     <h3 class="project_taital"> Home Delivery</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- projects section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="services_taital">Why Choose Us?</h1>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Gas Booking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Reliable Service</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Secure Transactions</a></div>
                  </div>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Customer Support</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Order Tracking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Product Buying</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <section id="section-two"></section>
               <h1 class="contact_taital">OUR PRODUCTS</h1><br><br><br><br><br>
</div>
</div>
<div class="choose_section_2">
   <div class="row">
   <?php
    $sql = "SELECT * FROM tbl_product";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
   ?>
      <div class="col-sm-4 mb-4">
         <div class="card h-100 interactive-card">
            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
               <img src="./uploads/<?php echo $row['pro_img']; ?>" class="card-img-top" alt="<?php echo $row['pro_name']; ?>" style="width: 200px; height: 200px;">
            </div>
            <div class="card-body text-center">
               <h5 class="card-title"><b><?php echo $row['pro_name']; ?></b></h5>
               <p class="card-text"><b>Description:</b> <?php echo $row['pro_description']; ?></p>
               <p class="card-text"><b>Price:</b> ₹<?php echo $row['pro_price']; ?></p>
            </div>
            <div class="card-footer">
            <form method='POST' action='buy.php'><input type='hidden' name='pro_id' value="<?php echo $row['pro_id']; ?>">
              <input type='submit'  class ="btn btn-danger" name="<?php echo $row['pro_id']; ?>" value='Buy Now'></form>&nbsp;
            </div>
         </div>
      </div>
   <?php
    }
   ?>
   </div>
</div>
   </main>

</div>
</div>
</main>




   </div>
</div>
</main>

   </div>
</div>
</main>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <section id="section-one"></section>
                  <h1 class="contact_taital">FEEDBACK</h1>
                  <br><br><br>
                 <br><br>
                  <form action="feedback.php" method="POST">
                     
               </div>
            </div>
         </div>
         <div class="container">
   <div class="contact_section_2">
      <div class="row">
         <div class="col-md-12">
            <div class="mail_section_1">
               <form>
                  <label for="rating"><b>Rating:</b></label>
                  <select id="rating" name="rating" required>
                     <option value="" disabled selected>Select a rating</option>
                     <option value="Excellent">Excellent</option>
                     <option value="Good">Good</option>
                     <option value="Average">Average</option>
                     <option value="Below Average">Below Average</option>
                     <option value="Poor">Poor</option>
                  </select>
                  <br><br>
                  <textarea class="massage-bt" placeholder="Comments" rows="9" id="comment" name="comment"></textarea>
                  <br><br>
                  <div class="send_bt">
                     <button type="submit" class="btn btn-warning">Submit Feedback</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <!-- client section end -->
      <!-- contact section start -->
      
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="footeer_logo"><img src="images/ogbslogonew.png"></div>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Discover</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#section-one">Feeback</a></li>
                           <li><a href="userdashboard.php">Home</a></li>
                           <li><a href="newgasconn.php">New Connection</a></li>
                           <li><a href="#section-two">Products </a></li>
                           <li><a href="youraccount.php">Your Account</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Contact Us</h4>
                     <p class="footer_text">Contact support through gmail geokurian7510@gmail.com</p>
                  </div>
                  <div class="col-lg-3">
                     <div class="form-group">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
               
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
        // Check if the PHP code has set an alert message
        <?php
        if (!empty($alertMessage)) {
            echo "alert('$alertMessage');";
        }
        ?>
    </script>
   </body>
</html>