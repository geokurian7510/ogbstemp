<?php include('connection.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $id=$_POST['ids'];
    $sql="DELETE FROM servicearea WHERE serviceid='".$id."'";
    $result=mysqli_query($conn,$sql);
}
else{
    echo "";
}
?>

<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s_id = $_POST['ids'];
    $serviceid = $_POST['location'];
    $sql="select * from staffservicearea where s_id='".$s_id."'";
    $result = mysqli_query($conn, $sql);
    if($result -> num_rows > 0){
        $sql="update staffservicearea set serviceid='".$serviceid."' where s_id='".$s_id."'" ;
        $result = mysqli_query($conn, $sql);
    }
else{
    $sql = "INSERT INTO staffservicearea (s_id, serviceid) VALUES ('$s_id', '$serviceid')";
    $result = mysqli_query($conn, $sql);
}   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ogbs</title>
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
    <a class="nav-link collapsed " href="admin2.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
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
  <a href="addservicearea1.php" class="btn btn-primary" style="float: right;">ADD SERVICEAREA</a>

<h1 class="text-center">
<b>   SERVICE AREAS</b>
      </h1>
<table class="table table-light table-striped" style="opacity: 1;">
          <thead>
         
              <tr>
                  <th>Id</th>
                  <th>pincode</th>
                  <th>Location</th>
                  <th>Actions</th>
                 
              </tr>
          </thead>
          <tbody>
              <?php
              $sql = "SELECT * FROM servicearea";
              $result = mysqli_query($conn,$sql);
              while ($row = mysqli_fetch_array($result)) {
              ?>
                         
                                      
                                  <tr><td><?php echo $row['serviceid']?></td>
                                  <td><?php echo $row['pincode']?></td>
                                  <td><?php echo $row['location']?></td>
                                  <td>

                                  
                                  <form id="deleteForm" action="deleteservicearea.php" method="post">
                                  <input type="hidden" name="ids" value="<?php echo $row['serviceid'];?>">
                                  <input type="submit" name="s_id" value="REMOVE" class="btn btn-danger" onclick="confirmDelete(event)">
</form>
              </form>
                                  </td>
                                  
              
                                  
              </tr>
                                  
              <?php } ?>
          </tbody>
        </table>
            
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

        <!-- next table      --->


  <h1 class="text-center">
  <b>CHANGE SERVICE AREA</b>
        </h1>
              <!-- Table with stripped rows -->
              <table class="table table-light table-striped" style="opacity:1;">
            <thead>
                <tr>
                    <th>F_name</th>
                    <th>L_name</th>
                    <th>phone number</th>
                    <th>email</th>
                    <th>location</th>
                  <th>Change loction</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT s.*,sa.*,ssa.* FROM staff s join staffservicearea ssa on s.s_id=ssa.s_id 
                join servicearea sa on  ssa.serviceid = sa.serviceid  WHERE s.status = 1";
$result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['f_name']?></td>
                    <td><?php echo $row['l_name']?></td>
                    <td><?php echo $row['phn_number']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['location']?>
                    <td>
                        <form method="POST" action="staffservicearea1.php">
                            <input type="hidden" name="ids" value="<?php echo $row['s_id']; ?>">
                    
                            <select name="location">
                                <?php
                                $sql = "SELECT * FROM servicearea";
                                $serviceResult = mysqli_query($conn, $sql);
                                while ($serviceRow = mysqli_fetch_array($serviceResult)) {
                                    echo "<option value='" . $serviceRow['serviceid'] . "'>" . $serviceRow['location'] . "</option>";
                                }
                                ?>
                            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Change" class="btn btn-success">
                            
                        </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
 

        <!-- next table      --->
        <h1 class="text-center">
        <b>  ASSIGN SERVICE AREA</b>
        </h1>
        <table class="table table-light table-striped" style="opacity: 1;">
            <thead>
                <tr>
                    <th>F_name</th>
                    <th>L_name</th>
                    <th>phone number</th>
                    <th>email</th>
                    
                    <th>Assign Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $sql = "SELECT  * from staff  where s_id NOT IN(select s_id from staffservicearea) and status=1";
                  $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['f_name']?></td>
                    <td><?php echo $row['l_name']?></td>
                    <td><?php echo $row['phn_number']?></td>
                                    <td><?php echo $row['email']?></td>
                                    
                    <td>
                        <form method="POST" action="staffservicearea1.php">
                            <input type="hidden" name="ids" value="<?php echo $row['s_id']; ?>">
                            Assign Location:
                            <select name="location">
                                <?php
                                $sql = "SELECT * FROM servicearea";
                                $serviceResult = mysqli_query($conn, $sql);
                                while ($serviceRow = mysqli_fetch_array($serviceResult)) {
                                    echo "<option value='" . $serviceRow['serviceid'] . "'>" . $serviceRow['location'] . "</option>";
                                }
                                ?>
                            </select>
                            &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <input type="submit" value="ASSIGN" class="btn btn-warning">
                            
                        </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
              
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
 

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy;  <strong><span></span></strong>
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