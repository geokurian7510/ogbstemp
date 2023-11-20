<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['ids'];
  
  // Update the status to 2
  $sql = "UPDATE gas_cylinder_bookings SET status = 1 WHERE book_id = '".$id."'";
  
  if ($result = mysqli_query($conn, $sql)) {
      // Query executed successfully, you can add any further logic here if needed
  } else {
      // Error in the query
      echo "Error updating status: " . mysqli_error($conn);
  }
} else {
  // Not a POST request
}
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

    <div class="">
      <form class="" method="POST" action="#">
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      
          </a>
        </li><!-- End Search Icon-->

      
      

      
 <ul class="navbar-nav ml-auto">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="images/icon.png" alt="Profile" class="rounded-circle">    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["staffname"]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["staffname"];?></h6>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href=".php">
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
        <a class="nav-link collapsed " href="staffdashboard1.php">
          <i class="bi bi-grid"></i>
          <span> Staff Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link  " href="staffcylinder.php">
          <i class="bi bi-cart"></i>
          <span> Cylinder Orders</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      

    
<!-- End Icons Nav -->
    

    
      
     
      
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="staffprofile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


     


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
      <h1>Staff Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active"> Staff Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<!--modal-------->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  
                    <div class="mb-3">
                        <label for="comments" class="form-label"></label>
                        <textarea id="comments" name="comments" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
            <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" name="closeButton" aria-label="Close">Close</button>            </div>
            </form>
          </div>
       </div>
    </div>

 <!-------->


  <table class="table table-striped" style="margin-top:50px;margin-left:50px;">
  <H1><B>Cylinder</B></H1>
  <thead>
    <tr>
      <th scope="col">oderid</th>
      <th scope="col">date</th>

      <th scope="col">Customerid</th>
      <th scope="col">status</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    // Assuming you have already established a database connection ($conn)
    if (isset($_SESSION['staffid'])) {
        $s_id =$_SESSION["staffid"];
        
      $sql="select s.*,ssa.*,sa.* from  staff s join staffservicearea ssa on s.s_id=ssa.s_id 
                                                join servicearea sa on ssa.serviceid=sa.serviceid where  s.s_id='".$s_id."'";
                                                $result=mysqli_query($conn,$sql);
                                                $row= mysqli_fetch_array($result);

                                                $pin=$row['pincode'];

        $sql = "SELECT c.*,cu.*,ad.* from gas_cylinder_bookings c
        join customer  cu on c.user_id=cu.c_id
        join tbl_address ad on  ad.c_id =cu.c_id where ad.address_postalcode='".$pin."'";
      

                
                $result=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($result);

        while ($row=mysqli_fetch_array($result)) {
    ?>
        <tr>
        <td><?php echo $row['book_id'];?></td>
            <td><?php echo $row['booking_date']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td>
        <?php
            if ($row['status'] == 1) {
                echo ' <span class="badge badge-success" style="background-color: green; color: black;">DELIIVERED</span>';
            } else {
                echo ' <span class="badge badge-success" style="background-color: yellow; color: black;">Pending</span>';
            }
        ?>
    </td>
            <td>
        

         <!--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-order-id="<?php echo $row['o_masterid']; ?>">
  VIEWMORE
</button>
           -->
           <div class="col">
           <form method="POST" action="staffcylinder.php">
                        <input type="hidden" name="ids" value="<?php echo $row['book_id']; ?>">
                        <button type="submit" class="btn btn-danger">Delivered</button>
                  
                        </form>      
    <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#feedbackModal">ViewDetails</button>
</div>  

        </td>
        </tr>
    <?php
  
        }
    } else {
        echo "Customer ID not found in session.";
    }
    ?>
  </tbody>
</table>


                </div>

              </div>
            </div><!-- End Reports -->


          

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