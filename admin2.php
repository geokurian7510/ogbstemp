<?php
session_start();
include("connection.php");
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
  <link href="CSS/admin2.css" rel="stylesheet">

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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">1</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
            <p>stock:</p>

            <?php
            $sql="SELECT * from cylinder";{
                   if (['quantity'] == 0) {
                     stock:  echo  '<span class="badge badge-success" style="background-color: green; color: white;"> Stock Available</span>';
                   } 
                    else {
                       echo '<span class="badge badge-warning" style="background-color: red; color: black;">OutOfStock</span>';
                   }
                  }?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           

            <li>
              <hr class="dropdown-divider">
            </li>

            

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
      
      

      
 <ul class="navbar-nav ml-auto">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="images/icon.png" alt="Profile" class="rounded-circle">    <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["email"];?></h6>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ADMINPROFILE.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
             
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin2.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Staff Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          
            <a href="viewstaff1.php">
              <i class="bi bi-circle"></i><span>View Staff</span>
            </a>
          </li>
          <li>
         
          <li>
          
          <a href="staffservicearea1.php">
              <i class="bi bi-circle"></i><span>Staff ServiceArea</span>
            </a>
          </li>
          <li>
            
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart3"></i><span>Product&Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
          <li>
          <a href="viewproduct1.php">
              <i class="bi bi-circle"></i><span>View Product</span>
            </a>
          </li>
         
          <a href="stock1.php">
              <i class="bi bi-circle"></i><span> Cyllinder </span>
            </a>
          </li>
          <li>
          <a href="viewoderadmin.php">
              <i class="bi bi-circle"></i><span>View Bookings </span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    
<!-- End Icons Nav -->
    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Customer Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="approvegasconn1.php">
              <i class="bi bi-circle"></i><span>Approve Gas Connection</span>
            </a>
          </li>
          <li>
          <li>
            <a href="viewfeedback1.php">
              <i class="bi bi-circle"></i><span>View Feedback</span>
            </a>
          </li>
        </ul>
      </li>
      
     
      
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="ADMINPROFILE.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


   <!-- End Contact Page Nav -->


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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title"> Product Sales <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                    <a href="report2.php" class="btn btn-primary">View Report</a>
                
    

                      
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Feedbacks <span> </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-chat-left-quote"></i>
                    </div>
                    <div class="ps-3">
                    <?php
      // Include the connection.php file to establish the database connection
      include('connection.php');

      // SQL query to count the number of rows in the "customer" table
      $sql = "SELECT COUNT(*) as total_feedback FROM feedback ";

      // Execute the query
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Fetch the result row
        $row = $result->fetch_assoc();
        $totalfeedback = $row['total_feedback'];
        echo '<h6>' . $totalfeedback . '</h6>';
        // Close the result set
        $result->close();
      } else {
        echo "Error: " . $mysqli->error;
      }
    ?>
    

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">

            <div class="card info-card customers-card" style="height: 160px;">


                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span></span></h5>
                  <div class="d-flex align-items-center">
  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
    <i class="bi bi-people"></i>
  </div>
  <div class="ps-3">
    <br>
    <?php
      // Include the connection.php file to establish the database connection
      include('connection.php');

      // SQL query to count the number of rows in the "customer" table
      $sql = "SELECT COUNT(*) as total_customers FROM customer";

      // Execute the query
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Fetch the result row
        $row = $result->fetch_assoc();
        $totalCustomers = $row['total_customers'];
        echo '<h6>' . $totalCustomers . '</h6>';
        // Close the result set
        $result->close();
      } else {
        echo "Error: " . $mysqli->error;
      }
    ?>
    <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>
    </div>
</div> </div>
</div>  </div>
<!-- End Customers Card -->


<!-- another  Card -->
<div class="col-xxl-4 col-md-4">
  <div class="card info-card saless-card">
    <!-- ... Rest of the card content ... -->
  


                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Staff <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-plus"></i>
                    </div>
                    <div class="ps-3">
                    <?php
      // Include the connection.php file to establish the database connection
      include('connection.php');

      // SQL query to count the number of rows in the "customer" table
      $sql = "SELECT COUNT(*) as total_staff FROM staff where status=1";

      // Execute the query
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Fetch the result row
        $row = $result->fetch_assoc();
        $totalstaff = $row['total_staff'];
        echo '<h6>' . $totalstaff . '</h6>';
        // Close the result set
        $result->close();
      } else {
        echo "Error: " . $mysqli->error;
      }
    ?>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-4">
  <div class="card info-card saless2-card">
    <!-- ... Rest of the card content ... -->
  


                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">New Connections <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-plug"></i>

                    </div>
                    <div class="ps-3">
                    <?php
      // Include the connection.php file to establish the database connection
      include('connection.php');

      // SQL query to count the number of rows in the "customer" table
      $sql = "SELECT COUNT(*) as total_connection FROM connection where status=1";

      // Execute the query
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Fetch the result row
        $row = $result->fetch_assoc();
        $totalconnection = $row['total_connection'];
        echo '<h6>' . $totalconnection . '</h6>';
        // Close the result set
        $result->close();
      } else {
        echo "Error: " . $mysqli->error;
      }
    ?>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <div class="col-xxl-4 col-md-4">
            <div class="card info-card saless3-card">    <!-- ... Rest of the card content ... -->
  


                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Cylinder Bookings <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-basket2-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php
      // Include the connection.php file to establish the database connection
      include('connection.php');

      // SQL query to count the number of rows in the "customer" table
      $sql = "SELECT COUNT(*) as total_gas_cylinder_bookings FROM gas_cylinder_bookings";

      // Execute the query
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Fetch the result row
        $row = $result->fetch_assoc();
        $total_gas_cylinder_bookings = $row['total_gas_cylinder_bookings'];
        echo '<h6>' . $total_gas_cylinder_bookings . '</h6>';
        // Close the result set
        $result->close();
      } else {
        echo "Error: " . $mysqli->error;
      }
    ?>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar CHart</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','august', 'september', 'october ', 'November', 'december'],
                      datasets: [{
                        label: 'Bar Chart',
                        data: [65, 59, 80, 81, 56, 55, 40,55,33,32,17,66],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(54, 162, 235, 0.2)',

                          'rgba(54, 162, 235, 0.2)',

                          'rgba(54, 162, 235, 0.2)',

                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                          
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>
          

          <!-- News & Updates Traffic -->
          

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!-- End Footer -->
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
