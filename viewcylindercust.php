<?php
session_start();
include("connection.php");
$c_id =$_SESSION['customerid']; 
echo $c_id; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OGBS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="CSS/youroders.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-left justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">OGBS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" style="margin-right: 100px;"></i>

    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
         
            <li>
              <hr class="dropdown-divider">
            </li>

            

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
      
      

      
 <ul class="navbar-nav ml-auto">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
          <img src="images/icon.png" alt="Profile" class="rounded-circle">   <?php echo $_SESSION["customername"];?></span>
          </a><!-- End Profile Iamge Icon -->

         

            
        
           

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    
    <li class="nav-item">
        <a class="nav-link collapsed " href="youroders.php">
          <i class="bi bi-grid"></i>
          <span>YOUR ORDERS</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item ">
        <a class="nav-link " href="viewcylindercust.php">
          <i class="bi bi-person"></i>
          <span>Cylinder Bookings</span>
        </a>
      </li><!-- End Dashboard Nav -->
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>

        </ul>
        <li class="nav-item">
        <a class="nav-link collapsed" href="youraccount.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Your Account</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

     

    
    

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Your Oders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Oders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        
        <?php
// Assuming you have already established a database connection ($conn)

// Check if the customer ID is stored in a session variable
if (isset($_SESSION['customerid'])) {
    $c_id = $_SESSION['customerid'];}
    
    $sqlcyl="select * from cylinder ";
    $rsltcyl=mysqli_query($conn,$sqlcyl);
    $rowcyl=mysqli_fetch_array($rsltcyl);

    // Construct the SQL query to fetch products for the specified customer
    $sql = "SELECT * FROM gas_cylinder_bookings WHERE user_id = '".$c_id."'";

// Use a prepared statement
$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_array($result);
while($row=mysqli_fetch_array($result)){
   ?>
        

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-13">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <img src="./uploads/<?php echo $rowcyl['image']; ?>" 
     class="w-50" 
     height="40" 
     alt="Blue Jeans Jacket" />

                    </div>
                    <div class="ps-3">
                      <h6><?php echo $rowcyl['cylinder_name']; ?></h6>
                    Date:  <span class="text-success small pt-1 fw-bold"><?php echo $row['booking_date']; ?></span> <span class="text-muted small pt-2 ps-1"></span>
                <br>  Price: ₹<span class="text-success small pt-1 fw-bold">  <?php echo $rowcyl['c_price']; ?></span><br>
                <?php
$status = $row['status'];

if ($status == 1) {
    // Display a green "DELIVERED" badge
    echo '<span class="badge badge-success" style="background-color: green; color: white;">DELIVERED</span>';
} else {
    // Display a red "SHIPPED" badge for any other status
    echo '<span class="badge badge-warning" style="background-color: red; color: black;">SHIPPED</span>';
}
?>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <?php } ?><!-- End Sales Card -->
            

            <!-- Revenue Card -->
          
          

          <!-- News & Updates Traffic -->
          

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; <strong><span></span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    <a href="https://bootstrapmade.com/"></a>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="JS/admin2.js"></script>

</body>

</html>
