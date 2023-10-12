<?php
include_once 'connection.php'; // Make sure this file contains the database connection code and initializes $conn.
session_start();

if ($_SERVER["REQUEST_METHOD"] =="POST") {
   $custid=$_SESSION["customerid"];
    $fullname=$_POST['address_fullname'];
    $addressLine=$_POST['address_line'];
    $city=$_POST['address_city'];
    $state=$_POST['address_state'];
    $postalcode=$_POST['address_postalcode'];
    $country=$_POST['address_country'];
    $phone=$_POST['address_phone'];

    // Make sure to use the correct table name and column names in your SQL query.
    $sql = "INSERT INTO tbl_address(c_id,address_fullname,address_line, address_city, address_state, address_postalcode, address_country, address_phone) VALUES ('$custid','$fullname','$addressLine','$city','$state','$postalcode','$country','$phone')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>OGBS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/ink&paper.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <!--<div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Award Winners</a></li>
                           <li><a href="#">New Arrivals</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-0">
                     <div class="logo"><a href="home.php"><h2 class="banner_taital">OGBS</h2></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
        </span></button></h1>
                  
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        
                 
                             </li>
                          
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="fashion_section">
          <main id="main" class="main">
          <div class="banner_taital">
            <h1>Add / Update Address</h1>
              <nav>
              <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="youraccount.php">Your Account</a></li>
                    <li class="breadcrumb-item"><a href="Addresses.php">Your Address</a></li>
                    <li class="breadcrumb-item active">Add / Update Address</li>
                </ol>
              </nav>
          </div><!-- End Page Title -->

          <section class="section profile">
    <div class="card no-hover">
        <div class="card-body pt-3">
            <!-- Address Form-->
            <form action="addAddress.php" method="POST">
    <!-- Full Name -->
    <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_fullname" class="form-control" placeholder="Full Name">
        </div>
    </div>

    <!-- Address Line -->
    <div class="row mb-3">
        <label for="addressLine" class="col-md-4 col-lg-3 col-form-label">Address Line</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_line" class="form-control" placeholder="Address Line">
        </div>
    </div>

    <!-- City -->
    <div class="row mb-3">
        <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_city" class="form-control" placeholder="City">
        </div>
    </div>

    <!-- State -->
    <div class="row mb-3">
        <label for="state" class="col-md-4 col-lg-3 col-form-label">State</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_state" class="form-control" placeholder="State">
        </div>
    </div>

    <!-- Country -->
    <div class="row mb-3">
        <label for="country" class="col-md-4 col-lg-3 col-form-label">Country</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_country" class="form-control" placeholder="Country">
        </div>
    </div>

    <!-- Postal Code -->
    <div class="row mb-3">
        <label for="postalCode" class="col-md-4 col-lg-3 col-form-label">Postal Code</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_postalcode" class="form-control" placeholder="Postal Code">
        </div>
    </div>

    <!-- Phone -->
    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
        <div class="col-md-8 col-lg-9">
        <input type="text" name="address_phone" class="form-control" placeholder="Phone">
        </div>
    </div>

    

    <div class="text-center">
        <button type="submit" class="btn btn-success" name="address">Save Changes</button>
    </div>
</form>



        </div>
    </div>
</section>

</main><!-- End #main -->

</div>


</div>
              
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><h2 class="banner_taital">OGBS</h2></a></div>
      
            <div class="footer_menu">
               <ul>
                  <li><a href="#">feedback</a></li>
                  <li><a href="#">reviews</a></li>
                  <li><a href="#">booking</a></li>
                  <li><a href="#"> Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+91 00000-00000</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2023 All Rights Reserved.</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      
      
                      </body>
</html>