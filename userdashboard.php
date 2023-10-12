<?php
session_start();
include("connection.php");
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
                  <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+71) 8522369417</span></a></div>
               </div>               
            </div>
         </div>
      </div>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="indexhome.php"><B>OGBS</B></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="indexhome.php">Home</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="newgasconn.php">New Connection</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#section-one">Feedback</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#section-two">Our Products</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Booking
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                           
                            <a class="dropdown-item" href="tracking.html">tracking</a>
                            <a class="dropdown-item" href="checkout.html">product checkout</a>
                            <a class="dropdown-item" href="cart.html">shopping cart</a>
                            <a class="dropdown-item" href="confirmation.html">confirmation</a>
                            <a class="dropdown-item" href="elements.html">elements</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <button class="btn btn-primary"> <?php echo $_SESSION["customername"];?></button>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                           
                            <a class="dropdown-item" href="youraccount.php">Your Account</a>
                            <a class="dropdown-item" href="checkout.html">Your Orders</a>
                            <a class="dropdown-item" href="indexhome.php">Sign Out</a>
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
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">LPG:<br> The fuel that lights up your life</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracteof a page when looking at its layout. The point of </p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Embrance <br>the future of clean energy with LPG</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracteof a page when looking at its layout. The point of </p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Get A Quote</a></div>
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
                  <div class="banner_img"><img src="images/userdash.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Agency</h1>
                     <p class="about_text">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-5 padding_right0">
                  <div class="about_img"><img src="images/userdash.j"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- projects section start -->
      <div class="projects_section layout_padding">
         <div class="container">
            <div class="projects_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <h1 class="number_text">01</h1>
                     <h3 class="project_taital">COMMERCIAL PROJECTS</h3>
                  </div>
                  <div class="col-md-4">
                     <h1 class="number_text">02</h1>
                     <h3 class="project_taital">COMMERCIAL PROJECTS</h3>
                  </div>
                  <div class="col-md-4">
                     <h1 class="number_text">03</h1>
                     <h3 class="project_taital">COMMERCIAL PROJECTS</h3>
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
                     <div class="color_bt"><a href="#">Faux Finishes</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Water Proofing</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Pre-Paint Demo</a></div>
                  </div>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Mildew Removal</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Color Proof</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Window Washing</a></div>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
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
            <img src="./uploads/<?php echo $row['pro_img']; ?>" class="card-img-top" alt="<?php echo $row['pro_name']; ?>">
            <div class="card-body" style="height: 200px;">
               <h5 class="card-title"><b><?php echo $row['pro_name']; ?></b></h5>
               <p class="card-text"><b>Description:</b> <?php echo $row['pro_description']; ?></p>
               <p class="card-text"><b>Price:</b> $<?php echo $row['pro_price']; ?></p>
            </div>
            <div class="card-footer">
               <a href="#" class="btn btn-danger">Buy Now</a>
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
                  <p>A feedback form is a way to collect opinions about your company's service. 
                     The goal is to gain a better understanding of the overall customer experience so you can identify areas for improvement.</p><br><br>
                  <form action="feedback.php" method="POST">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                    

<label for="rating"><b>Rating:</b></label>
<select id="rating" name="rating" required>
    <option value="" disabled selected>Select a rating</option>
    <option value="Excellent">Excellent</option>
    <option value="Good">Good</option>
    <option value="Average">Average</option>
    <option value="Below Average">Below Average</option>
    <option value="Poor">Poor</option>
</select>
                        <textarea class="massage-bt" placeholder="Comments" rows="9" id="comment" name="comment"></textarea>
                     <br><br><br>   <div class="send_bt">    <button type="submit" class="btn btn-warning" > Submit Feedback</button></div></form>
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
                     <div class="footeer_logo"><img src="images/logo.png"></div>
                     <p class="lorem_text">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Discover</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">Discover</a></li>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="#">Categories</a></li>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="contact.html">Contacts</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Contact Us</h4>
                     <p class="footer_text">Personal Info Cookie Policy Terms of Us Privacy Policy</p>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Newsletter</h4>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Email" rows="5" id="comment" name="Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
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
   </body>
</html>