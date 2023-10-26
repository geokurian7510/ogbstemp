<?php
include_once 'connection.php'; // Make sure this file contains the database connection code and initializes $conn.
session_start();                                                                
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
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <h2>Hello Readers!</h2>
                     <a href="index.html">Home</a>
                     <a href="#">New Arrivals</a>
                     <a href="#">Best Sellers</a>
                     <a href="#">Featured Authors</a>
                     <a href="#">Today's deals</a>
                  </div>
                 
                  
                  </div>
                  
                  </div>
                  <div class="header_box">
                     <!--<div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/India_Flag .jpeg" class="mr-2" alt="flag">
                           India
                           </a>
                        </div>
                     </div>-->
                     <div class="login_menu">
                        <ul>
                           
                           </li><?php if(isset($_SESSION["name"])){?>
                              <li><i class="fa fa-user " aria-hidden="true"></i>
                              <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["name"];?>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
                     <a class="dropdown-item" href="UserDashboard.php">Your Account</a>
                     <a class="dropdown-item" href="#">Your Order</a>
                        <a class="dropdown-item" href="signout.php">Sign Out</a>
                        
                     </div>
                  </div>
                             </li>
                           <?php }else{ ?>
                             
                           <?php }?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
     <!-- fashion_section start -->
<div class="fashion_section">
    <main id="main" class="main">
        <div class="banner_taital">
            <h1>Your Account</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="youraccount.php">Your Account</a></li>
                    <li class="breadcrumb-item active">Your Address</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        
        <div class="container">
        <div class="row" id="cardContainer">
            <!-- Initially Displayed Card with Add Address Button -->
<div class="col-md-4">
    <a href="addAddress.php">
        <div class="card info-card sales-card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="card-icon rounded-circle">
                        <i class="bi bi-cart">
                            <img src="images/Addadresses.jpg" alt="Add Address" style="max-width: 77%; max-height: 77%;">
                        </i>
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
            echo "<h1>Your Address:</h1>";
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
                <strong>Add Address</strong>
            </h5>
       <?php }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "You must be logged in to view addresses.";
}
?>
             </div></div>
            </div>
        </div>
    </a>
</div>        
      </script>
   </body>
</html>